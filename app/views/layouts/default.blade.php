<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Laravel 4</title>
    {{ HTML::style('css/bootstrap.css') }}
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/bootstrap-responsive.css') }}
</head>
<body>
    @include('layouts.nav')
    @yield('content')
</body>
</html>