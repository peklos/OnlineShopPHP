<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Личный кабинет</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/profile-style.css">
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
     <?php include '../partials/header.php'; ?>

    <section class="profile-main">
        <section class="profile-content">
        <div class="news-content-spans">
                <a href="../index.php">Главная</a><svg width="8" height="17" viewBox="0 0 8 17" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_82_1867)"><path d="M7.68907 9.20829C7.85749 9.3663 7.85749 9.6337 7.68907 9.79171L2.67368 14.4971C2.41825 14.7368 2 14.5557 2 14.2054L2 4.7946C2 4.44435 2.41825 4.26324 2.67368 4.50288L7.68907 9.20829Z" fill="#070C11"/></g><defs><clipPath id="clip0_82_1867"><rect width="16" height="8" fill="white" transform="translate(0 16.5) rotate(-90)"/></clipPath></defs></svg>
                <span>Личный кабинет</span>
                <svg width="8" height="17" viewBox="0 0 8 17" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_82_1867)"><path d="M7.68907 9.20829C7.85749 9.3663 7.85749 9.6337 7.68907 9.79171L2.67368 14.4971C2.41825 14.7368 2 14.5557 2 14.2054L2 4.7946C2 4.44435 2.41825 4.26324 2.67368 4.50288L7.68907 9.20829Z" fill="#070C11"/></g><defs><clipPath id="clip0_82_1867"><rect width="16" height="8" fill="white" transform="translate(0 16.5) rotate(-90)"/></clipPath></defs></svg>
                <span>Общие сведения</span>
        </div>
        <div class="profile-blocks">
            <div class="profile-menu-buttons">
                <h1>Общие сведения</h1>
            <button class="tab" data-section="overview">Общие сведения</button>
            <button class="tab" data-section="personal">Личные данные</button>
            <button class="tab" data-section="orders">История покупок</button>
            <button class="tab" data-section="favorite">Избранное</button>
            <button class="tab" data-section="change_pass">Сменить пароль</button>
            <button class="tab"><a href="../vendor/logout.php" class="logout-link">Выйти</a></button>
            </div>
            <div class="profile-general-info" id="content">
                Выберите раздел для отображения информации.
            </div>
        </div>
        </section>
    </section>

     <?php include '../partials/footer.php'; ?>

     <script type="text/javascript" src="profile.js"></script>
</body>
</html>