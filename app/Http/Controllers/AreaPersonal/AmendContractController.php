<?php

namespace App\Http\Controllers\AreaPersonal;

use App\Http\Controllers\Controller;

class AmendContractController extends Controller
{
    public function index()
    {
        return view('personal-area.redaktirovaniye-dogovora');
    }
}
