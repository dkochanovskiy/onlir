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
                <div class="form-group">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="propertyTypeMenu" data-toggle="dropdown">
                            Выберите тип недвижимости
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li role="presentation" class="dropdown-header">Жилая</li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Дом</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Комната</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Квартира</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Коттедж</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation" class="dropdown-header">Коммерческая</li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Готовый бизнес</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Офис</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Торговая площадь</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Складское помощение</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Помещение свободного назначения</a></li>
                        </ul>
                    </div>
                </div>
                <div class="ad-submission-caption">
                    <h3>Тип объекта</h3>
                </div>
                <div class="ad-submission-caption">
                    <h3>Об объекте</h3>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="address">Адрес</label>
                    <input type="text" class="form-control" id="address">
                </div>
                <div class="form-group to-metro">
                    <label class="col-sm-2 control-label" for="metro"></label>
                    <input type="text" class="form-control" id="metro" placeholder="Метро">
                </div>
                <div class="form-group dropdown to-metro">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="to-metro" data-toggle="dropdown">
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
                    <label class="col-sm-2 control-label" for="minutes">1</label>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="exampleInputPassword1">Пароль</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="exampleInputFile">File input</label>
                    <input type="file" id="exampleInputFile">
                    <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Проверить меня
                    </label>
                </div>
                <button type="submit" class="btn btn-default">Отправить</button>
            </form>
        </div>
    </div>
</div>
@endsection
