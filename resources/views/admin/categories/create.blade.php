<?php

/** @var \App\Model\Category\Entity\Category[] $parents */
$title = 'Создать новую категорию'
?>

@extends('layouts.admin')

@section('title', $title)

@section('content_header', $title)

@section('content')

    <form method="POST" action="{{ route('admin.categories.store') }}" enctype="multipart/form-data">
        @csrf

        <?php $name = 'parent' ?>
        <div class="form-group">
            <label for="{{$name}}" class="col-form-label">{{ \App\Model\Category\Helper\AdminHelper::getFormLabel($name) }}</label>
            <select id="{{$name}}" class="form-control{{ $errors->has($name) ? ' is-invalid' : '' }}" name="{{$name}}">
                <option value=""></option>
                @foreach ($parents as $parent)
                    <option value="{{ $parent->id }}"{{ $parent->id == old($name) ? ' selected' : '' }}>
                        @for ($i = 0; $i < $parent->depth; $i++) &mdash; @endfor
                        {{ $parent->name_ru }}
                    </option>
                @endforeach;
            </select>
            @if ($errors->has($name))
                <span class="invalid-feedback"><strong>{{ $errors->first($name) }}</strong></span>
            @endif
        </div>


        <?php $name = 'name_ru' ?>
        <div class="form-group">
            <label for="{{$name}}" class="col-form-label">{{ \App\Model\Category\Helper\AdminHelper::getFormLabel($name) }}</label>
            <input id="{{$name}}" class="form-control{{ $errors->has($name) ? ' is-invalid' : '' }}" name="{{$name}}" value="{{ old($name) }}" required>
            @if ($errors->has($name))
                <span class="invalid-feedback"><strong>{{ $errors->first($name) }}</strong></span>
            @endif
        </div>

        <?php $name = 'name_uk' ?>
        <div class="form-group">
            <label for="{{$name}}" class="col-form-label">{{ \App\Model\Category\Helper\AdminHelper::getFormLabel($name) }}</label>
            <input id="{{$name}}" class="form-control{{ $errors->has($name) ? ' is-invalid' : '' }}" name="{{$name}}" value="{{ old($name) }}" required>
            @if ($errors->has($name))
                <span class="invalid-feedback"><strong>{{ $errors->first($name) }}</strong></span>
            @endif
        </div>

        <?php $name = 'slug' ?>
        <div class="form-group">
            <label for="{{$name}}" class="col-form-label">{{ \App\Model\Category\Helper\AdminHelper::getFormLabel($name) }}</label>
            <input id="{{$name}}" type="text" class="form-control{{ $errors->has($name) ? ' is-invalid' : '' }}" name="{{$name}}" value="{{ old($name) }}" required>
            @if ($errors->has($name))
                <span class="invalid-feedback"><strong>{{ $errors->first($name) }}</strong></span>
            @endif
        </div>

        <?php $name = 'description_ru' ?>
        <div class="form-group">
            <label for="{{$name}}" class="col-form-label">{{ \App\Model\Category\Helper\AdminHelper::getFormLabel($name) }}</label>
            <textarea id="{{$name}}" class="form-control{{ $errors->has($name) ? ' is-invalid' : '' }}" name="{{$name}}" rows="5" required>{{ old($name) }}</textarea>
            @if ($errors->has($name))
                <span class="invalid-feedback"><strong>{{ $errors->first($name) }}</strong></span>
            @endif
        </div>

        <?php $name = 'description_uk' ?>
        <div class="form-group">
            <label for="{{$name}}" class="col-form-label">{{ \App\Model\Category\Helper\AdminHelper::getFormLabel($name) }}</label>
            <textarea id="{{$name}}" class="form-control{{ $errors->has($name) ? ' is-invalid' : '' }}" name="{{$name}}" rows="5">{{ old($name) }}</textarea>
            @if ($errors->has($name))
                <span class="invalid-feedback"><strong>{{ $errors->first($name) }}</strong></span>
            @endif
        </div>


        <?php $name = 'image' ?>
        <div class="form-group">
            <label for="{{$name}}" class="col-form-label">{{ \App\Model\Category\Helper\AdminHelper::getFormLabel($name) }}</label>
            <input id="{{$name}}" type="file" class="form-control{{ $errors->has($name) ? ' is-invalid' : '' }}" name="{{$name}}">
        </div>


        <?php $name = 'meta_title_ru' ?>
        <div class="form-group">
            <label for="{{$name}}" class="col-form-label">{{ \App\Model\Category\Helper\AdminHelper::getFormLabel($name) }}</label>
            <input id="{{$name}}" class="form-control{{ $errors->has($name) ? ' is-invalid' : '' }}" name="{{$name}}" value="{{ old($name) }}">
            @if ($errors->has($name))
                <span class="invalid-feedback"><strong>{{ $errors->first($name) }}</strong></span>
            @endif
        </div>


        <?php $name = 'meta_title_uk' ?>
        <div class="form-group">
            <label for="{{$name}}" class="col-form-label">{{ \App\Model\Category\Helper\AdminHelper::getFormLabel($name) }}</label>
            <input id="{{$name}}" class="form-control{{ $errors->has($name) ? ' is-invalid' : '' }}" name="{{$name}}" value="{{ old($name) }}">
            @if ($errors->has($name))
                <span class="invalid-feedback"><strong>{{ $errors->first($name) }}</strong></span>
            @endif
        </div>


        <?php $name = 'meta_description_ru' ?>
        <div class="form-group">
            <label for="{{$name}}" class="col-form-label">{{ \App\Model\Category\Helper\AdminHelper::getFormLabel($name) }}</label>
            <textarea id="{{$name}}" class="form-control{{ $errors->has($name) ? ' is-invalid' : '' }}" name="{{$name}}" rows="2">{{ old($name) }}</textarea>
            @if ($errors->has($name))
                <span class="invalid-feedback"><strong>{{ $errors->first($name) }}</strong></span>
            @endif
        </div>

        <?php $name = 'meta_description_uk' ?>
        <div class="form-group">
            <label for="{{$name}}" class="col-form-label">{{ \App\Model\Category\Helper\AdminHelper::getFormLabel($name) }}</label>
            <textarea id="{{$name}}" class="form-control{{ $errors->has($name) ? ' is-invalid' : '' }}" name="{{$name}}" rows="2">{{ old($name) }}</textarea>
            @if ($errors->has($name))
                <span class="invalid-feedback"><strong>{{ $errors->first($name) }}</strong></span>
            @endif
        </div>

        <?php $name = 'meta_keywords_ru' ?>
        <div class="form-group">
            <label for="{{$name}}" class="col-form-label">{{ \App\Model\Category\Helper\AdminHelper::getFormLabel($name) }}</label>
            <input id="{{$name}}" class="form-control{{ $errors->has($name) ? ' is-invalid' : '' }}" name="{{$name}}" value="{{ old($name) }}">
            @if ($errors->has($name))
                <span class="invalid-feedback"><strong>{{ $errors->first($name) }}</strong></span>
            @endif
        </div>

        <?php $name = 'meta_keywords_uk' ?>
        <div class="form-group">
            <label for="{{$name}}" class="col-form-label">{{ \App\Model\Category\Helper\AdminHelper::getFormLabel($name) }}</label>
            <input id="{{$name}}" class="form-control{{ $errors->has($name) ? ' is-invalid' : '' }}" name="{{$name}}" value="{{ old($name) }}">
            @if ($errors->has($name))
                <span class="invalid-feedback"><strong>{{ $errors->first($name) }}</strong></span>
            @endif
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </div>
    </form>
@endsection
