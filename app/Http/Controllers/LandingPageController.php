<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index(Request $request)
    {
        return view('case2');
    }

}
