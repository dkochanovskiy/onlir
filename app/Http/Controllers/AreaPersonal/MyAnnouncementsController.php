<?php

namespace App\Http\Controllers\AreaPersonal;

use App\Http\Controllers\Controller;

class MyAnnouncementsController extends Controller
{
    public function index()
    {
        return view('personal-area.my-announcements');
    }
}
