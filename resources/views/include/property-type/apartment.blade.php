<div id="apartment">
    <div class="form-group">
        <div class="dropdown">
            <label class="col-md-3 control-label" for="selectNumberRooms">Количество комнат: </label>
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
                <input type="radio" name="balcony" id="optionsRadios1" value="option1" checked>
                Балкон
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="balcony" id="optionsRadios2" value="option2">
                Лоджия
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="balcony" id="optionsRadios3" value="option3">
                Отсутствует
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
            <label class="control-label" for="selectElevator">Лифт: </label>
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
        <label class="col-md-2 control-label">Ремонт</label>
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
    <div class="form-group">
        <label class="control-label" for="inputRepairs">Ремонт</label>
        <input type="text" class="form-control" id="inputRepairs" value="Косметический">
    </div>
    {{--<div class="form-group">--}}
        {{--<div class="dropdown">--}}
            {{--<label class="control-label" for="selectRepairs">Ремонт: </label>--}}
            {{--<button class="btn btn-default dropdown-toggle" type="button" id="selectRepairs" data-toggle="dropdown">--}}
                {{--Косметический--}}
                {{--<span class="caret"></span>--}}
            {{--</button>--}}
            {{--<ul class="dropdown-menu">--}}
                {{--<li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:Cosmetic()">Косметический</a></li>--}}
                {{--<li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:Designer()">Дизайнерский</a></li>--}}
                {{--<li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:Euro()">Евро</a></li>--}}
                {{--<li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:withoutRepair()">Без ремонта</a></li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="form-group">
        <label class="control-label" for="repairs">Ремонт</label>
        <input type="text" class="form-control" id="repairs">
    </div>
    <div class="form-group">
        <div style="font-size: 18px">Арендная плата</div>
        <div class="ad-submission-caption rent">
            <label class="control-label">Цена в месяц</label>
        </div>
        <input type="text" class="form-control" id="rent">
        <label class="control-label ad-submission-form-label" for="rent">₽</label>

        <div class="checkbox including-communal">
            <label>
                <input type="checkbox" value="">
                включая коммунальные
            </label>
        </div>

        <div class="pledge">
            <label class="control-label" for="pledge">Залог</label>
            <input type="text" class="form-control" id="pledge">
            <label class="control-label ad-submission-form-label" for="pledge">₽</label>
        </div>
    </div>
    <div class="ad-submission-caption rent">
        <label class="control-label">Ваше имя</label>
    </div>
    <div class="form-group your-name">
        <label class="control-label" for="your-name"></label>
        <input type="text" class="form-control" id="your-name">
    </div>
    <div class="phone-communication-wrap">
        <div class="phone-communication-caption">
            <label class="control-label">Телефон(ы) для связи</label>
        </div>
        <div class="phone-communication-inner">
            <div class="phone-communication-font">
                <span>8(962) 594-3880&#160;</span>
                <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-trash"></span> Удалить</button>
                <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Добавить</button>
            </div>
        </div>
    </div>
    <div class="facilities">
        <label class="control-label">
            Удобства
        </label>
        <div class="facilities-inner">
            <div class="facilities-item">
                Техника
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
            <div class="facilities-item other">
                Прочее
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
    </div>
    <div class="form-group">
        Можно с детьми
        <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-primary" id="labelPossibleWithChildrenYes">
                <input type="radio" name="possibleWithChildren" value="Да">Да
            </label>
            <label class="btn btn-default" id="labelPossibleWithChildrenNo">
                <input type="radio" name="possibleWithChildren" value="Нет">Нет
            </label>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label" for="inputPossibleWithChildren">Можно с детьми</label>
        <input type="text" class="form-control" id="inputPossibleWithChildren" value="Да">
    </div>
    <div class="form-group">
        Можно с животными
        <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-primary" id="labelPossibleWithAnimalsYes">
                <input type="radio" name="possibleWithAnimals" value="Да">Да
            </label>
            <label class="btn btn-default" id="labelPossibleWithAnimalsNo">
                <input type="radio" name="possibleWithAnimals" value="Нет">Нет
            </label>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label" for="inputPossibleWithAnimals">Можно с животными</label>
        <input type="text" class="form-control" id="inputPossibleWithAnimals" value="Да">
    </div>
    <div class="form-group">
        Можно курить
        <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-primary" id="labelYouCanSmokeYes">
                <input type="radio" name="youCanSmoke" value="Да">Да
            </label>
            <label class="btn btn-default" id="labelYouCanSmokeNo">
                <input type="radio" name="youCanSmoke" value="Нет">Нет
            </label>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label" for="inputYouCanSmoke">Можно курить</label>
        <input type="text" class="form-control" id="inputYouCanSmoke" value="Да">
    </div>
    <div class="apartment_description">
        <label for="apartment_description">Описание квартиры</label>
        <textarea name="apartment_description" id="apartment_description" placeholder="Опишите вашу квартиру..."></textarea>
    </div>
</div>