<div id="room">
    <div class="form-group">
        <div class="dropdown">
            <label class="col-md-3 control-label" for="roomsForRent">Комнат в аренду</label>
            <div class="col-md-2">
                <button class="btn btn-default dropdown-toggle" type="button" id="roomsForRent" data-toggle="dropdown">
                    1
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('roomsForRent', '1', 'outputRoomsForRent')">1</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('roomsForRent', '2', 'outputRoomsForRent')">2</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('roomsForRent', '3', 'outputRoomsForRent')">3</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('roomsForRent', '4', 'outputRoomsForRent')">4</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('roomsForRent', '5', 'outputRoomsForRent')">5</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('roomsForRent', '6', 'outputRoomsForRent')">6</a></li>
                </ul>
            </div>
        </div>
    </div>
    <input type="hidden" id="outputRoomsForRent" value="1">
    <div class="form-group">
        <label for="roomsInTheApartment" class="col-md-3 control-label">Комнат в квартире</label>
        <div class="col-md-2">
            <input type="text" name="roomsInTheApartment" class="form-control" id="roomsInTheApartment">
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="">
                изолированная
            </label>
        </div>
    </div>
    <div class="form-group">
        <label for="rNumberBerths" class="col-md-3 control-label">Количество спальных мест</label>
        <div class="col-md-2">
            <input type="text" name="rNumberBerths" class="form-control" id="rNumberBerths">
        </div>
    </div>
    <div class="form-group">
        <label for="rTotalArea" class="col-md-3 control-label">Общая площадь</label>
        <div class="col-md-2">
            <input type="text" name="rTotalArea" class="form-control" id="rTotalArea">
        </div>
        <div class="col-md-1">
            <div class="row">
                <div class="col-md-1">
                    <label class="control-label" for="rTotalArea">м<sup>2</sup></label>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="rRoomArea" class="col-md-3 control-label">Площадь комнаты</label>
        <div class="col-md-2">
            <input type="text" name="rRoomArea" class="form-control" id="rRoomArea">
        </div>
        <div class="col-md-1">
            <div class="row">
                <div class="col-md-1">
                    <label class="control-label" for="rRoomArea">м<sup>2</sup></label>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="rKitchenArea" class="col-md-3 control-label">Площадь кухни</label>
        <div class="col-md-2">
            <input type="text" name="rKitchenArea" class="form-control" id="rKitchenArea">
        </div>
        <div class="col-md-1">
            <div class="row">
                <div class="col-md-1">
                    <label class="control-label" for="rKitchenArea">м<sup>2</sup></label>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label" for="rFloorNumber">Этаж/этажность</label>
        <div class="col-md-2">
            <input type="text" class="form-control" id="rFloorNumber">
        </div>
        <div class="col-md-1">
            <div class="row">
                <div class="col-md-1">
                    <label class="control-label" for="rTotalFloors">
                        из
                    </label>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4">
                    <input type="text" class="form-control" id="rTotalFloors">
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="dropdown">
            <label class="col-md-3 control-label" for="rSelectElevator">Лифт</label>
            <div class="col-md-2">
                <button class="btn btn-default dropdown-toggle" type="button" id="rSelectElevator" data-toggle="dropdown">
                    Пассажирский
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('rSelectElevator', 'Пассажирский и грузовой', 'rOutputElevator')">Пассажирский и грузовой</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('rSelectElevator', 'Пассажирский', 'rOutputElevator')">Пассажирский</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('rSelectElevator', 'Грузовой', 'rOutputElevator')">Грузовой</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('rSelectElevator', 'Отсутствует', 'rOutputElevator')">Отсутствует</a></li>
                </ul>
            </div>
        </div>
    </div>
    <input type="hidden" id="rOutputElevator" value="Пассажирский">
    <hr class="col-md-12">
    <div class="form-group">
        <div class="col-md-offset-3">
            <div class="radio">
                <label>
                    <input type="radio" name="rBalcony" id="rBalcony1" checked>
                    Балкон
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="rBalcony" id="rBalcony2">
                    Лоджия
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="rBalcony" id="rBalcony3">
                    Отсутствует
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-offset-3">
            <div class="radio">
                <label>
                    <input type="radio" name="rFurniture" id="rFurniture1" checked>
                    Мебель есть
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="rFurniture" id="rFurniture2">
                    Частично
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="rFurniture" id="rFurniture3">
                    Отсутствует
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-offset-3">
            <div class="radio">
                <label>
                    <input type="radio" name="rKitchenSet" id="rKitchenSet1" checked>
                    Кухонный гарнитур есть
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="rKitchenSet" id="rKitchenSet2">
                    Частично
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="rKitchenSet" id="rKitchenSet3">
                    Отсутствует
                </label>
            </div>
        </div>
    </div>
    <div class="header-in-the-form">
        Удобства
    </div>
    <div class="form-group">
        <div class="col-md-4">
            <div class="row">
                <label class="col-md-offset-4 col-md-1 control-label">
                    Техника
                </label>
            </div>
            <div class="col-md-offset-3 col-md-6">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="">
                        Холодильник
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="">
                        Стиральная машина
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="">
                        Посудомоечная машина
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="">
                        Телевизор
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="">
                        Микроволновая печь
                    </label>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <label class="col-md-offset-4 col-md-1 control-label">
                    Прочее
                </label>
            </div>
            <div class="col-md-offset-3 col-md-6">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="">
                        Кондиционер
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="">
                        Интернет
                    </label>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <label class="col-md-offset-2 col-md-7 control-label">
                    На улице (рядом)
                </label>
            </div>
            <div class="col-md-offset-3 col-md-6">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="">
                        Школа
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="">
                        Детская площадка
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="">
                        Детский сад
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>