@extends('template.template')

@section('content')
    <hr class="col-md-12">
    <div class="col-md-2 text-center">
        <ul class="nav nav-pills nav-stacked">
            <li id="home"><a href="{{ route('moi-obyavleniya') }}">Мои объявления</a></li>
            <li id="purse"><a href="{{ route('koshelek') }}">Кошелек</a></li>
            <li class="active" id="amend-contract"><a href="{{ route('redaktirovaniye-dogovora') }}">Редактирование договора</a></li>
            <li id="ad-delivery"><a href="{{ route('vybor_tipa_nedvizhimosti') }}">Размещение объявления</a></li>
            <li id="settings"><a href="{{ route('nastroyki') }}">Настройки</a></li>
        </ul>
    </div>
    <div class="col-md-10">
        Редактирование договора
    </div>
@endsection
