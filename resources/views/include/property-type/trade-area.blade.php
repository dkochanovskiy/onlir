<div id="trade-area">
    <div class="form-group">
        <label for="commercialArea" class="col-md-3 control-label">Площадь</label>
        <div class="col-md-2">
            <input type="text" name="commercialArea" class="form-control" id="commercialArea">
        </div>
        <div class="col-md-1">
            <div class="row">
                <div class="col-md-1">
                    <label for="commercialArea" class="control-label">м<sup>2</sup></label>
                </div>
            </div>
        </div>
    </div>
    <hr>
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
    <hr>
    <div class="form-group">
        <label for="electricPower" class="col-md-3 control-label">Электрическая мощность</label>
        <div class="col-md-2">
            <input type="text" name="electricPower" class="form-control" id="electricPower">
        </div>
        <div class="col-md-1">
            <div class="row">
                <div class="col-md-1">
                    <label for="electricPower" class="control-label">кВт</label>
                </div>
            </div>
        </div>
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
    <hr>
    <div class="form-group">
        <label class="col-md-3 control-label">Часы работы </label>
            <label class="col-md-1 control-label" for="startTime">с </label>
        <div class="col-md-2">
            <input type="text" name="startTime" class="form-control" id="startTime" placeholder="09:00">
        </div>
        <label class="col-md-1 control-label" for="startTime">до </label>
        <div class="col-md-2">
            <input type="text" name="endTime" class="form-control" id="endTime" placeholder="19:00">
        </div>
        <div class="checkbox col-md-1">
            <label>
                <input type="checkbox" name="roundTheClock" value="">
                круглосуточно
            </label>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label">Вход</label>
        <div class="col-md-9">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-primary" id="fromTheYard">
                    <input type="radio" name="entrance" value="со двора">со двора
                </label>
                <label class="btn btn-default" id="fromTheStreet">
                    <input type="radio" name="entrance" value="с улицы">с улицы
                </label>
            </div>
        </div>
    </div>
    <input type="hidden" id="inputEntrance" value="со двора">
    <div class="form-group">
        <div class="dropdown">
            <label class="col-md-3 control-label" for="roomType">Тип помещения </label>
            <div class="col-md-9">
                <button class="btn btn-default dropdown-toggle" type="button" id="roomType" data-toggle="dropdown">
                    Street retail
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('selectElevator', 'Street retail', 'inputRoomType')">Street retail</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('selectElevator', 'Торговый комплекс', 'inputRoomType')">Торговый комплекс</a></li>
                </ul>
            </div>
        </div>
    </div>
    <input type="hidden" id="inputRoomType" value="Street retail">
    <div class="form-group">
        <label class="col-md-3 control-label">Назначение помещений </label>
        <div class="radio col-md-3">
            <label>
                <input type="radio" name="appointmentOfPremises" id="noLimits" value="option1" checked>
                Без ограничений
            </label>
        </div>
        <div class="radio col-md-2">
            <label>
                <input type="radio" name="appointmentOfPremises" id="allExcept" value="option2">
                Все, кроме
            </label>
        </div>
        <div class="col-md-3">
            <input type="text" name="except" class="form-control" id="except" disabled placeholder="табачной продукции">
        </div>
    </div>
    <hr>
</div>