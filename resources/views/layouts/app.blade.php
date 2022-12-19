<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    <title>@yield('title')</title>
</head>

<body>
    <header>
        <div class="container">
            <h2 class="text-center">Treni in Partenza il 19/12/2022</h2>
        </div>
    </header>

    @yield('content')
</body>

</html>
