<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OAdController extends Controller
{
    public function show(){
        return view('obyavleniye-o');
    }
}
