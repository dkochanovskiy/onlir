<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\WelcomeRequest;
use App\Http\Controllers\Controller;
use Validator;

class WelcomeController extends Controller
{
    public function show(){
        return view('welcome');
    }

    public function store(WelcomeRequest $request){
        if($request->isMethod('post')){
            $messages = [];
            $validator = Validator::make($request->all(), [
                'min_price'=>'integer',
                'max_price'=>'integer',
                'city'=>'alpha'
            ], $messages);

            if($validator->fails()){
                dump($validator->errors());
//                return redirect()->route('welcome')->withErrors($validator)->withInput();
            }
        }

        echo $request->input('property');
        echo $request->input('room_number');
        echo $request->input('min_price');
        echo $request->input('max_price');
        echo $request->input('city');

        return view('welcome');
    }
}
