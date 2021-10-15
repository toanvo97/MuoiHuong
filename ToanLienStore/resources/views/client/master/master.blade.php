<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="ToanLien Store">
    <meta name="keywords" content="Ogani, ToanLien, unica, creative, html">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title',config('app.name','@Master Layout'))</title>

    @yield('font')

    @yield('css')
</head>
<body>
    @yield('header')

    @yield('main')

    @yield('footer')

    @yield('js')
</body>
</html>
