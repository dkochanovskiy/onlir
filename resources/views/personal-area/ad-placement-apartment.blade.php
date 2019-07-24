@extends('template.template')
@section('content')
    <div class="container">
        <div class="row">
            <hr class="col-md-12">
            <div class="col-md-2 text-center">
                <ul class="nav nav-pills nav-stacked">
                    <li id="home"><a href="{{ route('moi-obyavleniya') }}">Мои объявления</a></li>
                    <li id="purse"><a href="{{ route('koshelek') }}">Кошелек</a></li>
                    <li id="amend-contract"><a href="{{ route('redaktirovaniye-dogovora') }}">Редактирование договора</a></li>
                    <li class="active" id="ad-delivery"><a href="{{ route('ad-placement-apartment') }}">Размещение объявления</a></li>
                    <li id="settings"><a href="{{ route('nastroyki') }}">Настройки</a></li>
                </ul>
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <h2 class="col-md-6">
                                Подать объявление в Москве
                            </h2>
                            <div class="margin-20">
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-primary">
                                        <span class="glyphicon glyphicon-share-alt"></span> Сменить город
                                    </button>
                                </div>
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-success">
                                        <span class="glyphicon glyphicon-ok"></span> Заполнить договор
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row margin-30">
                </div>
                @if( count($errors) > 0 )
                    <div class="alert alert-danger">
                        <ul>
                            @foreach( $errors->all() as $error ) <li>{{ $error }}</li> @endforeach
                        </ul>
                    </div>
                @endif
                <div class="row">
                    {{--{!! Form::open(array('route' => 'ad-placement-apartment', 'method' => 'post', 'class' => 'form-horizontal', 'files' => true, 'role' => 'form')) !!}--}}
                    <form method="post" action="{{route('ad-placement-apartment')}}" class="form-horizontal" role="form" enctype="multipart/form-data">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                        <hr class="col-md-12">
                        <div class="header-in-the-form">
                            Об объекте
                        </div>
                        <div class="form-group">
                            <label for="country" class="col-md-3 control-label">Страна</label>
                            <div class="col-md-6">
                                <input type="text" name="country" class="form-control" id="country" value="{{old('country')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name_settlement" class="col-md-3 control-label">Город</label>
                            <div class="col-md-6">
                                <input type="text" name="name_settlement" class="form-control" id="name_settlement" value="{{old('name_settlement')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="street" class="col-md-3 control-label">Улица</label>
                            <div class="col-md-6">
                                <input type="text" name="street" class="form-control" id="street" value="{{old('street')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="house_number" class="col-md-3 control-label">Номер дома</label>
                            <div class="col-md-6">
                                <input type="text" name="house_number" class="form-control" id="house_number" value="{{old('house_number')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="building_number" class="col-md-3 control-label">Номер строения</label>
                            <div class="col-md-6">
                                <input type="text" name="building_number" class="form-control" id="building_number" value="{{old('building_number')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="hull_number" class="col-md-3 control-label">Номер корпуса</label>
                            <div class="col-md-6">
                                <input type="text" name="hull_number" class="form-control" id="hull_number" value="{{old('hull_number')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="apartment_number" class="col-md-3 control-label">Номер квартиры</label>
                            <div class="col-md-6">
                                <input type="text" name="apartment_number" class="form-control" id="apartment_number" value="{{old('apartment_number')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="office_number" class="col-md-3 control-label">Номер офиса</label>
                            <div class="col-md-6">
                                <input type="text" name="office_number" class="form-control" id="office_number" value="{{old('office_number')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cabinet_number" class="col-md-3 control-label">Номер кабинета</label>
                            <div class="col-md-6">
                                <input type="text" name="cabinet_number" class="form-control" id="cabinet_number" value="{{old('cabinet_number')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="warehouse_number" class="col-md-3 control-label">Номер складского помещения</label>
                            <div class="col-md-6">
                                <input type="text" name="warehouse_number" class="form-control" id="warehouse_number" value="{{old('warehouse_number')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nearest_metro_station" class="col-md-3 control-label">Ближайшая станция метро</label>
                            <div class="col-md-6">
                                <input type="text" name="nearest_metro_station" class="form-control" id="nearest_metro_station" value="{{old('nearest_metro_station')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="way_move_metro">До метро</label>
                            <div class="col-md-2">
                                <select class="form-control" name="way_move_metro" id="way_move_metro">
                                    <option value="1" selected>Пешком</option>
                                    <option value="2" >Транспортом</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="travel_time_metro" value="{{old('travel_time_metro')}}">
                            </div>
                            <div class="row">
                                <div class="col-md-1">
                                    <label class="col-md-2 control-label" for="travel_time_metro">минут</label>
                                </div>
                            </div>
                        </div>
                        <hr class="col-md-12">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Ремонт</label>
                            <div class="col-md-9">
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-primary" id="cosmetic">
                                        <input type="radio" name="repairs" value="1">Косметический
                                    </label>
                                    <label class="btn btn-default" id="designer">
                                        <input type="radio" name="repairs" value="2">Дизайнерский
                                    </label>
                                    <label class="btn btn-default" id="euro">
                                        <input type="radio" name="repairs" value="3">Евро
                                    </label>
                                    <label class="btn btn-default" id="withoutRepair">
                                        <input type="radio" name="repairs" value="4">Без ремонта
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-md-3 control-label">Описание</label>
                            <div class="col-md-8">
                                <textarea rows="5" class="form-control" name="description" id="description" placeholder="Опиcание..."></textarea>
                            </div>
                        </div>
                        <hr>
                        <div class="header-in-the-form">
                            Арендная плата
                        </div>
                        <div class="form-group">
                            <label for="monthly_rent" class="col-md-2 control-label">Цена в месяц</label>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="monthly_rent" value="{{old('monthly_rent')}}">
                            </div>
                            <div class="col-md-1">
                                <div class="row">
                                    <div class="col-md-1">
                                        <label for="monthly_rent" class="control-label">
                                            ₽
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="{{old('including_utilities')}}" id="including_utilities">
                                        включая коммунальные
                                    </label>
                                </div>
                            </div>
                            <label for="pledge" class="col-md-1 control-label">Залог</label>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="pledge" value="{{old('pledge')}}">
                            </div>
                            <div class="col-md-1">
                                <div class="row">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <label class="control-label" for="pledge">
                                                ₽
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="lease">
                            @include('include.lease')
                        </div>
                        <hr>
                        <div class="form-group">
                            <h1>Загрузка изображения</h1>
                            {{--<image-upload></image-upload>--}}
                            <input type="file" name="image">
                        </div>
                        <button type="submit" class="btn btn-default">
                            Загрузка
                        </button>
                        @isset ($path)
                        $path
                        @endisset
                        {{--<div class="form-group">--}}
                            {{--{!! Form::label('images', 'Изображение:', ['class' => 'col-xs-2 control-label']) !!}--}}
                            {{--<div class="col-md-8">--}}
                                {{--{!! Form::file('images', ['value' => old('images'), 'class' => 'filestyle btn btn-primary', 'data-buttonText' => 'Выберите изображения', 'data-buttonName' => 'btn-primary', 'data-placeholder' => 'Файла нет'])!!}--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <hr class="col-md-12">
                        <div class="row">
                            <label class="col-md-3 control-label">Способы размещения</label>
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-10 ways-accommodation-item bg-danger">
                                        <div class="row">
                                            <div class="col-md-3 ways-accommodation-input-wrap">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" class="ways-accommodation-input" name="ways_post" id="ways-accommodation1" value="1" checked>
                                                        Бесплатное
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-8 active-until">
                                                Активно до 27.06.2018
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-10 ways-accommodation-item bg-info" id="allotted">
                                        <div class="row">
                                            <div class="col-md-3 ways-accommodation-input-wrap">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" class="ways-accommodation-input" name="ways_post" id="ways-accommodation2" value="2">
                                                        Выделенное
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-8 ways-accommodation-cost">
                                                <span id="freeCost">20</span>р/в сутки
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-10 ways-accommodation-item bg-success" id="elevation">
                                        <div class="row">
                                            <div class="col-md-3 ways-accommodation-input-wrap">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" class="ways-accommodation-input" name="ways_post" id="ways-accommodation3" value="3">
                                                        Поднятие
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-8 ways-accommodation-cost">
                                                <span id="freeCost">25</span>р/разовое
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-10 ways-accommodation-item bg-warning" id="top">
                                        <div class="row">
                                            <div class="col-md-3 ways-accommodation-input-wrap">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" class="ways-accommodation-input" name="ways_post" id="ways-accommodation4" value="4">
                                                        Топ-3
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-8 ways-accommodation-cost">
                                                <span id="freeCost">55</span>р/в сутки
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-10" style="height: 30px" id="DescriptionOfTheWayOfAccommodation">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="balance">
                            <b>Баланс: 10 &#8381;</b><br>
                            <a href="{{ route('koshelek') }}">Пополнить</a>
                        </div>
                        <hr>
                        <div class="row margin-30">
                            <div class="col-md-offset-4 col-md-4">Не забудьте
                                <button type="button" class="btn btn-success">
                                    <span class="glyphicon glyphicon-ok"></span> Заполнить договор
                                </button>
                            </div>
                        </div>
                        <hr>
                        <div class="submit-advertisement-button">
                            <div class="submit-advertisement-button-inner">
                                <button type="submit" class="btn btn-success">Подать объявление</button>
                            </div>
                        </div>
{{--                    {!! Form::close() !!}--}}
                    </form>
                </div>
            </div>
        </div><!--row-->
    </div><!--container-->
@endsection
