<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->increments('id'); // идентификатор
            $table->string('country', 100)->nullable(); // страна
            $table->string('name_settlement', 100)->nullable(); // название населенного пункта
            $table->string('street', 100)->nullable(); // название улицы
            $table->unsignedTinyInteger('house_number')->nullable(); // номер дома
            $table->unsignedTinyInteger('building_number')->nullable(); // номер строения
            $table->unsignedTinyInteger('hull_number')->nullable(); // номер корпуса
            $table->unsignedTinyInteger('apartment_number')->nullable(); // номер квартиры
            $table->string('nearest_metro_station', 100)->nullable(); // ближайшая станция метро
            $table->string('way_move_metro')->nullable(); // до метро(способ)
            $table->string('travel_time_metro')->nullable(); // до метро(время)
            $table->unsignedTinyInteger('repairs')->nullable(); // ремонт
            $table->string('description', 100)->nullable(); // описание
            $table->Integer('monthly_rent')->nullable(); // арендная плата в месяц
            $table->unsignedTinyInteger('including_utilities')->nullable(); // включая коммунальные
            $table->unsignedTinyInteger('pledge')->nullable(); // залог
            $table->unsignedTinyInteger('ways_post')->nullable(); // способы размещения
            $table->unsignedTinyInteger('number_floors')->nullable(); // количество этажей
            $table->unsignedTinyInteger('furniture')->nullable(); // мебель
            $table->unsignedTinyInteger('elevator')->nullable(); // лифт
            $table->unsignedTinyInteger('parking')->nullable(); // парковка
            $table->unsignedTinyInteger('guarded')->nullable(); // охраняемая
            $table->unsignedTinyInteger('floor_number')->nullable(); // этаж
            $table->unsignedTinyInteger('number_rooms')->nullable(); // количество комнат
            $table->unsignedTinyInteger('possible_with_children')->nullable(); // можно с детьми
            $table->unsignedTinyInteger('pets_allowed')->nullable(); // можно с животными
            $table->unsignedTinyInteger('can_smoke')->nullable(); // можно с детьми
            $table->unsignedTinyInteger('fridge')->nullable(); // холодильник
            $table->unsignedTinyInteger('washer')->nullable(); // стиральная машина
            $table->unsignedTinyInteger('dishwasher')->nullable(); // посудомоечная машина
            $table->unsignedTinyInteger('television')->nullable(); // телевизор
            $table->unsignedTinyInteger('microwave')->nullable(); // микроворлновая печь
            $table->unsignedTinyInteger('conditioning')->nullable(); // кондиционер
            $table->unsignedTinyInteger('internet')->nullable(); // интернет
            $table->unsignedTinyInteger('garage')->nullable(); // гараж
            $table->unsignedTinyInteger('kindergarten')->nullable(); // детский сад
            $table->unsignedTinyInteger('playground')->nullable(); // игровая площадка
            $table->unsignedTinyInteger('balcony')->nullable(); // балкон
            $table->unsignedTinyInteger('flat_area')->nullable(); // площадь квартиры
            $table->unsignedTinyInteger('number_beds')->nullable(); // количество спальных мест
            $table->unsignedTinyInteger('kitchen_area')->nullable(); // площадь кухни
            $table->unsignedTinyInteger('total_area')->nullable(); // общая площадь
            $table->unsignedTinyInteger('living_space')->nullable(); // жилая площадь
            $table->string('minimum_rental_period')->nullable(); // минимальный срок аренды
            $table->string('rental_holidays')->nullable(); // арендные каникулы
            $table->string('img_1')->nullable();
            $table->string('img_2')->nullable();
            $table->string('img_3')->nullable();
            $table->string('img_4')->nullable();
            $table->string('img_5')->nullable();
            $table->string('img_6')->nullable();
            $table->string('img_7')->nullable();
            $table->string('img_8')->nullable();
            $table->string('img_9')->nullable();
            $table->string('img_10')->nullable();
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
        Schema::dropIfExists('apartments');
    }
}
