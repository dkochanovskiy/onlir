<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurseController extends Controller
{
    public function index()
    {
        return view('personal-area.purse');
    }
}
