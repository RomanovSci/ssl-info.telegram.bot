<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>INTRAWEB TEST</title>

    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<div id="app">
    @yield('app.content')
</div>
</body>
<script src="/js/app.js"></script>
</html>
