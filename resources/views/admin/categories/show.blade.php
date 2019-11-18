<?php

/** @var \App\Model\Category\Entity\Category $category */
$title = $category->name_ru;
?>

@extends('layouts.admin')

@section('title', $title)

@section('content_header')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h5>{{$title}}</h5>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.categories.index')}}">Все категории</a></li>
                        <li class="breadcrumb-item active">{{$category->name_ru}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
@stop

@section('content')

    <div class="d-flex flex-row mb-3">
        <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-primary mr-1">Изменить</a>
        <form method="POST" action="{{ route('admin.categories.destroy', $category) }}" class="mr-1">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Удалить</button>
        </form>
    </div>

    <table class="table table-bordered table-striped">
        <tbody>
            <tr>
                <th>{{\App\Model\Category\Helper\AdminHelper::getFormLabel('name_ru')}}</th><td>{{ $category->name_ru }}</td>
            </tr>
            <tr>
                <th>{{\App\Model\Category\Helper\AdminHelper::getFormLabel('name_uk')}}</th><td>{{ $category->name_uk }}</td>
            </tr>
            <tr>
                <th>{{\App\Model\Category\Helper\AdminHelper::getFormLabel('slug')}}</th><td>{{ $category->slug }}</td>
            </tr>
            <tr>
                <th>{{\App\Model\Category\Helper\AdminHelper::getFormLabel('parent')}}</th><td>{{ $category->parent ? $category->parent->name_ru : null }}</td>
            </tr>
            <tr>
                <th>{{\App\Model\Category\Helper\AdminHelper::getFormLabel('image')}}</th>
                <td>
                    @if($category->image)
                        <a href="{{ Storage::disk('public')->url($category->image) }}" target="_blank">
                            <img class="attachment-img" style="max-width: 150px" src="{{ Storage::disk('public')->url($category->image) }}" alt="image">
                        </a>
                    @endif
                </td>
            </tr>
            <tr>
                <th>{{\App\Model\Category\Helper\AdminHelper::getFormLabel('description_ru')}}</th><td>{{ $category->description_ru }}</td>
            </tr>
            <tr>
                <th>{{\App\Model\Category\Helper\AdminHelper::getFormLabel('description_uk')}}</th><td>{{ $category->description_uk }}</td>
            </tr>
            <tr>
                <th>{{\App\Model\Category\Helper\AdminHelper::getFormLabel('meta_title_ru')}}</th><td>{{ $category->meta_title_ru }}</td>
            </tr>
            <tr>
                <th>{{\App\Model\Category\Helper\AdminHelper::getFormLabel('meta_title_uk')}}</th><td>{{ $category->meta_title_uk }}</td>
            </tr>
            <tr>
                <th>{{\App\Model\Category\Helper\AdminHelper::getFormLabel('meta_description_ru')}}</th><td>{{ $category->meta_description_ru }}</td>
            </tr>
            <tr>
                <th>{{\App\Model\Category\Helper\AdminHelper::getFormLabel('meta_description_uk')}}</th><td>{{ $category->meta_description_uk }}</td>
            </tr>
            <tr>
                <th>{{\App\Model\Category\Helper\AdminHelper::getFormLabel('meta_keywords_ru')}}</th><td>{{ $category->meta_keywords_ru }}</td>
            </tr>
            <tr>
                <th>{{\App\Model\Category\Helper\AdminHelper::getFormLabel('meta_keywords_uk')}}</th><td>{{ $category->meta_keywords_uk }}</td>
            </tr>
        </tbody>
    </table>

@endsection

