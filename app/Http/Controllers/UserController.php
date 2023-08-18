<?php

namespace App\Http\Controllers;

use App\Models\Invest;
use App\Models\Property;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function dashboard()
   {
       $invested_count = Invest::whereUserId(auth()->id())->count();
       $invested = Invest::whereUserId(auth()->id())->select('amount')->sum('amount');
       $total_property = Property::count();
       return view('dashboard.index', compact('invested', 'invested_count', 'total_property'));
   }
}
