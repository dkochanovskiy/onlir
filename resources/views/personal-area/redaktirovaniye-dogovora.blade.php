@extends('template.template')

@section('content')
    <div class="container">
        <hr>
        <div class="navigation-bar text-center">
            <ul class="nav nav-pills nav-stacked">
                <li id="home"><a href="{{ route('moi-obyavleniya') }}">Мои объявления</a></li>
                <li id="purse"><a href="{{ route('koshelek') }}">Кошелек</a></li>
                <li class="active" id="amend-contract"><a href="{{ route('redaktirovaniye-dogovora') }}">Редактирование договора</a></li>
                <li id="ad-delivery"><a href="{{ route('razmeshcheniye-obyavleniya') }}">Размещение объявления</a></li>
                <li id="settings"><a href="{{ route('nastroyki') }}">Настройки</a></li>
            </ul>
        </div>
        <div class="container-content">
            <div class="new-password">
                Изменить договор
            </div>
        </div>
    </div>
@endsection
