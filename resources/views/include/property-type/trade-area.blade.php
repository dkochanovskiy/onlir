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
    <div class="form-group">
        <label for="taBuildingName" class="col-md-3 control-label">Название здания</label>
        <div class="col-md-6">
            <input type="text" name="taBuildingName" class="form-control" id="taBuildingName" placeholder="БЦ: Вавилон">
        </div>
    </div>
    <div class="form-group">
        <label for="taBuildingClass" class="col-md-3 control-label">Класс здания</label>
        <div class="col-md-8">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-primary" id="taA">
                    <input type="radio" name="taBuildingClass" value="A">A
                </label>
                <label class="btn btn-default" id="taB">
                    <input type="radio" name="taBuildingClass" value="B">B
                </label>
                <label class="btn btn-default" id="taC">
                    <input type="radio" name="taBuildingClass" value="C">C
                </label>
                <label class="btn btn-default" id="taD">
                    <input type="radio" name="taBuildingClass" value="D">D
                </label>
                <label class="btn btn-default" id="taDoNotSpecify">
                    <input type="radio" name="taBuildingClass" value="Не указывать">Не указывать
                </label>
            </div>
        </div>
    </div>
    <input type="hidden" id="inputTABuildingClass" name="inputTABuildingClass" value="A">
    <div class="form-group">
        <div class="dropdown">
            <label class="col-md-3 control-label" for="taTypeOfBuilding">Тип здания</label>
            <div class="col-md-9">
                <button class="btn btn-default dropdown-toggle" type="button" id="taTypeOfBuilding" data-toggle="dropdown">
                    Многофункциональный комплекс
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('taTypeOfBuilding', 'Многофункциональный комплекс', 'inputTATypeOfBuilding')">
                            Многофункциональный комплекс
                        </a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('taTypeOfBuilding', 'Офисное здание', 'inputTATypeOfBuilding')">
                            Офисное здание
                        </a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('taTypeOfBuilding', 'Бизнес-центр', 'inputTATypeOfBuilding')">
                            Бизнес-центр
                        </a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('taTypeOfBuilding', 'Деловой центр', 'inputTATypeOfBuilding')">
                            Деловой центр
                        </a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('taTypeOfBuilding', 'Административное здание', 'inputTATypeOfBuilding')">
                            Административное здание
                        </a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('taTypeOfBuilding', 'Технопарк', 'inputTATypeOfBuilding')">
                            Технопарк
                        </a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('taTypeOfBuilding', 'Особняк', 'inputTATypeOfBuilding')">
                            Особняк
                        </a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('taTypeOfBuilding', 'Торговый дом', 'inputTATypeOfBuilding')">
                            Торговый дом
                        </a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('taTypeOfBuilding', 'Торгово-развлекательный центр', 'inputTATypeOfBuilding')">
                            Торгово-развлекательный центр
                        </a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('taTypeOfBuilding', 'Складской комплекс', 'inputTATypeOfBuilding')">
                            Складской комплекс
                        </a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('taTypeOfBuilding', 'Объект свободного назначения', 'inputTATypeOfBuilding')">
                            Объект свободного назначения
                        </a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('taTypeOfBuilding', 'Другое', 'inputTATypeOfBuilding')">
                            Другое
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <input type="hidden" id="inputTATypeOfBuilding" name="inputTATypeOfBuilding" value="Многофункциональный комплекс">
    <div class="form-group">
        <label for="tdBuildingArea" class="col-md-3 control-label">Площадь здания</label>
        <div class="col-md-1">
            <input type="text" name="tdBuildingArea" class="form-control" id="tdBuildingArea">
        </div>
        <div class="col-md-1">
            <div class="row">
                <div class="col-md-1">
                    <label for="tdBuildingArea" class="control-label">м<sup>2</sup></label>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="dropdown">
            <label class="col-md-3 control-label" for="tdHeating">Отопление</label>
            <div class="col-md-9">
                <button class="btn btn-default dropdown-toggle" type="button" id="tdHeating" data-toggle="dropdown">
                    Центральное
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('tdHeating', 'Центральное', 'inputTDHeating')">Центральное</a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('tdHeating', 'Автономное', 'inputTDHeating')">Автономное</a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('tdHeating', 'Отсутствует', 'inputTDHeating')">Отсутствует</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <input type="hidden" id="inputTDHeating" name="inputTDHeating" value="Центральное">
    <div class="form-group">
        <div class="dropdown">
            <label class="col-md-3 control-label" for="tdVentilation">Вентиляция</label>
            <div class="col-md-9">
                <button class="btn btn-default dropdown-toggle" type="button" id="tdVentilation" data-toggle="dropdown">
                    Естественная
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('tdVentilation', 'Естественная', 'inputTDVentilation')">Естественная</a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('tdVentilation', 'Приточная', 'inputTDVentilation')">Приточная</a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('tdVentilation', 'Отсутствует', 'inputTDVentilation')">Отсутствует</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <input type="hidden" id="inputTDVentilation" name="inputTDVentilation" value="Естественная">
    <div class="form-group">
        <div class="dropdown">
            <label class="col-md-3 control-label" for="tdConditioning">Кондиционирование</label>
            <div class="col-md-9">
                <button class="btn btn-default dropdown-toggle" type="button" id="tdConditioning" data-toggle="dropdown">
                    Местное
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('tdConditioning', 'Местное', 'inputTDСonditioning')">Местное</a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('tdConditioning', 'Центральное', 'inputTDСonditioning')">Центральное</a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('tdConditioning', 'Отсутствует', 'inputTDСonditioning')">Отсутствует</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <input type="hidden" id="inputTDСonditioning" name="inputTDСonditioning" value="Местное">
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
        <label class="col-md-3 control-label" for="taFloorNumber">Этаж/этажность</label>
        <div class="col-md-2">
            <input type="text" class="form-control" id="taFloorNumber">
        </div>
        <div class="col-md-1">
            <div class="row">
                <div class="col-md-1">
                    <label class="control-label" for="taTotalFloors">
                        из
                    </label>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4">
                    <input type="text" class="form-control" id="taTotalFloors">
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="dropdown">
            <label class="col-md-3 control-label" for="taSelectElevator">Лифт </label>
            <div class="col-md-9">
                <button class="btn btn-default dropdown-toggle" type="button" id="taSelectElevator" data-toggle="dropdown">
                    Пассажирский и грузовой
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('taSelectElevator', 'Пассажирский и грузовой', 'taInputElevator')">Пассажирский и грузовой</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('taSelectElevator', 'Пассажирский', 'taInputElevator')">Пассажирский</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('taSelectElevator', 'Грузовой', 'taInputElevator')">Грузовой</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('taSelectElevator', 'Отсутствует', 'taInputElevator')">Отсутствует</a></li>
                </ul>
            </div>
        </div>
    </div>
    <input type="hidden" id="taInputElevator" name="taInputElevator" value="Пассажирский и грузовой">
    <hr class="col-md-12">
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
    <div class="header-in-the-form">
        Инфраструктура
    </div>
    <div class="form-group">
        <div class="col-md-3">
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="">
                    Бизнес-центр
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="">
                    Офис
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="">
                    Кинотеатр
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="">
                    Школа
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="">
                    Игровая зона
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="">
                    Институт
                </label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="">
                    Гостиница
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="">
                    Банкомат
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="">
                    Кафе
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="">
                    Супермаркет
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="">
                    Торговый центр
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="">
                    Ресторан
                </label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="">
                    Салон красоты
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="">
                    Аптека
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="">
                    Отделение банка
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="">
                    Парк
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="">
                    Складские помещения
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="">
                    Стадион
                </label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="">
                    Буфет
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="">
                    Автомойка
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="">
                    Автосервис
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="">
                    Фитнес-центр
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="">
                    Больница
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="">
                    Остановка общественного транспорта
                </label>
            </div>
        </div>
    </div>
</div>