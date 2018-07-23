<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaAdController extends Controller
{
    public function show(){
        return view('obyavleniye-ta');
    }
}
