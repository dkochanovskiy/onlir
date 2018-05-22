<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdDeliveryController extends Controller
{
    public function index()
    {
        return view('personal-area.ad-delivery');
    }
}
