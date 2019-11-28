<?php

$title = trans('cabinet/organization/home.Title');
$description = '';
$keywords = '';

?>

@extends('layouts.app')

@section('title', $title)
@section('description', $description)
@section('keywords', $keywords)



@section('content')

    {{ Breadcrumbs::view('layouts.partials.breadcrumbs') }}

    <h1>Organization cabinet home page</h1>
@endsection
