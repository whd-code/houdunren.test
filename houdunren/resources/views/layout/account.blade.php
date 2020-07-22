<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">


</head>
<body>

    <div class="account d-flex align-items-center" id="app">
        <div class="container ">
            <div class="row justify-content-center">
                <div class=" col-12 col-md-6 ">
                    @include('layout.message')
                   @yield('content')
                 </div>
             </div>
        </div>
    </div>
    <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
