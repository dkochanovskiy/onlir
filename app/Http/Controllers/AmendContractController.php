<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AmendContractController extends Controller
{
    public function index()
    {
        return view('personal-area.amend-contract');
    }
}