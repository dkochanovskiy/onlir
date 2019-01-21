<?php

namespace App\Http\Controllers\AreaPersonal;

use App\Http\Controllers\Controller;

class ChoiceOfPropertyTypeController extends Controller
{
    public function index()
    {
        return view('personal-area.vybor_tipa_nedvizhimosti');
    }
}