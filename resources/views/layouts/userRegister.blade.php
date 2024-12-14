@extends('layouts.app')
<?php

global $link;

class User {
    private $conn;
    private $table_name = "users";

    public $username;
    public $email;
    public $password;
    public $address;
    public $phone;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function register() {
        $query = "INSERT INTO " . $this->table_name . " (u_name, u_email, u_password, u_address, u_phoneNumber) 
                  VALUES (?, ?, ?, ?, ?)";

        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("sssss", $this->username, $this->email, $this->password, $this->address, $this->phone);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
}

$user = new User($link);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user->username = $_POST['username'];
    $user->email = $_POST['email'];
    $user->password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $user->address = $_POST['address'];
    $user->phone = $_POST['phone'];

    if ($user->register()) {
        echo "Поздравляем! Вы успешно зарегистрировались!";
    } else {
        echo "К сожалению, произошла ошибка при регистрации. Пожалуйста, попробуйте снова.";
    }
}
exit();
?>


<!-- <!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация Пользователя</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <header>
        <nav>
            <ul>
            <li><a href="index.html">Главная</a></li>
            <li><a href="catalog.php">Каталог</a></li>
                <li><a href="userRegister.php">Регистрация</a></li>
                <li><a href="auth.php">Авторизация</a></li>
                <li><a href="addProduct.php">Регистрация товара</a></li>
                <li><a href="editProduct.php">Редактирование товара</a></li>
                <li><a href="feedback.php">Обратная cвязь</a></li>
                <li><a href="cart.php">Корзина</a></li>
                <li><a href="profileUser.php">Профиль</a></li>
                <li><a href="logout.php">Выход</a></li>
            </ul>
        </nav>
    </header> -->
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