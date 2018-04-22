<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}" />
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <title>onLir - Аренда недвижимости в России</title>
</head>
<body>
    <header>
        <div class="container">
            <a href="/">
                <div class="header-logo"></div>
            </a>
            <div class="header-auth_reg">
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        @guest
                        <li><a href="javascript:PopupLoginShow()">Вход в личный кабинет</a></li>
                        <li><a href="javascript:PopupRegistrationShow()">Регистрация</a></li>
                    @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @endguest
                    </ul>
                </div>
            </div>
        </div>
    </header>
    @section('content')
    @show
    <footer>
        <div class="container">
            <div class="footer-inner">
                © 2018 onLir
            </div>
        </div>
    </footer>
    <div class="popup-auth" id="popup-login">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default auth_form">

                        <div class="panel-body auth">
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
                                <h1>Вход в личный кабинет</h1>
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">Телефон или e-mail</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

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
                                        <input id="password" type="password" class="form-control" name="password" required>

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
                                        <button type="submit" class="btn btn-default">
                                            Войти
                                        </button>

                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            Забыли пароль?
                                        </a>
                                    </div>
                                </div>
                            </form>
                            <div class="social_net">
                                <a href=""><div class="social_net-item v"></div></a>
                                <a href=""><div class="social_net-item t"></div></a>
                                <a href=""><div class="social_net-item f"></div></a>
                                <a href=""><div class="social_net-item g"></div></a>
                                <a href=""><div class="social_net-item o"></div></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="popup-auth" id="popup-registration">
        <div class="popup-auth-content">
            registration
            <a href="javascript:PopupRegistrationHide()">Hide popup</a>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="http://code.jquery.com/jquery-2.0.2.min.js"></script>
    <script src="{{ URL::asset('js/script.js') }}"></script>
</body>
</html>