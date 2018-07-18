<div id="office">
    <div class="form-group">
        <label for="yardage" class="col-md-3 control-label">Площадь</label>
        <div class="col-md-3">
            <input type="text" class="form-control" id="yardage">
        </div>
        <div class="col-md-1">
            <div class="row">
                <div class="col-md-1">
                    <label for="yardage" class="control-label">м<sup>2</sup></label>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label">Мебель</label>
        <div class="col-md-9">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-primary" id="furnitureYes">
                    <input type="radio" name="furniture" value="Да">Да
                </label>
                <label class="btn btn-default" id="furnitureNo">
                    <input type="radio" name="furniture" value="Нет">Нет
                </label>
            </div>
        </div>
    </div>
    <input type="hidden" id="inputFurniture" value="Да">
    <div class="form-group">
        <label class="col-md-3 control-label">Планировка</label>
        <div class="col-md-9">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-primary" id="openTypePlanning">
                    <input type="radio" name="planing" value="Открытого типа">Открытого типа
                </label>
                <label class="btn btn-default" id="closedTypePlanning">
                    <input type="radio" name="planing" value="Закрытого типа">Закрытого типа
                </label>
                <label class="btn btn-default" id="mixedTypePlanning">
                    <input type="radio" name="planing" value="Смешанного типа">Смешанного типа
                </label>
            </div>
        </div>
    </div>
    <input type="hidden" id="inputPlanning" value="Открытого типа">
    <div class="form-group">
        <label class="col-md-3 control-label">Ремонт</label>
        <div class="col-md-9">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-primary" id="oCosmetic">
                    <input type="radio" name="oRepairs" value="Косметический">Косметический
                </label>
                <label class="btn btn-default" id="oDesigner">
                    <input type="radio" name="oRepairs" value="Дизайнерский">Дизайнерский
                </label>
                <label class="btn btn-default" id="oEuro">
                    <input type="radio" name="oRepairs" value="Евро">Евро
                </label>
                <label class="btn btn-default" id="oWithoutRepair">
                    <input type="radio" name="oRepairs" value="Без ремонта">Без ремонта
                </label>
            </div>
        </div>
    </div>
    <input type="hidden" id="oInputRepairs" value="Косметический">
    <div class="form-group">
        <label for="oElectricPower" class="col-md-3 control-label">Электрическая мощность</label>
        <div class="col-md-2">
            <input type="text" name="oElectricPower" class="form-control" id="oElectricPower">
        </div>
        <div class="col-md-1">
            <div class="row">
                <div class="col-md-1">
                    <label for="oElectricPower" class="control-label">кВт</label>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="dropdown">
            <label class="col-md-3 control-label" for="oNumberOfWetPoints">Количество мокрых точек</label>
            <div class="col-md-9">
                <button class="btn btn-default dropdown-toggle" type="button" id="oNumberOfWetPoints" data-toggle="dropdown">
                    Отсутствуют
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('oNumberOfWetPoints', 'Отсутствуют', 'inputONumberOfWetPoints')">Отсутствуют</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('oNumberOfWetPoints', '1', 'inputONumberOfWetPoints')">1</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('oNumberOfWetPoints', '2', 'inputONumberOfWetPoints')">2</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('oNumberOfWetPoints', '3', 'inputONumberOfWetPoints')">3</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('oNumberOfWetPoints', '4', 'inputONumberOfWetPoints')">4</a></li>
                </ul>
            </div>
        </div>
    </div>
    <input type="hidden" id="inputONumberOfWetPoints" name="inputONumberOfWetPoints" value="Отсутствуют">
    <div class="form-group">
        <div class="checkbox">
            <label class="control-label col-md-offset-3 col-md-3">
                <input type="checkbox" name="separateRoom" value="">
                Отдельное помещение
            </label>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label">Интернет</label>
        <div class="col-md-9">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-primary" id="internetYes">
                    <input type="radio" name="internet" value="Да">Да
                </label>
                <label class="btn btn-default" id="internetNo">
                    <input type="radio" name="internet" value="Нет">Нет
                </label>
            </div>
        </div>
    </div>
    <input type="hidden" id="inputInternet" value="Да">
    <div class="form-group">
        <label class="col-md-3 control-label" for="oFloorNumber">Этаж/этажность</label>
        <div class="col-md-2">
            <input type="text" class="form-control" id="oFloorNumber">
        </div>
        <div class="col-md-1">
            <div class="row">
                <div class="col-md-1">
                    <label class="control-label" for="oTotalFloors">
                        из
                    </label>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4">
                    <input type="text" class="form-control" id="oTotalFloors">
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="dropdown">
            <label class="col-md-3 control-label" for="oSelectElevator">Лифт </label>
            <div class="col-md-9">
                <button class="btn btn-default dropdown-toggle" type="button" id="oSelectElevator" data-toggle="dropdown">
                    Пассажирский и грузовой
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('oSelectElevator', 'Пассажирский и грузовой', 'oInputElevator')">Пассажирский и грузовой</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('oSelectElevator', 'Пассажирский', 'oInputElevator')">Пассажирский</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('oSelectElevator', 'Грузовой', 'oInputElevator')">Грузовой</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('oSelectElevator', 'Отсутствует', 'oInputElevator')">Отсутствует</a></li>
                </ul>
            </div>
        </div>
    </div>
    <input type="hidden" id="oInputElevator" name="oInputElevator" value="Пассажирский и грузовой">
    <div class="form-group">
        <label class="col-md-3 control-label">Доступ</label>
        <div class="col-md-4">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-primary" id="oAccessFree">
                    <input type="radio" name="oAccess" value="Свободный">Свободный
                </label>
                <label class="btn btn-default" id="oAccesSystem">
                    <input type="radio" name="oAcces" value="Пропускная система">Пропускная система
                </label>
            </div>
        </div>
        <div class="checkbox">
            <label class="control-label col-md-2">
                <input type="checkbox" name="oRoundTheClock" value="">
                Круглосуточный
            </label>
        </div>
    </div>
    <input type="hidden" id="oInputAccess" value="Свободный">
    <div class="form-group">
        <label class="col-md-3 control-label">Парковка</label>
        <div class="col-md-5">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-primary" id="oUnderground">
                    <input type="radio" name="oParkingPlace" value="Подземная">Подземная
                </label>
                <label class="btn btn-default" id="oMultilevel">
                    <input type="radio" name="oParkingPlace" value="Многоуровневая">Многоуровневая
                </label>
                <label class="btn btn-default" id="oGround">
                    <input type="radio" name="oParkingPlace" value="Наземная">Наземная
                </label>
            </div>
        </div>
        <div class="checkbox">
            <label class="control-label col-md-2">
                <input type="checkbox" name="oProtected" value="">
                Охраняемая
            </label>
        </div>
    </div>
    <input type="hidden" id="oParkingPlace" value="Подземная">
    <div class="form-group">
        <label for="buildingName" class="col-md-3 control-label">Название здания</label>
        <div class="col-md-6">
            <input type="text" name="address" class="form-control" id="buildingName">
        </div>
    </div>
    <div class="form-group">
        <label for="buildingClass" class="col-md-3 control-label">Класс здания</label>
        <div class="col-md-8">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-primary" id="A">
                    <input type="radio" name="buildingClass" value="A">A
                </label>
                <label class="btn btn-default" id="B">
                    <input type="radio" name="buildingClass" value="B">B
                </label>
                <label class="btn btn-default" id="C">
                    <input type="radio" name="buildingClass" value="C">C
                </label>
                <label class="btn btn-default" id="D">
                    <input type="radio" name="buildingClass" value="D">D
                </label>
                <label class="btn btn-default" id="doNotSpecify">
                    <input type="radio" name="buildingClass" value="Не указывать">Не указывать
                </label>
            </div>
        </div>
    </div>
    <input type="hidden" id="inputBuildingClass" name="inputBuildingClass" value="A">
    <div class="form-group">
        <div class="dropdown">
            <label class="col-md-3 control-label" for="typeOfBuilding">Тип здания</label>
            <div class="col-md-9">
                <button class="btn btn-default dropdown-toggle" type="button" id="typeOfBuilding" data-toggle="dropdown">
                    Многофункциональный комплекс
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('typeOfBuilding', 'Многофункциональный комплекс', 'inputTypeOfBuilding')">
                            Многофункциональный комплекс
                        </a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('typeOfBuilding', 'Офисное здание', 'inputTypeOfBuilding')">
                            Офисное здание
                        </a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('typeOfBuilding', 'Бизнес-центр', 'inputTypeOfBuilding')">
                            Бизнес-центр
                        </a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('typeOfBuilding', 'Деловой центр', 'inputTypeOfBuilding')">
                            Деловой центр
                        </a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('typeOfBuilding', 'Административное здание', 'inputTypeOfBuilding')">
                            Административное здание
                        </a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('typeOfBuilding', 'Технопарк', 'inputTypeOfBuilding')">
                            Технопарк
                        </a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('typeOfBuilding', 'Особняк', 'inputTypeOfBuilding')">
                            Особняк
                        </a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('typeOfBuilding', 'Торговый дом', 'inputTypeOfBuilding')">
                            Торговый дом
                        </a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('typeOfBuilding', 'Торгово-развлекательный центр', 'inputTypeOfBuilding')">
                            Торгово-развлекательный центр
                        </a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('typeOfBuilding', 'Складской комплекс', 'inputTypeOfBuilding')">
                            Складской комплекс
                        </a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('typeOfBuilding', 'Объект свободного назначения', 'inputTypeOfBuilding')">
                            Объект свободного назначения
                        </a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('typeOfBuilding', 'Другое', 'inputTypeOfBuilding')">
                            Другое
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <input type="hidden" id="inputTypeOfBuilding" name="inputTypeOfBuilding" value="Многофункциональный комплекс">
    <div class="form-group">
        <label for="buildingArea" class="col-md-3 control-label">Площадь здания</label>
        <div class="col-md-1">
            <input type="text" name="buildingArea" class="form-control" id="buildingArea">
        </div>
        <div class="col-md-1">
            <div class="row">
                <div class="col-md-1">
                    <label for="buildingArea" class="control-label">м<sup>2</sup></label>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="dropdown">
            <label class="col-md-3 control-label" for="heating">Отопление</label>
            <div class="col-md-9">
                <button class="btn btn-default dropdown-toggle" type="button" id="heating" data-toggle="dropdown">
                    Центральное
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('heating', 'Центральное', 'inputHeating')">Центральное</a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('heating', 'Автономное', 'inputHeating')">Автономное</a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('heating', 'Отсутствует', 'inputHeating')">Отсутствует</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <input type="hidden" id="inputHeating" name="inputHeating" value="Центральное">
    <div class="form-group">
        <div class="dropdown">
            <label class="col-md-3 control-label" for="ventilation">Вентиляция</label>
            <div class="col-md-9">
                <button class="btn btn-default dropdown-toggle" type="button" id="ventilation" data-toggle="dropdown">
                    Естественная
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('ventilation', 'Естественная', 'inputVentilation')">Естественная</a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('ventilation', 'Приточная', 'inputVentilation')">Приточная</a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('ventilation', 'Отсутствует', 'inputVentilation')">Отсутствует</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <input type="hidden" id="inputVentilation" name="inputVentilation" value="Естественная">
    <div class="form-group">
        <div class="dropdown">
            <label class="col-md-3 control-label" for="conditioning">Кондиционирование</label>
            <div class="col-md-9">
                <button class="btn btn-default dropdown-toggle" type="button" id="conditioning" data-toggle="dropdown">
                    Местное
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('conditioning', 'Местное', 'inputСonditioning')">Местное</a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('conditioning', 'Центральное', 'inputСonditioning')">Центральное</a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('conditioning', 'Отсутствует', 'inputСonditioning')">Отсутствует</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <input type="hidden" id="inputСonditioning" name="inputСonditioning" value="Местное">
    <hr>
    <div class="header-in-the-form">
        Арендная плата
    </div>
    <div class="form-group">
        <label for="pricePerMonth" class="col-md-3 control-label">Цена в месяц</label>
        <div class="col-md-2">
            <input type="text" name="pricePerMonth" class="form-control" id="pricePerMonth">
        </div>
        <div class="col-md-1">
            <div class="row">
                <div class="col-md-1">
                    <label for="pricePerMonth" class="control-label">₽</label>
                </div>
            </div>
        </div>
        <div class="checkbox col-md-offset-3 col-md-9">
            <label>
                <input type="checkbox" name="includingUtilityBills" value="">
                включая коммунальные платежи
            </label>
        </div>
        <div class="checkbox col-md-offset-3 col-md-9">
            <label>
                <input type="checkbox" name="includingOperatingCosts" value="">
                включая эксплуатационные расходы
            </label>
        </div>
    </div>
    <div class="form-group">
        <label for="RatePerSquareMeter" class="col-md-3 control-label">Ставка за м<sup>2</sup></label>
        <div class="col-md-2">
            <input type="text" name="RatePerSquareMeter" class="form-control" id="RatePerSquareMeter">
        </div>
        <div class="col-md-1">
            <div class="row">
                <div class="col-md-1">
                    <label for="RatePerSquareMeter" class="control-label">₽</label>
                </div>
            </div>
        </div>
        <div class="checkbox col-md-2">
            <label>
                <input type="checkbox" name="per month" value="">
                в месяц
            </label>
        </div>
        <div class="checkbox col-md-2">
            <label>
                <input type="checkbox" name="inYear" value="">
                в год
            </label>
        </div>
    </div>
    <div class="form-group">
        <div class="dropdown">
            <label class="col-md-3 control-label" for="prepayment">Предоплата</label>
            <div class="col-md-9">
                <button class="btn btn-default dropdown-toggle" type="button" id="prepayment" data-toggle="dropdown">
                    1 месяц
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('prepayment', '1 месяц', 'inputPrepayment')">1 месяц</a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('prepayment', '2 месяца', 'inputPrepayment')">2 месяца</a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('prepayment', '3 месяца', 'inputPrepayment')">3 месяца</a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('prepayment', '4 месяца', 'inputPrepayment')">4 месяца</a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('prepayment', 'До 12 месяцев', 'inputPrepayment')">До 12 месяцев</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <input type="hidden" id="inputPrepayment" name="inputPrepayment" value="1 месяц">
    <hr>
    <div class="header-in-the-form">
        Инфраструктура
    </div>
    <div class="form-group">
        <div class="col-md-4">
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="">
                    Конференц-зал
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
        </div>
        <div class="col-md-4">
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
                    Столовая
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="">
                    Складские помещения
                </label>
            </div>
        </div>
        <div class="col-md-4">
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
                    Остановка общественного транспорта
                </label>
            </div>
        </div>
    </div>
    <hr>
</div>