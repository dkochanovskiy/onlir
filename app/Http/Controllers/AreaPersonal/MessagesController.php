<?php

namespace App\Http\Controllers\AreaPersonal;

use App\Events\NewMessageAdded;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Message;

class MessagesController extends Controller
{
    public function index()
    {
        $messages = Message::all();
        return view('personal-area.messages', compact('messages'));
    }

    public function postMessages(Request $request){
        $message = Message::create($request->all());
        event(
            new NewMessageAdded($message)
        );
        return redirect()->back();
    }
}
