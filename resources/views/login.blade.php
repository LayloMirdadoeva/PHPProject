@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация Пользователя</title>
    <main class="main-content">
        <div class="container">
            <h2>Авторизация пользователя</h2>
            <form action="" method="post">
                <label for="login_email">Электронная почта:</label>
                <input type="email" id="login_email" name="login_email" required>

                <label for="login_password">Пароль:</label>
                <input type="password" id="login_password" name="login_password" required>

                <button type="submit" name="login">Войти</button>
            </form>
</head>
<body>
    <header>
        <nav>
            <ul>
          
            </ul>
        </nav>
    </header>
@endsection