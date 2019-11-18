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

@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
