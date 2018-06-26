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
        <div class="title-ad-submission">
            <h2>
                Подать объявление в Москве
            </h2>
            <button type="button" class="btn btn-primary">
                <span class="glyphicon glyphicon-share-alt"></span> Сменить город
            </button>
        </div>
        <div class="fill-contract">
            <div class="fill-contract-inner">
                <button type="button" class="btn btn-success">
                    <span class="glyphicon glyphicon-ok"></span> Заполнить договор
                </button>
            </div>
        </div>
        <div class="ad-submission-form">
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
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:House()">Дом</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:Room()">Комната</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:Apartment()">Квартира</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:Cottage()">Коттедж</a></li>
                                <li role="presentation" class="divider"></li>
                                <li role="presentation" class="dropdown-header">Коммерческая</li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:ReadyBusiness()">Готовый бизнес</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:Office()">Офис</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:TradeArea()">Торговая площадь</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:WarehouseSpace()">Складское помещение</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:FreeDestinationRoom()">Помещение свободного назначения</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="propertyType" id="propertyType" value="Квартира">
                <div class="form-group">
                    <label for="address" class="col-md-3 control-label">Название здания</label>
                    <div class="col-md-6">
                        <input type="text" name="address" class="form-control" id="address">
                    </div>
                </div>
                <div class="form-group to-metro">
                    <label class="control-label" for="metro">Ближайшая станция метро</label>
                    <input type="text" class="form-control" id="metro">
                </div>
                <div class="form-group dropdown to-metro">
                    <button class="btn btn-default dropdown-toggle" type="button" id="to-metro" data-toggle="dropdown">
                        До метро
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Пешком</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Транспортом</a></li>
                    </ul>
                </div>
                <div class="form-group to-metro">
                    <input type="text" class="form-control" id="minutes">
                    <label class="control-label" for="minutes">минут</label>
                </div>
                @include('include.property-type.house')
                @include('include.property-type.room')
                @include('include.property-type.apartment')
                @include('include.property-type.cottage')
                @include('include.property-type.ready-business')
                @include('include.property-type.office')
                @include('include.property-type.trade-area')
                @include('include.property-type.warehouse-space')
                @include('include.property-type.free-destination-room')
                <div class="photos">
                    <div class="photos-inner">
                        <div class="add-photo">
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
                        <div class="photos-desc">
                            Не допускаются фотографии содержащие водяные знаки, чужие объекты, контакты и рекламные
                            баннеры. Максимальный размер фото 10 мб.   JGP, PNG, GIF

                        </div>
                    </div>
                </div>
                <hr>
                <div class="ways-accommodation">
                    <label class="col-md-3 control-label">Способы размещения</label>
                    <div class="col-md-9">
                        <div class="ways-accommodation-item free-charge">
                            <div class="ways-accommodation-input-wrap">
                                <div class="ways-accommodation-input">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" class="ways-accommodation-input" name="optionsRadios" id="ways-accommodation1" value="Бесплатное" checked>
                                            Бесплатное
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="ways-accommodation-cost">
                                <span id="freeCost">
                                    0
                                </span>
                                р/
                                <span id="freeDays">
                                    21
                                </span>
                                день
                            </div>
                            <div class="active-until">
                                Активно до 27.06.2018
                            </div>
                        </div>
                        <div class="ways-accommodation-item top-3">
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
                        <div class="ways-accommodation-item allotted">
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
                <div class="balance">
                    <b>Баланс: 10 &#8381;</b><br>
                    <a href="{{ route('purse') }}">Пополнить</a>
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
                {{--<div class="form-group">--}}
                    {{--<label class="control-label" for="your-phone1"></label>--}}
                    {{--<input type="text" class="form-control input-phone-communication" id="your-phone1">--}}
                {{--</div>--}}

                {{--<button type="submit" class="btn btn-default">Отправить</button>--}}
            </form>
        </div>
    </div>
</div>
@endsection
