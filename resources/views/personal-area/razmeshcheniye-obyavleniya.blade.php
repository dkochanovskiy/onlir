@extends('template.template')
@section('content')
    <div class="container">
        <div class="container">
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
                        <div class="form-group">
                            <label class="col-md-3 control-label">Ремонт</label>
                            <div class="col-md-9">
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-primary" id="cosmetic">
                                        <input type="radio" name="repairs" value="Косметический">Косметический
                                    </label>
                                    <label class="btn btn-default" id="designer">
                                        <input type="radio" name="repairs" value="Дизайнерский">Дизайнерский
                                    </label>
                                    <label class="btn btn-default" id="euro">
                                        <input type="radio" name="repairs" value="Евро">Евро
                                    </label>
                                    <label class="btn btn-default" id="withoutRepair">
                                        <input type="radio" name="repairs" value="Без ремонта">Без ремонта
                                    </label>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="inputRepairs" value="Косметический">

                        <hr>
                        <div class="header-in-the-form">
                            Контактная информация
                        </div>
                        <div class="form-group">
                            <label for="your-name" class="col-md-3 control-label">Ваше имя</label>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="your-name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Телефон для связи</label>
                            <div class="phone-communication-inner">
                                <div class="phone-communication-font">
                                    <span>8(962) 594-3880&#160;</span>
                                    {{--<button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-trash"></span> Удалить</button>--}}
                                    {{--<button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Добавить</button>--}}
                                </div>
                            </div>
                        </div>
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
                                    <div class="col-md-10 ways-accommodation-item bg-danger">
                                        <div class="row">
                                            <div class="col-md-3 ways-accommodation-input-wrap">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" class="ways-accommodation-input" name="optionsRadios" id="ways-accommodation1" value="Бесплатное" checked>
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
                                                        <input type="radio" class="ways-accommodation-input" name="optionsRadios" id="ways-accommodation1" value="Выделенное">
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
                                                        <input type="radio" class="ways-accommodation-input" name="optionsRadios" id="ways-accommodation1" value="Поднятие">
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
                                                        <input type="radio" class="ways-accommodation-input" name="optionsRadios" id="ways-accommodation1" value="Топ-3">
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
                        <div class="col-md-12">

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
                                <div class="btn btn-success">Подать объявление</div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div><!--row-->
    </div><!--container-->
@endsection
