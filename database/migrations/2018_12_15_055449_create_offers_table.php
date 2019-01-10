<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->increments('id');

            $table->string('country', 100);
            $table->string('name_settlement', 100);
            $table->string('street', 100);
            $table->unsignedTinyInteger('house_number');
            $table->unsignedTinyInteger('building_number');
            $table->unsignedTinyInteger('hull_number');
            $table->unsignedTinyInteger('apartment_number');
            $table->unsignedTinyInteger('office_number');
            $table->unsignedTinyInteger('cabinet_number');
            $table->unsignedTinyInteger('warehouse number');
            $table->string('nearest _metro _station', 100);
            $table->unsignedTinyInteger('way_move_metro');
            $table->unsignedTinyInteger('travel_time_metro');

            $table->unsignedTinyInteger('repairs');
            $table->string('description', 100);
            $table->unsignedTinyInteger('monthly_rent');
            $table->unsignedTinyInteger('including_utilities');
            $table->unsignedTinyInteger('pledge');
            $table->unsignedTinyInteger('photo');
            $table->unsignedTinyInteger('ways_post');
            $table->unsignedTinyInteger('number_floors');
            $table->unsignedTinyInteger('furniture');
            $table->unsignedTinyInteger('elevator');

            $table->unsignedTinyInteger('parking');
            $table->unsignedTinyInteger('guarded');
            $table->unsignedTinyInteger('floor_number');
            $table->unsignedTinyInteger('number_rooms');
            $table->unsignedTinyInteger('possible with children');
            $table->unsignedTinyInteger('pets allowed');
            $table->unsignedTinyInteger('can_smoke');
            $table->unsignedTinyInteger('fridge');
            $table->unsignedTinyInteger('washer');
            $table->unsignedTinyInteger('dishwasher');

            $table->unsignedTinyInteger('television');
            $table->unsignedTinyInteger('microwave');
            $table->unsignedTinyInteger('conditioning');
            $table->unsignedTinyInteger('internet');
            $table->unsignedTinyInteger('garage');
            $table->unsignedTinyInteger('school');
            $table->unsignedTinyInteger('kindergarten');
            $table->unsignedTinyInteger('playground');
            $table->unsignedTinyInteger('balcony');
            $table->unsignedTinyInteger('house_type');

            $table->unsignedTinyInteger('house_area');
            $table->unsignedTinyInteger('number_bedrooms');
            $table->unsignedTinyInteger('restroom');
            $table->unsignedTinyInteger('land_area');
            $table->unsignedTinyInteger('type_heating');
            $table->unsignedTinyInteger('year_construction');
            $table->unsignedTinyInteger('bathroom');
            $table->unsignedTinyInteger('bathhouse');
            $table->unsignedTinyInteger('pool');
            $table->unsignedTinyInteger('pond');

            $table->unsignedTinyInteger('rooms_rent');
            $table->unsignedTinyInteger('isolated');
            $table->unsignedTinyInteger('flat_area');
            $table->unsignedTinyInteger('room_area');
            $table->unsignedTinyInteger('number_beds');
            $table->unsignedTinyInteger('kitchen_area');
            $table->unsignedTinyInteger('total_area');
            $table->unsignedTinyInteger('living_space');
            $table->unsignedTinyInteger('number_wet_spots');
            $table->unsignedTinyInteger('separate_room');

            $table->unsignedTinyInteger('layout');
            $table->unsignedTinyInteger('electric_power');
            $table->unsignedTinyInteger('access');
            $table->unsignedTinyInteger('round_clock');
            $table->unsignedTinyInteger('building _name');
            $table->unsignedTinyInteger('building_class');
            $table->unsignedTinyInteger('building_type');
            $table->unsignedTinyInteger('display_windows');
            $table->unsignedTinyInteger('building_area');
            $table->unsignedTinyInteger('ventilation');

            $table->unsignedTinyInteger('work_time_with');
            $table->unsignedTinyInteger('uptime');
            $table->unsignedTinyInteger('around_clock');
            $table->unsignedTinyInteger('entrance');
            $table->unsignedTinyInteger('room_type');
            $table->unsignedTinyInteger('purpose_premises');
            $table->unsignedTinyInteger('except');
            $table->unsignedTinyInteger('conference_hall');
            $table->unsignedTinyInteger('atm');
            $table->unsignedTinyInteger('café');

            $table->unsignedTinyInteger('supermarket');
            $table->unsignedTinyInteger('shopping_center');
            $table->unsignedTinyInteger('beauty_saloon');
            $table->unsignedTinyInteger('pharmacy');
            $table->unsignedTinyInteger('bank_office');
            $table->unsignedTinyInteger('canteen');
            $table->unsignedTinyInteger('warehouses');
            $table->unsignedTinyInteger('buffet');
            $table->unsignedTinyInteger('car_wash');
            $table->unsignedTinyInteger('car_service');

            $table->unsignedTinyInteger('public_transport_stop');
            $table->unsignedTinyInteger('restaurant');
            $table->unsignedTinyInteger('business_center');
            $table->unsignedTinyInteger('cinema');
            $table->unsignedTinyInteger('game_zone');
            $table->unsignedTinyInteger('hotel');
            $table->unsignedTinyInteger('park');
            $table->unsignedTinyInteger('sports_hall');
            $table->unsignedTinyInteger('fitness_center');

            $table->unsignedTinyInteger('medical_center');
            $table->unsignedTinyInteger('rental_type');
            $table->unsignedTinyInteger('minimum_rental_period');
            $table->unsignedTinyInteger('rental_holidays');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offers');
    }
}
