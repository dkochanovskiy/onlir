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
    <div class="container-content">
        <div class="new-password">
            Подать объявление в Москве
        </div>
    </div>
</div>
@endsection
