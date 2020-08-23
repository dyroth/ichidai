<!DOCTYPE html>
<html lang="@yield('lang', config('app.locale', 'en'))">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Atnic">

    <title>@yield('title', config('app.name', 'Ichi Dai'))</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ mix('/css/inspinia.css') }}" rel="stylesheet">
    <link href="/css/back-end/style.css" rel="stylesheet">

    @section('styles')
    @show

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @stack('head')
</head>

<body class="body-small {{ config('inspinia.skin', '') }}">
<div id="wrapper">
    @include('admin._partials.sidebar')
    @include('admin._partials.main-panel')
</div>

<script src="{{ mix('/js/manifest.js') }}" charset="utf-8"></script>
<script src="{{ mix('/js/vendor.js') }}" charset="utf-8"></script>
<script src="{{ mix('/js/inspinia.js') }}" charset="utf-8"></script>
@section('scripts')
@show
@stack('body')
</body>

</html>
