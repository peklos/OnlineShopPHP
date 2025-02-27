<?php

session_start();

if (isset($_GET['section'])) {
    $section = $_GET['section'];

    switch ($section) {
        case 'overview':
            if (isset($_SESSION['user']['name'])) {
                echo "<h2>Имя: " . htmlspecialchars($_SESSION['user']['name']) . "</h2>
                <h2>Почта: " . htmlspecialchars($_SESSION['user']['email']) . "</h2>
                <h2>Номер: " . htmlspecialchars($_SESSION['user']['phone']) . "</h2>
                <p>Дата регистрации 01.01.2025.</p>
                <p>Заказов: 1</p>
                <p>Добро пожаловать в панель управления. Здесь вы можете изменить свои регистрационные данные и cменить пароль.<br> Зарегистрированные пользователи имеют доступ к истории заказов и возможность добавлять в избранное товары для будущих покупок.</p>
                ";
            } else {
                echo "<h2>Ошибка</h2><p>Пользователь не авторизован.</p>";
            }
            break;
        case 'personal':
            echo "<h2>Личные данные</h2><p>Email, телефон и другая личная информация.</p>";
            break;
        case 'orders':
            echo "<h2>История покупок</h2><p>Список заказов пользователя.</p>";
            break;
        case 'favorite':
            echo "<h2>Избранное</h2><p>Список избранных товаров.</p>";
            break;
        case 'change_pass':
            echo "<h2>Сменить пароль</h2><p>Блок смены пароля (вполне реализуемо, но мне не хватает времени).</p>";
            break;
        default:
            echo "<h2>Ошибка</h2><p>Раздел не найден.</p>";
    }
} else {
    echo "<h2>Ошибка</h2><p>Не передан параметр section.</p>";
}
?>
