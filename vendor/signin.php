<?php 
session_start();
require_once 'connect.php';

$login = $_POST['login'];
$pass = md5($_POST['pass']);
$remember_me = isset($_POST['rememberme']); // Проверяем, отмечен ли чекбокс "Запомнить меня"

$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE (`phone` = '$login' OR `email` = '$login') AND `pass` = '$pass'");

$redirect = isset($_GET['redirect']) ? $_GET['redirect'] : '../index.php';
if (mysqli_num_rows($check_user) > 0) {

    $user = mysqli_fetch_assoc($check_user);
    
    $_SESSION['user'] = [
        "id" => $user['id'],
        "name" => $user['name'],
        "email" => $user['email'],
        "phone" => $user['phone'],
    ];

    if ($remember_me) {
        $cookie_expire = time() + (86400 * 30); // Кука на 30 дней
    } else {
        $cookie_expire = 0; // Кука до конца сессии браузера
    }

    setcookie("user_id", $user['id'], $cookie_expire, "/");
    setcookie("user_name", $user['name'], $cookie_expire, "/");
    setcookie("user_email", $user['email'], $cookie_expire, "/");
    setcookie("user_phone", $user['phone'], $cookie_expire, "/");
    
    $redirect = isset($_GET['redirect']) ? $_GET['redirect'] : '../index.php';

    header("Location: $redirect");

} else {
    $_SESSION['message'] = 'Неверный логин или пароль';
    $redirect_error = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] . "#popup-login" : '../index.php#popup-login';

    header("Location: $redirect_error");
}

?>
