@extends('template.template')

@section('content')
    <div class="container">
        <hr>
        <div class="navigation-bar">
            <ul class="nav nav-pills nav-stacked">
                <li id="home"><a href="{{ route('my-announcements') }}">Мои объявления</a></li>
                <li id="purse"><a href="{{ route('purse') }}">Кошелек</a></li>
                <li id="amend-contract"><a href="{{ route('amend-contract') }}">Изменить договор</a></li>
                <li id="ad-delivery"><a href="{{ route('ad-delivery') }}">Подать объявление</a></li>
                <li class="active" id="settings"><a href="{{ route('settings') }}">Настройки</a></li>
            </ul>
        </div>
        <div class="container-content">
            <div class="phone-wrapper">
                <div class="phone">Телефон:</div>
                <div class="show-phone" id="show-phone">
                    8(962) 594-3880&#160;
                    <a href="javascript:EditPhoneForm()"><span class="glyphicon glyphicon-pencil"></span></a>
                </div>
                <div class="edit-phone" id="edit-phone">
                    <form class="form-horizontal" role="form" id="edit-phone-form">
                        <div class="edit-phone-input">
                            <input type="text" class="form-control" id="phone">
                        </div>
                        <button href="javascript:ShowPhoneForm()" type="submit" class="btn btn-primary">
                            <span class="glyphicon glyphicon-floppy-disk"></span> Сохранить
                        </button>
                    </form>
                </div>
            </div>
            <div class="new-password">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <div class="new-password-text">Введите новый пароль(минимум 8 символов)</div>
                        <div>
                            <input type="password" class="form-control new-password-input" id="inputPassword1">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="new-password-text">Повторите введенный пароль:</div>
                        <div>
                            <input type="password" class="form-control new-password-input" id="inputPassword2">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">
                                <span class="glyphicon glyphicon-floppy-disk"></span> Сохранить
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
