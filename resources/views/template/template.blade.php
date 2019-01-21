<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery.maskedinput.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-filestyle.min.js') }}"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <title>onlir - Аренда недвижимости в России</title>
</head>
<body>
    <header class="margin-10">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <a href="{{ route('welcome') }}">
                        <img src="{{ asset('images/logo.png') }}" alt="Логотип Onlir">
                    </a>
                </div>
                @guest
                <div class="col-md-offset-7 col-md-3 margin-30">
                    <a href="javascript:PopupLoginShow()">
                        Войти
                    </a>
                    /
                    <a href="javascript:PopupRegistrationShow()">
                        Регистрация
                    </a>
                </div>
                @endauth
                @auth
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-offset-2 col-md-2">
                            <a href="{{ route('soobshcheniya') }}">
                                <span class="glyphicon glyphicon-envelope"></span>
                                &#160;Сообщения
                            </a>
                        </div>
                        <div class="col-md-2">
                            <a href="{{ route('izbrannoye') }}">
                                <span class="glyphicon glyphicon-star"></span>
                                &#160;Избранное
                            </a>
                        </div>
                        <div class="col-md-4">
                            <ul class="list-group" style="list-style-type: none;">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                        <span class="glyphicon glyphicon-home"></span>&#160;{{ Auth::user()->email }} <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu list-group">
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
                                            <a href="{{ route('vybor_tipa_nedvizhimosti') }}"
                                               onclick="event.preventDefault();
                                             document.getElementById('ad-delivery-form').submit();">
                                                Подать объявления
                                            </a>
                                            <form id="ad-delivery-form" action="{{ route('vybor_tipa_nedvizhimosti') }}" method="POST" style="display: none;">
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
            </div><!--row-->
        </div><!--container-->
    </header>
    <section>

                @section('content')
                @show

    </section>
    {{--<footer>--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12">--}}
                    {{--<div class="row center-block margin-30">--}}
                        {{--<div class="col-md-offset-3 col-md-1">--}}
                            {{--<a href="{{ route('welcome') }}">Главная</a>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-offset-1 col-md-1">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-md-12">--}}
                                    {{--<a href="javascript:PopupLoginShow()">--}}
                                        {{--Войти--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-12  margin-30">--}}
                                    {{--<a href="javascript:PopupRegistrationShow()">--}}
                                        {{--Регистрация--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-offset-1 col-md-2">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-md-12">--}}
                                    {{--<a href="{{ route('razmeshcheniye-obyavleniya') }}">--}}
                                        {{--Сдать квартиру--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-12  margin-30">--}}
                                    {{--<a href="{{ route('razmeshcheniye-obyavleniya') }}">--}}
                                        {{--Заказать договор--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-12">--}}
                            {{--© 2018 onlir--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div><!--row-->--}}
        {{--</div><!--container-->--}}
    {{--</footer>--}}
    {{--popups--}}
    @include('include.popup.popup-login')
    @include('include.popup.popup-registration')
    {{--/popups--}}

    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</body>
</html>