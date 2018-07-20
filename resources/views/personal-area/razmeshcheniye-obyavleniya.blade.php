@extends('template.template')

@section('content')
    <hr class="col-md-12">
    <div class="col-md-2 text-center">
        <ul class="nav nav-pills nav-stacked">
            <li id="home"><a href="{{ route('moi-obyavleniya') }}">Мои объявления</a></li>
            <li id="purse"><a href="{{ route('koshelek') }}">Кошелек</a></li>
            <li id="amend-contract"><a href="{{ route('redaktirovaniye-dogovora') }}">Редактирование договора</a></li>
            <li class="active" id="ad-delivery"><a href="{{ route('razmeshcheniye-obyavleniya') }}">Размещение объявления</a></li>
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
                    <div class="col-md-6 margin-20">
                        <button type="button" class="btn btn-primary">
                            <span class="glyphicon glyphicon-share-alt"></span> Сменить город
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row margin-30">
            <div class="col-md-offset-8 col-md-1">
                <button type="button" class="btn btn-success">
                    <span class="glyphicon glyphicon-ok"></span> Заполнить договор
                </button>
            </div>
        </div>
        <div class="row">
            <form method="post" class="form-horizontal" role="form">
                <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                <div class="form-group">
                    <div class="dropdown">
                        <label class="col-md-3 control-label" for="propertyTypeMenu">Тип недвижимости </label>
                        <div class="col-md-9">
                            <button class="btn btn-default dropdown-toggle" type="button" id="propertyTypeMenu" data-toggle="dropdown">
                                Квартира
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li role="presentation" class="dropdown-header">Жилая</li>
                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="javascript:House()">Дом</a>
                                </li>
                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="javascript:Room()">Комната</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:Apartment()">Квартира</a>
                                </li>
                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="javascript:Cottage()">Коттедж</a>
                                </li>
                                <li role="presentation" class="divider"></li>
                                <li role="presentation" class="dropdown-header">Коммерческая</li>
                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="javascript:ReadyBusiness()">Готовый бизнес</a>
                                </li>
                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="javascript:Office()">Офис</a>
                                </li>
                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="javascript:TradeArea()">Торговая площадь</a>
                                </li>
                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="javascript:WarehouseSpace()">Складское помещение</a>
                                </li>
                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="javascript:FreeDestinationRoom()">Помещение свободного назначения</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="propertyType" id="propertyType" value="Квартира">
                <hr class="col-md-12">
                <div class="header-in-the-form">
                    Об объекте
                </div>
                <div class="form-group">
                    <label for="address" class="col-md-3 control-label">Адрес</label>
                    <div class="col-md-6">
                        <input type="text" name="address" class="form-control" id="address">
                    </div>
                </div>
                <div class="form-group">
                    <label for="metro" class="col-md-3 control-label">Ближайшая станция метро</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="metro">
                    </div>
                </div>
                <div class="form-group">
                    <div class="dropdown">
                        <label class="col-md-3 control-label" for="toMetro">До метро</label>
                        <div class="col-md-2">
                            <button class="btn btn-default dropdown-toggle" type="button" id="toMetro" data-toggle="dropdown">
                                Пешком
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="javascript:DropDownList('toMetro', 'Пешком', 'inputToMetro')">Пешком</a>
                                </li>
                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="javascript:DropDownList('toMetro', 'Транспортом', 'inputToMetro')">Транспортом</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="text" class="form-control" id="minutes">
                    </div>
                    <div class="row">
                        <div class="col-md-1">
                            <label class="col-md-2 control-label" for="minutes">минут</label>
                        </div>
                    </div>
                </div>
                <input type="hidden" id="inputToMetro" name="inputToMetro" value="Пешком">
                <hr class="col-md-12">
                    @include('include.property-type.house')
                    @include('include.property-type.room')
                    @include('include.property-type.apartment')
                    @include('include.property-type.cottage')
                    @include('include.property-type.ready-business')
                    @include('include.property-type.office')
                    @include('include.property-type.trade-area')
                    @include('include.property-type.warehouse-space')
                    @include('include.property-type.free-destination-room')
                    <hr>
                    @include('include.lease')
                    <hr>
                    @include('include.contact-information')
                <hr>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8 add-photo">
                            <div class="camera">
                                <button type="button" class="btn btn-default">
                                    <span class="glyphicon glyphicon-camera"></span>
                                </button>
                            </div>
                            <div class="add-button">
                                <button type="button" class="btn btn-primary">
                                    <span class="glyphicon glyphicon-plus">
                                        Загрузить фото
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-offset-2 col-md-8 text-center">
                            Не допускаются фотографии содержащие водяные знаки, чужие объекты, контакты и рекламные
                            баннеры. Максимальный размер фото 10 мб.   JGP, PNG, GIF
                        </div>
                    </div>
                </div>
                <hr class="col-md-12">
                <div class="row">
                    <label class="col-md-3 control-label">Способы размещения</label>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-10 ways-accommodation-item free-charge">
                                <div class="row">
                                    <div class="col-md-3 ways-accommodation-input-wrap">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" class="ways-accommodation-input" name="optionsRadios" id="ways-accommodation1" value="Бесплатное" checked>
                                                Бесплатное
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-9 ways-accommodation-cost">
                                        <span id="freeCost">0</span>р/<span id="freeDays">21</span>день
                                    </div>
                                    <div class="col-md-12">
                                        <div class="">
                                            Активно до 27.06.2018
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-10 ways-accommodation-item top-3">
                                <div class="ways-accommodation-input-wrap">
                                    <div class="ways-accommodation-input">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" class="ways-accommodation-input" name="optionsRadios" id="ways-accommodation2" value="Топ-3">
                                                Топ-3
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="ways-accommodation-cost">
                                <span id="topCost">
                                    310
                                </span>
                                    р/
                                    <span id="topDays">
                                    7
                                </span>
                                    дней
                                </div>
                                <div class="discount">
                                    Скидка: Экономия 75 рублей
                                </div>
                            </div>
                            <div class="col-md-10 ways-accommodation-item allotted">
                                <div class="ways-accommodation-input-wrap">
                                    <div class="ways-accommodation-input">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="optionsRadios" id="ways-accommodation3" value="Выделенное">
                                                Выделенное
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="ways-accommodation-cost" id="allotted">
                               <span id="allottedCost">
                                    100
                                </span>
                                    р/
                                    <span id="allottedDays">
                                    1
                                </span>
                                    дней
                                </div>
                                <div class="discount">
                                    Скидка: Экономия 40 рублей
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="balance">
                    <b>Баланс: 10 &#8381;</b><br>
                    <a href="{{ route('koshelek') }}">Пополнить</a>
                </div>
                <div class="selected-tariff-wrap">
                    <div class="selected-tariff-inner">
                        <div id="selected-tariff">
                            Бесплатное
                        </div>
                        :
                        <div id="cost">
                            <b>0 р на 21 дней</b>
                        </div>
                    </div>
                    <div class="total">
                        <b>Итого:
                            <span id="total">
                                0
                            </span> Р</b>
                    </div>
                </div>
                <hr>
                <div class="submit-advertisement-button">
                    <div class="submit-advertisement-button-inner">
                        <div class="btn btn-success">Подать объявление</div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
