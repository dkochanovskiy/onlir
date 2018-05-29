@extends('template.template')

@section('content')
    <div class="container">
        @include('include.navigation-bar')
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
                            <input type="text" class="form-control" id="phone" value="8888">
                        </div>
                        <button href="javascript:ShowPhoneForm()" type="submit" class="btn btn-primary">Сохранить</button>
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
                            <button type="submit" class="btn btn-primary">Изменить</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
