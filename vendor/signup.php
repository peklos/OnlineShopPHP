<?php
session_start();
require_once 'connect.php';

// Получаем данные из формы
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pass = $_POST['pass'];
$repeat_pass = $_POST['repeat-pass'];

if ($pass === $repeat_pass) {

    $pass = md5($pass);
    $sql = "INSERT INTO `users` (`name`, `email`, `phone`, `pass`) VALUES ('$name', '$email', '$phone', '$pass')";


    // Выполняем запрос
    if (mysqli_query($connect, $sql)) {
        $_SESSION['message'] = 'Регистрация прошла успешно!';
        // header('Location: ../index.php#popup-login');
        $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] . "#popup-login" : '../index.php#popup-login';
        header("Location: $redirect");
    } else {
        $_SESSION['message'] = 'Ошибка при регистрации: ' . mysqli_error($connect);
        header('Location: ../index.php#popup-registration');
    }
} else {
    $_SESSION['message1'] = 'Пароли не совпадают';
    header('Location: ../index.php#popup-registration');
}