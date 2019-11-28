<?php

$title = trans('auth/register-person.Title') . 'person';
$description = '';
$keywords = '';

?>

@extends('layouts.app')

@section('title', $title)
@section('description', $description)
@section('keywords', $keywords)



@section('content')

<section class="registration registration--user">
        <div class="registration__mobile-navigation">
            <div class="container registration__inner">
                <ul class="registration__menu">
                    <li class="registration__item">
                        <a href="#">{{ __('auth/register-person.Menu item user') }}</a>
                    </li>
                    <li class="registration__item registration__item--active">
                        <a>{{ __('auth/register-person.Menu item organization') }}</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="registration__background registration__background--desktop">
            <div class="registration__content">
                <div class="registration__background registration__background--mobile">
                    <article class="registration__info-block">
                        <div class="container">
                            <div class="registration__text">
                                <h2>
                                    {!! __('auth/register-person.Join now to') !!}  GetSkill
                                </h2>
                                <ul>
                                    <li>
                                        {{ __('auth/register-person.Background phrase one') }}
                                    </li>
                                    <li>
                                        {{ __('auth/register-person.Background phrase two') }}
                                    </li>
                                    <li>
                                        {{ __('auth/register-person.Background phrase three') }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="registration__form">
                    <div class="container">
                        <form method="POST" action="{{ route('register', app()->getLocale()) }}" id="registration_user">
                            @csrf
                            <input type="hidden" name="type" value="person">
                            <div class="form form--registration">
                                <p class="form__control">
                                    <?php $name = 'name' ?>
                                    <label for="registration_user_name" class="label">
                                        {{ __('auth/register-person.First Name') }}
                                    </label>
                                    <input type="text" name="{{$name}}"
                                           class="input input--registration @error($name)is-invalid @enderror"
                                           id="registration_user_name"
                                           required autocomplete="{{$name}}" autofocus
                                           value="{{ old($name) }}"
                                    >
                                    @error($name)
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </p>
                                <p class="form__control">
                                    <?php $name = 'email' ?>
                                    <label for="registration_user_email" class="label">
                                        {{ __('auth/register-person.Email') }}
                                    </label>
                                    <input type="email" name="{{$name}}" class="input input--registration @error($name)is-invalid @enderror"
                                           id="registration_user_email"
                                           required autocomplete="{{$name}}"
                                           value="{{ old($name) }}"
                                    >
                                    @error($name)
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </p>
                                <p class="form__control">
                                    <?php $name = 'password' ?>
                                    <label for="registration_user_password" class="label">
                                        {{ __('auth/register-person.Password') }}
                                    </label>
                                    <input type="password" name="{{$name}}"
                                           class="input input--registration @error($name)is-invalid @enderror"
                                           id="registration_user_password"
                                           required
                                    >
                                    @error($name)
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </p>
                                <p class="form__control">
                                    <?php $name = 'password_confirmation' ?>
                                    <label for="registration_user_password_repeat" class="label">
                                        {{ __('auth/register-person.Password confirm') }}
                                    </label>
                                    <input type="password" name="{{$name}}"
                                           class="input input--registration @error($name)is-invalid @enderror"
                                           id="registration_user_password_repeat"
                                           required
                                    >
                                    @error($name)
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </p>
                                <p class="form__control checkbox">
                                    <input type="checkbox" name="policy"
                                           id="registration_privacy_policy"
                                           class="visually-hidden checkbox__input"
                                    >
                                    <label for="registration_privacy_policy" class="checkbox__label">
                                        {{ __('auth/register-person.With') }}
                                        <a href="#" class="link">
                                            {{ __('auth/register-person.Privacy policy') }}
                                        </a>
                                        {{ __('auth/register-person.Acquainted') }}
                                    </label>
                                </p>
                                <p class="form__control form__control--submit">
                                    <button type="submit" class="button button--registration">
                                        {{ __('auth/register-person.Sign Up') }}
                                    </button>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
