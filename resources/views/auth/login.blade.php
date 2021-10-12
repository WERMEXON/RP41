<link rel="stylesheet" type="text/css" href="{{ asset('/css/log_reg.css') }}">
<title>Авторизация</title>
@extends('layouts.template')
@section('website')
    <div class="login-root">
        <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
            <div class="loginbackground box-background--white padding-top--80">
                <div class="loginbackground-gridContainer">
                    <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
                        <div class="box-root" style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
                        </div>
                    </div>
                    <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
                        <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;"></div>
                    </div>
                    <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
                        <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
                    </div>
                    <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
                        <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
                    </div>
                    <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
                        <div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;"></div>
                    </div>
                    <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
                        <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>
                    </div>
                    <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
                        <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
                    </div>
                    <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
                        <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>
                    </div>
                    <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
                        <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;"></div>
                    </div>
                </div>
            </div>
            <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
                <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center col">
                    <h1 ><a>Авторизация</a></h1>
                </div>
                <div class="formbg-outer">
                    <div class="formbg">
                        <div class="formbg-inner padding-horizontal--48">
                            <span class="padding-bottom--15">Войдите в свою учетную запись</span>
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />

                            <form method="POST" action="{{ route('login') }}" id="stripe-login">
                            @csrf
                                <div class="field padding-bottom--24">
                                    <x-label for="email" :value="__('Email')"></x-label>
                                        <x-input :value="old('email')" id="email" type="email" name="email"></x-input>
                                </div>
                                <div class="field padding-bottom--24">
                                    <div class="grid--50-50">
                                        <x-label for="password" :value="__('Пароль')"></x-label>

                                    </div>
                                    <input id="password" type="password" name="password" required autocomplete="current-password">
                                </div>
                                @if (Route::has('password.request'))
                                    @endif
                                <div class="field field-checkbox padding-bottom--24 flex-flex align-center">
                                    <label for="checkbox">
                                        <input id="remember_me" type="checkbox" name="checkbox"> Не выходить
                                    </label>
                                </div>

                                <div class="field padding-bottom--24">
                                    <input type="submit" name="submit" value="Войти">
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="footer-link padding-top--24">
                        <span>У вас нет учетной записи? <a href="{{ route('register') }}">Зарегистрируйтесь</a></span>
                        <div class="listing padding-top--24 padding-bottom--24 flex-flex center-center">
                            <span><a href="{{url('index')}}">Главная</a></span>
                            <span><a href="#">Заявки</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--
{{--                        <form method="POST" id="stripe-login" action="{{ route('login') }}">--}}
{{--                            @csrf--}}
{{--                            <div class="inputs">--}}
{{--                                <!-- Email Address -->--}}
{{--                                <div class="field padding-bottom--24">--}}
{{--                                    <x-label for="email" :value="__('Email')"/>--}}

{{--                                    <x-input id="email" class="block mt-1 w-full" type="email" name="email"--}}
{{--                                             :value="old('email')" required autofocus/>--}}
{{--                                </div>--}}

{{--                                <!-- Password -->--}}
{{--                                <div class="field padding-bottom--24">--}}
{{--                                    <x-label for="password" :value="__('Пароль')"/>--}}

{{--                                    <x-input id="password" class="block mt-1 w-full"--}}
{{--                                             type="password"--}}
{{--                                             name="password"--}}
{{--                                             required autocomplete="current-password"/>--}}
{{--                                </div>--}}

{{--                                <!-- Remember Me -->--}}
{{--                                <div class="remember">--}}
{{--                                    <input id="remember_me" type="checkbox" class="remem" name="remember">--}}

{{--                                    <span class="ml-2 text-sm text-gray-600">{{ __('Запомнить меня') }}</span>--}}

{{--                                </div>--}}

{{--                                <div class="flex items-center justify-end mt-4">--}}
{{--                                    @if (Route::has('password.request'))--}}
{{--                                        <a class="rainbow underline text-sm text-gray-600 hover:text-gray-900"--}}
{{--                                           href="{{ route('password.request') }}">--}}
{{--                                            {{ __('Забыли пароль?') }}--}}
{{--                                        </a>--}}
{{--                                    @endif--}}

{{--                                    <x-button id="but_log" class="button_login rainbow ">--}}
{{--                                        {{ __('Войти') }}--}}
{{--                                    </x-button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    {{--        <form method="POST" class="container" action="{{ route('login') }}">--}}
    {{--        @csrf--}}
    {{--<div class="inputs">--}}
    {{--    <div class="login-title">Авторизация</div>--}}
    {{--        <!-- Email Address -->--}}
    {{--            <div>--}}
    {{--                <label for="email">Email</label>--}}

    {{--                <input id="email" class="input_email" type="email" name="email" required autofocus/>--}}
    {{--            </div>--}}

    {{--            <!-- Password -->--}}
    {{--            <div>--}}
    {{--                <label for="password">Пароль</label>--}}
    {{--                <input id="password" class="input_pass"--}}
    {{--                       type="password"--}}
    {{--                       name="password"--}}
    {{--                       required autocomplete="current-password"/>--}}
    {{--            </div>--}}
    {{--                <div class="input_req">--}}
    {{--                    @if (Route::has('password.request'))--}}
    {{--                        <a class="underline text-sm text-gray-600 hover:text-gray-900"--}}
    {{--                           href="{{ route('password.request') }}">--}}
    {{--                            {{ __('Забыли пароль?') }}--}}
    {{--                        </a>--}}
    {{--                    @endif--}}
    {{--                </div>--}}
    {{--            </div>--}}

    {{--            <center>--}}

    {{--                <button class="button_login" type="submit">--}}
    {{--                    {{ __('Войти') }}--}}
    {{--                </button>--}}
    {{--            </center>--}}
    {{--        </form>--}}


    {{--    </div>--}}
    {{--    </div>--}}
@endsection
