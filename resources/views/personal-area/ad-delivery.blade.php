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
        <div class="ad-submission-form">
            <form method="post" class="form-horizontal" role="form">
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="address">Адрес</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
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
