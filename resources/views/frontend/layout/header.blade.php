<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> 

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta property="fb:app_id" content=""/>
    <meta property="og:url" content="{{ url()->current() }}"/>
    <meta property="og:type" content="website"/>

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

    @yield('additional_head')

</head>

<body class="{{ (App::environment('staging') ? 'staging' : '') }}">
    <div class="flex-center position-ref full-height">
