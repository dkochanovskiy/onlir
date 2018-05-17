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
            <div class="header-auth">
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        @guest
                        <li><a href="javascript:PopupLoginShow()">Войти</a></li>
                        <li><a href="javascript:PopupRegistrationShow()">Регистрация</a></li>
                    @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->email }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('my-announcements') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('my-announcements-form').submit();">
                                            Мои объявления
                                        </a>
                                        <form id="my_announcements-form" action="{{ route('my-announcements') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    <li>
                                        <a href="{{ route('profile') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('profile-form').submit();">
                                            Профиль
                                        </a>
                                        <form id="profile-form" action="{{ route('profile') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    <li>
                                        <a href="{{ route('purse') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('purse-form').submit();">
                                            Кошелек
                                        </a>
                                        <form id="purse-form" action="{{ route('purse') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    <li>
                                        <a href="{{ route('amend-contract') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('amend_contract-form').submit();">
                                            Изменить договор
                                        </a>
                                        <form id="amend_contract-form" action="{{ route('amend-contract') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Выйти
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
    <section>
        @section('content')
        @show
    </section>
    <footer>
        <div class="footer-inner">
            <div class="container">
                © 2018 onLir
            </div>
        </div>
    </footer>
    {{--popups--}}
    <div class="popup-auth" id="popup-login">
        <div class="container">
            <div class="row">
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
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-primary auth_form">

                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}
                                <h1>Регистрация</h1>
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Имя</label>
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">Телефон ил e-mail</label>
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
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
                                    <label for="password-confirm" class="col-md-4 control-label">Повтор пароля</label>
                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Зарегистрироваться
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--/popups--}}
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="http://code.jquery.com/jquery-2.0.2.min.js"></script>
    <script src="{{ URL::asset('js/script.js') }}"></script>
</body>
</html>