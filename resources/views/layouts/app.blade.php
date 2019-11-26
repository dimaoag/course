<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">

    <link rel="preload" href="{{ asset('build/fonts/Roboto-Light.woff2') }}" as="font" type="font/woff2"
          crossorigin="anonymous">
    <link rel="preload" href="{{ asset('build/fonts/Roboto-Medium.woff2') }}" as="font" type="font/woff2"
          crossorigin="anonymous">


    {{--    <link rel="stylesheet" href="{{ asset('build/css/style.min.css')}}">--}}
    <link href="{{ mix('css/style.css', 'build') }}" rel="stylesheet">
</head>
<body>

<div style="display: none">
    <include src="../img/sprite.svg"></include>
</div>

<div class="wrapper">
    <header>
        <nav class="navigation navigation--no-js">
            <div class="mobile-menu">
                <div class="mobile-menu__header">
                    <div class="logo logo--mobile-menu">
                        <a href="/" class="logo__link">
                            <picture>
                                <img src="{{ asset('build/img/logo-375.png') }}" width="167" height="45"
                                     alt="Логотип сайта">
                            </picture>
                        </a>
                    </div>
                    <a href="#" class="button button--mobile-menu">
                        Мой кабинет
                    </a>
                </div>
                <ul class="mobile-menu__list">
                    <li class="mobile-menu__item">
                        <a href="#" class="mobile-menu__link">
                            <svg width="21" height="21">
                                <use xlink:href="#icon-mobile-home"></use>
                            </svg>
                            Главная
                        </a>
                    </li>
                    <li class="mobile-menu__item">
                        <a href="#" class="mobile-menu__link">
                            <svg width="21" height="21">
                                <use xlink:href="#icon-mobile-curse"></use>
                            </svg>
                            Курсы
                        </a>
                    </li>
                    <li class="mobile-menu__item">
                        <a href="#" class="mobile-menu__link">
                            <svg width="21" height="21">
                                <use xlink:href="#icon-mobile-curse-online"></use>
                            </svg>
                            Онлайн-курсы
                        </a>
                    </li>
                    <li class="mobile-menu__item">
                        <a href="#" class="mobile-menu__link">
                            <svg width="20" height="21">
                                <use xlink:href="#icon-mobile-master-class"></use>
                            </svg>
                            Мастер-классы
                        </a>
                    </li>
                    <li class="mobile-menu__item">
                        <a href="#" class="mobile-menu__link">
                            <svg width="21" height="21">
                                <use xlink:href="#icon-mobile-school"></use>
                            </svg>
                            Школы
                        </a>
                    </li>
                    <li class="mobile-menu__item mobile-menu__item--indicator">
                        <a href="#" class="mobile-menu__link">
                            <svg width="23" height="21">
                                <use xlink:href="#icon-mobile-like"></use>
                            </svg>
                            Избранные
                            <span class="mobile-menu__indicator">
                1
              </span>
                        </a>
                    </li>
                    <li class="mobile-menu__item">
                        <a href="#" class="mobile-menu__link">
                            <svg width="23" height="21">
                                <use xlink:href="#icon-mobile-place"></use>
                            </svg>
                            Разместить огранизацию
                        </a>
                    </li>
                </ul>
                <div class="mobile-menu__footer">
                    <ul class="language">
                        <li class="language__item">
                            <a href="#" class="language__link">
                                українська
                            </a>
                        </li>
                        <li class="language__item language__item--active">
                            <a class="language__link">
                                русский
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="navigation__user-wrapper">
                <div class="container navigation__user--inner">
                    <ul class="language language--header">
                        <li class="language__item">
                            <a href="#" class="language__link">
                                українська
                            </a>
                        </li>
                        <li class="language__item language__item--active">
                            <a class="language__link">
                                русский
                            </a>
                        </li>
                    </ul>
                    <ul class="user-features user-features--header">
                        <li class="user-features__item">
                            <a href="#" class="user-features__link">
                                Идеи по улучшению сайта
                            </a>
                        </li>
                        <li class="user-features__item">
                            <a href="#" class="user-features__link">
                                Войти
                            </a>
                        </li>
                        <li class="user-features__item user-features__item--registration">
                            <a href="#" class="user-features__link">
                                Зарегистрироваться
                                <svg width="13" height="7" class="user-features__drop-icon">
                                    <use xlink:href="#icon-arrow"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container navigation__inner navigation__inner--middle">
                <button type="button" class="navigation__open-menu" aria-label="Открыть меню">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="logo logo--header">
                    <a href="/" class="logo__link">
                        <picture>
                            <img src="{{ asset('build/img/logo-375.png') }}" width="167" height="45" alt="Логотип сайта">
                        </picture>
                    </a>
                </div>
                <div class="navigation__text">
                    <p class="navigation__curse">
                        6 544
                    </p>
                    <p class="navigation__count-curse">
                        Объявления
                        о курсах
                    </p>
                </div>
                <a href="#" class="like like--header" aria-label="Понравившееся">
                    <svg width="23" height="21">
                        <use xlink:href="#icon-like"></use>
                    </svg>
                    <span class="like__count">
            1
          </span>
                </a>
                <div class="search">
                    <label for="search" class="search__label">
            <span class="visually-hidden">
              Поиск
            </span>
                        <svg width="15" height="16" class="search__icon">
                            <use xlink:href="#icon-search"></use>
                        </svg>
                    </label>
                    <input type="search" name="search" class="input input--search" placeholder="Я ищу..." id="search">
                </div>
                <a href="#" class="button button--organization-header">
                    Разместить организацию
                </a>
            </div>
            <div class="navigation__wrapper-menu">
                <div class="container navigation__inner--menu">
                    <ul class="menu">
                        <li class="menu__list menu__list--active">
                            <a class="menu__link">
                                Курсы
                            </a>
                        </li>
                        <li class="menu__list">
                            <a href="#" class="menu__link">
                                Онлайн курсы
                            </a>
                        </li>
                        <li class="menu__list">
                            <a href="#" class="menu__link">
                                Мастер-классы
                            </a>
                        </li>
                        <li class="menu__list">
                            <a href="#" class="menu__link">
                                Школы
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="overlay"></div>
        </nav>
    </header>
    <main class="site-main">
        @yield('content')
    </main>
    <footer class="site-footer">
        <div class="container site-footer__inner-top">
            <div class="site-footer__social">
                <div class="logo logo--footer">
                    <a href="/" class="logo__link">
                        <picture>
                            <img src="{{ asset('build/img/logo-375.png') }}" width="167" height="45" alt="Логотип сайта">
                        </picture>
                    </a>
                </div>
                <div class="social social--footer">
                    <p class="social__title">
                        Присойденяйтесь к нам
                    </p>
                    <ul class="social__list">
                        <li class="social__item">
                            <a href="#" class="social__link" aria-label="Мы в инстаграм">
                                <svg width="20" height="19">
                                    <use xlink:href="#icon-instargam"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="social__item">
                            <a href="#" class="social__link" aria-label="Мы в ютуб">
                                <svg width="27" height="19">
                                    <use xlink:href="#icon-youtube"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="social__item">
                            <a href="#" class="social__link" aria-label="Мы в телеграм">
                                <svg width="20" height="19">
                                    <use xlink:href="#icon-telegram"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="site-footer__navigation">
                <div class="site-footer__column">
                    <div class="site-footer__title-wrapper">
                        <h6 class="h6">
                            Пользователям
                        </h6>
                        <button type="button" class="site-footer__toggle" aria-label="Открыть меню">
                            <svg width="13" height="7">
                                <use xlink:href="#icon-arrow"></use>
                            </svg>
                        </button>
                    </div>
                    <ul class="site-footer__menu site-footer__menu--no-js">
                        <li>
                            <a href="#">
                                Офлайн курсы
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Онлайн курсы
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Мастер-классы
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Школы
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Статьи
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="site-footer__column">
                    <div class="site-footer__title-wrapper">
                        <h6 class="h6">
                            Организациям
                        </h6>
                        <button type="button" class="site-footer__toggle" aria-label="Открыть меню">
                            <svg width="13" height="7">
                                <use xlink:href="#icon-arrow"></use>
                            </svg>
                        </button>
                    </div>
                    <ul class="site-footer__menu site-footer__menu--no-js">
                        <li>
                            <a href="#">
                                О проекте
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Услуги и тарифы
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                База знаний
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Контакты
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="site-footer__column">
                    <div class="site-footer__title-wrapper">
                        <h6 class="h6">
                            Общее
                        </h6>
                        <button type="button" class="site-footer__toggle" aria-label="Открыть меню">
                            <svg width="13" height="7">
                                <use xlink:href="#icon-arrow"></use>
                            </svg>
                        </button>
                    </div>
                    <ul class="site-footer__menu site-footer__menu--no-js">
                        <li>
                            <a href="#">
                                Улучшения сайта
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Правила сайта
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Оферта
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="site-footer__background">
            <div class="container site-footer__inner site-footer__inner--bottom">
                <p class="site-footer__copyright">
                    © 2019 Get Skill
                </p>
                <ul class="site-footer__pay">
                    <li>
                        <picture>
                            <source media="(min-width: 992px)" srcset="{{ asset('build/img/visa-tablet.png') }}">
                            <img src="{{ asset('build/img/visa.png') }}" width="45" height="14" alt="Visa">
                        </picture>
                    </li>
                    <li>
                        <picture>
                            <source media="(min-width: 992px)" srcset="{{ asset('build/img/mastercard-tablet.png') }}">
                            <img src="{{ asset('build/img/mastercard.png') }}" width="32" height="19" alt="MasterCard">
                        </picture>
                    </li>
                    <li>
                        <picture>
                            <source media="(min-width: 992px)" srcset="{{ asset('build/img/liqpay-tablet.png') }}">
                            <img src="{{ asset('build/img/liqpay.png') }}" width="64" height="14" alt="Liqpay">
                        </picture>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</div>

{{--    <script src="{{ asset('build/js/scripts.min.js')}}"></script>--}}
<script src="{{ mix('js/app.js', 'build') }}"></script>
</body>
</html>






