<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    {{--<link rel="stylesheet" type="text/css" href="{{ asset('css/slider-style.css') }}" />--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slider-style-css.css') }}" />
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <title>onlir - Аренда недвижимости в России</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="header-logo-wrap">
                <a href="/">
                    <div class="header-logo"></div>
                </a>
            </div>
            @guest
            <div class="header-auth">
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="javascript:PopupLoginShow()">Войти</a></li>
                        <li><a href="javascript:PopupRegistrationShow()">Регистрация</a></li>
                    </ul>
                </div>
            </div>
            @else
                <div class="header-registered">
                    <div class="header-registered-item-wrap">
                        <div class="header-registered-item">
                            <a href="{{ route('messages') }}"><span class="glyphicon glyphicon-envelope"></span>&#160;Сообщения</a>
                        </div>
                        <div class="header-registered-item">
                            <a href="{{ route('favorites') }}"><span class="glyphicon glyphicon-star"></span>&#160;Избранное</a>
                        </div>
                        <div class="header-registered-item">
                            <ul>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                        <span class="glyphicon glyphicon-home"></span>&#160;{{ Auth::user()->email }} <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="{{ route('home') }}"
                                               onclick="event.preventDefault();
                                         document.getElementById('home-form').submit();">
                                                Мои объявления
                                            </a>
                                            <form id="home-form" action="{{ route('home') }}" method="POST" style="display: none;">
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
                                         document.getElementById('amend-contract-form').submit();">
                                                Изменить договор
                                            </a>
                                            <form id="amend-contract-form" action="{{ route('amend-contract') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                        <li>
                                            <a href="{{ route('ad-delivery') }}"
                                               onclick="event.preventDefault();
                                         document.getElementById('ad-delivery-form').submit();">
                                                Подать объявления
                                            </a>
                                            <form id="ad-delivery-form" action="{{ route('ad-delivery') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                        <li>
                                            <a href="{{ route('settings') }}"
                                               onclick="event.preventDefault();
                                         document.getElementById('settings-form').submit();">
                                                Настройки
                                            </a>
                                            <form id="settings-form" action="{{ route('settings') }}" method="POST" style="display: none;">
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
                            </ul>
                        </div>
                    </div>
                </div>
                @endguest
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
                        <div class="footer-inner-top-menu-item footer-inner-top-menu-item-left">
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
                    <div class="footer-inner-top-copy">
                        © 2018 onlir
                    </div>
                </div>
            </div>
        </div>
    </footer>
    {{--popups--}}
    @include('include.popup.popup-login')
    @include('include.popup.popup-registration')
    {{--/popups--}}
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-1.7.2.min.js') }}"></script>
    <script src="{{ asset('js/jquery.maskedinput.min.js') }}"></script>
    {{--<script src="{{ asset('js/slider-script.js') }}"></script>--}}
    <script src="{{ asset('js/script.js') }}"></script>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</body>
</html>