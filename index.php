<?php
session_start();

if (isset($_SESSION['user'])) {
    $logged_in = true;
    $user = $_SESSION['user'];
} 
elseif (isset($_COOKIE['user_id'])) {
    $_SESSION['user'] = [
        "id" => $_COOKIE['user_id'],
        "name" => $_COOKIE['user_name'],
        "email" => $_COOKIE['user_email'],
        "phone" => $_COOKIE['user_phone'],
    ];
    $logged_in = true;
    $user = $_SESSION['user'];
} 
else {
    $logged_in = false;
}
?>

<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Магазин</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
    <header>
        <div class="header-content">
            <a href="index.php"><img class="logo-svg" src="logo.svg" alt="LOGO"></a>
            <?php if ($logged_in): ?>
            <!-- <a href="vendor/profile.php"><button class="login-button">Личный кабинет (<?php echo htmlspecialchars($user['name']); ?>)</button></a> -->
            <!-- <a href="vendor/profile.php" class="profile-header-svg"><img src="images/profile.svg"></a> -->
            <a href="#" id="profile-icon" class="profile-header-svg">
                <img src="images/profile.svg" alt="Профиль">
            </a>
            <!-- <a href="vendor/logout.php"><button class="login-button">Выйти</button></a> -->
        <?php else: ?>
            <a href="#popup-login"><button class="login-button">Войти</button></a>
        <?php endif; ?>
            <div class="header-svgs">
                <a href="#"><svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M33.257 22.962C33.731 23.582 33.731 24.419 33.257 25.038C31.764 26.987 28.182 31 24 31C19.818 31 16.236 26.987 14.743 25.038C14.5124 24.7411 14.3872 24.3759 14.3872 24C14.3872 23.6241 14.5124 23.2589 14.743 22.962C16.236 21.013 19.818 17 24 17C28.182 17 31.764 21.013 33.257 22.962V22.962Z" stroke="#838688" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M24 27C25.6569 27 27 25.6569 27 24C27 22.3431 25.6569 21 24 21C22.3431 21 21 22.3431 21 24C21 25.6569 22.3431 27 24 27Z" stroke="#838688" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></svg></a>
                <a href="#"><svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M32.16 17C31.1 15.9373 29.6948 15.2886 28.1984 15.1712C26.7019 15.0538 25.2128 15.4755 24 16.36C22.7277 15.4137 21.144 14.9846 19.568 15.1591C17.9919 15.3336 16.5405 16.0988 15.506 17.3006C14.4715 18.5024 13.9309 20.0516 13.9928 21.6361C14.0548 23.2206 14.7148 24.7227 15.84 25.84L22.05 32.06C22.57 32.5718 23.2704 32.8587 24 32.8587C24.7296 32.8587 25.43 32.5718 25.95 32.06L32.16 25.84C33.3276 24.6653 33.983 23.0763 33.983 21.42C33.983 19.7638 33.3276 18.1748 32.16 17ZM30.75 24.46L24.54 30.67C24.4694 30.7414 24.3853 30.798 24.2926 30.8367C24.1999 30.8753 24.1005 30.8953 24 30.8953C23.8996 30.8953 23.8002 30.8753 23.7075 30.8367C23.6148 30.798 23.5307 30.7414 23.46 30.67L17.25 24.43C16.4658 23.6284 16.0266 22.5515 16.0266 21.43C16.0266 20.3086 16.4658 19.2317 17.25 18.43C18.0492 17.641 19.127 17.1986 20.25 17.1986C21.3731 17.1986 22.4509 17.641 23.25 18.43C23.343 18.5238 23.4536 18.5982 23.5755 18.6489C23.6973 18.6997 23.828 18.7258 23.96 18.7258C24.092 18.7258 24.2227 18.6997 24.3446 18.6489C24.4665 18.5982 24.5771 18.5238 24.67 18.43C25.4692 17.641 26.547 17.1986 27.67 17.1986C28.7931 17.1986 29.8709 17.641 30.67 18.43C31.4651 19.2212 31.9186 20.2922 31.9336 21.4137C31.9485 22.5352 31.5237 23.618 30.75 24.43V24.46Z" fill="#838688" /></svg></a>
                <a href="#"><svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 24C16.7348 24 16.4804 24.1054 16.2929 24.2929C16.1054 24.4804 16 24.7348 16 25V33C16 33.2652 16.1054 33.5196 16.2929 33.7071C16.4804 33.8946 16.7348 34 17 34C17.2652 34 17.5196 33.8946 17.7071 33.7071C17.8946 33.5196 18 33.2652 18 33V25C18 24.7348 17.8946 24.4804 17.7071 24.2929C17.5196 24.1054 17.2652 24 17 24ZM22 14C21.7348 14 21.4804 14.1054 21.2929 14.2929C21.1054 14.4804 21 14.7348 21 15V33C21 33.2652 21.1054 33.5196 21.2929 33.7071C21.4804 33.8946 21.7348 34 22 34C22.2652 34 22.5196 33.8946 22.7071 33.7071C22.8946 33.5196 23 33.2652 23 33V15C23 14.7348 22.8946 14.4804 22.7071 14.2929C22.5196 14.1054 22.2652 14 22 14ZM32 28C31.7348 28 31.4804 28.1054 31.2929 28.2929C31.1054 28.4804 31 28.7348 31 29V33C31 33.2652 31.1054 33.5196 31.2929 33.7071C31.4804 33.8946 31.7348 34 32 34C32.2652 34 32.5196 33.8946 32.7071 33.7071C32.8946 33.5196 33 33.2652 33 33V29C33 28.7348 32.8946 28.4804 32.7071 28.2929C32.5196 28.1054 32.2652 28 32 28ZM27 20C26.7348 20 26.4804 20.1054 26.2929 20.2929C26.1054 20.4804 26 20.7348 26 21V33C26 33.2652 26.1054 33.5196 26.2929 33.7071C26.4804 33.8946 26.7348 34 27 34C27.2652 34 27.5196 33.8946 27.7071 33.7071C27.8946 33.5196 28 33.2652 28 33V21C28 20.7348 27.8946 20.4804 27.7071 20.2929C27.5196 20.1054 27.2652 20 27 20Z" fill="#838688" /></svg></a>
                <a href="" class="cart"><svg class="header-svg-cart" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.3816 33.7034C21.2096 33.7034 21.8807 33.0394 21.8807 32.2203C21.8807 31.4011 21.2096 30.7371 20.3816 30.7371C19.5537 30.7371 18.8826 31.4011 18.8826 32.2203C18.8826 33.0394 19.5537 33.7034 20.3816 33.7034Z" fill="#838688" />
                        <path d="M29.4893 33.7034C30.3173 33.7034 30.9884 33.0394 30.9884 32.2203C30.9884 31.4011 30.3173 30.7371 29.4893 30.7371C28.6614 30.7371 27.9903 31.4011 27.9903 32.2203C27.9903 33.0394 28.6614 33.7034 29.4893 33.7034Z" fill="#838688" />
                        <path d="M33.5402 16.1385C33.4782 16.0629 33.4 16.0018 33.3113 15.9597C33.2226 15.9175 33.1256 15.8953 33.0272 15.8946H22.0661C21.6174 15.8946 21.2998 16.3332 21.4398 16.7595C21.5287 17.0301 21.7813 17.213 22.0661 17.213H32.1544L30.3755 24.1455H20.3816L17.3369 15.5848C17.3039 15.4836 17.2467 15.3918 17.1702 15.3172C17.0936 15.2426 16.9999 15.1874 16.8971 15.1564L14.1655 14.3258C14.0815 14.3003 13.9932 14.2914 13.9058 14.2996C13.8183 14.3078 13.7333 14.333 13.6556 14.3737C13.4988 14.4559 13.3815 14.5963 13.3293 14.7642C13.2772 14.932 13.2946 15.1134 13.3777 15.2686C13.4608 15.4237 13.6028 15.5399 13.7724 15.5914L16.1642 16.3165L19.2224 24.8969L18.1297 25.7802L18.0431 25.8659C17.7728 26.174 17.6196 26.5658 17.6099 26.9737C17.6002 27.3816 17.7345 27.78 17.9898 28.1005C18.1714 28.319 18.4021 28.4924 18.6636 28.6068C18.9251 28.7213 19.21 28.7736 19.4955 28.7596H30.6153C30.792 28.7596 30.9615 28.6902 31.0864 28.5666C31.2114 28.4429 31.2816 28.2753 31.2816 28.1005C31.2816 27.9256 31.2114 27.758 31.0864 27.6344C30.9615 27.5107 30.792 27.4413 30.6153 27.4413H19.3889C19.3122 27.4387 19.2374 27.4166 19.1719 27.3771C19.1063 27.3375 19.0522 27.282 19.0147 27.2157C18.9772 27.1494 18.9576 27.0747 18.9578 26.9988C18.958 26.9228 18.978 26.8482 19.0158 26.7821L20.6215 25.4638H30.9085C31.0625 25.4675 31.213 25.4183 31.3345 25.3246C31.456 25.2308 31.5409 25.0983 31.5747 24.9497L33.6867 16.6988C33.707 16.6006 33.7043 16.499 33.6789 16.4019C33.6535 16.3048 33.6061 16.2147 33.5402 16.1385Z" fill="#838688" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M33.0272 15.8946C33.1256 15.8953 33.2226 15.9175 33.3113 15.9597C33.4 16.0018 33.4782 16.0629 33.5402 16.1385C33.6061 16.2147 33.6535 16.3048 33.6789 16.4019C33.7043 16.499 33.707 16.6006 33.6867 16.6988L31.5747 24.9497C31.5409 25.0983 31.456 25.2308 31.3345 25.3246C31.213 25.4183 31.0625 25.4675 30.9085 25.4638H20.6215L19.0158 26.7821C18.978 26.8482 18.958 26.9228 18.9578 26.9988C18.9576 27.0747 18.9772 27.1494 19.0147 27.2157C19.0522 27.282 19.1063 27.3375 19.1719 27.3771C19.2374 27.4166 19.3122 27.4387 19.3889 27.4413H30.6153C30.792 27.4413 30.9615 27.5107 31.0864 27.6344C31.2114 27.758 31.2816 27.9256 31.2816 28.1005C31.2816 28.2753 31.2114 28.4429 31.0864 28.5666C30.9615 28.6902 30.792 28.7596 30.6153 28.7596H19.4955C19.21 28.7736 18.9251 28.7213 18.6636 28.6068C18.4021 28.4924 18.1714 28.319 17.9898 28.1005C17.7345 27.78 17.6002 27.3816 17.6099 26.9737C17.6196 26.5658 17.7728 26.174 18.0431 25.8659L18.1297 25.7802L19.2224 24.8969L16.1642 16.3165L13.7724 15.5914C13.6028 15.5399 13.4608 15.4237 13.3777 15.2686C13.2946 15.1134 13.2772 14.932 13.3293 14.7642C13.3815 14.5963 13.4988 14.4559 13.6556 14.3737C13.7333 14.333 13.8183 14.3078 13.9058 14.2996C13.9932 14.2914 14.0815 14.3003 14.1655 14.3258L16.8971 15.1564C16.9999 15.1874 17.0936 15.2426 17.1702 15.3172C17.2467 15.3918 17.3039 15.4836 17.3369 15.5848L20.3816 24.1455H30.3755L32.1544 17.213H22.0661C21.7813 17.213 21.5287 17.0301 21.4398 16.7595C21.2998 16.3332 21.6174 15.8946 22.0661 15.8946H33.0272ZM31.7805 17.5096H22.0631C21.6501 17.5096 21.2839 17.2444 21.155 16.8521C20.9519 16.234 21.4124 15.598 22.0631 15.598H33.0291C33.1718 15.599 33.3125 15.6312 33.4412 15.6923C33.5686 15.7529 33.681 15.8404 33.7705 15.9487C33.8648 16.0585 33.9327 16.1881 33.9692 16.3276C34.006 16.4684 34.0099 16.6156 33.9805 16.7581L33.9792 16.7643L31.8672 25.0148M31.7805 17.5096L30.135 23.8488H20.6014L17.6228 15.4955L17.6222 15.4939C17.5745 15.3472 17.4916 15.214 17.3805 15.1059C17.2696 14.9977 17.1339 14.9178 16.9849 14.8728L14.2536 14.0423C14.1319 14.0053 14.0041 13.9924 13.8774 14.0043C13.7508 14.0162 13.6277 14.0526 13.5153 14.1116C13.2882 14.2306 13.1182 14.434 13.0427 14.677C12.9673 14.9201 12.9924 15.1828 13.1128 15.4075C13.2331 15.6321 13.4387 15.8003 13.6843 15.875L15.9259 16.5545L18.8751 24.7946L17.9283 25.5599L17.8236 25.6636L17.8166 25.6715C17.5006 26.0318 17.3215 26.4898 17.3102 26.9667C17.2988 27.4436 17.4559 27.9095 17.7543 28.2841L17.7582 28.2889C17.9695 28.5431 18.238 28.7449 18.5423 28.8781C18.8442 29.0102 19.1729 29.0712 19.5026 29.0563H30.6153C30.8715 29.0563 31.1173 28.9556 31.2984 28.7763C31.4796 28.5971 31.5814 28.354 31.5814 28.1005C31.5814 27.847 31.4796 27.6039 31.2984 27.4246C31.1172 27.2454 30.8715 27.1447 30.6153 27.1447H19.3954C19.3715 27.1433 19.3484 27.1361 19.3279 27.1238C19.3064 27.1108 19.2886 27.0925 19.2763 27.0708C19.264 27.049 19.2575 27.0245 19.2576 26.9995C19.2576 26.9881 19.259 26.9767 19.2617 26.9657L20.7297 25.7604H30.9051C31.1271 25.7649 31.3438 25.6936 31.5189 25.5585C31.695 25.4226 31.8181 25.2303 31.8672 25.0148M22.1805 32.2203C22.1805 33.2032 21.3751 34 20.3816 34C19.3881 34 18.5828 33.2032 18.5828 32.2203C18.5828 31.2373 19.3881 30.4405 20.3816 30.4405C21.3751 30.4405 22.1805 31.2373 22.1805 32.2203ZM31.2882 32.2203C31.2882 33.2032 30.4828 34 29.4893 34C28.4958 34 27.6905 33.2032 27.6905 32.2203C27.6905 31.2373 28.4958 30.4405 29.4893 30.4405C30.4828 30.4405 31.2882 31.2373 31.2882 32.2203ZM20.3816 33.7034C21.2096 33.7034 21.8807 33.0394 21.8807 32.2203C21.8807 31.4011 21.2096 30.7371 20.3816 30.7371C19.5537 30.7371 18.8826 31.4011 18.8826 32.2203C18.8826 33.0394 19.5537 33.7034 20.3816 33.7034ZM29.4893 33.7034C30.3173 33.7034 30.9884 33.0394 30.9884 32.2203C30.9884 31.4011 30.3173 30.7371 29.4893 30.7371C28.6614 30.7371 27.9903 31.4011 27.9903 32.2203C27.9903 33.0394 28.6614 33.7034 29.4893 33.7034Z" fill="#838688" /></svg></a>
                        <div id="profile-menu" class="profile-menu">
                            <ul>
                                <li><a href="profile/profile.php">Общие сведения</a></li>
                                <li><a href="profile/profile.php">Личные данные</a></li>
                                <li><a href="profile/profile.php">Истории покупок</a></li>
                                <li><a href="profile/profile.php">Избранное</a></li>
                                <li><a href="profile/profile.php">Смените пароль</a></li>
                                <li><a href="vendor/logout.php">Выход</a></li>
                            </ul>
                        </div>
                    </div>
            <a href="#">
                <div class="header-search">
                    <svg class="header-search-svg2" width="107" height="1" viewBox="0 0 107 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="0.5" y1="0.5" x2="106.5" y2="0.499991" stroke="#C8CACB" stroke-linecap="round" /></svg>
                    <svg class="header-search-svg1" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 19C8.58172 19 5 15.4183 5 11C5 6.58172 8.58172 3 13 3C17.4183 3 21 6.58172 21 11C21 15.4183 17.4183 19 13 19Z" stroke="#838688" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M2.99998 21L7.34998 16.65" stroke="#838688" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></svg>
                    <span>Поиск</span>
                </div>
            </a>
            <div class="header-info">
                <a href="#">+7 (812) 660-50-54</a>
                <a href="#">+7 (958) 111-95-03</a>
                <span>Пн-вс: с 10:00 до 21:00</span>
            </div>
        </div>
    </header>
    <div class="navbar">
        <div class="navbar-content">
            <ul class="navbar-ul">
                <li><a href="#">О компании</a></li>
                <li><a href="#">Акции</a></li>
                <li><a href="#">Рассрочка 0|0|18</a></li>
                <li><a href="#">Сервис и гарантия</a></li>
                <li><a href="#">Опт/дропшиппинг</a></li>
                <li><a href="#">Контакты</a></li>
            </ul>
            <div class="navbar-collection">
                <ul class="navbar-catalog-ul">
                    <li><span><img class="navbar-catalog-svg1" src="images/menu-icon.svg" alt="svg">Каталог товаров</span></li>
                    <li><a href="#"><img class="navbar-catalog-svg2" src="images/1.svg" alt="svg">Гироскутеры</a></li>
                    <li><a href="#"><img class="navbar-catalog-svg3" src="images/2.svg" alt="svg">Электросамокаты</a></li>
                    <li><a href="#"><img class="navbar-catalog-svg4" src="images/3.svg" alt="svg">Моноколеса</a></li>
                    <li><a href="#"><img class="navbar-catalog-svg5" src="images/4.svg" alt="svg">Сигвеи и мини-сигвеи</a></li>
                    <li><a href="#"><img class="navbar-catalog-svg6" src="images/skuter.svg" alt="svg">Электроскутеры</a></li>
                    <li><a href="#"><img class="navbar-catalog-svg7" src="images/5.svg" alt="svg">Электровелосипеды</a></li>
                    <li><a href="#"><img class="navbar-catalog-svg8" src="images/6.svg" alt="svg">Электроскейты</a></li>
                    <li><a href="#"><img class="navbar-catalog-svg9" src="images/7.svg" alt="svg">Электромобили</a></li>
                    <li><a href="#"><img class="navbar-catalog-svg10" src="images/8.svg" alt="svg">Аксессуары</a></li>
                    <li><a href="#"><img class="navbar-catalog-svg11" src="images/9.svg" alt="svg">Умные игрушки</a></li>
                    <li><a href="#"><img class="navbar-catalog-svg12" src="images/10.svg" alt="svg">Smart Watch</a></li>
                </ul>
                <div class="swiper mySwiper slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="images/slider.png"></div>
                        <div class="swiper-slide"><img src="images/slider.png"></div>
                        <div class="swiper-slide"><img src="images/slider.png"></div>
                        <div class="swiper-slide"><img src="images/slider.png"></div>
                        <div class="swiper-slide"><img src="images/slider.png"></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper2">
        <div class="swiper mySwiper slider1">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="images/slider.png"></div>
                <div class="swiper-slide"><img src="images/slider.png"></div>
                <div class="swiper-slide"><img src="images/slider.png"></div>
                <div class="swiper-slide"><img src="images/slider.png"></div>
                <div class="swiper-slide"><img src="images/slider.png"></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <main>
        <section class="hits">
            <div class="hits-spans">
                <h1>Хиты продаж</h1>
                <a href="#">Все товары <svg width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.68907 5.20829C5.85749 5.3663 5.85749 5.6337 5.68907 5.79171L0.673684 10.4971C0.418255 10.7368 1.378e-07 10.5557 1.33623e-07 10.2054L2.14003e-08 0.794595C1.72237e-08 0.444349 0.418255 0.263239 0.673684 0.502881L5.68907 5.20829Z" fill="#2A5275" /></svg></a>
            </div>
            <div class="hits-products">
                <div class="hits-products-card hpc-first">
                    <span class="hpc-span1">Новинка</span>
                    <span class="hpc-span2">Хит продаж</span>
                    <img class="hpc-giro" src="images/giro.png">
                    <h3>Сигвеи</h3>
                    <h2>Гироскутер Smart Balance<br>Well 6.5 Хип-Хоп<br>(АКВАЗАЩИТА)</h2>
                    <img class="hpc-star5-1" src="images/5star.svg">
                    <img class="hpc-nor" src="images/num-of-rate.svg">
                    <h4>5400 ₽</h4>
                    <h1>4990 ₽</h1>
                    <span class="s20pct1000"><span class="s20pct">20%</span> — 1 000 ₽</span>
                    <img class="hpc-la" src="images/like-active.svg">
                    <img class="hpc-lna" src="images/like-non-active.svg">
                    <img class="hpc-ca" src="images/compare-active.svg">
                    <img class="hpc-cna" src="images/compare-non-active.svg">
                    <a href="#"><button class="hits-buy-button">Купить в 1 клик</button></a>
                    <img class="hpc-ba" src="images/hpc-ba.svg">
                    <svg class="icon hpc-bna" width="48" height="48">
                        <use href="images/icon.svg#buy-icon"></use>
                    </svg>
                </div>
                <div class="hits-products-card">
                    <span class="hpc-span2-1">Хит продаж</span>
                    <img class="hpc-giro" src="images/giro.png">
                    <h3>Сигвеи</h3>
                    <h2>Гироскутер Smart Balance<br>Premium 10.5 Зелёный<br>граффити</h2>
                    <img class="hpc-star4" src="images/4star.svg">
                    <img class="hpc-nor" src="images/num-of-rate.svg">
                    <h4>5400 ₽</h4>
                    <h1>4990 ₽</h1>
                    <span class="s20pct1000"><span class="s20pct">20%</span> — 1 000 ₽</span>
                    <img class="hpc-la" src="images/like-active.svg">
                    <img class="hpc-lna" src="images/like-non-active.svg">
                    <img class="hpc-ca" src="images/compare-active.svg">
                    <img class="hpc-cna" src="images/compare-non-active.svg">
                    <a href="#"><button class="hits-buy-button">Купить в 1 клик</button></a>
                    <img class="hpc-ba" src="images/hpc-ba.svg">
                    <svg class="icon hpc-bna" width="48" height="48">
                        <use href="images/icon.svg#buy-icon"></use>
                    </svg>
                </div>
                <div class="hits-products-card h1-discount">
                    <img class="hpc-giro" src="images/giro.png">
                    <h3>Сигвеи</h3>
                    <h2>Гироскутер Smart Balance</h2>
                    <img class="hpc-star5-2" src="images/5star.svg">
                    <img class="hpc-nor" src="images/num-of-rate.svg">
                    <h1>13 690 ₽</h1>
                    <span class="s20pct1000"><span class="s20pct">20%</span> — 1 000 ₽</span>
                    <img class="hpc-la" src="images/like-active.svg">
                    <img class="hpc-lna" src="images/like-non-active.svg">
                    <img class="hpc-ca" src="images/compare-active.svg">
                    <img class="hpc-cna" src="images/compare-non-active.svg">
                    <a href="#"><button class="hits-buy-button">Купить в 1 клик</button></a>
                    <img class="hpc-ba" src="images/hpc-ba.svg">
                    <svg class="icon hpc-bna" width="48" height="48">
                        <use href="images/icon.svg#buy-icon"></use>
                    </svg>
                </div>
                <div class="hits-products-card hpc-last">
                    <span class="hpc-span1">Новинка</span>
                    <img class="hpc-giro" src="images/giro.png">
                    <h3>Сигвеи</h3>
                    <h2>Гироскутер Smart Balance<br>Well 6.5 Хип-Хоп<br>(АКВАЗАЩИТА)</h2>
                    <img class="hpc-star5-1" src="images/5star.svg">
                    <img class="hpc-nor" src="images/num-of-rate.svg">
                    <h4>5400 ₽</h4>
                    <h1>4990 ₽</h1>
                    <span class="s20pct1000"><span class="s20pct">20%</span> — 1 000 ₽</span>
                    <img class="hpc-la" src="images/like-active.svg">
                    <img class="hpc-lna" src="images/like-non-active.svg">
                    <img class="hpc-ca" src="images/compare-active.svg">
                    <img class="hpc-cna" src="images/compare-non-active.svg">
                    <a href="#"><button class="hits-buy-button">Купить в 1 клик</button></a>
                    <img class="hpc-ba" src="images/hpc-ba.svg">
                    <svg class="icon hpc-bna" width="48" height="48">
                        <use href="images/icon.svg#buy-icon"></use>
                    </svg>
                </div>
            </div>
        </section>
        <section class="novelty">
            <div class="hits-spans">
                <h1>Новинки</h1>
                <a href="#">Все товары <svg width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.68907 5.20829C5.85749 5.3663 5.85749 5.6337 5.68907 5.79171L0.673684 10.4971C0.418255 10.7368 1.378e-07 10.5557 1.33623e-07 10.2054L2.14003e-08 0.794595C1.72237e-08 0.444349 0.418255 0.263239 0.673684 0.502881L5.68907 5.20829Z" fill="#2A5275" /></svg></a>
            </div>
            <div class="hits-products">
                <div class="hits-products-card hpc-first">
                    <span class="hpc-span1">Новинка</span>
                    <span class="hpc-span2">Хит продаж</span>
                    <img class="hpc-giro" src="images/giro.png">
                    <h3>Сигвеи</h3>
                    <h2>Гироскутер Smart Balance<br>Well 6.5 Хип-Хоп<br>(АКВАЗАЩИТА)</h2>
                    <img class="hpc-star5-1" src="images/5star.svg">
                    <img class="hpc-nor" src="images/num-of-rate.svg">
                    <h4>5400 ₽</h4>
                    <h1>4990 ₽</h1>
                    <span class="s20pct1000"><span class="s20pct">20%</span> — 1 000 ₽</span>
                    <img class="hpc-la" src="images/like-active.svg">
                    <img class="hpc-lna" src="images/like-non-active.svg">
                    <img class="hpc-ca" src="images/compare-active.svg">
                    <img class="hpc-cna" src="images/compare-non-active.svg">
                    <a href="#"><button class="hits-buy-button">Купить в 1 клик</button></a>
                    <img class="hpc-ba" src="images/hpc-ba.svg">
                    <svg class="icon hpc-bna" width="48" height="48">
                        <use href="images/icon.svg#buy-icon"></use>
                    </svg>
                </div>
                <div class="hits-products-card">
                    <span class="hpc-span2-1">Хит продаж</span>
                    <img class="hpc-giro" src="images/giro.png">
                    <h3>Сигвеи</h3>
                    <h2>Гироскутер Smart Balance<br>Premium 10.5 Зелёный<br>граффити</h2>
                    <img class="hpc-star4" src="images/4star.svg">
                    <img class="hpc-nor" src="images/num-of-rate.svg">
                    <h4>5400 ₽</h4>
                    <h1>4990 ₽</h1>
                    <span class="s20pct1000"><span class="s20pct">20%</span> — 1 000 ₽</span>
                    <img class="hpc-la" src="images/like-active.svg">
                    <img class="hpc-lna" src="images/like-non-active.svg">
                    <img class="hpc-ca" src="images/compare-active.svg">
                    <img class="hpc-cna" src="images/compare-non-active.svg">
                    <a href="#"><button class="hits-buy-button">Купить в 1 клик</button></a>
                    <img class="hpc-ba" src="images/hpc-ba.svg">
                    <svg class="icon hpc-bna" width="48" height="48">
                        <use href="images/icon.svg#buy-icon"></use>
                    </svg>
                </div>
                <div class="hits-products-card h1-discount">
                    <img class="hpc-giro" src="images/giro.png">
                    <h3>Сигвеи</h3>
                    <h2>Гироскутер Smart Balance</h2>
                    <img class="hpc-star5-2" src="images/5star.svg">
                    <img class="hpc-nor" src="images/num-of-rate.svg">
                    <h1>13 690 ₽</h1>
                    <span class="s20pct1000"><span class="s20pct">20%</span> — 1 000 ₽</span>
                    <img class="hpc-la" src="images/like-active.svg">
                    <img class="hpc-lna" src="images/like-non-active.svg">
                    <img class="hpc-ca" src="images/compare-active.svg">
                    <img class="hpc-cna" src="images/compare-non-active.svg">
                    <a href="#"><button class="hits-buy-button">Купить в 1 клик</button></a>
                    <img class="hpc-ba" src="images/hpc-ba.svg">
                    <svg class="icon hpc-bna" width="48" height="48">
                        <use href="images/icon.svg#buy-icon"></use>
                    </svg>
                </div>
                <div class="hits-products-card hpc-last">
                    <span class="hpc-span1">Новинка</span>
                    <img class="hpc-giro" src="images/giro.png">
                    <h3>Сигвеи</h3>
                    <h2>Гироскутер Smart Balance<br>Well 6.5 Хип-Хоп<br>(АКВАЗАЩИТА)</h2>
                    <img class="hpc-star5-1" src="images/5star.svg">
                    <img class="hpc-nor" src="images/num-of-rate.svg">
                    <h4>5400 ₽</h4>
                    <h1>4990 ₽</h1>
                    <span class="s20pct1000"><span class="s20pct">20%</span> — 1 000 ₽</span>
                    <img class="hpc-la" src="images/like-active.svg">
                    <img class="hpc-lna" src="images/like-non-active.svg">
                    <img class="hpc-ca" src="images/compare-active.svg">
                    <img class="hpc-cna" src="images/compare-non-active.svg">
                    <a href="#"><button class="hits-buy-button">Купить в 1 клик</button></a>
                    <img class="hpc-ba" src="images/hpc-ba.svg">
                    <svg class="icon hpc-bna" width="48" height="48">
                        <use href="images/icon.svg#buy-icon"></use>
                    </svg>
                </div>
            </div>
        </section>
        <div class="promos">
            <a class="promos-block" href="#">
                <h1>Скидки до&nbsp;30% на&nbsp;сигвеи</h1>
                <img class="sigveipng" src="images/sigvei.png">
            </a>
            <a class="promos-block" href="#">
                <h1>Неделя<br>смарт часов</h1>
                <img src="images/chasi.png" width="139" height="158" style="margin-top: 10px;">
            </a>
        </div>
        <section class="sigveys">
            <div class="hits-spans">
                <h1>Сигвеи</h1>
                <a href="#">Все товары <svg width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.68907 5.20829C5.85749 5.3663 5.85749 5.6337 5.68907 5.79171L0.673684 10.4971C0.418255 10.7368 1.378e-07 10.5557 1.33623e-07 10.2054L2.14003e-08 0.794595C1.72237e-08 0.444349 0.418255 0.263239 0.673684 0.502881L5.68907 5.20829Z" fill="#2A5275" /></svg></a>
            </div>
            <div class="hits-products">
                <div class="hits-products-card hpc-first">
                    <span class="hpc-span1">Новинка</span>
                    <span class="hpc-span2">Хит продаж</span>
                    <img class="hpc-giro" src="images/giro.png">
                    <h3>Сигвеи</h3>
                    <h2>Гироскутер Smart Balance<br>Well 6.5 Хип-Хоп<br>(АКВАЗАЩИТА)</h2>
                    <img class="hpc-star5-1" src="images/5star.svg">
                    <img class="hpc-nor" src="images/num-of-rate.svg">
                    <h4>5400 ₽</h4>
                    <h1>4990 ₽</h1>
                    <span class="s20pct1000"><span class="s20pct">20%</span> — 1 000 ₽</span>
                    <img class="hpc-la" src="images/like-active.svg">
                    <img class="hpc-lna" src="images/like-non-active.svg">
                    <img class="hpc-ca" src="images/compare-active.svg">
                    <img class="hpc-cna" src="images/compare-non-active.svg">
                    <a href="#"><button class="hits-buy-button">Купить в 1 клик</button></a>
                    <img class="hpc-ba" src="images/hpc-ba.svg">
                    <svg class="icon hpc-bna" width="48" height="48">
                        <use href="images/icon.svg#buy-icon"></use>
                    </svg>
                </div>
                <div class="hits-products-card">
                    <span class="hpc-span2-1">Хит продаж</span>
                    <img class="hpc-giro" src="images/giro.png">
                    <h3>Сигвеи</h3>
                    <h2>Гироскутер Smart Balance<br>Premium 10.5 Зелёный<br>граффити</h2>
                    <img class="hpc-star4" src="images/4star.svg">
                    <img class="hpc-nor" src="images/num-of-rate.svg">
                    <h4>5400 ₽</h4>
                    <h1>4990 ₽</h1>
                    <span class="s20pct1000"><span class="s20pct">20%</span> — 1 000 ₽</span>
                    <img class="hpc-la" src="images/like-active.svg">
                    <img class="hpc-lna" src="images/like-non-active.svg">
                    <img class="hpc-ca" src="images/compare-active.svg">
                    <img class="hpc-cna" src="images/compare-non-active.svg">
                    <a href="#"><button class="hits-buy-button">Купить в 1 клик</button></a>
                    <img class="hpc-ba" src="images/hpc-ba.svg">
                    <svg class="icon hpc-bna" width="48" height="48">
                        <use href="images/icon.svg#buy-icon"></use>
                    </svg>
                </div>
                <div class="hits-products-card h1-discount">
                    <img class="hpc-giro" src="images/giro.png">
                    <h3>Сигвеи</h3>
                    <h2>Гироскутер Smart Balance</h2>
                    <img class="hpc-star5-2" src="images/5star.svg">
                    <img class="hpc-nor" src="images/num-of-rate.svg">
                    <h1>13 690 ₽</h1>
                    <span class="s20pct1000"><span class="s20pct">20%</span> — 1 000 ₽</span>
                    <img class="hpc-la" src="images/like-active.svg">
                    <img class="hpc-lna" src="images/like-non-active.svg">
                    <img class="hpc-ca" src="images/compare-active.svg">
                    <img class="hpc-cna" src="images/compare-non-active.svg">
                    <a href="#"><button class="hits-buy-button">Купить в 1 клик</button></a>
                    <img class="hpc-ba" src="images/hpc-ba.svg">
                    <svg class="icon hpc-bna" width="48" height="48">
                        <use href="images/icon.svg#buy-icon"></use>
                    </svg>
                </div>
                <div class="hits-products-card hpc-last">
                    <span class="hpc-span1">Новинка</span>
                    <img class="hpc-giro" src="images/giro.png">
                    <h3>Сигвеи</h3>
                    <h2>Гироскутер Smart Balance<br>Well 6.5 Хип-Хоп<br>(АКВАЗАЩИТА)</h2>
                    <img class="hpc-star5-1" src="images/5star.svg">
                    <img class="hpc-nor" src="images/num-of-rate.svg">
                    <h4>5400 ₽</h4>
                    <h1>4990 ₽</h1>
                    <span class="s20pct1000"><span class="s20pct">20%</span> — 1 000 ₽</span>
                    <img class="hpc-la" src="images/like-active.svg">
                    <img class="hpc-lna" src="images/like-non-active.svg">
                    <img class="hpc-ca" src="images/compare-active.svg">
                    <img class="hpc-cna" src="images/compare-non-active.svg">
                    <a href="#"><button class="hits-buy-button">Купить в 1 клик</button></a>
                    <img class="hpc-ba" src="images/hpc-ba.svg">
                    <svg class="icon hpc-bna" width="48" height="48">
                        <use href="images/icon.svg#buy-icon"></use>
                    </svg>
                </div>
            </div>
        </section>
        <section class="unicycle">
            <div class="hits-spans">
                <h1>Моноколеса</h1>
                <a href="#">Все товары <svg width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.68907 5.20829C5.85749 5.3663 5.85749 5.6337 5.68907 5.79171L0.673684 10.4971C0.418255 10.7368 1.378e-07 10.5557 1.33623e-07 10.2054L2.14003e-08 0.794595C1.72237e-08 0.444349 0.418255 0.263239 0.673684 0.502881L5.68907 5.20829Z" fill="#2A5275" /></svg></a>
            </div>
            <div class="hits-products">
                <div class="hits-products-card hpc-first">
                    <span class="hpc-span1">Новинка</span>
                    <span class="hpc-span2">Хит продаж</span>
                    <img class="hpc-giro" src="images/giro.png">
                    <h3>Сигвеи</h3>
                    <h2>Гироскутер Smart Balance<br>Well 6.5 Хип-Хоп<br>(АКВАЗАЩИТА)</h2>
                    <img class="hpc-star5-1" src="images/5star.svg">
                    <img class="hpc-nor" src="images/num-of-rate.svg">
                    <h4>5400 ₽</h4>
                    <h1>4990 ₽</h1>
                    <span class="s20pct1000"><span class="s20pct">20%</span> — 1 000 ₽</span>
                    <img class="hpc-la" src="images/like-active.svg">
                    <img class="hpc-lna" src="images/like-non-active.svg">
                    <img class="hpc-ca" src="images/compare-active.svg">
                    <img class="hpc-cna" src="images/compare-non-active.svg">
                    <a href="#"><button class="hits-buy-button">Купить в 1 клик</button></a>
                    <img class="hpc-ba" src="images/hpc-ba.svg">
                    <svg class="icon hpc-bna" width="48" height="48">
                        <use href="images/icon.svg#buy-icon"></use>
                    </svg>
                </div>
                <div class="hits-products-card">
                    <span class="hpc-span2-1">Хит продаж</span>
                    <img class="hpc-giro" src="images/giro.png">
                    <h3>Сигвеи</h3>
                    <h2>Гироскутер Smart Balance<br>Premium 10.5 Зелёный<br>граффити</h2>
                    <img class="hpc-star4" src="images/4star.svg">
                    <img class="hpc-nor" src="images/num-of-rate.svg">
                    <h4>5400 ₽</h4>
                    <h1>4990 ₽</h1>
                    <span class="s20pct1000"><span class="s20pct">20%</span> — 1 000 ₽</span>
                    <img class="hpc-la" src="images/like-active.svg">
                    <img class="hpc-lna" src="images/like-non-active.svg">
                    <img class="hpc-ca" src="images/compare-active.svg">
                    <img class="hpc-cna" src="images/compare-non-active.svg">
                    <a href="#"><button class="hits-buy-button">Купить в 1 клик</button></a>
                    <img class="hpc-ba" src="images/hpc-ba.svg">
                    <svg class="icon hpc-bna" width="48" height="48">
                        <use href="images/icon.svg#buy-icon"></use>
                    </svg>
                </div>
                <div class="hits-products-card h1-discount">
                    <img class="hpc-giro" src="images/giro.png">
                    <h3>Сигвеи</h3>
                    <h2>Гироскутер Smart Balance</h2>
                    <img class="hpc-star5-2" src="images/5star.svg">
                    <img class="hpc-nor" src="images/num-of-rate.svg">
                    <h1>13 690 ₽</h1>
                    <span class="s20pct1000"><span class="s20pct">20%</span> — 1 000 ₽</span>
                    <img class="hpc-la" src="images/like-active.svg">
                    <img class="hpc-lna" src="images/like-non-active.svg">
                    <img class="hpc-ca" src="images/compare-active.svg">
                    <img class="hpc-cna" src="images/compare-non-active.svg">
                    <a href="#"><button class="hits-buy-button">Купить в 1 клик</button></a>
                    <img class="hpc-ba" src="images/hpc-ba.svg">
                    <svg class="icon hpc-bna" width="48" height="48">
                        <use href="images/icon.svg#buy-icon"></use>
                    </svg>
                </div>
                <div class="hits-products-card hpc-last">
                    <span class="hpc-span1">Новинка</span>
                    <img class="hpc-giro" src="images/giro.png">
                    <h3>Сигвеи</h3>
                    <h2>Гироскутер Smart Balance<br>Well 6.5 Хип-Хоп<br>(АКВАЗАЩИТА)</h2>
                    <img class="hpc-star5-1" src="images/5star.svg">
                    <img class="hpc-nor" src="images/num-of-rate.svg">
                    <h4>5400 ₽</h4>
                    <h1>4990 ₽</h1>
                    <span class="s20pct1000"><span class="s20pct">20%</span> — 1 000 ₽</span>
                    <img class="hpc-la" src="images/like-active.svg">
                    <img class="hpc-lna" src="images/like-non-active.svg">
                    <img class="hpc-ca" src="images/compare-active.svg">
                    <img class="hpc-cna" src="images/compare-non-active.svg">
                    <a href="#"><button class="hits-buy-button">Купить в 1 клик</button></a>
                    <img class="hpc-ba" src="images/hpc-ba.svg">
                    <svg class="icon hpc-bna" width="48" height="48">
                        <use href="images/icon.svg#buy-icon"></use>
                    </svg>
                </div>
            </div>
        </section>
        <div class="promos">
            <a class="promos-block" href="#">
                <h1>Распродажа до&nbsp;—&nbsp;50%</h1>
                <img class="sigveipng percentpng" src="images/percent.png" width="144" height="124">
            </a>
            <a class="promos-block sigvei2" href="#">
                <h2>Smart&nbsp;Balance&nbsp;Premium по&nbsp;специальной&nbsp;цене</h2>
                <img src="images/sigvei2.png" width="203" height="161">
            </a>
        </div>
        <section class="electric-bicycles">
            <div class="hits-spans ebspans">
                <h1>Электровелосипеды</h1>
                <a href="#">Все товары <svg width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.68907 5.20829C5.85749 5.3663 5.85749 5.6337 5.68907 5.79171L0.673684 10.4971C0.418255 10.7368 1.378e-07 10.5557 1.33623e-07 10.2054L2.14003e-08 0.794595C1.72237e-08 0.444349 0.418255 0.263239 0.673684 0.502881L5.68907 5.20829Z" fill="#2A5275" /></svg></a>
            </div>
            <div class="hits-products">
                <div class="hits-products-card hpc-first">
                    <span class="hpc-span1">Новинка</span>
                    <span class="hpc-span2">Хит продаж</span>
                    <img class="hpc-giro" src="images/giro.png">
                    <h3>Сигвеи</h3>
                    <h2>Гироскутер Smart Balance<br>Well 6.5 Хип-Хоп<br>(АКВАЗАЩИТА)</h2>
                    <img class="hpc-star5-1" src="images/5star.svg">
                    <img class="hpc-nor" src="images/num-of-rate.svg">
                    <h4>5400 ₽</h4>
                    <h1>4990 ₽</h1>
                    <span class="s20pct1000"><span class="s20pct">20%</span> — 1 000 ₽</span>
                    <img class="hpc-la" src="images/like-active.svg">
                    <img class="hpc-lna" src="images/like-non-active.svg">
                    <img class="hpc-ca" src="images/compare-active.svg">
                    <img class="hpc-cna" src="images/compare-non-active.svg">
                    <a href="#"><button class="hits-buy-button">Купить в 1 клик</button></a>
                    <img class="hpc-ba" src="images/hpc-ba.svg">
                    <svg class="icon hpc-bna" width="48" height="48">
                        <use href="images/icon.svg#buy-icon"></use>
                    </svg>
                </div>
                <div class="hits-products-card">
                    <span class="hpc-span2-1">Хит продаж</span>
                    <img class="hpc-giro" src="images/giro.png">
                    <h3>Сигвеи</h3>
                    <h2>Гироскутер Smart Balance<br>Premium 10.5 Зелёный<br>граффити</h2>
                    <img class="hpc-star4" src="images/4star.svg">
                    <img class="hpc-nor" src="images/num-of-rate.svg">
                    <h4>5400 ₽</h4>
                    <h1>4990 ₽</h1>
                    <span class="s20pct1000"><span class="s20pct">20%</span> — 1 000 ₽</span>
                    <img class="hpc-la" src="images/like-active.svg">
                    <img class="hpc-lna" src="images/like-non-active.svg">
                    <img class="hpc-ca" src="images/compare-active.svg">
                    <img class="hpc-cna" src="images/compare-non-active.svg">
                    <a href="#"><button class="hits-buy-button">Купить в 1 клик</button></a>
                    <img class="hpc-ba" src="images/hpc-ba.svg">
                    <svg class="icon hpc-bna" width="48" height="48">
                        <use href="images/icon.svg#buy-icon"></use>
                    </svg>
                </div>
                <div class="hits-products-card h1-discount">
                    <img class="hpc-giro" src="images/giro.png">
                    <h3>Сигвеи</h3>
                    <h2>Гироскутер Smart Balance</h2>
                    <img class="hpc-star5-2" src="images/5star.svg">
                    <img class="hpc-nor" src="images/num-of-rate.svg">
                    <h1>13 690 ₽</h1>
                    <span class="s20pct1000"><span class="s20pct">20%</span> — 1 000 ₽</span>
                    <img class="hpc-la" src="images/like-active.svg">
                    <img class="hpc-lna" src="images/like-non-active.svg">
                    <img class="hpc-ca" src="images/compare-active.svg">
                    <img class="hpc-cna" src="images/compare-non-active.svg">
                    <a href="#"><button class="hits-buy-button">Купить в 1 клик</button></a>
                    <img class="hpc-ba" src="images/hpc-ba.svg">
                    <svg class="icon hpc-bna" width="48" height="48">
                        <use href="images/icon.svg#buy-icon"></use>
                    </svg>
                </div>
                <div class="hits-products-card hpc-last">
                    <span class="hpc-span1">Новинка</span>
                    <img class="hpc-giro" src="images/giro.png">
                    <h3>Сигвеи</h3>
                    <h2>Гироскутер Smart Balance<br>Well 6.5 Хип-Хоп<br>(АКВАЗАЩИТА)</h2>
                    <img class="hpc-star5-1" src="images/5star.svg">
                    <img class="hpc-nor" src="images/num-of-rate.svg">
                    <h4>5400 ₽</h4>
                    <h1>4990 ₽</h1>
                    <span class="s20pct1000"><span class="s20pct">20%</span> — 1 000 ₽</span>
                    <img class="hpc-la" src="images/like-active.svg">
                    <img class="hpc-lna" src="images/like-non-active.svg">
                    <img class="hpc-ca" src="images/compare-active.svg">
                    <img class="hpc-cna" src="images/compare-non-active.svg">
                    <a href="#"><button class="hits-buy-button">Купить в 1 клик</button></a>
                    <img class="hpc-ba" src="images/hpc-ba.svg">
                    <svg class="icon hpc-bna" width="48" height="48">
                        <use href="images/icon.svg#buy-icon"></use>
                    </svg>
                </div>
            </div>
        </section>
        <div class="hits-spans news">
            <h1>Новости</h1>
            <a href="news/news.php">Читать все <svg width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.68907 5.20829C5.85749 5.3663 5.85749 5.6337 5.68907 5.79171L0.673684 10.4971C0.418255 10.7368 1.378e-07 10.5557 1.33623e-07 10.2054L2.14003e-08 0.794595C1.72237e-08 0.444349 0.418255 0.263239 0.673684 0.502881L5.68907 5.20829Z" fill="#2A5275" /></svg></a>
        </div>
        <div class="promos">
            <a class="promos-block news-spans" href="news/news.php">
                <h3>Открытие нового магазина</h3>
                <span class="news-span1">Разнообразный и богатый опыт говорит нам, что консультация с широким активом требует от нас анализа анализа существующих паттернов поведения</span>
                <span class="news-span2">Подробнее<svg width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.68907 5.20829C5.85749 5.3663 5.85749 5.6337 5.68907 5.79171L0.673684 10.4971C0.418255 10.7368 1.378e-07 10.5557 1.33623e-07 10.2054L2.14003e-08 0.794595C1.72237e-08 0.444349 0.418255 0.263239 0.673684 0.502881L5.68907 5.20829Z" fill="#2A5275" /></svg></span>
                <span class="news-span3">05 июня 2021</span>
            </a>
            <a class="promos-block news-spans" href="news/news.php">
                <h3>Работа в праздничные дни</h3>
                <span class="news-span1">Принимая во внимание показатели успешности, социально-экономическое развитие играет определяющее значение для вывода текущих активов</span>
                <span class="news-span2">Подробнее<svg width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.68907 5.20829C5.85749 5.3663 5.85749 5.6337 5.68907 5.79171L0.673684 10.4971C0.418255 10.7368 1.378e-07 10.5557 1.33623e-07 10.2054L2.14003e-08 0.794595C1.72237e-08 0.444349 0.418255 0.263239 0.673684 0.502881L5.68907 5.20829Z" fill="#2A5275" /></svg></span>
                <span class="news-span3">05 июня 2021</span>
            </a>
        </div>
    </main>
    <footer>
        <section class="footer-content-wrap">
            <div class="fcw-block">
                <img class="logo-svg" src="logo.svg" alt="LOGO">
                <a href="#">
                    <h1>+7 (958) 111-95-03</h1>
                </a>
                <a href="#">
                    <h1>+7 (812) 660-50-54</h1>
                </a>
                <h2>Пн-вс: с 10:00 до 21:00</h2>
                <span>Проспект Стачек 67 к.5</span>
                <span>Лиговский проспект 205</span>
                <span>Гражданский проспект, 116 к.5</span>
            </div>
            <div class="fcw-block">
                <p>Для клиента</p>
                <a href="#" class="fcw-block-a">Как купить</a>
                <a href="#" class="fcw-block-a">Доставка и оплата</a>
                <a href="#" class="fcw-block-a">Кредит</a>
                <a href="#" class="fcw-block-a">Политика конфиденциальности</a>
                <a href="#" class="fcw-block-a">Вопросы и ответы (F.A.Q.)</a>
                <a href="#" class="fcw-block-a">Сервис и гарантия</a>
            </div>
            <div class="fcw-block">
                <p>О магазине</p>
                <a href="#" class="fcw-block-a">Отзывы</a>
                <a href="#" class="fcw-block-a">Наши преимущества</a>
                <a href="#" class="fcw-block-a">История компании</a>
                <a href="#" class="fcw-block-a">Сотрудничество</a>
                <a href="#" class="fcw-block-a">Партнёрская программа</a>
                <a href="#" class="fcw-block-a">Вакансии</a>
            </div>
            <div class="fcw-block">
                <p>Сотрудничество</p>
                <a href="#" class="fcw-block-a">Оптом</a>
                <a href="#" class="fcw-block-a">Дропшиппинг</a>
            </div>
        </section>
        <div class="footer-end">
            <hr>
            <div class="footer-end-content">
                <span>SmartТехника © 2021 Все права защищены</span>
                <div>
                    <a href="#"><img src="images/twitter.svg"></a>
                    <a href="#"><img src="images/facebook.svg"></a>
                    <a href="#"><img src="images/vk.svg"></a>
                    <a href="#"><img src="images/instagram.svg"></a>
                </div>
                <span>Дизайн сайта позаимствован с websl.ru</span>
            </div>
        </div>
    </footer>
    </div>
    <div class="bottom-nav">
        <a href="index.php" class="nav-item active">
            <img src="images/home-icon.svg">
            <span>Главная</span>
        </a>
        <a href="#catalogPopup" class="nav-item">
            <img src="images/cart-icon.svg">
            <span>Каталог</span>
        </a>
        <a href="#cart" class="nav-item">
            <img src="images/menu1-icon.svg">
            <span>Корзина</span>
        </a>
        <a href="#searchPopup" class="nav-item">
            <img src="images/search-icon.svg">
            <span>Поиск</span>
        </a>
        <a href="#morePopup" class="nav-item">
            <img src="images/more-icon.svg">
            <span>Еще</span>
        </a>
    </div>
    <div id="popup_space">
    </div>
    <div id="catalogPopup" class="popup">
        <a href="#popup_space"></a>
        <div class="popup-content">
            <a href="#popup_space" id="closePopup" class="close-btn">&times;</a>
            <h2>Каталог</h2>
            <ul>
                <li><a href="#"><img src="images/1.svg" alt="svg">Гироскутеры</a></li>
                <li><a href="#"><img src="images/2.svg" alt="svg">Электросамокаты</a></li>
                <li><a href="#"><img src="images/3.svg" alt="svg">Моноколеса</a></li>
                <li><a href="#"><img src="images/4.svg" alt="svg">Сигвеи и мини-сигвеи</a></li>
                <li><a href="#"><img src="images/skuter.svg" alt="svg">Электроскутеры</a></li>
                <li><a href="#"><img src="images/5.svg" alt="svg">Электровелосипеды</a></li>
                <li><a href="#"><img src="images/6.svg" alt="svg">Электроскейты</a></li>
                <li><a href="#"><img src="images/7.svg" alt="svg">Электромобили</a></li>
                <li><a href="#"><img src="images/8.svg" alt="svg">Аксессуары</a></li>
                <li><a href="#"><img src="images/9.svg" alt="svg">Умные игрушки</a></li>
                <li><a href="#"><img src="images/10.svg" alt="svg">Smart Watch</a></li>
            </ul>
        </div>
    </div>
    <div id="morePopup" class="popup">
        <a href="#popup_space"></a>
        <div class="popup-content morePopup-content">
            <a href="#popup_space" id="closePopup" class="close-btn">&times;</a>
            <h2>Ещё</h2>
            <ul>
                <li><a href="#">О компании</a></li>
                <li><a href="#">Акции</a></li>
                <li><a href="#">Рассрочка 0-0-12</a></li>
                <li><a href="#">Сервис и ремонт</a></li>
                <li><a href="#">Опт/дропшиппинг</a></li>
                <li><a href="#">Контакты</a></li>
            </ul>
        </div>
    </div>
    <div id="searchPopup" class="popup">
        <a href="#popup_space"></a>
        <div class="popup-content searchPopup-content">
            <a href="#popup_space" id="closePopup" class="close-btn">&times;</a>
            <h2>Поиск</h2>
            <input type="text" name="search" placeholder="Введите запрос, например «Smart balance»">
            <a href="#"><img src="images/search-icon.svg"></a>
        </div>
    </div>
<div class="popup-overlay" id="popup-login">
  <div class="popup-login-body">
    <div class="popup-login-content">
      <form action="vendor/signin.php" method="post">
        <div class="form-login-blue">
          <h1>Вход</h1>
          <a href="#popup_space"><img src="images/x.svg" alt="Закрыть"></a><br>
        </div>
        <div class="form-login-content">
            <?php
                if ($_SESSION['message']) {
                     echo '<p class="pass-error">' . $_SESSION['message'] . '</p>';
                }
                unset($_SESSION['message']);
            ?>
          <p>Эл. почта или телефон</p>
          <input type="text" placeholder="" name="login"><br>
          <p>Пароль</p>
          <div class="password-container">
                <input type="password" placeholder="" name="pass" class="flci" id="password-login">
                <button type="button" class="toggle-password" onclick="togglePassword('password-login', 'eye-icon-login')">
                    <img id="eye-icon-login" src="https://cdn-icons-png.flaticon.com/512/159/159604.png" alt="Показать пароль">
                </button>
            </div>
            <br>
          <a href="">Забыли пароль?</a><br>
          <label class="custom-checkbox">
            <input type="checkbox" name="rememberme">
            <span></span>
            <p class="flcp">Запомнить меня</p>
          </label>
          <button type="submit">Войти</button><br>
        </div>
      </form>
      <a href="#popup-registration" class="register-button">Зарегистрироваться</a>
    </div>
  </div>
</div>
<div class="popup-overlay" id="popup-registration">
  <div class="popup-login-body">
    <div class="popup-login-content">
      <form action="vendor/signup.php" method="post"> <!-- !!!!!!!!!!!!!!!!!!!!!!! -->
        <div class="form-login-blue">
          <h1>Регистрация</h1>
          <a href="#popup_space"><img src="images/x.svg" alt="Закрыть"></a><br>
        </div>
        <div class="form-login-content">
          <p>Имя</p>
          <input type="text" placeholder="" name="name"><br>
          <p>Эл. почта</p>
          <input type="email" placeholder="" name="email"><br>
          <p>Телефон</p>
          <input type="text" placeholder="" name="phone"><br>
          <p>Пароль</p>
          <div class="password-container">
                <input type="password" placeholder="" name="pass" class="flci" id="password-register">
                <button type="button" class="toggle-password" onclick="togglePassword('password-register', 'eye-icon-register')">
                    <img id="eye-icon-register" src="https://cdn-icons-png.flaticon.com/512/159/159604.png" alt="Показать пароль">
                </button>
            </div><br>
            <p class="repeat-pass-p">Подтвердите пароль</p>
            <div class="password-container">
                    <input type="password" placeholder="" name="repeat-pass" class="flci" id="password-register2">
                    <button type="button" class="toggle-password" onclick="togglePassword('password-register2', 'eye-icon-register2')">
                        <img id="eye-icon-register2" src="https://cdn-icons-png.flaticon.com/512/159/159604.png" alt="Показать пароль">
                    </button>
                </div><br>
                    <?php
                        if ($_SESSION['message1']) {
                            echo '<p class="pass-error">' . $_SESSION['message1'] . '</p>';
                        }
                        unset($_SESSION['message1']);
                    ?>
          <button type="submit">Зарегистрироваться</button><br>
        </div>
      </form>
      <a href="#popup-login" class="register-button">Я уже зарегистрирован</a>
    </div>
  </div>
</div>
<div id="profile-menu-mobile" class="profile-menu">
    <ul>
        <li><a href="vendor/profile.php">Общие сведения</a></li>
        <li><a href="vendor/profile.php">Личные данные</a></li>
        <li><a href="vendor/profile.php">Истории покупок</a></li>
        <li><a href="vendor/profile.php">Избранное</a></li>
        <li><a href="vendor/profile.php">Смените пароль</a></li>
        <li><a href="vendor/logout.php">Выход</a></li>
    </ul>
</div>
<div id="popup_space"></div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="main.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</body>

</html>