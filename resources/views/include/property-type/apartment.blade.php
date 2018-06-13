<div id="apartment">
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
                Мебель есть
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="furniture" id="furniture2" value="option2">
                Частично
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="furniture" id="furniture3" value="option3">
                Отсутствует
            </label>
        </div>
    </div>
    <div class="form-group">
        <div class="radio">
            <label>
                <input type="radio" name="kitchen_set" id="kitchen_set1" value="option1" checked>
                Кухонный гарнитур есть
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="kitchen_set" id="kitchen_set2" value="option2">
                Частично
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="kitchen_set" id="kitchen_set3" value="option3">
                Отсутствует
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
                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:Absent()">Отсутствует</a></li>
            </ul>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label" for="elevator">Лифт</label>
        <input type="text" class="form-control" id="elevator">
    </div>
    <div class="form-group">
        <div class="dropdown">
            <label class="control-label" for="selectRepairs">Ремонт: </label>
            <button class="btn btn-default dropdown-toggle" type="button" id="selectRepairs" data-toggle="dropdown">
                Косметический
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:Cosmetic()">Косметический</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:Designer()">Дизайнерский</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:Euro()">Евро</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:withoutRepair()">Без ремонта</a></li>
            </ul>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label" for="repairs">Ремонт</label>
        <input type="text" class="form-control" id="repairs">
    </div>
</div>