<div class="popup-auth" id="popup-login">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-primary auth_form">
            <div class="panel-body auth">
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <h1 class="text-center">Вход</h1>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email-login" class="col-md-4 control-label">Телефон или e-mail</label>
                        <div class="col-md-6">
                            <input id="email-login" type="email" placeholder="Телефон или e-mail" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="input_p" class="col-md-4 control-label">Пароль</label>
                        <div class="col-md-6">
                            <input id="input_p" type="password" placeholder="Пароль" class="form-control" name="password" required>
                            <a style="text-decoration: none" href="javascript:ShowHidePassword();">
                                <div class="eye">
                                    <span id="span" style="cursor: pointer;" class="glyphicon glyphicon-eye-open"></span>
                                </div>
                            </a>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Запомнить меня
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Забыли пароль?
                            </a>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-5">
                            <button type="submit" class="btn btn-primary">
                                <span class="glyphicon glyphicon-log-in"></span> Войти
                            </button>
                        </div>
                    </div>
                </form>
                <div class="text-center">
                    или через
                </div>
                <div class="col-md-12 social-net">
                    <a href="">
                        <div class="social_net-item v"></div>
                    </a>
                    <a href="">
                        <div class="social_net-item t"></div>
                    </a>
                    <a href="">
                        <div class="social_net-item f"></div>
                    </a>
                    <a href="">
                        <div class="social_net-item g"></div>
                    </a>
                    <a href="">
                        <div class="social_net-item o"></div>
                    </a>
                </div>
                <hr>
                <div class="col-md-12">
                    <div class="text-center">
                        Не зарегистрированы на Onlir?
                        <a href="javascript:RegistrationThroughLogin()" id="registrationThroughLogin">Зарегистрироваться</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>