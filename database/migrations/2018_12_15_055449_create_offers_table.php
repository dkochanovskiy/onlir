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

            $table->string('property_type', 100)->nullable();
            $table->string('country', 100)->nullable();
            $table->string('name_settlement', 100)->nullable();
            $table->string('street', 100)->nullable();
            $table->unsignedTinyInteger('house_number')->nullable();
            $table->unsignedTinyInteger('building_number')->nullable();
            $table->unsignedTinyInteger('hull_number')->nullable();
            $table->unsignedTinyInteger('apartment_number')->nullable();
            $table->unsignedTinyInteger('office_number')->nullable();
            $table->unsignedTinyInteger('cabinet_number')->nullable();
            $table->unsignedTinyInteger('warehouse_number')->nullable();
            $table->string('nearest__metro_station', 100)->nullable();
            $table->unsignedTinyInteger('way_move_metro')->nullable();
            $table->unsignedTinyInteger('travel_time_metro')->nullable();

            $table->unsignedTinyInteger('repairs')->nullable();
            $table->string('description', 100)->nullable();
            $table->unsignedTinyInteger('monthly_rent')->nullable();
            $table->unsignedTinyInteger('including_utilities')->nullable();
            $table->unsignedTinyInteger('pledge')->nullable();
            $table->string('images')->nullable();
            $table->unsignedTinyInteger('ways_post')->nullable();
            $table->unsignedTinyInteger('number_floors')->nullable();
            $table->unsignedTinyInteger('furniture')->nullable();
            $table->unsignedTinyInteger('elevator')->nullable();

            $table->unsignedTinyInteger('parking')->nullable();
            $table->unsignedTinyInteger('guarded')->nullable();
            $table->unsignedTinyInteger('floor_number')->nullable();
            $table->unsignedTinyInteger('number_rooms')->nullable();
            $table->unsignedTinyInteger('possible_with_children')->nullable();
            $table->unsignedTinyInteger('pets_allowed')->nullable();
            $table->unsignedTinyInteger('can_smoke')->nullable();
            $table->unsignedTinyInteger('fridge')->nullable();
            $table->unsignedTinyInteger('washer')->nullable();
            $table->unsignedTinyInteger('dishwasher')->nullable();

            $table->unsignedTinyInteger('television')->nullable();
            $table->unsignedTinyInteger('microwave')->nullable();
            $table->unsignedTinyInteger('conditioning')->nullable();
            $table->unsignedTinyInteger('internet')->nullable();
            $table->unsignedTinyInteger('garage')->nullable();
            $table->unsignedTinyInteger('school')->nullable();
            $table->unsignedTinyInteger('kindergarten')->nullable();
            $table->unsignedTinyInteger('playground')->nullable();
            $table->unsignedTinyInteger('balcony')->nullable();
            $table->unsignedTinyInteger('house_type')->nullable();

            $table->unsignedTinyInteger('house_area')->nullable();
            $table->unsignedTinyInteger('number_bedrooms')->nullable();
            $table->unsignedTinyInteger('restroom')->nullable();
            $table->unsignedTinyInteger('land_area')->nullable();
            $table->unsignedTinyInteger('type_heating')->nullable();
            $table->unsignedTinyInteger('year_construction')->nullable();
            $table->unsignedTinyInteger('bathroom')->nullable();
            $table->unsignedTinyInteger('bathhouse')->nullable();
            $table->unsignedTinyInteger('pool')->nullable();
            $table->unsignedTinyInteger('pond')->nullable();

            $table->unsignedTinyInteger('rooms_rent')->nullable();
            $table->unsignedTinyInteger('isolated')->nullable();
            $table->unsignedTinyInteger('flat_area')->nullable();
            $table->unsignedTinyInteger('room_area')->nullable();
            $table->unsignedTinyInteger('number_beds')->nullable();
            $table->unsignedTinyInteger('kitchen_area')->nullable();
            $table->unsignedTinyInteger('total_area')->nullable();
            $table->unsignedTinyInteger('living_space')->nullable();
            $table->unsignedTinyInteger('number_wet_spots')->nullable();
            $table->unsignedTinyInteger('separate_room')->nullable();

            $table->unsignedTinyInteger('layout')->nullable();
            $table->unsignedTinyInteger('electric_power')->nullable();
            $table->unsignedTinyInteger('access')->nullable();
            $table->unsignedTinyInteger('round_clock')->nullable();
            $table->unsignedTinyInteger('building _name')->nullable();
            $table->unsignedTinyInteger('building_class')->nullable();
            $table->unsignedTinyInteger('building_type')->nullable();
            $table->unsignedTinyInteger('display_windows')->nullable();
            $table->unsignedTinyInteger('building_area')->nullable();
            $table->unsignedTinyInteger('ventilation')->nullable();

            $table->unsignedTinyInteger('work_time_with')->nullable();
            $table->unsignedTinyInteger('uptime')->nullable();
            $table->unsignedTinyInteger('around_clock')->nullable();
            $table->unsignedTinyInteger('entrance')->nullable();
            $table->unsignedTinyInteger('room_type')->nullable();
            $table->unsignedTinyInteger('purpose_premises')->nullable();
            $table->unsignedTinyInteger('except')->nullable();
            $table->unsignedTinyInteger('conference_hall')->nullable();
            $table->unsignedTinyInteger('atm')->nullable();
            $table->unsignedTinyInteger('café')->nullable();

            $table->unsignedTinyInteger('supermarket')->nullable();
            $table->unsignedTinyInteger('shopping_center')->nullable();
            $table->unsignedTinyInteger('beauty_saloon')->nullable();
            $table->unsignedTinyInteger('pharmacy')->nullable();
            $table->unsignedTinyInteger('bank_office')->nullable();
            $table->unsignedTinyInteger('canteen')->nullable();
            $table->unsignedTinyInteger('warehouses')->nullable();
            $table->unsignedTinyInteger('buffet')->nullable();
            $table->unsignedTinyInteger('car_wash')->nullable();
            $table->unsignedTinyInteger('car_service')->nullable();

            $table->unsignedTinyInteger('public_transport_stop')->nullable();
            $table->unsignedTinyInteger('restaurant')->nullable();
            $table->unsignedTinyInteger('business_center')->nullable();
            $table->unsignedTinyInteger('cinema')->nullable();
            $table->unsignedTinyInteger('game_zone')->nullable();
            $table->unsignedTinyInteger('hotel')->nullable();
            $table->unsignedTinyInteger('park')->nullable();
            $table->unsignedTinyInteger('sports_hall')->nullable();
            $table->unsignedTinyInteger('fitness_center')->nullable();

            $table->unsignedTinyInteger('medical_center')->nullable();
            $table->unsignedTinyInteger('rental_type')->nullable();
            $table->unsignedTinyInteger('minimum_rental_period')->nullable();
            $table->unsignedTinyInteger('rental_holidays')->nullable();

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
