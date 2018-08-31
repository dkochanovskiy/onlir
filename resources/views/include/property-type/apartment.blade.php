<div id="apartment">
    <div class="form-group">
        <div class="dropdown">
            <label class="col-md-3 control-label" for="selectNumberRooms">Количество комнат</label>
            <div class="col-md-2">
                <button class="btn btn-default dropdown-toggle" type="button" id="selectNumberRooms" data-toggle="dropdown">
                    1
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('selectNumberRooms', 'Студия', 'outputSelectNumberRooms')">Студия</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('selectNumberRooms', '1', 'outputSelectNumberRooms')">1</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('selectNumberRooms', '2', 'outputSelectNumberRooms')">2</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('selectNumberRooms', '3', 'outputSelectNumberRooms')">3</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('selectNumberRooms', '4', 'outputSelectNumberRooms')">4</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('selectNumberRooms', '5', 'outputSelectNumberRooms')">5</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('selectNumberRooms', '6', 'outputSelectNumberRooms')">6</a></li>
                </ul>
            </div>
            <div class="checkbox">
                <label style="margin: 10px 0 0 0">
                    <input type="checkbox" value="">
                    изолированная
                </label>
            </div>
        </div>
    </div>
    <input type="hidden" id="outputSelectNumberRooms" value="1">
    <div class="form-group">
        <label for="numberBerths" class="col-md-3 control-label">Количество спальных мест</label>
        <div class="col-md-2">
            <input type="text" name="numberBerths" class="form-control" id="numberBerths">
        </div>
    </div>
    <div class="form-group">
        <label for="totalArea" class="col-md-3 control-label">Общая площадь</label>
        <div class="col-md-2">
            <input type="text" name="numberBerths" class="form-control" id="totalArea">
        </div>
        <div class="col-md-1">
            <div class="row">
                <div class="col-md-1">
                    <label class="control-label" for="totalArea">м<sup>2</sup></label>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label" for="residentialArea">Жилая площадь</label>
        <div class="col-md-2">
            <input type="text" class="form-control" id="residentialArea">
        </div>
        <div class="col-md-1">
            <div class="row">
                <div class="col-md-1">
                    <label class="control-label" for="residentialArea">м<sup>2</sup></label>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label" for="kitchen">Кухня</label>
        <div class="col-md-2">
            <input type="text" class="form-control" id="kitchen">
        </div>
        <div class="col-md-1">
            <div class="row">
                <div class="col-md-1">
                    <label class="control-label" for="kitchen">м<sup>2</sup></label>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label" for="floorNumber">Этаж/этажность</label>
        <div class="col-md-2">
            <input type="text" class="form-control" id="floorNumber">
        </div>
        <div class="col-md-1">
            <div class="row">
                <div class="col-md-1">
                    <label class="control-label" for="totalFloors">
                        из
                    </label>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4">
                    <input type="text" class="form-control" id="totalFloors">
                </div>
            </div>
        </div>
    </div>
    <hr class="col-md-12">
    <div class="form-group">
        <div class="col-md-offset-3">
            <div class="radio">
                <label>
                    <input type="radio" name="balcony" id="balcony1" checked>
                    Балкон
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="balcony" id="balcony2">
                    Лоджия
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="balcony" id="balcony3">
                    Отсутствует
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-offset-3">
            <div class="radio">
                <label>
                    <input type="radio" name="furniture" id="furniture1" checked>
                    Мебель есть
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="furniture" id="furniture2">
                    Частично
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="furniture" id="furniture3">
                    Отсутствует
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-offset-3">
            <div class="radio">
                <label>
                    <input type="radio" name="kitchenSet" id="kitchenSet1" checked>
                    Кухонный гарнитур есть
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="kitchenSet" id="kitchenSet2">
                    Частично
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="kitchenSet" id="kitchenSet3">
                    Отсутствует
                </label>
            </div>
        </div>
    </div>
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
    <input type="hidden" id="aOutputElevator" value="Пассажирский">
    <hr class="col-md-12">
    <div class="form-group">
        <label class="col-md-3 control-label">Можно с детьми</label>
        <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-primary" id="labelPossibleWithChildrenYes">
                <input type="radio" name="possibleWithChildren" value="Да">Да
            </label>
            <label class="btn btn-default" id="labelPossibleWithChildrenNo">
                <input type="radio" name="possibleWithChildren" value="Нет">Нет
            </label>
        </div>
    </div>
    <input type="hidden" id="inputPossibleWithChildren" value="Да">
    <div class="form-group">
        <label class="col-md-3 control-label">Можно с животными</label>
        <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-primary" id="labelPossibleWithAnimalsYes">
                <input type="radio" name="possibleWithAnimals" value="Да">Да
            </label>
            <label class="btn btn-default" id="labelPossibleWithAnimalsNo">
                <input type="radio" name="possibleWithAnimals" value="Нет">Нет
            </label>
        </div>
    </div>
    <input type="hidden" id="inputPossibleWithAnimals" value="Да">
    <div class="form-group">
        <label class="col-md-3 control-label">Можно курить</label>
        <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-primary" id="labelYouCanSmokeYes">
                <input type="radio" name="youCanSmoke" value="Да">Да
            </label>
            <label class="btn btn-default" id="labelYouCanSmokeNo">
                <input type="radio" name="youCanSmoke" value="Нет">Нет
            </label>
        </div>
    </div>
    <input type="hidden" id="inputYouCanSmoke" value="Да">
    <hr class="col-md-12">
    <div class="form-group">
        <label for="apartment_description" class="col-md-3 control-label">Описание квартиры</label>
        <div class="col-md-8">
            <textarea rows="5" class="form-control" name="apartment_description" id="apartment_description" placeholder="Опишите вашу квартиру..."></textarea>
        </div>
    </div>
    <hr class="col-md-12">
</div>