<div id="office">
    <div class="form-group">
        <label for="buildingName" class="col-md-2 control-label">Название здания</label>
        <div class="col-md-10">
            <input type="text" name="buildingName" class="form-control" id="buildingName">
        </div>
    </div>
    <div class="form-group">
        <label for="buildingClass" class="col-md-2 control-label">Класс здания</label>
        <div class="col-md-10">
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
            <label class="col-md-2 control-label" for="typeOfBuilding">Тип здания</label>
            <div class="col-md-9">
                <button class="btn btn-default dropdown-toggle" type="button" id="typeOfBuilding" data-toggle="dropdown">
                    Многофункциональный комплекс
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('typeOfBuilding', 'Многофункциональный комплекс', 'inputTypeOfBuilding')">Многофункциональный комплекс</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('typeOfBuilding', 'Офисное здание', 'inputTypeOfBuilding')">Офисное здание</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('typeOfBuilding', 'Бизнес-центр', 'inputTypeOfBuilding')">Бизнес-центр</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('typeOfBuilding', 'Деловой центр', 'inputTypeOfBuilding')">Деловой центр</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('typeOfBuilding', 'Административное здание', 'inputTypeOfBuilding')">Административное здание</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('typeOfBuilding', 'Технопарк', 'inputTypeOfBuilding')">Технопарк</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('typeOfBuilding', 'Особняк', 'inputTypeOfBuilding')">Особняк</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('typeOfBuilding', 'Торговый дом', 'inputTypeOfBuilding')">Торговый дом</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('typeOfBuilding', 'Торгово-развлекательный центр', 'inputTypeOfBuilding')">Торгово-развлекательный центр</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('typeOfBuilding', 'Складской комплекс', 'inputTypeOfBuilding')">Складской комплекс</a></li>
                </ul>
            </div>
        </div>
    </div>
    <input type="hidden" id="inputTypeOfBuilding" name="inputTypeOfBuilding" value="Многофункциональный комплекс">
    <div class="form-group">
        <label for="buildingArea" class="col-md-2 control-label">Площадь здания</label>
        <div class="col-md-1">
            <input type="text" name="buildingArea" class="form-control" id="buildingArea">
        </div>
        <label for="buildingArea" class="col-md-1 control-label">м<sup>2</sup></label>
    </div>
    <div class="form-group">
        <div class="dropdown">
            <label class="col-md-2 control-label" for="heating">Отопление</label>
            <div class="col-md-9">
                <button class="btn btn-default dropdown-toggle" type="button" id="heating" data-toggle="dropdown">
                    Центральное
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('heating', 'Центральное', 'inputHeating')">Центральное</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('heating', 'Автономное', 'inputHeating')">Автономное</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('heating', 'Отсутствует', 'inputHeating')">Отсутствует</a></li>
                </ul>
            </div>
        </div>
    </div>
    <input type="hidden" id="inputHeating" name="inputHeating" value="Центральное">
    <div class="form-group">
        <div class="dropdown">
            <label class="col-md-2 control-label" for="ventilation">Вентиляция</label>
            <div class="col-md-9">
                <button class="btn btn-default dropdown-toggle" type="button" id="ventilation" data-toggle="dropdown">
                    Естественная
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('ventilation', 'Естественная', 'inputVentilation')">Естественная</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('ventilation', 'Приточная', 'inputVentilation')">Приточная</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('ventilation', 'Отсутствует', 'inputVentilation')">Отсутствует</a></li>
                </ul>
            </div>
        </div>
    </div>
    <input type="hidden" id="inputVentilation" name="inputVentilation" value="Естественная">
    <div class="form-group">
        <div class="dropdown">
            <label class="col-md-2 control-label" for="conditioning">Кондиционирование</label>
            <div class="col-md-9">
                <button class="btn btn-default dropdown-toggle" type="button" id="conditioning" data-toggle="dropdown">
                    Местное
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('conditioning', 'Местное', 'inputСonditioning')">Местное</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('conditioning', 'Центральное', 'inputСonditioning')">Центральное</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('conditioning', 'Отсутствует', 'inputСonditioning')">Отсутствует</a></li>
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
        <label for="pricePerMonth" class="col-md-2 control-label">Цена в месяц</label>
        <div class="col-md-2">
            <input type="text" name="pricePerMonth" class="form-control" id="pricePerMonth">
        </div>
        <label for="pricePerMonth" class="col-md-1 control-label">₽</label>
        <div class="checkbox col-md-offset-2 col-md-10">
            <label>
                <input type="checkbox" name="includingUtilityBills" value="">
                включая коммунальные платежи
            </label>
        </div>
        <div class="checkbox col-md-offset-2 col-md-10">
            <label>
                <input type="checkbox" name="includingOperatingCosts" value="">
                включая эксплуатационные расходы
            </label>
        </div>
    </div>
    <div class="form-group">
        <label for="RatePerSquareMeter" class="col-md-2 control-label">Ставка за м<sup>2</sup></label>
        <div class="col-md-2">
            <input type="text" name="RatePerSquareMeter" class="form-control" id="RatePerSquareMeter">
        </div>
        <label for="RatePerSquareMeter" class="col-md-1 control-label">₽</label>
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
            <label class="col-md-2 control-label" for="prepayment">Предоплата</label>
            <div class="col-md-9">
                <button class="btn btn-default dropdown-toggle" type="button" id="prepayment" data-toggle="dropdown">
                    1 месяц
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('prepayment', '1 месяц', 'inputPrepayment')">1 месяц</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('prepayment', '2 месяца', 'inputPrepayment')">2 месяца</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('prepayment', '3 месяца', 'inputPrepayment')">3 месяца</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('prepayment', '4 месяца', 'inputPrepayment')">4 месяца</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:DropDownList('prepayment', 'До 12 месяцев', 'inputPrepayment')">До 12 месяцев</a></li>
                </ul>
            </div>
        </div>
    </div>
    <input type="hidden" id="inputPrepayment" name="inputPrepayment" value="1 месяц">
    <hr>
</div>