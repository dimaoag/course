<?php

$title = trans('cabinet/person/home.Title');
$description = '';
$keywords = '';

?>

@extends('layouts.app')

@section('title', $title)
@section('description', $description)
@section('keywords', $keywords)



@section('content')

    {{ Breadcrumbs::view('layouts.partials.breadcrumbs') }}
    <h1>Person cabinet home page</h1>
@endsection
