<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function projects()
    {
        $properties = Property::all();
        return view('dashboard.project.list', compact('properties'));
    }
}
