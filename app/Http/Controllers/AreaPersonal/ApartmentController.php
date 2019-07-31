<?php

namespace App\Http\Controllers\AreaPersonal;

use App\Apartment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApartmentController extends Controller
{
    public function index(Request $request){
        $path = null;

        if($request->file('image')){
            $path = $request->file('image')->store('uploads', 'public');
        }

        return view('personal-area.ad-placement-apartment', ['path' => $path]);
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
                return view('personal-area.ad-placement-apartments')
                    ->withErrors($validator);
            }

            if($request->hasFile('images')){
                $file = $request->file('images');

                $input['images'] = $file->getClientOriginalName();

                $file->move(public_path().'/assets/img', $input['images']);
            }

            $apartment = new Apartment();
            $apartment->fill($input);
//            $apartment = new Apartment;
//
//            $apartment->country = $request->input('country');
//            $apartment->name_settlement = $request->input('name_settlement');
//            $apartment->street = $request->input('street');
//            $apartment->house_number = '';
//            $apartment->building_number = '';
//            $apartment->hull_number = '';
//            $apartment->apartment_number = '';
//            $apartment->office_number = '';
//            $apartment->cabinet_number = '';
//            $apartment->warehouse_number = '';
//            $apartment->nearest_metro_station = '';
//            $apartment->way_move_metro = '';
//            $apartment->travel_time_metro = '';
//
            $apartment->save();

//            if($apartment->save()){
//                return redirect('')->with('status', 'Объявление упешно размещено');
//            }
        }
    }
}
