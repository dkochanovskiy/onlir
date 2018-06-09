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
                <div class="form-group">
                    <div class="dropdown">
                        <label class="control-label" for="propertyTypeMenu">Тип недвижимости: </label>
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
                <div class="form-group">
                    <label class="control-label" for="propertyType">Тип недвижимости</label>
                    <input type="text" class="form-control" id="propertyType">
                </div>
                <hr>
                {{--<div class="ad-submission-caption">--}}
                    {{--<h3>Тип объекта</h3>--}}
                {{--</div>--}}
                {{--<div class="ad-submission-caption">--}}
                    {{--<h3>Об объекте</h3>--}}
                {{--</div>--}}
                <div class="form-group">
                    <label class="control-label" for="address">Введите адрес</label>
                    <input type="text" class="form-control" id="address">
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
                <hr>
                <div class="apartment">
                    <div class="form-group">
                        <div class="dropdown">
                            <label class="control-label" for="selectNumberRooms">Количество комнат: </label>
                            <button class="btn btn-default dropdown-toggle" type="button" id="selectNumberRooms" data-toggle="dropdown">
                                1
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:Studio()">Студия</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:OneRoom()">1</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:TwoRooms()">2</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:ThreeRooms()">3</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:FourRooms()">4</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:FiveRooms()">5</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:SixRooms()">6</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="numberRooms">Количество комнат</label>
                        <input type="text" class="form-control" id="numberRooms">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="numberBerths">Количество спальных мест: </label>
                        <input type="text" class="form-control" id="numberBerths">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="totalArea">Общая площадь: </label>
                        <input type="text" class="form-control" id="totalArea">
                        <label class="control-label" for="totalArea">м<sup>2</sup></label>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="residentialArea">Жилая площадь: </label>
                        <input type="text" class="form-control" id="residentialArea">
                        <label class="control-label" for="residentialArea">м<sup>2</sup></label>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="kitchen">Кухня: </label>
                        <input type="text" class="form-control" id="kitchen">
                        <label class="control-label" for="kitchen">м<sup>2</sup></label>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="floorNumber">Этаж/этажность </label>
                        <input type="text" class="form-control" id="floorNumber">
                        <label class="control-label" for="totalFloors">из </label>
                        <input type="text" class="form-control" id="totalFloors">
                    </div>
                    <div class="form-group">
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                Балкон
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                Лоджия
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="radio">
                            <label>
                                <input type="radio" name="furniture" id="furniture1" value="option1" checked>
                                Мебель есть /
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="furniture" id="furniture2" value="option2">
                                Частично /
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="furniture" id="furniture3" value="option3">
                                Нет /
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="radio">
                            <label>
                                <input type="radio" name="kitchen_set" id="kitchen_set1" value="option1" checked>
                                Кухонный гарнитур есть /
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="kitchen_set" id="kitchen_set2" value="option2">
                                Частично /
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="kitchen_set" id="kitchen_set3" value="option3">
                                Нет /
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="dropdown">
                            <label class="control-label" for="selectNumberRooms">Лифт: </label>
                            <button class="btn btn-default dropdown-toggle" type="button" id="selectElevator" data-toggle="dropdown">
                                Пассажирский и грузовой
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:PassengerСargo()">Пассажирский и грузовой</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:Passenger()">Пассажирский</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:Сargo()">Грузовой</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:Absent()">Нет</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="elevator">Лифт</label>
                        <input type="text" class="form-control" id="elevator">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="selectRepairs">Ремонт</label>
                    <div class="btn-group" data-toggle="buttons" id="selectRepairs">
                        <label class="btn btn-default btn-lg">
                            <input type="radio" name="repairs" id="repairsOption1">Косметический
                        </label>
                        <label class="btn btn-default btn-lg">
                            <input type="radio" name="repairs" id="repairsOption2">Дизайнерский
                        </label>
                        <label class="btn btn-default btn-lg">
                            <input type="radio" name="repairs" id="repairsOption3">Евро
                        </label>
                        <label class="btn btn-default btn-lg">
                            <input type="radio" name="repairs" id="repairsOption4">Без ремонта
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="repairs">Ремонт</label>
                    <input type="text" class="form-control" id="repairs">
                </div>

                {{--<button type="submit" class="btn btn-default">Отправить</button>--}}
            </form>
        </div>
    </div>
</div>
@endsection
