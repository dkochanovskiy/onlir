<div id="apartment">
    <div class="form-group">
        <label class="col-md-3 control-label" for="number_rooms">Количество комнат</label>
        <div class="col-md-2">
            <select class="form-control" name="number_rooms">
                <option value="0">Студия</option>
                <option value="1" selected>1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>
        </div>
        <div class="col-md-3">
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="1" name="isolated">
                    изолированная
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="number_beds" class="col-md-3 control-label">Количество спальных мест</label>
        <div class="col-md-2">
            <input type="text" name="number_beds" class="form-control" id="number_beds">
        </div>
    </div>
    <div class="form-group">
        <label for="total_area" class="col-md-3 control-label">Общая площадь</label>
        <div class="col-md-2">
            <input type="text" name="total_area" class="form-control" id="total_area">
        </div>
        <div class="col-md-1">
            <div class="row">
                <div class="col-md-1">
                    <label class="control-label" for="total_area">м<sup>2</sup></label>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label" for="living_space">Жилая площадь</label>
        <div class="col-md-2">
            <input type="text" class="form-control" id="living_space">
        </div>
        <div class="col-md-1">
            <div class="row">
                <div class="col-md-1">
                    <label class="control-label" for="living_space">м<sup>2</sup></label>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label" for="kitchen_area">Площадь кухни</label>
        <div class="col-md-2">
            <input type="text" class="form-control" id="kitchen_area">
        </div>
        <div class="col-md-1">
            <div class="row">
                <div class="col-md-1">
                    <label class="control-label" for="kitchen_area">м<sup>2</sup></label>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label" for="floor_number">Этаж/этажность</label>
        <div class="col-md-2">
            <input type="text" class="form-control" id="floor_number">
        </div>
        <div class="col-md-1">
            <div class="row">
                <div class="col-md-1">
                    <label class="control-label" for="number_floors">
                        из
                    </label>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4">
                    <input type="text" class="form-control" id="number_floors">
                </div>
            </div>
        </div>
    </div>
    <hr class="col-md-12">
    <div class="form-group">
        <div class="col-md-offset-3">
            <div class="radio">
                <label>
                    <input type="radio" name="balcony" id="balcony1" value="1" checked>
                    Балкон
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="balcony" id="balcony2" value="2">
                    Лоджия
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="balcony" id="balcony3" value="3">
                    Отсутствует
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-offset-3">
            <div class="radio">
                <label>
                    <input type="radio" name="furniture" id="furniture1" value="1" checked>
                    Мебель есть
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="furniture" id="furniture2" value="2">
                    Частично
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="furniture" id="furniture3" value="3">
                    Отсутствует
                </label>
            </div>
        </div>
    </div>
    {{--<div class="form-group">--}}
        {{--<div class="col-md-offset-3">--}}
            {{--<div class="radio">--}}
                {{--<label>--}}
                    {{--<input type="radio" name="kitchenSet" id="kitchenSet1" checked>--}}
                    {{--Кухонный гарнитур есть--}}
                {{--</label>--}}
            {{--</div>--}}
            {{--<div class="radio">--}}
                {{--<label>--}}
                    {{--<input type="radio" name="kitchenSet" id="kitchenSet2">--}}
                    {{--Частично--}}
                {{--</label>--}}
            {{--</div>--}}
            {{--<div class="radio">--}}
                {{--<label>--}}
                    {{--<input type="radio" name="kitchenSet" id="kitchenSet3">--}}
                    {{--Отсутствует--}}
                {{--</label>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <hr class="col-md-12">
    <div class="form-group">
        <label class="col-md-3 control-label" for="elevator">Лифт</label>
        <div class="col-md-3">
            <select class="form-control" name="elevator">
                <option value="1">Пассажирский и грузовой</option>
                <option value="2" selected>Пассажирский</option>
                <option value="3">Грузовой</option>
                <option value="4">Отсутствует</option>
            </select>
        </div>
    </div>
    <hr class="col-md-12">
    <div class="form-group">
        <label class="col-md-3 control-label">Можно с детьми</label>
        <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-primary" id="labelPossibleWithChildrenYes">
                <input type="radio" value="1">Да
            </label>
            <label class="btn btn-default" id="labelPossibleWithChildrenNo">
                <input type="radio" value="0">Нет
            </label>
        </div>
    </div>
    <input type="hidden" id="inputPossibleWithChildren" value="1" name="possible_with_children">

    <div class="form-group">
        <label class="col-md-3 control-label">Можно с животными</label>
        <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-primary" id="labelPossibleWithAnimalsYes">
                <input type="radio" value="1">Да
            </label>
            <label class="btn btn-default" id="labelPossibleWithAnimalsNo">
                <input type="radio" value="0">Нет
            </label>
        </div>
    </div>
    <input type="hidden" id="inputPossibleWithAnimals" value="1" name="pets_allowed">

    <div class="form-group">
        <label class="col-md-3 control-label">Можно курить</label>
        <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-primary" id="labelYouCanSmokeYes">
                <input type="radio" value="1">Да
            </label>
            <label class="btn btn-default" id="labelYouCanSmokeNo">
                <input type="radio" value="0">Нет
            </label>
        </div>
    </div>
    <input type="hidden" id="inputYouCanSmoke" value="1" name="can_smoke">
    <hr class="col-md-12">
    <div class="header-in-the-form">
        Удобства
    </div>
    <div class="form-group">
        <div class="col-md-4">
            <div class="row">
                <label class="col-md-offset-4 col-md-1 control-label">
                    Техника
                </label>
            </div>
            <div class="col-md-offset-3 col-md-6">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="1" name="fridge">
                        Холодильник
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="1" name="washer">
                        Стиральная машина
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="1" name="dishwasher">
                        Посудомоечная машина
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="1" name="television">
                        Телевизор
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="1" name="microwave">
                        Микроволновая печь
                    </label>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <label class="col-md-offset-4 col-md-1 control-label">
                    Прочее
                </label>
            </div>
            <div class="col-md-offset-3 col-md-6">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="1" name="air_conditioning">
                        Кондиционер
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="1" name="internet">
                        Интернет
                    </label>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <label class="col-md-offset-2 col-md-7 control-label">
                    На улице (рядом)
                </label>
            </div>
            <div class="col-md-offset-3 col-md-6">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="1" name="school">
                        Школа
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="1" name="playground">
                        Детская площадка
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="1" name="kindergarten">
                        Детский сад
                    </label>
                </div>
            </div>
        </div>
    </div>
    <hr class="col-md-12">
</div>