<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(Request $request){
        $rules = [
            'min_price' => 'integer',
            'max_price' => 'integer',
            'city' => 'string',
        ];

        if($request->isMethod('post')){
            $this->validate($request, $rules);
        }

        echo $request->input('property');
        echo $request->input('room_number');
        echo $request->input('min_price');
        echo $request->input('max_price');
        echo $request->input('city');

        return view('welcome');
    }
}
