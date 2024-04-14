<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserBankDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\FuncCall;

class UserbankDetailController extends Controller
{
    public function index()
    {

        $id = Auth::id();
        $user = User::with(['usermeta', 'usermeta.plan'])->find($id);

        return  view('dashboard.bankdetails.index', compact('user'));
    }
    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'accountnumber' => 'numeric|required',
            'accountholdername' => 'required',
            'bankname' => 'required'
        ]);
        $validatedData['iban'] = $request->iban;
        $user = USer::find(Auth::id());
        $bankdetails = UserBankDetails::create($validatedData);
        if ($bankdetails) {
            return redirect()->route('withdraw.form')->with('success', 'Now request your withdraw');
        }
    }
    public function edit($id)
    {
        $bankdetail = UserBankDetails::where('user_id', Auth::id())->latest()->first();
        $id = Auth::id();
        $user = User::with(['usermeta', 'usermeta.plan'])->find($id);

        return  view('dashboard.bankdetails.edit', compact('user', 'bankdetail'));
    }
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'accountnumber' => 'numeric|required',
            'accountholdername' => 'required',
            'bankname' => 'required'
        ]);
        $validatedData['iban'] = $request->iban;
        // Find the user's bank details
        $bankdetail = UserBankDetails::where('user_id', Auth::id())->first();
        if (!$bankdetail) {
            return redirect()->route('user.profile')->with('error', 'Bank details not found');
        }
        // Update the bank details
        $bankdetail->update($validatedData);
        return redirect()->route('user.profile')->with('success', 'Bank details updated successfully');
    }

}
