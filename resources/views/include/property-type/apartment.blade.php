<div id="apartment">
    <div class="form-group">
        <div class="col-md-2">
            <select class="form-control" name="number_rooms">
                <option value="Студия">Студия</option>
                <option value="1" selected>1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="dropdown">
            <label class="col-md-3 control-label" for="selectNumberRooms">Количество комнат</label>
            <div class="col-md-2">
                <button class="btn btn-default dropdown-toggle" type="button" id="selectNumberRooms" data-toggle="dropdown">
                    1
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('selectNumberRooms', 'Студия', 'number_rooms')">Студия</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('selectNumberRooms', '1', 'number_rooms')">1</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('selectNumberRooms', '2', 'number_rooms')">2</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('selectNumberRooms', '3', 'number_rooms')">3</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('selectNumberRooms', '4', 'number_rooms')">4</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('selectNumberRooms', '5', 'number_rooms')">5</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('selectNumberRooms', '6', 'number_rooms')">6</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="checkbox">
            <label style="margin: 10px 0 0 0">
                <input type="checkbox" value="1" name="isolated">
                изолированная
            </label>
        </div>
    </div>
    {{--<input type="text" id="number_rooms" value="1">--}}
    <div class="form-group">
        <label for="number_beds" class="col-md-3 control-label">Количество спальных мест</label>
        <div class="col-md-2">
            <input type="text" name="number_beds" class="form-control" id="number_beds">
        </div>
    </div>
    <div class="form-group">
        <label for="total_area" class="col-md-3 control-label">Общая площадь</label>
        <div class="col-md-2">
            <input type="text" name="total_area" class="form-control" id="total_area">
        </div>
        <div class="col-md-1">
            <div class="row">
                <div class="col-md-1">
                    <label class="control-label" for="total_area">м<sup>2</sup></label>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label" for="living_space">Жилая площадь</label>
        <div class="col-md-2">
            <input type="text" class="form-control" id="living_space">
        </div>
        <div class="col-md-1">
            <div class="row">
                <div class="col-md-1">
                    <label class="control-label" for="living_space">м<sup>2</sup></label>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label" for="kitchen_area">Площадь кухни</label>
        <div class="col-md-2">
            <input type="text" class="form-control" id="kitchen_area">
        </div>
        <div class="col-md-1">
            <div class="row">
                <div class="col-md-1">
                    <label class="control-label" for="kitchen_area">м<sup>2</sup></label>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label" for="floor_number">Этаж/этажность</label>
        <div class="col-md-2">
            <input type="text" class="form-control" id="floor_number">
        </div>
        <div class="col-md-1">
            <div class="row">
                <div class="col-md-1">
                    <label class="control-label" for="number_floors">
                        из
                    </label>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4">
                    <input type="text" class="form-control" id="number_floors">
                </div>
            </div>
        </div>
    </div>
    <hr class="col-md-12">
    <div class="form-group">
        <div class="col-md-offset-3">
            <div class="radio">
                <label>
                    <input type="radio" name="balcony" id="balcony1" value="1" checked>
                    Балкон
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="balcony" id="balcony2" value="2">
                    Лоджия
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="balcony" id="balcony3" value="3">
                    Отсутствует
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-offset-3">
            <div class="radio">
                <label>
                    <input type="radio" name="furniture" id="furniture1" value="1" checked>
                    Мебель есть
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="furniture" id="furniture2" value="2">
                    Частично
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="furniture" id="furniture3" value="3">
                    Отсутствует
                </label>
            </div>
        </div>
    </div>
    {{--<div class="form-group">--}}
        {{--<div class="col-md-offset-3">--}}
            {{--<div class="radio">--}}
                {{--<label>--}}
                    {{--<input type="radio" name="kitchenSet" id="kitchenSet1" checked>--}}
                    {{--Кухонный гарнитур есть--}}
                {{--</label>--}}
            {{--</div>--}}
            {{--<div class="radio">--}}
                {{--<label>--}}
                    {{--<input type="radio" name="kitchenSet" id="kitchenSet2">--}}
                    {{--Частично--}}
                {{--</label>--}}
            {{--</div>--}}
            {{--<div class="radio">--}}
                {{--<label>--}}
                    {{--<input type="radio" name="kitchenSet" id="kitchenSet3">--}}
                    {{--Отсутствует--}}
                {{--</label>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <hr class="col-md-12">
    <div class="form-group">
        <div class="dropdown">
            <label class="col-md-3 control-label" for="aSelectElevator">Лифт</label>
            <div class="col-md-2">
                <button class="btn btn-default dropdown-toggle" type="button" id="aSelectElevator" data-toggle="dropdown">
                    Пассажирский
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('aSelectElevator', 'Пассажирский и грузовой', 'aOutputElevator')">Пассажирский и грузовой</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('aSelectElevator', 'Пассажирский', 'aOutputElevator')">Пассажирский</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('aSelectElevator', 'Грузовой', 'aOutputElevator')">Грузовой</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('aSelectElevator', 'Отсутствует', 'aOutputElevator')">Отсутствует</a></li>
                </ul>
            </div>
        </div>
    </div>
    <input type="hidden" id="aOutputElevator" value="Пассажирский" name="elevator">
    <hr class="col-md-12">
    <div class="form-group">
        <label class="col-md-3 control-label">Можно с детьми</label>
        <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-primary" id="labelPossibleWithChildrenYes">
                <input type="radio" value="1">Да
            </label>
            <label class="btn btn-default" id="labelPossibleWithChildrenNo">
                <input type="radio" value="0">Нет
            </label>
        </div>
    </div>
    <input type="hidden" id="inputPossibleWithChildren" value="Да" name="possible_with_children">

    <div class="form-group">
        <label class="col-md-3 control-label">Можно с животными</label>
        <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-primary" id="labelPossibleWithAnimalsYes">
                <input type="radio" value="1">Да
            </label>
            <label class="btn btn-default" id="labelPossibleWithAnimalsNo">
                <input type="radio" value="0">Нет
            </label>
        </div>
    </div>
    <input type="hidden" id="inputPossibleWithAnimals" value="1" name="pets_allowed">

    <div class="form-group">
        <label class="col-md-3 control-label">Можно курить</label>
        <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-primary" id="labelYouCanSmokeYes">
                <input type="radio" value="1">Да
            </label>
            <label class="btn btn-default" id="labelYouCanSmokeNo">
                <input type="radio" value="0">Нет
            </label>
        </div>
    </div>
    <input type="hidden" id="inputYouCanSmoke" value="Да" name="can_smoke">
    <hr class="col-md-12">
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
                        <input type="checkbox" value="0" name="fridge">
                        Холодильник
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="0" name="washer">
                        Стиральная машина
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="0" name="dishwasher">
                        Посудомоечная машина
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="0" name="television">
                        Телевизор
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="0" name="microwave">
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
                        <input type="checkbox" value="0" name="air_conditioning">
                        Кондиционер
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="0" name="internet">
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
                        <input type="checkbox" value="0" name="school">
                        Школа
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="0" name="playground">
                        Детская площадка
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="0" name="kindergarten">
                        Детский сад
                    </label>
                </div>
            </div>
        </div>
    </div>
    <hr class="col-md-12">
</div>