<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserBankDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public function index()
    {
        $id = Auth::id();
        $user = User::with(['usermeta', 'usermeta.plan'])->find($id);
        $count=UserBankDetails::where('user_id',Auth::id())->count();
        return  view('dashboard.profile.index', compact('user', 'count'));
    }
    public function bank_details()
    {
        $id = Auth::id();
        $bankdetails = UserBankDetails::where('user_id', $id)->latest()->first();
        $user = User::with(['usermeta', 'usermeta.plan'])->find($id);
        return view('dashboard.profile.bandetail', compact('user', 'bankdetails'));
    }
    public function chnage_password(Request $request)
    {
        $user = User::find(Auth::id());

        $user->password = bcrypt($request->pass);
        $user->save();
        $id = Auth::id();
        $user = User::with(['usermeta', 'usermeta.plan'])->find($id);
        return redirect()->route('user.profile')->with('success','password Chnaged Sucessfully');
    }
    public function update_bank_details(Request $request)
    {
        $validatedData = $request->validate([
            'accountnumber' => 'numeric|required',
            'accountholdername' => 'required',
            'bankname' => 'required'
        ]);
        $validatedData['iban'] = $request->iban;
        $user = User::find(Auth::id());
        $bankDetails = UserBankDetails::where('user_id', $user->id)->firstOrNew([]);
        $bankDetails->fill($validatedData);
        $bankDetails->save();
        return redirect()->route('user.profile')->with('success', 'Bank details updated successfully.');
    }
    public function user_details($id){
        $uid = Auth::id();
        $user = User::with(['usermeta', 'usermeta.plan'])->find($uid);
        $currentuser=User::with('usermeta','usermeta.plan','bankdetails')->find($id);
        return view('dashboard.all-users.user-details',compact('user','currentuser'));
    }
    public function allusers(){
        $uid=Auth::id();
        $user = User::with(['usermeta', 'usermeta.plan'])->find($uid);
        $users=User::where('role','!=','admin')->latest()->get();
        $count=$users->count();

        return view('dashboard.all-users.all-users',compact('user','users','count'));

    }
    public function role_assign(){
        $uid=Auth::id();
        $user = User::with(['usermeta', 'usermeta.plan'])->find($uid);
        $users=User::all();
        $count=User::all()->count();
        return view('dashboard.role-assignment.index',compact('user','users','count'));
    }
    public function set_role(Request $req){
        $uid=$req->uid;
        $user=User::find($uid);
        $user->role=$req->role;
        if($user->save()){
            return response()->json(['success'=>'Role has been assigned']);
        }else{

            return response()->json(['error'=>'Something Went Wrong']);
        }

    }
    public function block($id){
        $user=User::find($id);
        $user->status=0;
       if($user->save()){
        return back()->with('success','This account has been blocked');


        }else{
            return back()->with('error','Failed to Block Account');
        }

    }
    public function unblock($id){
        $user=User::find($id);
        $user->status=1;
       if($user->save()){
        return back()->with('success','This account has been blocked');


        }else{
            return back()->with('error','Failed to Block Account');
        }

    }
    public function search(Request $request){
        $searchTerm = $request->input('searchTerm');
        $users = User::where('role','!=','admin')->where('username', 'like', "%$searchTerm%")
                      ->orWhere('cnic', 'like', "%$searchTerm%")
                      ->get();
        $count=$users->count();
        return response()->json([

            'users' => $users,
            'view' => view('partials.user_table', compact('users','count'))->render()
        ]);

    }
}
