@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация Пользователя</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>
    <header>
        <nav>
            <ul>
            
            </ul>
        </nav>
    </header>
    <main class="main-content">
        <div class="container">
            <h2>Регистрация пользователя</h2>
            <form action="userRegister.php" method="post">
                <label for="username">Имя пользователя:</label>
                <input type="text" id="username" name="username" required>

                <label for="email">Электронная почта:</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Пароль:</label>
                <input type="password" id="password" name="password" required>

                <label for="address">Адрес:</label>
                <input type="text" id="address" name="address" required>

                <label for="phone">Телефон:</label>
                <input type="tel" id="phone" name="phone" required>

                <button type="submit">Зарегистрироваться</button>
            </form>
        </div>
    </main>
</body>
</html>
@endsection