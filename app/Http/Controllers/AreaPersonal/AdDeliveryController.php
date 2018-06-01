<?php

namespace App\Http\Controllers\AreaPersonal;

use App\Http\Controllers\Controller;

class AdDeliveryController extends Controller
{
    public function index()
    {
        return view('personal-area.ad-delivery');
    }
}
