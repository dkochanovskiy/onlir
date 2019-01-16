<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChoiceOfPropertyTypeController extends Controller
{
    public function index()
    {
        return view('personal-area.vybor_tipa_nedvizhimosti');
    }
}
