<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FontentController extends Controller
{
    public function fontend()
    {
        return view('fontend.fontpage');
    }
}
