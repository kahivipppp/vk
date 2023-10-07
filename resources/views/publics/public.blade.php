<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <title>Document</title>
</head>

<body>
    <header>
        header
        <a href="/">home</a>
        <a href="/signup">signup</a>
        <a href="/signin">signin</a>
        <a href="/about">about</a>

    </header>
    @if (Route::has('home'))
    @yield('slider')
    @endif

    @yield('content')
    <footer>footer</footer>
</body>

</html>