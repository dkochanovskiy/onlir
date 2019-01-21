<?php

namespace App\Http\Controllers\AreaPersonal;

use App\Http\Controllers\Controller;
use App\Offer;
use Illuminate\Http\Request;
use Validator;

class OfferController extends Controller
{
    public function index(Request $request)
    {
        if($request->isMethod('post')){
            $input = $request->except('_token');
            $rules = [
//                'property_type' => 'required|alpha|max:100',
//                'country' => 'required|alpha|max:100',
//                'name_settlement' => 'required|alpha|max:100',
//                'street' => 'required|alpha|max:100',
//                'house_number' => 'integer|max:3',
//                'building_number' => 'integer|max:3',
//                'hull_number' => 'integer|max:3',
//                'apartment_number' => 'integer|max:3',
//                'warehouse_number' => 'integer|max:3',
//                'nearest_metro_station' => 'alpha|max:3',
//                'way_move_metro' => 'alpha|max:6',
//                'travel_time_metro' => 'integer',
            ];
            $messages = [
                'required' => 'Поле :attribute обязателно к заполнению',
                'max' => 'Поле :attribute превышает максимально допустимое значение',
                'integer' => 'Значение в поле :attribute должно быть целым числом',
                'string' => 'Значение в поле :attribute должно быть строкой',
            ];

            $validator = \Validator::make($request->except('_token'), $rules, $messages);
            if( $validator->fails() ) {
                $request->flash();
                return view('personal-area.razmeshcheniye-obyavleniya')
                    ->withErrors($validator);
            }

            if($request->hasFile('images')){
                $file = $request->file('images');

                $input['images'] = $file->getClientOriginalName();

                $file->move(public_path().'/assets/img', $input['images']);
            }

            $offer = new Offer();

            $offer->fill($input);

            $offer->save();
        }

        return view('personal-area.razmeshcheniye-obyavleniya');
    }
}
