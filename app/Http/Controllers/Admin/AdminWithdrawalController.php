<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ApproveWithdraw;
use App\Models\User;
use App\Models\Withdraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdminWithdrawalController extends Controller
{
    public function withdrawal()
    {
        $withdraw = Withdraw::all();
        return view('admin.transactions.withdrawal', compact('withdraw'));
    }

    public function acceptDeposit($id)
    {
        $withdraw = Withdraw::findOrFail($id);
        $user = User::findOrFail($withdraw->user_id);
        $user->balance += $withdraw->amoun;
        $withdraw->status = 1;
        $user->save();
        $withdraw->save();
        $data = ['user' => $user, 'withdraw' => $withdraw];
        Mail::to($user->email)->send(new ApproveWithdraw($data));
        return redirect()->back()->with('success', 'Approved Successfully');
    }

}
