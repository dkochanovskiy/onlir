@extends('template.template')
@section('content')
    <div class="container">
        <div class="row">
            <hr class="col-md-12">
            <div class="col-md-2 text-center">
                <ul class="nav nav-pills nav-stacked">
                    <li id="home"><a href="{{ route('moi-obyavleniya') }}">!Мои объявления</a></li>
                    <li id="purse"><a href="{{ route('koshelek') }}">Кошелек</a></li>
                    <li id="amend-contract"><a href="{{ route('redaktirovaniye-dogovora') }}">Редактирование договора</a></li>
                    <li class="active" id="ad-delivery"><a href="{{ route('vybor_tipa_nedvizhimosti') }}">Размещение объявления</a></li>
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
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{route('house')}}">
                                <button type="button" class="btn btn-info">Дом</button>
                            </a>
                        </div>
                        <div class="col-md-12">
                            <a href="{{route('room')}}">
                                <button type="button" class="btn btn-info">Комната</button>
                            </a>
                        </div>
                        <div class="col-md-12">
                            <a href="{{route('apartment')}}">
                                <button type="button" class="btn btn-info">Квартира</button>
                            </a>
                        </div>
                        <div class="col-md-12">
                            <a href="{{route('cottage')}}">
                                <button type="button" class="btn btn-info">Коттедж</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{route('ready_business')}}">
                                <button type="button" class="btn btn-info">Готовый бизнес</button>
                            </a>
                        </div>
                        <div class="col-md-12">
                            <a href="{{route('office')}}">
                                <button type="button" class="btn btn-info">Офис</button>
                            </a>
                        </div>
                        <div class="col-md-12">
                            <a href="{{route('trade_area')}}">
                                <button type="button" class="btn btn-info">Торговая площадь</button>
                            </a>
                        </div>
                        <div class="col-md-12">
                            <a href="{{route('warehouse_space')}}">
                                <button type="button" class="btn btn-info">Складское помещение</button>
                            </a>
                        </div>
                        <div class="col-md-12">
                            <a href="{{route('free_destination_room')}}">
                                <button type="button" class="btn btn-info">Помещение свободного назначения</button>
                            </a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div><!--row-->
    </div><!--container-->
@endsection
