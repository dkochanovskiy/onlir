@extends('template.template')

@section('content')
<div class="container">
    <hr>
    <div class="navigation-bar">
        <ul class="nav nav-pills nav-stacked">
            <li id="home"><a href="{{ route('my-announcements') }}">Мои объявления</a></li>
            <li id="purse"><a href="{{ route('purse') }}">Кошелек</a></li>
            <li id="amend-contract"><a href="{{ route('amend-contract') }}">Изменить договор</a></li>
            <li class="active" id="ad-delivery"><a href="{{ route('ad-delivery') }}">Подать объявление</a></li>
            <li id="settings"><a href="{{ route('settings') }}">Настройки</a></li>
        </ul>
    </div>
    <div class="container-content">
        <div class="title-ad-submission">
            <h2>
                Подать объявление в Москве
            </h2>
            <button type="button" class="btn btn-primary">
                <span class="glyphicon glyphicon-share-alt"></span> Сменить город
            </button>
        </div>
        <div class="fill-contract">
            <div class="fill-contract-inner">
                <button type="button" class="btn btn-success">
                    <span class="glyphicon glyphicon-ok"></span> Заполнить договор
                </button>
            </div>
        </div>
        <div class="ad-submission-form">
            <form method="post" class="form-horizontal" role="form">
                <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                <div class="form-group">
                    <div class="dropdown">
                        <label class="control-label" for="propertyTypeMenu">Тип недвижимости: </label>
                        <button class="btn btn-default dropdown-toggle" type="button" id="propertyTypeMenu" data-toggle="dropdown">
                            Квартира
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li role="presentation" class="dropdown-header">Жилая</li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:House()">Дом</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:Room()">Комната</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:Apartment()">Квартира</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:Cottage()">Коттедж</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation" class="dropdown-header">Коммерческая</li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:ReadyBusiness()">Готовый бизнес</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:Office()">Офис</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:TradeArea()">Торговая площадь</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:WarehouseSpace()">Складское помещение</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:FreeDestinationRoom()">Помещение свободного назначения</a></li>
                        </ul>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="propertyType">Тип недвижимости</label>
                    <input type="text" class="form-control" id="propertyType">
                </div>
                <div class="form-group">
                    <label class="control-label" for="address">Введите адрес</label>
                    <input type="text" class="form-control" id="address">
                </div>
                <div class="form-group to-metro">
                    <label class="control-label" for="metro">Ближайшая станция метро</label>
                    <input type="text" class="form-control" id="metro">
                </div>
                <div class="form-group dropdown to-metro">
                    <button class="btn btn-default dropdown-toggle" type="button" id="to-metro" data-toggle="dropdown">
                        До метро
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Пешком</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Транспортом</a></li>
                    </ul>
                </div>
                <div class="form-group to-metro">
                    <input type="text" class="form-control" id="minutes">
                    <label class="control-label" for="minutes">минут</label>
                </div>
                @include('include.property-type.apartment')
                <div class="ad-submission-caption rent">
                    <h3>Арендная плата</h3>
                </div>
                <div class="form-group">
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
                    <h3>Ваше имя</h3>
                </div>
                <div class="form-group your-name">
                    <label class="control-label" for="your-name"></label>
                    <input type="text" class="form-control" id="your-name">
                </div>
                <div class="phone-communication-wrap">
                    <div class="phone-communication-caption">
                        <h3>Телефон(ы) для связи</h3>
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
                    <h3>
                        Удобства
                    </h3>
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
                <div class="photos">
                    <h3>Фотографии</h3>
                    <div class="photos-inner">
                        <div class="add-photo">
                            <div class="camera">
                                <button type="button" class="btn btn-default">
                                    <span class="glyphicon glyphicon-camera"></span>
                                </button>
                            </div>
                            <div class="add-button">
                                <button type="button" class="btn btn-primary">
                                    <span class="glyphicon glyphicon-plus">
                                        Загрузить фото
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="photos-desc">
                            Не допускаются фотографии содержащие водяные знаки, чужие объекты, контакты и рекламные
                            баннеры. Максимальный размер фото 10 мб.   JGP, PNG, GIF

                        </div>
                    </div>
                </div>
                <div class="ways-accommodation">
                    <h3>Способы размещения</h3>
                    <div class="ways-accommodation-inner">
                        <div class="ways-accommodation-item free-charge">
                            <div class="ways-accommodation-input">
                                <div class="radio">
                                    <label>
                                        <input type="radio" class="ways-accommodation-input" name="optionsRadios" id="ways-accommodation1" value="option1" checked>
                                        Бесплатное
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="ways-accommodation-item top-3">
                            <div class="ways-accommodation-input">
                                <div class="radio">
                                    <label>
                                        <input type="radio" class="ways-accommodation-input" name="optionsRadios" id="ways-accommodation2" value="option2">
                                        Топ-3 (Популярные объявления)
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="ways-accommodation-item allotted">
                            <div class="ways-accommodation-input">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="ways-accommodation3" value="option3">
                                        Выделенное
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--<div class="form-group">--}}
                    {{--<label class="control-label" for="your-phone1"></label>--}}
                    {{--<input type="text" class="form-control input-phone-communication" id="your-phone1">--}}
                {{--</div>--}}

                {{--<button type="submit" class="btn btn-default">Отправить</button>--}}
            </form>
        </div>
    </div>
</div>
@endsection
