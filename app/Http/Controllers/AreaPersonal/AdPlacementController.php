<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdPlacementController extends Controller
{
    public function index()
    {
        return view('personal-area.ad-placement');
    }
}
