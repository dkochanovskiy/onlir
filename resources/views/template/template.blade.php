<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
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
            @endauth
            @auth
                <div class="header-registered">
                    <div class="header-registered-item-wrap">
                        <div class="header-registered-item">
                            <a href="{{ route('soobshcheniya') }}"><span class="glyphicon glyphicon-envelope"></span>&#160;Сообщения</a>
                        </div>
                        <div class="header-registered-item">
                            <a href="{{ route('izbrannoye') }}"><span class="glyphicon glyphicon-star"></span>&#160;Избранное</a>
                        </div>
                        <div class="header-registered-item">
                            <ul>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                        <span class="glyphicon glyphicon-home"></span>&#160;{{ Auth::user()->email }} <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="{{ route('moi-obyavleniya') }}"
                                               onclick="event.preventDefault();
                                         document.getElementById('my-announcements-form').submit();">
                                                Мои объявления
                                            </a>
                                            <form id="my-announcements-form" action="{{ route('moi-obyavleniya') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                        <li>
                                            <a href="{{ route('koshelek') }}"
                                               onclick="event.preventDefault();
                                         document.getElementById('purse-form').submit();">
                                                Кошелек
                                            </a>
                                            <form id="purse-form" action="{{ route('koshelek') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                        <li>
                                            <a href="{{ route('redaktirovaniye-dogovora') }}"
                                               onclick="event.preventDefault();
                                         document.getElementById('amend-contract-form').submit();">
                                                Редактирование договора
                                            </a>
                                            <form id="amend-contract-form" action="{{ route('redaktirovaniye-dogovora') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                        <li>
                                            <a href="{{ route('razmeshcheniye-obyavleniya') }}"
                                               onclick="event.preventDefault();
                                         document.getElementById('ad-delivery-form').submit();">
                                                Подать объявления
                                            </a>
                                            <form id="ad-delivery-form" action="{{ route('razmeshcheniye-obyavleniya') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                        <li>
                                            <a href="{{ route('nastroyki') }}"
                                               onclick="event.preventDefault();
                                         document.getElementById('settings-form').submit();">
                                                Настройки
                                            </a>
                                            <form id="settings-form" action="{{ route('nastroyki') }}" method="POST" style="display: none;">
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
            @endauth
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
    <script src="{{ asset('js/jquery-1.7.2.min.js') }}"></script>
    <script src="{{ asset('js/jquery.maskedinput.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</body>
</html>