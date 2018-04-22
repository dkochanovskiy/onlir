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
                        <li><a href="javascript:PopUpShow()" class="btn btn-default">Войти</a></li>
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
    <div class="popup-auth" id="popup-auth">
        <div class="popup-auth-content">
            Text in Popup
            <a href="javascript:PopUpHide()">Hide popup</a>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="http://code.jquery.com/jquery-2.0.2.min.js"></script>
    <script src="{{ URL::asset('js/script.js') }}"></script>
</body>
</html>