@extends('template.template')

@section('content')
    <div class="container">
        <hr class="col-md-12">
        <div class="navigation-bar">
            <ul class="nav nav-pills nav-stacked">
                <li id="home"><a href="{{ route('my-announcements') }}">Мои объявления</a></li>
                <li class="active" id="purse"><a href="{{ route('purse') }}">Кошелек</a></li>
                <li id="amend-contract"><a href="{{ route('amend-contract') }}">Изменить договор</a></li>
                <li id="ad-delivery"><a href="{{ route('ad-delivery') }}">Подать объявление</a></li>
                <li id="settings"><a href="{{ route('settings') }}">Настройки</a></li>
            </ul>
        </div>
        <div class="container-content">
            <div class="new-password">
                Баланс: 5 рублей
            </div>
            <br>
            <div class="new-password">
                Пополнить:&#160;
                <span class="replenish">
                    100
                </span>&#160;
                &#8381;
            </div>
            <br>
            <div class="new-password">
                Выберите способ оплаты:
            </div>
        </div>
    </div>
@endsection
