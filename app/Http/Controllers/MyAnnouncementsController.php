<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyAnnouncementsController extends Controller
{
    public function index()
    {
        return view('my-announcements');
    }
}
