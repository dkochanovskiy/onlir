<form method="post" action="{{ route('welcome')}}" class="form-inline">
    <input name="_token" type="hidden" value="{{ csrf_token() }}" />
    <div class="form-group">
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
    <input type="hidden" id="outputWPropertyType" name="outputWPropertyType" value="Квартира">
    <div class="form-group">
        <div class="dropdown">
            <div class="col-md-9">
                <button class="btn btn-default dropdown-toggle" type="button" id="" data-toggle="dropdown">
                    1
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('oNumberOfWetPoints', '1', 'inputONumberOfWetPoints')">1</a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('oNumberOfWetPoints', '2', 'inputONumberOfWetPoints')">2</a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="javascript:DropDownList('oNumberOfWetPoints', '3', 'inputONumberOfWetPoints')">3</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <input type="text" id="outputWPropertyType" name="outputWPropertyType" value="1">

    <input type="text" value="{{old('min_price')}}" class="form-control" name="min_price" id="min_price" placeholder="от">
    <input type="text" value="{{old('max_price')}}" class="form-control" name="max_price" id="max_price" placeholder="до">
    <input type="text" value="{{old('city')}}" class="form-control" name="city" id="city" placeholder="Город">
    <a href="{{ route('rezultaty-poiska') }}">
        <button type="submit" class="btn btn-primary">
            <span class="glyphicon glyphicon-search"></span> Поиск
        </button>
    </a>
</form>