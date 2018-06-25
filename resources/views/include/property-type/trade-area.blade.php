<div id="trade-area">
    <hr>
    <div class="form-group">
        <label for="commercialArea" class="col-md-3 control-label">Площадь</label>
        <div class="col-md-1">
            <input type="text" name="commercialArea" class="form-control" id="commercialArea">
        </div>
        <label for="commercialArea" class="col-md-1 control-label">м<sup>2</sup></label>
    </div>
    <div class="form-group">
        <label for="commercialArea" class="col-md-3 control-label">Витринные окна</label>
        <div class="col-md-2">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-primary" id="labelDisplayCasesYes">
                    <input type="radio" name="DisplayCases" value="Да">Да
                </label>
                <label class="btn btn-default" id="labelDisplayCasesNo">
                    <input type="radio" name="DisplayCases" value="Нет">Нет
                </label>
            </div>
        </div>
    </div>
    <input type="hidden" id="inputDisplayCases" name="inputDisplayCases" value="Да">
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
    <div class="form-group">
        <label for="electricPower" class="col-md-3 control-label">Электрическая мощность</label>
        <div class="col-md-2">
            <input type="text" name="electricPower" class="form-control" id="electricPower">
        </div>
        <label for="electricPower" class="col-md-1 control-label">кВт</label>
    </div>
    <div class="form-group">
        <div class="dropdown">
            <label class="col-md-3 control-label" for="numberOfWetPoints">Количество мокрых точек</label>
            <div class="col-md-9">
                <button class="btn btn-default dropdown-toggle" type="button" id="numberOfWetPoints" data-toggle="dropdown">
                    Отсутствуют
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('numberOfWetPoints', 'Отсутствуют', 'inputNumberOfWetPoints')">Отсутствуют</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('numberOfWetPoints', '1', 'inputNumberOfWetPoints')">1</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('numberOfWetPoints', '2', 'inputNumberOfWetPoints')">2</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('numberOfWetPoints', '3', 'inputNumberOfWetPoints')">3</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('numberOfWetPoints', '4', 'inputNumberOfWetPoints')">4</a></li>
                </ul>
            </div>
        </div>
    </div>
    <input type="hidden" id="inputNumberOfWetPoints" name="inputNumberOfWetPoints" value="Отсутствуют">
    <div class="form-group">
        <label class="col-md-3 control-label" for="floorNumber">Этаж/этажность </label>
        <div class="col-md-2">
            <input type="text" class="form-control col-md-3" name="floorNumber">
        </div>
        <label class="col-md-1 control-label" for="totalFloors">из </label>
        <div class="col-md-2">
            <input type="text" class="form-control" name="totalFloors">
        </div>
    </div>
    <div class="form-group">
        <div class="dropdown">
            <label class="col-md-3 control-label" for="selectElevator">Лифт </label>
            <div class="col-md-9">
                <button class="btn btn-default dropdown-toggle" type="button" id="selectElevator" data-toggle="dropdown">
                    Пассажирский и грузовой
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('selectElevator', 'Пассажирский и грузовой', 'inputElevator')">Пассажирский и грузовой</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('selectElevator', 'Пассажирский', 'inputElevator')">Пассажирский</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('selectElevator', 'Грузовой', 'inputElevator')">Грузовой</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('selectElevator', 'Отсутствует', 'inputElevator')">Отсутствует</a></li>
                </ul>
            </div>
        </div>
    </div>
    <input type="hidden" id="inputElevator" name="inputElevator" value="Пассажирский и грузовой">
    <div class="form-group">
        <label class="col-md-3 control-label">Часы работы </label>
        <div class="dropdown">
            <label class="col-md-1 control-label" for="startTime">с </label>
            <div class="col-md-5">
                <button class="btn btn-default dropdown-toggle" type="button" id="startTime" data-toggle="dropdown">
                    08:00
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('startTime', '08:00', 'inputStartTime')">08:00</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('startTime', '09:00', 'inputStartTime')">09:00</a></li>
                </ul>
            </div>
        </div>
        <label for="endTime" class="col-md-1 control-label">до</label>
        <div class="col-md-2">
            <input type="text" class="form-control" name="endTime" id="endTime">
        </div>
    </div>
    <input type="text" id="inputStartTime" name="inputStartTime" value="08:00">
    <input type="text" id="inputEndTime" name="inputEndTime" value="00:00">
    <hr>
</div>