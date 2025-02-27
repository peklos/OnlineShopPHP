<?php
session_start();
session_destroy(); // Удаляем сессию

// Очищаем куки
setcookie("user_id", "", time() - 3600, "/");
setcookie("user_name", "", time() - 3600, "/");
setcookie("user_email", "", time() - 3600, "/");
setcookie("user_phone", "", time() - 3600, "/");

// Получаем URL, с которого был выход
$redirect = isset($_GET['redirect']) ? $_GET['redirect'] : '../index.php';

// Перенаправляем на предыдущую страницу или на главную
header("Location: $redirect");
exit();
?>
