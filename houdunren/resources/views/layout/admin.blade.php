<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link href="https://cdn.bootcdn.net/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
    <div class="admin">

        @include('layout.admin.header')
        <div class="d-none d-md-block">

            @include('layout.admin.quick-menu')
        </div>
        <div class="bg-light m-3 shadow rounded p-3" id="app">

        @include('layout.message')
            @yield('content')
        </div>

        <div class="d-flex flex-column justify-content-center align-items-center mt-5 bg-light m-3 p-3" style="opacity:0.5;">
            <strong>后盾人 人人做后盾</strong>
            <strong>Powered by hdcms v6 © 2014-2020 www.hdcms.com</strong>
        </div>
    </div>

    @stack('js')
    <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
