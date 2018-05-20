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
            <div class="footer-inner-top">
                <div class="container">
                    <div class="footer-inner-top-menu">
                        <div class="footer-inner-top-menu-item">
                            <a href="/">Главная</a>
                        </div>
                        <div class="footer-inner-top-menu-item">
                            <a href="javascript:PopupLoginShow()">Войти<br></a>
                            <a href="javascript:PopupRegistrationShow()">Регистрация</a>
                        </div>
                        <div class="footer-inner-top-menu-item">
                            <a href="">Сдать<br></a>
                            <a href="">Заказать договор</a>
                        </div>
                    </div>
                </div>
                <div class="footer-inner-top-copy">
                    © 2018 onlir
                </div>
            </div>
            <div class="footer-inner-bottom">
                developed by den kochanovskiy<br>
                dkochanovskiy@gmail.com
            </div>
        </div>
    </footer>
    {{--popups--}}
    @include('include.popup.popup-login')
    @include('include.popup.popup-registration')
    {{--/popups--}}
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="http://code.jquery.com/jquery-2.0.2.min.js"></script>
    <script src="{{ URL::asset('js/script.js') }}"></script>
</body>
</html>