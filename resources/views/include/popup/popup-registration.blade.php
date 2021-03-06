<div class="popup-auth" id="popup-registration">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary auth_form">

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                            <h1 class="text-center">Регистрация</h1>
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Имя</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" placeholder="Имя" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Телефон или e-mail</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" placeholder="Телефон или e-mail" class="form-control" name="email" value="{{ old('email') }}" required>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Пароль</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" placeholder="Пароль" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Повтор пароля</label>
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" placeholder="Повтор пароля" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <span class="glyphicon glyphicon-user"></span> Зарегистрироваться
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="text-center">
                            Есть аккаунт на onlir?
                            <a href="javascript:LoginThroughRegistration()" id="loginThroughRegistration">Войти</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>