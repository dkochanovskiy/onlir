<div id="house">
    <div class="form-group">
        <label for="year_construction" class="col-md-3 control-label">Год постройки</label>
        <div class="col-md-2">
            <input type="text" name="year_construction" class="form-control" id="year_construction">
        </div>
    </div>
    <div class="form-group">
        <div class="dropdown">
            <label class="col-md-3 control-label" for="typeOfHouse">Тип дома</label>
            <div class="col-md-2">
                <button class="btn btn-default dropdown-toggle" type="button" id="typeOfHouse" data-toggle="dropdown">
                    Кирпичный
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('typeOfHouse', 'Кирпичный', 'outputTypeOfHouse')">Кирпичный</a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('typeOfHouse', 'Монолитный', 'outputTypeOfHouse')">Монолитный</a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('typeOfHouse', 'Деревянный', 'outputTypeOfHouse')">Деревянный</a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('typeOfHouse', 'Газоблочный', 'outputTypeOfHouse')">Газоблочный</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <input type="hidden" id="outputTypeOfHouse" value="Кирпичный">
    <div class="form-group">
        <label for="house_area" class="col-md-3 control-label">Площадь дома</label>
        <div class="col-md-2">
            <input type="text" name="house_area" class="form-control" id="house_area">
        </div>
        <div class="col-md-1">
            <div class="row">
                <div class="col-md-1">
                    <label class="control-label" for="house_area">м<sup>2</sup></label>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="number_floors" class="col-md-3 control-label">Этажей в доме</label>
        <div class="col-md-2">
            <input type="text" name="number_floors" class="form-control" id="number_floors">
        </div>
    </div>
    <div class="form-group">
        <label for="hNumberOfRooms" class="col-md-3 control-label">Количество комнат</label>
        <div class="col-md-2">
            <input type="text" name="hNumberOfRooms" class="form-control" id="hNumberOfRooms">
        </div>
    </div>
    <div class="form-group">
        <label for="numberOfBedrooms" class="col-md-3 control-label">Количество спален</label>
        <div class="col-md-2">
            <input type="text" name="numberOfBedrooms" class="form-control" id="numberOfBedrooms">
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="">
                Мебель
            </label>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label">Санузел</label>
        <div class="col-md-9">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-primary" id="onTheStreet">
                    <input type="radio" name="bathroom" value="На улице">На улице
                </label>
                <label class="btn btn-default" id="inHome">
                    <input type="radio" name="bathroom" value="В доме">В доме
                </label>
            </div>
        </div>
    </div>
    <input type="hidden" id="outputBathroom" value="На улице">
    <div class="form-group">
        <label for="landArea" class="col-md-3 control-label">Площадь участка</label>
        <div class="col-md-2">
            <input type="text" name="landArea" class="form-control" id="landArea">
        </div>
        <div class="col-md-1">
            <div class="row">
                <div class="col-md-1">
                    <label class="control-label" for="landArea">соток</label>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="dropdown">
            <label class="col-md-3 control-label" for="hHeating">Отопление</label>
            <div class="col-md-2">
                <button class="btn btn-default dropdown-toggle" type="button" id="hHeating" data-toggle="dropdown">
                    Центральное газовое
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('hHeating', 'Центральное газовое', 'hOutputHeating')">Центральное газовое</a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('hHeating', 'Камин', 'hOutputHeating')">Камин</a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('hHeating', 'Печь', 'hOutputHeating')">Печь</a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('hHeating', 'Без отопления', 'hOutputHeating')">Без отопления</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <input type="hidden" id="hOutputHeating" value="Центральное газовое">
    <hr class="col-md-12">
    <div class="header-in-the-form">
        Удобства
    </div>
    <div class="form-group">
        <div class="col-md-8">
            <div class="row">
                <label class="col-md-2 control-label">В доме</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <label class="col-md-6 control-label">На улице (рядом)</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-offset-2 col-md-10 checkbox">
                    <label>
                        <input type="checkbox" value="">
                        Ванная
                    </label>
                </div>
                <div class="col-md-offset-2 col-md-10 checkbox">
                    <label>
                        <input type="checkbox" value="">
                        Стиральная машина
                    </label>
                </div>
                <div class="col-md-offset-2 col-md-10 checkbox">
                    <label>
                        <input type="checkbox" value="">
                        Посудомоечная машина
                    </label>
                </div>
                <div class="col-md-offset-2 col-md-10 checkbox">
                    <label>
                        <input type="checkbox" value="">
                        Телевизор
                    </label>
                </div>
                <div class="col-md-offset-2 col-md-10 checkbox">
                    <label>
                        <input type="checkbox" value="">
                        Микроволновая печь
                    </label>
                </div>
                <div class="col-md-offset-2 col-md-10 checkbox">
                    <label>
                        <input type="checkbox" value="">
                        Баня
                    </label>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-offset-2 col-md-10 checkbox">
                    <label>
                        <input type="checkbox" value="">
                        Кухонный гарнитур
                    </label>
                </div>
                <div class="col-md-offset-2 col-md-10 checkbox">
                    <label>
                        <input type="checkbox" value="">
                        Холодильник
                    </label>
                </div>
                <div class="col-md-offset-2 col-md-10 checkbox">
                    <label>
                        <input type="checkbox" value="">
                        Кондиционер
                    </label>
                </div>
                <div class="col-md-offset-2 col-md-10 checkbox">
                    <label>
                        <input type="checkbox" value="">
                        Интернет
                    </label>
                </div>
                <div class="col-md-offset-2 col-md-10 checkbox">
                    <label>
                        <input type="checkbox" value="hGarage">
                        Гараж
                    </label>
                </div>
                <div class="col-md-offset-2 col-md-10 checkbox">
                    <label>
                        <input type="checkbox" value="hPool">
                        Бассейн
                    </label>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-offset-2 col-md-10 checkbox">
                    <label>
                        <input type="checkbox" value="hSchool">
                        Школа
                    </label>
                </div>
                <div class="col-md-offset-2 col-md-10 checkbox">
                    <label>
                        <input type="checkbox" value="hKindergarten">
                        Детский сад
                    </label>
                </div>
                <div class="col-md-offset-2 col-md-10 checkbox">
                    <label>
                        <input type="checkbox" value="hPlayground">
                        Детская площадка
                    </label>
                </div>
                <div class="col-md-offset-2 col-md-10 checkbox">
                    <label>
                        <input type="checkbox" value="hParkingPlace">
                        Парковка
                    </label>
                </div>
                <div class="col-md-offset-2 col-md-10 checkbox">
                    <label>
                        <input type="checkbox" value="hPond">
                        Пруд
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>