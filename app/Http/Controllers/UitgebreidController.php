<?php

namespace App\Http\Controllers;

use App\Models\Oefening;
use Illuminate\Http\Request;

class UitgebreidController extends Controller
{
    public function uitgebreidscherm()
    {
        $exercises = Oefening::all();
        
        return view('uitgebreid', compact('exercises'));
    }
}
