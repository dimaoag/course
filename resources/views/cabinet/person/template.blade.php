@extends('layouts.app')

@section('content')

    <section class="cabinet">
        <div class="container cabinet__inner">
            <div class="menu-cabinet">
                <div class="menu-cabinet__item">
                    <a href="#" class="menu-cabinet__link">
                        <svg width="21" height="21">
                            <use xlink:href="#icon-cabinet-like"></use>
                        </svg>
                        {{ __('cabinet/person/sidebar.Favorites') }}
                    </a>
                </div>
                <div class="menu-cabinet__item {{ Request::is(app()->getLocale() . '/cabinet-person/profile*') ? 'active' : '' }}">
                    <a class="menu-cabinet__link">
                        <svg width="21" height="21">
                            <use xlink:href="#icon-cabinet-setting"></use>
                        </svg>
                        {{ __('cabinet/person/sidebar.Settings') }}
                    </a>
                </div>
                <div class="menu-cabinet__item">
                    <a href="#" class="menu-cabinet__link">
                        <svg width="21" height="20">
                            <use xlink:href="#icon-cabinet-star"></use>
                        </svg>
                        {{ __('cabinet/person/sidebar.Reviews') }}
                    </a>
                </div>
                <div class="menu-cabinet__item menu-cabinet__item--separator">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="menu-cabinet__link">
                            <svg width="21" height="21">
                                <use xlink:href="#icon-cabinet-exit"></use>
                            </svg>
                            {{ __('cabinet/person/sidebar.Log out') }}
                        </button>
                    </form>
                </div>
            </div>
            @yield('cabinet')
        </div>
    </section>

@endsection
