<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class InvestController extends Controller
{
    public function home()
    {
        $property = Property::all();
        return view('pages.index', compact('property'));
    }
    public function properties()
    {
        $property = Property::all();
        return view('pages.properties', compact('property'));
    }
}
