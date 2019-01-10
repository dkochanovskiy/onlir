<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function showTest(Request $request){
        $test = new Test;
        $test->table = $request->input('propertyType');
        $test->save();

        return view('test');
    }

//    public function updateOffers(){
//        $offer = Offer::find(1);
//
//        $offer->country = '';
//
//        $offer->save();
//    }
}
