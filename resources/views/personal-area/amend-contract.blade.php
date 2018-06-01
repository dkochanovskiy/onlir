@extends('template.template')

@section('content')
    <div class="container">
        <hr>
        <div class="navigation-bar">
            <ul class="nav nav-pills nav-stacked">
                <li id="home"><a href="{{ route('my-announcements') }}">Мои объявления</a></li>
                <li id="purse"><a href="{{ route('purse') }}">Кошелек</a></li>
                <li class="active" id="amend-contract"><a href="{{ route('amend-contract') }}">Изменить договор</a></li>
                <li id="ad-delivery"><a href="{{ route('ad-delivery') }}">Подать объявление</a></li>
                <li id="settings"><a href="{{ route('settings') }}">Настройки</a></li>
            </ul>
        </div>
        <h1>Изменить договор</h1>
    </div>
@endsection
