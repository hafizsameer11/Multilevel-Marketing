<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use App\Models\UserBankDetails;
use App\Models\UserMeta;
use App\Models\Withdrawal;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WithdrawController extends Controller
{
    public function index()
    {
        $id = Auth::id();
        $user = User::with(['usermeta', 'usermeta.plan'])->find($id);
        $withdraws = Withdrawal::with('user')->where('user_id', $id)->latest()->get();
        return view('dashboard.withdraw', compact('user', 'withdraws'));
    }
    public function request(Request $request)
    {
        if ($request->amount) {
            $bankdetails = UserBankDetails::where('user_id', Auth::id())->count();
            if ($bankdetails > 0) {
                $amount = $request->amount;
                $withdraw = new Withdrawal();
                $withdraw->amount = $amount;
                $withdraw->user_id = Auth::id();
                if ($withdraw->save()) {
                    $usermeta = UserMeta::where('user_id', Auth::id())->latest()->first();
                    $usermeta->user_balance -= $amount;
                    $usermeta->save();
                    return redirect()->route('withdraw.form')->with('success', 'request Submitted successfully');
                }
            } else {
                return redirect()->route('bankdetail.form')->with('success', 'Please fill your form submit');
            }
        } else {
            return redirect()->route('withdraw.form')->with('error', 'Please Enter Amount');
        }
    }
    public function showrequest()
    {
        $id = Auth::id();
        $user = User::with(['usermeta', 'usermeta.plan'])->find($id);
        $withdraws = Withdrawal::with('user')->where('status', 'pending')->latest()->get();
        return view('dashboard.withdrawrequest', compact('user', 'withdraws'));
    }
    public function action(Request $request)
    {
        if ($request->wid) {

            if ($request->action == 'accept') {
                $wid = $request->wid;
                $withdraw = Withdrawal::find($wid);
                $withdraw->status = "Approved";

                if ($withdraw->save()) {
                    $transaction = new Transaction();
                    $receiver = $withdraw->user->id;
                    $transaction->amount = $withdraw->amount;
                    $transaction->receiver_id = $receiver;
                    $transaction->sender_id = Auth::id();
                    $transaction->status = "withdraw_transferred";
                    $transaction->nature = "Withdraw Transferred";
                    $transaction->save();
                    return response()->json(['success' => 'Request Approved']);
                } else {
                    return response()->json(['error' => 'Something went wrong']);
                }
            } else {
                $wid = $request->wid;
                $withdraw = Withdrawal::with('user')->where('id', $wid)->first();
                $withdraw->status = "rejected";
                $uid=$withdraw->user->id;
                $usermeta = Usermeta::where('user_id',$uid )->first();
                $usermeta->user_balance += $withdraw->amount;
                $usermeta->save();
                if ($withdraw->save()) {

                    return response()->json(['success' => 'Request Rejected']);
                } else {
                    return response()->json(['error' => 'Something went wrong']);
                }
            }
        } else {

            return response()->json(['error', 'Something went wrong There is no wid']);
        }
    }
}
