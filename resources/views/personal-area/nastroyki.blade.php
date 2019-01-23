@extends('template.template')

@section('content')
    <hr class="col-md-12">
    <div class="col-md-2 text-center">
        <ul class="nav nav-pills nav-stacked">
            <li id="home"><a href="{{ route('moi-obyavleniya') }}">Мои объявления</a></li>
            <li id="purse"><a href="{{ route('koshelek') }}">Кошелек</a></li>
            <li id="amend-contract"><a href="{{ route('redaktirovaniye-dogovora') }}">Редактирование договора</a></li>
            <li id="ad-delivery"><a href="{{ route('razmeshcheniye-obyavleniya') }}">Размещение объявления</a></li>
            <li class="active" id="settings"><a href="{{ route('nastroyki') }}">Настройки</a></li>
        </ul>
    </div>
    <div class="col-md-10">
        <div class="row">
            <div class="col-md-12 margin-30">
                <div class="row">
                    <label class="col-md-1 control-label">Телефон</label>
                    <label class="col-md-2 control-label show-phone" id="show-phone">
                        8(962) 594-3880&#160;
                    </label>
                    <div class="col-md-1 edit">
                        {{--<a href="javascript:EditPhoneForm()">--}}
                        <a href="">
                            <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span> Изменить</button>
                        </a>
                    </div>
                    {{--<div class="col-md-1" id="edit-phone">--}}
                        {{--<form class="form-horizontal" role="form" id="edit-phone-form">--}}
                            {{--<div class="edit-phone-input">--}}
                                {{--<input type="text" class="form-control timeMask">--}}
                            {{--</div>--}}
                            {{--<button href="javascript:ShowPhoneForm()" type="submit" class="btn btn-primary">--}}
                                {{--<span class="glyphicon glyphicon-floppy-disk"></span> Сохранить--}}
                            {{--</button>--}}
                        {{--</form>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
        <hr class="col-md-12">
        <div class="row">
            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="inputPassword1" class="col-md-5 control-label">Введите новый пароль(минимум 8 символов)</label>
                    <div class="col-md-4">
                        <input type="password" name="newPassword1" class="form-control" id="inputPassword1">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword2" class="col-md-5 control-label">Повторите введенный пароль</label>
                    <div class="col-md-4">
                        <input type="password" name="newPassword2" class="form-control" id="inputPassword2">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-6 col-md-1">
                        <button type="submit" class="btn btn-primary">
                            <span class="glyphicon glyphicon-floppy-disk"></span> Сохранить
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
