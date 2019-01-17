<?php

namespace App\Http\Controllers\AreaPersonal\PropertyTypes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoomController extends Controller
{
    public function index(){
        return view('personal-area.razmeshcheniye-obyavleniya');
    }

    public function save(Request $request)
    {
        if($request->isMethod('post')){
            $input = $request->except('_token');
            $rules = [
                'country' => 'required|alpha|max:100',
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
//            $offer = new Offer;
//
//            $offer->country = $request->input('country');
//            $offer->name_settlement = $request->input('name_settlement');
//            $offer->street = $request->input('street');
//            $offer->house_number = '';
//            $offer->building_number = '';
//            $offer->hull_number = '';
//            $offer->apartment_number = '';
//            $offer->office_number = '';
//            $offer->cabinet_number = '';
//            $offer->warehouse_number = '';
//            $offer->nearest_metro_station = '';
//            $offer->way_move_metro = '';
//            $offer->travel_time_metro = '';
//
            $offer->save();

//            if($offer->save()){
//                return redirect('')->with('status', 'Объявление упешно размещено');
//            }
        }
    }
}
