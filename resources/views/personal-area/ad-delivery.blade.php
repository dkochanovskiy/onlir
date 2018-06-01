@extends('template.template')

@section('content')
<div class="container">
    <hr>
    <div class="navigation-bar">
        <ul class="nav nav-pills nav-stacked">
            <li id="home"><a href="{{ route('my-announcements') }}">Мои объявления</a></li>
            <li id="purse"><a href="{{ route('purse') }}">Кошелек</a></li>
            <li id="amend-contract"><a href="{{ route('amend-contract') }}">Изменить договор</a></li>
            <li class="active" id="ad-delivery"><a href="{{ route('ad-delivery') }}">Подать объявление</a></li>
            <li id="settings"><a href="{{ route('settings') }}">Настройки</a></li>
        </ul>
    </div>
    <div class="title-page">
        <h1>
            Подать объявление в Москве
        </h1>
        {{--<div class="change_city-wrap">--}}
            {{--<div class="btn btn-primary btn-lg change_city">Сменить город</div>--}}
        {{--</div>--}}
    </div>
    {{--<div class="btn btn-primary btn-lg fill_contract">Заполнить договор</div>--}}
    {{--<h2>--}}
        {{--Выберите тип недвижимости--}}
    {{--</h2>--}}
    {{--<div class="property_type">--}}
        {{--<div class="property_type-residential">--}}
            {{--<div class="btn btn-primary btn-lg">Жилая</div>--}}
        {{--</div>--}}
        {{--<div class="property_type-commercial">--}}
            {{--<div class="btn btn-primary btn-lg">Коммерческая</div>--}}
        {{--</div>--}}
    {{--</div>--}}
</div>
@endsection
