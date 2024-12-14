<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Ваш магазин')</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Главная</a></li>
                <li><a href="{{ url('/catalog') }}">Каталог</a></li>
                <li><a href="{{ url('/register') }}">Регистрация</a></li>
                <li><a href="{{ url('/login') }}">Авторизация</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>© 2024 Ваш магазин</p>
    </footer>
</body>
</html>



