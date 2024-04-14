<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserMeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $id = Auth::id();
        $user = User::with(['usermeta', 'usermeta.plan'])->find($id);

        return  view('dashboard.index', compact('user'));
    }
    public function check_username(Request $request)
    {

        $username = $request->username;
        $user = User::where('username', $username)->value('username');
        if ($user) {
            return response()->json([
                'success' => 'User exist', 'user' => $user
            ]);
        } else {
            return response()->json([
                'error' => 'User Does not exist'
            ]);
        }
    }
    public function check_amount(Request $request)
    {

        $amount = $request->amount;
        $useramount = UserMeta::where('user_id', Auth::id())->value('user_balance');
        if ($amount > $useramount) {


            return response()->json([
                'error' => 'errot'
            ]);
        } else {
            return response()->json([
                'success' => 'User Does not exist'
            ]);
        }
    }
}
