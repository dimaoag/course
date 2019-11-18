@extends('adminlte::page')

@section('content_header')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h5>Главная</h5>
                </div>
            </div>
        </div>
    </section>
@stop


@section('content')
    @include('flash::message')
    @include('layouts.partials.flash')
    @yield('content')
@stop


@section('css')
    <link href="{{ mix('admin/css/app.css', 'build') }}" rel="stylesheet">
@stop

@section('js')
    <script src="{{ mix('admin/js/app.js', 'build') }}"></script>
@stop
