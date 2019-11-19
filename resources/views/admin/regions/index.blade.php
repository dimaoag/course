<?php

/** @var App\Model\Region\Entity\Region[] $regions */
$title = 'Все города'
?>

@extends('layouts.admin')

@section('title', $title)

@section('admin-content')
    <p><a href="{{ route('admin.regions.create') }}" class="btn btn-success">Добавить город</a></p>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>{{ \App\Model\Region\Helper\AdminHelper::getFormLabel('name_ru') }}</th>
                <th>{{ \App\Model\Region\Helper\AdminHelper::getFormLabel('slug') }}</th>
            </tr>
        </thead>
        <tbody>

        @foreach ($regions as $region)
            <tr>
                <td>
                    <a href="{{ route('admin.regions.show', $region) }}">{{ $region->name_ru }}</a>
                </td>
                <td>{{ $region->slug }}</td>
            </tr>
        @endforeach

        </tbody>
    </table>
@endsection
