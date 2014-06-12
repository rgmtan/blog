<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    {{ HTML::style('css/bootstrap.css') }}
</head>
<body>
    @include('layouts.nav')
    @yield('content')
</body>
</html>