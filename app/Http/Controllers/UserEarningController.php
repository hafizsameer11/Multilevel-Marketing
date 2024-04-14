<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use App\Models\UserEarning;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserEarningController extends Controller
{
    public function index()
    {
        $id = Auth::id();
        $user = User::with(['usermeta', 'usermeta.plan'])->find($id);
        $data = UserEarning::where('user_id', $id);

        return  view('dashboard.userearnings', compact('user'));
    }
    public function vide()
    {
    }
    public function article()
    {
        $id = Auth::id();
        $user = User::with(['usermeta', 'usermeta.plan'])->find($id);
        $data = UserEarning::with('article')->where('user_id', $id)
            ->whereNotNull('article_id')
            ->latest()
            ->get();
        return view('dashboard.articleearning', compact('user', 'data'));
    }
    public function allwork()
    {
        $id = Auth::id();
        $user = User::with(['usermeta', 'usermeta.plan'])->find($id);
        $data = UserEarning::with('video')->where('user_id', $id)
            ->whereNotNull('video_id')
            ->latest()
            ->get();
        $c = UserEarning::with('video')->where('user_id', $id)
            ->whereNotNull('video_id')
            ->count();
        return view('dashboard.videoearning', compact('user', 'data','c'));
    }
    public function reffralearning()
    {
        $id = Auth::id();
        $data = Transaction::with('sender', 'receiver')->where('receiver_id', $id)->where('status', 'referral_earning')->latest()->get();
        $user = User::with(['usermeta', 'usermeta.plan'])->find($id);
        return view('dashboard.reffralearning', compact('user', 'data'));
    }
}
