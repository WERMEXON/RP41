<link rel="stylesheet" type="text/css" href="{{ asset('/css/log_reg.css') }}">
<title>Регистрация</title>
@extends('layouts.template')
@section('website')
    <div class="login-root">
        <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
            <div class="loginbackground box-background--white padding-top--80">
                <div class="loginbackground-gridContainer">
                    <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
                        <div class="box-root"
                             style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
                        </div>
                    </div>
                    <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
                        <div class="box-root box-divider--light-all-2 animationLeftRight tans3s"
                             style="flex-grow: 1;"></div>
                    </div>
                    <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
                        <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
                    </div>
                    <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
                        <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
                    </div>
                    <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
                        <div class="box-root box-background--gray100 animationLeftRight tans3s"
                             style="flex-grow: 1;"></div>
                    </div>
                    <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
                        <div class="box-root box-background--cyan200 animationRightLeft tans4s"
                             style="flex-grow: 1;"></div>
                    </div>
                    <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
                        <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
                    </div>
                    <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
                        <div class="box-root box-background--gray100 animationRightLeft tans4s"
                             style="flex-grow: 1;"></div>
                    </div>
                    <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
                        <div class="box-root box-divider--light-all-2 animationRightLeft tans3s"
                             style="flex-grow: 1;"></div>
                    </div>
                </div>
            </div>
            <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
                <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center col">
                    <h1><a>Регистрация</a></h1>
                </div>
                <div class="formbg-outer">
                    <div class="formbg">
                        <div class="formbg-inner padding-horizontal--48">
                            <span class="padding-bottom--15">Зарегистрируйтесь</span>
                            <x-auth-validation-errors class="mb-4" :errors="$errors"/>
                            <form method="POST" action="{{ route('register') }}" id="stripe-login">
                                @csrf
                                <div class="field padding-bottom--24">
                                    <x-label for="lastname" :value="__('Фамилия')">Фамилия</x-label>
                                    <x-input :value="old('lastname')" id="lastname" type="text"
                                             name="lastname"></x-input>
                                </div>
                                <div class="field padding-bottom--24">
                                    <x-label for="firstname" :value="__('Имя')"></x-label>
                                    <x-input :value="old('firstname')" id="firstname" type="text"
                                             name="firstname"></x-input>
                                </div>
                                <div class="field padding-bottom--24">
                                    <x-label for="patronymic" :value="__('Отчество')"></x-label>
                                    <x-input :value="old('patronymic')" id="patronymic" type="text"
                                             name="patronymic"></x-input>
                                </div>
                                <div class="field padding-bottom--24">
                                    <x-label for="name" :value="__('Логин')"></x-label>
                                    <x-input :value="old('name')" id="name" type="text" name="name"></x-input>
                                </div>
                                <div class="field padding-bottom--24">
                                    <x-label for="email" :value="__('Email')"></x-label>
                                    <x-input :value="old('email')" id="email" type="email" name="email"></x-input>
                                </div>


                                <div class="field padding-bottom--24">
                                    <div class="grid--50-50">
                                        <x-label for="password">Пароль</x-label>
                                    </div>
                                    <x-input id="password" type="password" name="password" required
                                             autocomplete="new-password"></x-input>
                                </div>
                                <div class="field padding-bottom--24">
                        <x-label for="password_confirmation" :value="__('Повторите пароль ')" />

                        <x-input id="password_confirmation"
                                 type="password"
                                 name="password_confirmation" required />
                    </div>

                                <div class="field padding-bottom--24">
                                    <input type="submit" name="submit" value="Войти">
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="footer-link padding-top--24">
                        <span>Уже <a href="{{ route('login') }}">зарегистрированы?</a></span>
                        <div class="listing padding-top--24 padding-bottom--24 flex-flex center-center">
                            <span><a href="{{url('index')}}">Главная</a></span>
                            <span><a href="#">Заявки</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--    <div class="style_form_auth">--}}
    {{--            <!-- Validation Errors -->--}}
    {{--            <x-auth-validation-errors class="mb-4" :errors="$errors" />--}}

    {{--            <form method="POST" class="container_reg" action="{{ route('register') }}">--}}
    {{--            @csrf--}}

    {{--                <div class="inputs">--}}
    {{--            <!-- Name -->--}}
    {{--                    <div class="login-title">Регистрация</div>--}}
    {{--                <div>--}}
    {{--                    <x-label for="lastname" :value="__('Фамилия')" />--}}

    {{--                    <x-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required autofocus />--}}
    {{--                </div>--}}
    {{--                <div>--}}
    {{--                    <x-label for="firstname" :value="__('Имя')" />--}}

    {{--                    <x-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required autofocus />--}}
    {{--                </div>--}}
    {{--                <div>--}}
    {{--                    <x-label for="patronymic" :value="__('Отчество')" />--}}

    {{--                    <x-input id="patronymic" class="block mt-1 w-full" type="text" name="patronymic" :value="old('patronymic')" required autofocus />--}}
    {{--                </div>--}}
    {{--                <div>--}}
    {{--                    <x-label for="login" :value="__('Логин')" />--}}

    {{--                    <x-input id="login" class="block mt-1 w-full" type="text" name="logiin" :value="old('loggin')" required autofocus />--}}
    {{--                </div>--}}

    {{--                <!-- Email Address -->--}}
    {{--                <div class="mt-4">--}}
    {{--                    <x-label for="email" :value="__('Email')" />--}}

    {{--                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />--}}
    {{--                </div>--}}

    {{--                <!-- Password -->--}}
    {{--                <div class="mt-4">--}}
    {{--                    <x-label for="password" :value="__('Пароль')" />--}}

    {{--                    <x-input id="password" class="block mt-1 w-full"--}}
    {{--                             type="password"--}}
    {{--                             name="password"--}}
    {{--                             required autocomplete="new-password" />--}}
    {{--                </div>--}}

    {{--                <!-- Confirm Password -->--}}
    {{--                <div class="mt-4">--}}
    {{--                    <x-label for="password_confirmation" :value="__('повторите пароль ')" />--}}

    {{--                    <x-input id="password_confirmation" class="block mt-1 w-full"--}}
    {{--                             type="password"--}}
    {{--                             name="password_confirmation" required />--}}
    {{--                </div>--}}

    {{--                <div class="flex items-center justify-end mt-4">--}}
    {{--                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">--}}
    {{--                        {{ __('Вы уже зарегистрированы ?') }}--}}
    {{--                    </a>--}}

    {{--                    <x-button class="button_login">--}}
    {{--                        {{ __('Зарегистрироваться') }}--}}
    {{--                    </x-button>--}}
    {{--                </div>--}}
    {{--                </div>--}}
    {{--            </form>--}}
    {{--    </div>--}}


    {{--        <div class="style_form_auth">--}}
    {{--        <!-- Validation Errors -->--}}
    {{--        <x-auth-validation-errors class="mb-4" :errors="$errors"/>--}}

    {{--        <form method="POST" class="form_reg" action="{{ route('register') }}">--}}
    {{--        @csrf--}}

    {{--        <!-- Lastname -->--}}
    {{--            <div>--}}
    {{--                <p class="input_p">Фамилия</p>--}}

    {{--                <input id="lastname" class="input_email" type="text" name="lastname" required autofocus/>--}}
    {{--            </div>--}}

    {{--            <!-- Firstname -->--}}
    {{--            <div>--}}
    {{--                <p class="input_p">Имя</p>--}}

    {{--                <input id="firstname" class="input_email" type="text" name="firstname" required autofocus/>--}}
    {{--            </div>--}}

    {{--            <!-- patronymic -->--}}
    {{--            <div>--}}
    {{--                <p class="input_p">Отчество</p>--}}

    {{--                <input id="patronymic" class="input_email" type="text" name="patronymic" required autofocus/>--}}
    {{--            </div>--}}

    {{--            <!-- Login -->--}}
    {{--            <div>--}}
    {{--                <p class="input_p">Логин</p>--}}

    {{--                <input id="logiin" class="input_email" type="text" name="logiin" required autofocus/>--}}
    {{--            </div>--}}
    {{--            <!-- Email Address -->--}}
    {{--            <div class="mt-4">--}}
    {{--                <label>Email</label>--}}

    {{--                <input id="email" class="input_email" type="email" :value="old('email')" name="email" required/>--}}
    {{--            </div>--}}

    {{--            <!-- Password -->--}}
    {{--            <div class="mt-4">--}}
    {{--                <p class="input_p">Пароль</p>--}}

    {{--                <x-input id="password" class="input_pass"--}}
    {{--                         type="password"--}}
    {{--                         name="password"--}}
    {{--                         required autocomplete="new-password"/>--}}
    {{--            </div>--}}

    {{--            <!-- Confirm Password -->--}}
    {{--            <div class="mt-4">--}}
    {{--                <p class="input_p">Повторите пароль</p>--}}

    {{--                <x-input id="password_confirmation" class="input_pass"--}}
    {{--                         type="password"--}}
    {{--                         name="password_confirmation" required/>--}}
    {{--            </div>--}}

    {{--            <div class="input_req">--}}
    {{--                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">--}}
    {{--                    {{ __('Вы уже зарегистрированы?') }}--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <button class="form_button_reg">--}}
    {{--                {{ __('Зарегистрироваться') }}--}}
    {{--            </button>--}}

    {{--        </form>--}}
    {{--    </div>--}}
@endsection
