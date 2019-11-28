<?php

$title = trans('cabinet/person/profile/home.Title');
$description = '';
$keywords = '';

?>

@extends('cabinet.person.template')

@section('title', $title)
@section('description', $description)
@section('keywords', $keywords)


@section('cabinet')

    <div class="cabinet__info-block">
        <form action="user-cabinet.php" method="post" enctype="multipart/form-data">
            <div class="cabinet__form">
                <div class="cabinet__page-name">
                    <h2 class="h2">{{ $title }}</h2>
                    <div class="cabinet__submit cabinet__submit--hidden">
                        <button type="submit" class="button button--cabinet-submit button--save button--green">
                            <svg width="20" height="21"><use xlink:href="#icon-save"></use></svg>
                            {{ __('cabinet/person/profile/home.Save') }}
                        </button>
                    </div>
                </div>
                <div class="cabinet__item cabinet__item--avatar">
                    <div class="load-file">
                        <input type="file" name="cabinet_user_avatar&quot;" id="cabinet_user_avatar" class="load-file__input visually-hidden">
                        <label for="cabinet_user_avatar" class="load-file__content">
                            <svg width="40" height="42">
                                <use xlink:href="#icon-download-file"></use>
                            </svg>
                            <span class="visually-hidden">
                                {{ __('cabinet/person/profile/home.Download avatar') }}
                            </span>
                        </label>
                    </div>
                </div>
                <div class="cabinet__item">
                    <div class="cabinet__description">
                        <p class="cabinet__title">{{ __('cabinet/person/profile/home.Private information') }}</p>
                        <p class="cabinet__text">{{ __('cabinet/person/profile/home.Used for review') }}</p>
                    </div>
                    <ul class="cabinet__list">
                        <li>
                            <label for="user_cabinet_name" class="label">
                                {{ __('cabinet/person/profile/home.First Name') }}
                            </label>
                            <input type="text" name="user_cabinet_name" class="input input--cabinet" id="user_cabinet_name">
                        </li>
                        <li>
                            <label for="user_cabinet_phone" class="label">
                                {{ __('cabinet/person/profile/home.Phone') }}
                            </label>
                            <input type="tel" name="user_cabinet_phone" class="input input--cabinet" id="user_cabinet_phone">
                        </li>
                    </ul>
                </div>
                <div class="cabinet__item">
                    <div class="cabinet__description">
                        <p class="cabinet__title">{{ __('cabinet/person/profile/home.Login and password') }}</p>
                        <p class="cabinet__text">
                            {{ __('cabinet/person/profile/home.Used for authorization') }}
                        </p>
                    </div>
                    <div class="cabinet__details">
                        <p>
                            <span>{{ __('cabinet/person/profile/home.Email') }}</span>
                            <a href="#">{{ __('cabinet/person/profile/home.Edit') }}</a>
                        </p>
                        <p>
                            <span>{{ __('cabinet/person/profile/home.Password') }}</span>
                            <a href="#">{{ __('cabinet/person/profile/home.Edit') }}</a>
                        </p>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
