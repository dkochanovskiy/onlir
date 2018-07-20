<div class="popup-auth" id="popup-login">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-primary auth_form">
            <div class="panel-body auth">
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <h1>Вход в личный кабинет</h1>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email-login" class="col-md-4 control-label">Телефон или e-mail</label>
                        <div class="col-md-6">
                            <input id="email-login" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password-login" class="col-md-4 control-label">Пароль</label>
                        <div class="col-md-6">
                            <input id="password-login" type="password" class="form-control" name="password" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Запомнить меня
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                <span class="glyphicon glyphicon-log-in"></span> Войти
                            </button>
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Забыли пароль?
                            </a>
                        </div>
                    </div>
                </form>
                <div class="col-md-offset-3 col-md-6 social-net">
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
            </div>
        </div>
    </div>
</div>