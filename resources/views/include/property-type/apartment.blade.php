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
    </div>
    <input type="hidden" class="form-control" id="numberRooms" value="1">
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
        <div class="row">
            <div class="col-md-1">
                <label class="control-label" for="totalArea">м<sup>2</sup></label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label" for="residentialArea">Жилая площадь</label>
        <div class="col-md-2">
            <input type="text" class="form-control" id="residentialArea">
        </div>
        <div class="row">
            <div class="col-md-1">
                <label class="control-label" for="residentialArea">м<sup>2</sup></label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label" for="kitchen">Кухня</label>
        <div class="col-md-2">
            <input type="text" class="form-control" id="kitchen">
        </div>
        <div class="row">
            <div class="col-md-1">
                <label class="control-label" for="kitchen">м<sup>2</sup></label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label" for="floorNumber">Этаж/этажность</label>
        <div class="col-md-2">
            <input type="text" class="form-control" id="floorNumber">
        </div>
        <label class="col-md-1 control-label" for="totalFloors">
            <div class="row">
                <div class="col-md-1">
                    из
                </div>
            </div>
        </label>
        <div class="col-md-2">
            <input type="text" class="form-control" id="totalFloors">
        </div>
    </div>
    <hr>
    <div class="form-group">
        <div class="col-md-offset-3">
            <div class="radio">
                <label>
                    <input type="radio" name="balcony" id="optionsRadios1" checked>
                    Балкон
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="balcony" id="optionsRadios2">
                    Лоджия
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="balcony" id="optionsRadios3">
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
                    <input type="radio" name="kitchen_set" id="kitchen_set1" checked>
                    Кухонный гарнитур есть
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="kitchen_set" id="kitchen_set2">
                    Частично
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="kitchen_set" id="kitchen_set3">
                    Отсутствует
                </label>
            </div>
        </div>
    </div>
    <hr>
    <div class="form-group">
        <div class="dropdown">
            <label class="col-md-3 control-label" for="selectElevator">Лифт</label>
            <div class="col-md-2">
                <button class="btn btn-default dropdown-toggle" type="button" id="selectElevator" data-toggle="dropdown">
                    Пассажирский
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
    </div>
    <input type="hidden" id="elevator" value="Пассажирский">
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
    <div class="header-in-the-form">
        Удобства
    </div>
    <div class="form-group">
        <div class="col-md-6">
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
                <label class="col-md-4 control-label">
                    Прочее
                </label>
            </div>
        </div>
        <div class="col-md-6">
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
    <hr>
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
    <hr>
    <div class="form-group">
        <label for="apartment_description" class="col-md-3 control-label">Описание квартиры</label>
        <div class="col-md-8">
            <textarea rows="5" class="form-control" name="apartment_description" id="apartment_description" placeholder="Опишите вашу квартиру..."></textarea>
        </div>
    </div>
    <hr>
    <div class="form-group">
        <label for="your-name" class="col-md-3 control-label">Ваше имя</label>
        <div class="col-md-2">
            <input type="text" class="form-control" id="your-name">
        </div>
    </div>
    <div class="form-group">
        <label for="your-name" class="col-md-3 control-label">Телефон для связи</label>
        <div class="phone-communication-inner">
            <div class="phone-communication-font">
                <span>8(962) 594-3880&#160;</span>
                {{--<button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-trash"></span> Удалить</button>--}}
                {{--<button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Добавить</button>--}}
            </div>
        </div>
    </div>
    <hr>
    <div class="header-in-the-form">
        Арендная плата
    </div>
    <div class="form-group">
        <label for="rent" class="col-md-2 control-label">Цена в месяц</label>
        <div class="col-md-2">
            <input type="text" class="form-control" id="rent">
        </div>
        <label for="rent" class="col-md-1 control-label">
            <div class="row">
                <div class="col-md-1">
                    ₽
                </div>
            </div>
        </label>
        <div class="col-md-3">
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="">
                    включая коммунальные
                </label>
            </div>
        </div>
        <label for="pledge" class="col-md-1 control-label">Залог</label>
        <div class="col-md-2">
            <input type="text" class="form-control" id="pledge">
        </div>
        <div class="row">
            <div class="col-md-1">
                <label class="control-label" for="pledge">
                    ₽
                </label>
            </div>
        </div>
    </div>
    <hr>
</div>