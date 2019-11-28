<?php

$title = trans('cabinet/person/home.Title');
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
                    <h2 class="h2">
                        Настройки
                    </h2>
                    <div class="cabinet__submit cabinet__submit--hidden">
                        <button type="submit" class="button button--cabinet-submit button--save button--green">
                            <svg width="20" height="21">
                                <use xlink:href="#icon-save"></use>
                            </svg>
                            Сохранить
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
                      Загрузить аватарку
                    </span>
                        </label>
                    </div>
                </div>
                <div class="cabinet__item">
                    <div class="cabinet__description">
                        <p class="cabinet__title">
                            Личная информация
                        </p>
                        <p class="cabinet__text">
                            Используется при заполнение отзыва и заявки на курс
                        </p>
                    </div>
                    <ul class="cabinet__list">
                        <li>
                            <label for="user_cabinet_name" class="label">
                                Имя
                            </label>
                            <input type="text" name="user_cabinet_name" class="input input--cabinet" id="user_cabinet_name">
                        </li>
                        <li>
                            <label for="user_cabinet_phone" class="label">
                                Телефон
                            </label>
                            <input type="tel" name="user_cabinet_phone" class="input input--cabinet" id="user_cabinet_phone">
                        </li>
                    </ul>
                </div>
                <div class="cabinet__item">
                    <div class="cabinet__description">
                        <p class="cabinet__title">
                            Логин и пароль
                        </p>
                        <p class="cabinet__text">
                            Используются для авторизации и уведомлений на указанный email.
                        </p>
                    </div>
                    <div class="cabinet__details">
                        <p>
                    <span>
                      Логин
                    </span>
                            <a href="#">
                                Изменить
                            </a>
                        </p>
                        <p>
                    <span>
                      Пароль
                    </span>
                            <a href="#">
                                Изменить
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
