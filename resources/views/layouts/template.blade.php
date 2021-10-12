<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style2.css') }}">
    <link type="image/png" sizes="120x120" rel="icon" href="{{asset('img/logo_black.png')}}">

</head>
<body>
<header>
     <div class="logo_and_applic">
<a href="{{url('index')}}"><img class="logo" src="{{asset('img/logo.png')}}"></a>
    <a href="{{url('post')}}" class="button_applic">Заявки</a></div>
    <div class="auth">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            <div class="qw">
            @auth
                <a href="{{ url('/dashboard') }}" class="button_akk">{{ Auth::user()->firstname }}</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a class="button_exit" href="route('logout')"
                                     onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('Выход') }}
                    </a>
                </form>
            </div>
            @else
                <a href="{{ route('login') }}" class="button_log">Войти</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="button_reg">Регистрация</a>
                @endif
            @endauth

        </div>
    @endif
    </div>
</header>
<main class="content">
    @yield('website')
</main>
</body>
</html>

