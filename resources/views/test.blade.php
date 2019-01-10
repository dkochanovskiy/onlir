@extends('template.template')
@section('content')
    <div class="container">
        <div class="row">
            <form method="post" action="{{route('test')}}" class="form-horizontal" role="form">
                <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                <div class="form-group">
                    <div class="dropdown">
                        <label class="col-md-3 control-label" for="propertyTypeMenu">Тип недвижимости </label>
                        <div class="col-md-9">
                            <button class="btn btn-default dropdown-toggle" type="button" id="propertyTypeMenu" data-toggle="dropdown">
                                Квартира
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li role="presentation" class="dropdown-header">Жилая</li>
                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="javascript:DropDownListPropertyType
                                            ('Дом','house','room','apartment','cottage','ready-business','office',
                                            'trade-area','warehouse-spacepace','free-destination-room')">
                                        Дом
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="javascript:DropDownListPropertyType
                                            ('Комната','room','house','apartment','cottage','ready-business','office',
                                            'trade-area','warehouse-spacepace','free-destination-room')">
                                        Комната
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="javascript:DropDownListPropertyType
                                            ('Квартира','apartment','room','house','cottage','ready-business','office',
                                            'trade-area','warehouse-spacepace','free-destination-room')">
                                        Квартира
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="javascript:DropDownListPropertyType
                                            ('Коттедж','cottage','room','house','apartment','ready-business','office',
                                            'trade-area','warehouse-spacepace','free-destination-room')">
                                        Коттедж
                                    </a>
                                </li>
                                <li role="presentation" class="divider"></li>
                                <li role="presentation" class="dropdown-header">Коммерческая</li>
                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="javascript:DropDownListPropertyType
                                            ('Готовый бизнес','ready-business','room','house','apartment','cottage',
                                            'office','trade-area','warehouse-spacepace','free-destination-room')">
                                        Готовый бизнес
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="javascript:DropDownListPropertyType
                                            ('Офис','office','room','house','apartment','cottage','ready-business',
                                            'trade-area','warehouse-spacepace','free-destination-room')">
                                        Офис
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="javascript:DropDownListPropertyType
                                            ('Торговая площадь','trade-area','room','house','apartment','cottage',
                                            'ready-business','office','warehouse-spacepace','free-destination-room')">
                                        Торговая площадь
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="javascript:DropDownListPropertyType
                                            ('Складское помещение','warehouse-spacepace','room','house','apartment',
                                            'cottage','ready-business','office','trade-area','free-destination-room')">
                                        Складское помещение
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="javascript:DropDownListPropertyType
                                            ('Помещение свободного назначения','free-destination-room','room','house',
                                            'apartment','cottage','ready-business','office','trade-area',
                                            'warehouse-spacepace')">
                                        Помещение свободного назначения
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <input type="text" name="propertyType" id="propertyType" value="Квартира">
                <div class="submit-advertisement-button">
                    <div class="submit-advertisement-button-inner">
                        <button type="submit" class="btn btn-success">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection