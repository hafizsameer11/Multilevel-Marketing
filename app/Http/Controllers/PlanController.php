<?php

namespace App\Http\Controllers;

use App\Models\plans;
use App\Models\Transaction;
use App\Models\User;
use App\Models\UserMeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PlanController extends Controller
{
    public function index()
    {
        $currentPlan = User::with('userMeta.plan')->find(Auth::id())->userMeta->plan;

        $plans = plans::all();
        $user = User::with('usermeta')->find(Auth::id());
        return view('dashboard.plan', compact('plans', 'currentPlan', 'user'));
    }
    public function plan_amount(Request $request)
    {
        $id = $request->plan_id;
        $planamount = plans::find($id);
        return response()->json(['succes' => "request successful", 'amount' => $planamount->amount, 'planname' => $planamount->name]);
    }
    public function update_plan(Request $request)
    {
        $planId = $request->plan_id;
        $userId = $request->userid;
        $request->validate([
            'userid' => 'required|exists:users,id',
        ]);
        $userBalance = UserMeta::where('user_id', $userId)->value('user_balance');
        $userplanebalance = UserMeta::with('plan')->get();
        $userplanebalance = UserMeta::with('plan')->where('user_id', $userId)->value('plan_id');
        $userplanebalance = plans::where('id', $userplanebalance)->value('amount');
        if ($userBalance === null) {
            return response()->json(["error" => "User balance not found"], 404);
        }
        $plan = plans::find($planId);
        if (!$plan) {
            return response()->json(["error" => "Plan not found"], 404);
        }
        $planAmount = $plan->amount;
        if ($userBalance + $userplanebalance < $planAmount) {
            return response()->json(["error" => "Insufficient balance"], 400);
        }
        try {
            DB::beginTransaction();
            $userMeta = UserMeta::where('user_id', $userId)->latest()->first();
            $userMeta->plan_id = $plan->id;
            $remainingamount = $planAmount - $userplanebalance;
            $userMeta->user_balance -= $remainingamount;
            $userMeta->plan_activated = now()->toDateString();
            $userMeta->planstatus = "Activated";
            $userMeta->save();
            $referralCode = User::find($userId)->reffral;
            $parentUser = User::where('username', $referralCode)->with('usermeta')->first();
            if ($parentUser != null) {
                $parentMeta = $parentUser->usermeta;
                if ($parentMeta != null) {
                    if ($parentMeta->plan_id != 1) {
                        $earning = $planAmount * 0.15;
                        $parentMeta->refferal_earning += $earning;
                        $parentMeta->user_balance += $earning;
                        $parentMeta->save();
                        $transaction = new Transaction();
                        $transaction->receiver_id = $parentUser->id;
                        $transaction->sender_id = $userId;
                        $transaction->status = "referral_earning";
                        $transaction->nature = "Referral Earning to receiver";
                        $transaction->amount = $earning;
                        $transaction->save();
                    }
                }
            }

            DB::commit();
            return response()->json(["message" => "Plan updated successfully"]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(["error" => $e->getMessage()], 500);
        }
    }
}
