<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}" />

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <title>onLir</title>
</head>
<body>
    <header>
        <div class="container">
            <a href="/"><div class="header-logo"></div></a>
            <div class="header-change_city">
                <a href="/">Выбрать город</a>
            </div>
            <div class="header-auth_reg">
                <div class="auth">
                    <a href="/login">Вход<br>в личный кабинет</a>
                </div>
                <div class="reg">
                    <a href="/register">Регистрация</a>
                </div>
            </div>
        </div>
        <div class="header-green_band"></div>
    </header>
    <div class="collapse navbar-collapse" id="app-navbar-collapse">
        <!-- Left Side Of Navbar -->
        <ul class="nav navbar-nav">
            &nbsp;
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            @guest
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
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
    <div class="container">
        <div class="content">
            <div class="content-left">
                <div class="btn btn-primary content-button rent">сдать</div>
                <div class="btn btn-primary content-button rent take">снять</div>
                <div class="btn btn-primary content-button order">заказать договор</div>
            </div>
            {{--<div class="content-right">--}}
                {{--<div class="rightbar">--}}
                    {{--<h4>Объявления от риэлторов<br></h4>--}}
                    {{--Разнообразный и богатый опыт постоянное информационно-пропагандистское обеспечение нашей деятельности обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений развития. Значимость этих проблем настолько очевидна, что реализация намеченных плановых заданий в значительной степени обуславливает создание новых предложений. Равным образом сложившаяся структура организации представляет собой интересный эксперимент проверки направлений прогрессивного развития.--}}
                {{--</div>--}}
            {{--</div>--}}
            @section('content')
            @show
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="footer-inner">
                © 2018 onLir
            </div>
        </div>
    </footer>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>