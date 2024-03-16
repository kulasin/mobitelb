<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function help()
    {
        return view('help');
    }

    public function about()
    {
        return view('about');
    }
}
