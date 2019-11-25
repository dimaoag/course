<?php

/** @var App\Model\User\Entity\User $user */
$title = $user->name;
?>

@extends('layouts.admin')

@section('title', $title)

@section('admin-content')

    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <form method="POST" action="{{ route('admin.users.update', $user) }}">
                    <div class="card-body">
                    @csrf
                    @method('PUT')

                        <?php $name = 'name' ?>
                        <div class="form-group">
                            <label for="{{$name}}" class="col-form-label">{{ \App\Model\User\Helper\AdminHelper::getFormLabel($name) }}</label>
                            <input id="{{$name}}" class="form-control{{ $errors->has($name) ? ' is-invalid' : '' }}" name="{{$name}}" value="{{ old($name, $user->name) }}" required>
                            @if ($errors->has($name))
                                <span class="invalid-feedback"><strong>{{ $errors->first($name) }}</strong></span>
                            @endif
                        </div>

                        <?php $name = 'email' ?>
                        <div class="form-group">
                            <label for="{{$name}}" class="col-form-label">{{ \App\Model\User\Helper\AdminHelper::getFormLabel($name) }}</label>
                            <input id="{{$name}}" type="email" class="form-control{{ $errors->has($name) ? ' is-invalid' : '' }}" name="{{$name}}" value="{{ old($name, $user->email) }}" required>
                            @if ($errors->has($name))
                                <span class="invalid-feedback"><strong>{{ $errors->first($name) }}</strong></span>
                            @endif
                        </div>

                        <?php $name = 'role' ?>
                        <div class="form-group">
                            <label for="{{$name}}" class="col-form-label">{{ \App\Model\User\Helper\AdminHelper::getFormLabel($name) }}</label>
                            <select id="{{$name}}" class="form-control{{ $errors->has($name) ? ' is-invalid' : '' }}" name="{{$name}}">
                                @foreach ($roles as $value => $label)
                                    <option value="{{ $value }}"{{ $value === old($name, $user->role) ? ' selected' : '' }}>{{ $label }}</option>
                                @endforeach;
                            </select>
                            @if ($errors->has($name))
                                <span class="invalid-feedback"><strong>{{ $errors->first($name) }}</strong></span>
                            @endif
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
