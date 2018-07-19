<form method="post" action="{{ route('welcome')}}" class="form-inline">
    <input name="_token" type="hidden" value="{{ csrf_token() }}" />
    <div class="form-group">
        <div class="sf-property-type">
            <div class="dropdown">
                <div class="col-md-1">
                    <button class="btn btn-default dropdown-toggle" type="button" id="wPropertyType" data-toggle="dropdown">
                        Квартира
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li role="presentation" class="dropdown-header">Жилая</li>
                        <li role="presentation">
                            <a role="menuitem" tabindex="-1" href="javascript:DropDownList('wPropertyType', 'Квартира', 'outputWPropertyType')">Квартира</a>
                        </li>
                        <li role="presentation">
                            <a role="menuitem" tabindex="-1" href="javascript:DropDownList('wPropertyType', 'Комната', 'outputWPropertyType')">Комната</a>
                        </li>
                        <li role="presentation">
                            <a role="menuitem" tabindex="-1" href="javascript:DropDownList('wPropertyType', 'Дом', 'outputWPropertyType')">Дом</a>
                        </li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation" class="dropdown-header">Коммерческая</li>
                        <li role="presentation">
                            <a role="menuitem" tabindex="-1" href="javascript:DropDownList('wPropertyType', 'Офис', 'outputWPropertyType')">Офис</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" id="outputWPropertyType" name="outputWPropertyType" value="Квартира">
    <div class="form-group">
        <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="wNumberOfRooms" data-toggle="dropdown">
                1
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li role="presentation">
                    <a role="menuitem" tabindex="-1" href="javascript:DropDownList('wNumberOfRooms', '1', 'outputWNumberOfRooms')">1</a>
                </li>
                <li role="presentation">
                    <a role="menuitem" tabindex="-1" href="javascript:DropDownList('wNumberOfRooms', '2', 'outputWNumberOfRooms')">2</a>
                </li>
                <li role="presentation">
                    <a role="menuitem" tabindex="-1" href="javascript:DropDownList('wNumberOfRooms', '3', 'outputWNumberOfRooms')">3</a>
                </li>
            </ul>
        </div>
    </div>
    <input type="hidden" id="outputWNumberOfRooms" name="outputWNumberOfRooms" value="1">
    <div class="form-group">
        <input type="text" value="{{old('min_price')}}" class="form-control" name="min_price" id="min_price" placeholder="от">
    </div>
    <div class="form-group">
        <div class="col-md-1">
            <input type="text" value="{{old('max_price')}}" class="form-control" name="max_price" id="max_price" placeholder="до">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-1">
            <input type="text" value="{{old('city')}}" class="form-control" name="city" id="city" placeholder="Город">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-1">
            <button type="submit" class="btn btn-primary">
                <span class="glyphicon glyphicon-search"></span> Поиск
            </button>
        </div>
    </div>
    {{--<a href="{{ route('rezultaty-poiska') }}">--}}
        {{--<button type="submit" class="btn btn-primary">--}}
            {{--<span class="glyphicon glyphicon-search"></span> Поиск--}}
        {{--</button>--}}
    {{--</a>--}}
</form>