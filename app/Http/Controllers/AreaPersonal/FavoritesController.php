<?php

namespace App\Http\Controllers\AreaPersonal;

use App\Http\Controllers\Controller;

class FavoritesController extends Controller
{
    public function index()
    {
        return view('personal-area.izbrannoye');
    }
}
