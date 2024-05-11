<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use App\Models\UserMeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function index()
    {
        $id = Auth::id();
        $user = User::with(['usermeta', 'usermeta.plan'])->find($id);
        $transactions=Transaction::with('sender','sender')->get();
        return view('dashboard.transaction', compact('user','transactions'));
    }
    public function transfer_funds(Request $request)
    {
        $transaction = new Transaction();
        $transaction->amount = $request->amount;
        $receiver = User::where('username', $request->username)->value('id');
        $metadata = UserMeta::where('user_id', $receiver)->first();
        $metadata->user_balance =$metadata->user_balance+ $request->amount;
        $metadata->save();
        $transaction->receiver_id = $receiver;
        $transaction->sender_id = Auth::id();
        $transaction->status="funds_added";
        $transaction->nature="Funds Submitted";

        if ($transaction->save()) {
            $user = UserMeta::where('user_id', Auth::id())->first();
            $user->user_balance = $user->user_balance - $request->amount;
            $user->save();

            return redirect()->route('transaction')->with('success', 'Payment Transfered Successfully');
        } else {
            return redirect()->route('transaction')->with('error', 'Something Went Wrong');
        }
    }
    public function userstatements(){
        $transactions=Transaction::with('sender','receiver')->where('receiver_id',Auth::id())->latest()->get();
        $id = Auth::id();
        $user = User::with(['usermeta', 'usermeta.plan'])->find($id);
        // echo "<pre>";
        // print_r($transaction);
        // echo ""
        return view('dashboard.bankdetails.statements',compact('user','transactions')) ;

    }
    public function admintransactions(){
        $id = Auth::id();
        $user = User::with(['usermeta', 'usermeta.plan'])->find($id);
        $transactions=Transaction::with('sender','receiver')->latest()->get();
        return view('dashboard.bankdetails.admin-statements',compact('user','transactions')) ;

    }

}
