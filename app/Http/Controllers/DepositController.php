<?php

namespace App\Http\Controllers;

use App\Models\PaymentMethod;
use Illuminate\Http\Request;

class DepositController extends Controller
{
    public function deposit()
    {
        $p_method = PaymentMethod::all();
        return view('dashboard.deposit.deposit', compact('p_method'));
    }
}
