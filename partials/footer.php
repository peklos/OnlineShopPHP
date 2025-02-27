<footer>
        <section class="footer-content-wrap">
            <div class="fcw-block">
                <img class="logo-svg" src="../logo.svg" alt="LOGO">
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
                    <a href="#"><img src="../images/twitter.svg"></a>
                    <a href="#"><img src="../images/facebook.svg"></a>
                    <a href="#"><img src="../images/vk.svg"></a>
                    <a href="#"><img src="../images/instagram.svg"></a>
                </div>
                <span>Дизайн сайта позаимствован с websl.ru</span>
            </div>
        </div>
    </footer>
    </div>
    </div>
    <div class="bottom-nav">
        <a href="index.html" class="nav-item active">
          <img src="../images/home-icon.svg">
          <span>Главная</span>
        </a>
        <a href="#catalogPopup" class="nav-item">
          <img src="../images/cart-icon.svg">
            <span>Каталог</span>
        </a>
        <a href="#cart" class="nav-item">
          <img src="../images/menu1-icon.svg">
            <span>Корзина</span>
        </a>
        <a href="#searchPopup" class="nav-item">
          <img src="../images/search-icon.svg">
            <span>Поиск</span>
        </a>
        <a href="#morePopup" class="nav-item">
          <img src="../images/more-icon.svg">
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
                <li><a href="#"><img src="../images/1.svg" alt="svg">Гироскутеры</a></li>
                <li><a href="#"><img src="../images/2.svg" alt="svg">Электросамокаты</a></li>
                <li><a href="#"><img src="../images/3.svg" alt="svg">Моноколеса</a></li>
                <li><a href="#"><img src="../images/4.svg" alt="svg">Сигвеи и мини-сигвеи</a></li>
                <li><a href="#"><img src="../images/skuter.svg" alt="svg">Электроскутеры</a></li>
                <li><a href="#"><img src="../images/5.svg" alt="svg">Электровелосипеды</a></li>
                <li><a href="#"><img src="../images/6.svg" alt="svg">Электроскейты</a></li>
                <li><a href="#"><img src="../images/7.svg" alt="svg">Электромобили</a></li>
                <li><a href="#"><img  src="../images/8.svg" alt="svg">Аксессуары</a></li>
                <li><a href="#"><img  src="../images/9.svg" alt="svg">Умные игрушки</a></li>
                <li><a href="#"><img  src="../images/10.svg" alt="svg">Smart Watch</a></li>
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
            <a href="#"><img src="../images/search-icon.svg"></a>
        </div>
    </div>
    <div class="popup-overlay" id="popup-login">
  <div class="popup-login-body">
    <div class="popup-login-content">
      <form action="../vendor/signin.php?redirect=<?php echo urlencode($_SERVER['REQUEST_URI']); ?>" method="post">
        <div class="form-login-blue">
          <h1>Вход</h1>
          <a href="#popup_space"><img src="../images/x.svg" alt="Закрыть"></a><br>
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
      <form action="../vendor/signup.php?redirect=<?php echo urlencode($_SERVER['REQUEST_URI']); ?>" method="post"> <!-- !!!!!!!!!!!!!!!!!!!!!!! -->
        <div class="form-login-blue">
          <h1>Регистрация</h1>
          <a href="#popup_space"><img src="../images/x.svg" alt="Закрыть"></a><br>
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
        <li><a href="../vendor/profile.php">Общие сведения</a></li>
        <li><a href="../vendor/profile.php">Личные данные</a></li>
        <li><a href="../vendor/profile.php">Истории покупок</a></li>
        <li><a href="../vendor/profile.php">Избранное</a></li>
        <li><a href="../vendor/profile.php">Смените пароль</a></li>
        <li><a href="../vendor/logout.php?redirect=<?php echo urlencode($_SERVER['REQUEST_URI']); ?>">Выход</a></li>
    </ul>
</div>
<div id="popup_space"></div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="../main.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</body>