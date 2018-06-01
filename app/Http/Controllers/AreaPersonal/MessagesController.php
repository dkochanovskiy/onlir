<?php

namespace App\Http\Controllers\AreaPersonal;

use App\Http\Controllers\Controller;

class MessagesController extends Controller
{
    public function index()
    {
        return view('personal-area.messages');
    }
}
