{{--<!DOCTYPE html>
<html>
<head>
    <title>Simple Login System in Laravel</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        .box{
            width:600px;
            margin:0 auto;
            border:1px solid #ccc;
        }
    </style>
</head>
<body>
<br />--}}
@extends('layouts.app')

@section('content')
    <div class="container box">
        {{--<h3 align="center">Simple Login System in Laravel</h3><br />--}}

        @if(isset(Auth::user()->name))
            <div class="alert alert-danger success-block">
                <strong>Welcome {{ Auth::user()->name }}</strong>
                <br/>
                <a href="{{ url('/gm/logout') }}">Logout</a>
            </div>
        @else
            <script>window.location = "/gm";</script>
        @endif

        <br/>
    </div>
@endsection

@section('logout')
    @if(isset(Auth::user()->name))
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ url('/gm/logout') }}">
                    {{ __('Logout') }}
                </a>
            </div>
        </li>
    @endif
@endsection

