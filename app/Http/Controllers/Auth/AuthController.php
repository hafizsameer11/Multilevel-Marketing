<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserMeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    private static $userSequence = 1;
    public function loginshow()
    {

        return view('auth.login');
    }
    public function registershow($id = null)
    {
        return view('auth.register', compact('id'));
    }
    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'string|required',
            'phone' => 'required|unique:users,phone',
            'password' => [
                'required',
                'min:4'
            ],
            'reffral' => ['required', 'valid_referral_code'],
            'email' => 'required'
        ], [
            'reffral.valid_referral_code' => 'The referral code is invalid or does not exist.',
            'password.regex' => 'The password must be at least 4 characters'
        ]);


        $validatedData['address'] = $request->address;
        $validatedData['countries'] = $request->countries;
        $validatedData['cnic'] = $request->cnic;
        // Hash the password
        $validatedData['password'] = bcrypt($validatedData['password']);


        $lastuser = User::latest()->first();
        if ($lastuser) {
            $username = 'SE-' . $lastuser->id + 1 + 1458;
        } else {

            $username = 'SE-1';
        }
        $validatedData['username'] = $username;
        $validatedData['reffernce_code'] = $username;
        $user = User::create($validatedData);

        if ($user) {
            $Usermeta = new UserMeta();
            $Usermeta->user_id = $user->id;
            $Usermeta->plan_id = 1;
            $usernamee = $user->username;
            $Usermeta->save();
            $parentid = $request->reffral;
            $parent = User::where('reffernce_code', $parentid)->pluck('id');
            if ($parent) {
                $parentMeta = UserMeta::where('user_id', $parent)->first();
                if ($parentMeta) {
                    $parentMeta->total_team += 1;
                    $parentMeta->save();
                }
            }

            return view('auth.login', compact('usernamee'));
        } else {
            return redirect()->back()->with(['error', 'Something went wrong please try again']);
        }
    }
    public function login(Request $request)
    {
        $credentials = $request->only('username_or_email', 'password');

        if (Auth::attempt(['username' => $credentials['username_or_email'], 'password' => $credentials['password']])) {
            return redirect()->intended('dashboard/index');
        }

        if (Auth::attempt(['email' => $credentials['username_or_email'], 'password' => $credentials['password']])) {

            return redirect()->intended('dashboard/index');
        }

        return redirect()->back()->withInput()->withErrors(['username_or_email' => 'Invalid username/email or password']);
    }
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();
        $existingUser = User::where('email', $user->email)->first();
        if ($existingUser) {
            Auth::login($existingUser);
        } else {
            return redirect()->route('login.show')->with('google-error', 'Please try again');
        }

        return redirect()->intended('dashboard');
    }
    public function change_password_admin(Request $req)
    {
        if ($req->password) {
            $user_id = $req->user_id;
            $password = $req->password;
            $user = User::find($user_id);

            $user->password = bcrypt($password);
            if ($user->save()) {
                return response()->json(['success' => 'password changed successfully']);
            } else {

                return response()->json(['error' => 'Something Went Wrong']);
            }
        } else {

            return response()->json(['error' => 'Please Add password']);
        }
    }
}
