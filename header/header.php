<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&family=Space+Grotesk:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <link rel='stylesheet' href="header/css/style.css">
    <link rel='stylesheet' href="../diary/css/diary_main.css">
</head>
<body>
    <header>
        <div class="header_prog">
        <div class="logo">
            <img src="header/IMG/book_120884.png">
            <h5>Online diary<br><span class="title_underText">Take bag and keep this fu*king knowledge</span></h5>
        </div>
        <div class="nav" id='navid'>
            <ul>
                <li><a href="index.php">Головнa</a></li>
                <li><a href="diary.php">Щоденник</a></li>
                <li><a href="soon.php">Для батьків</a></li>
                <li><a href="soon.php">Про нас</a></li>
            </ul>
        </div>
        <div class="log">
            <p><a href="#" class="sign_up_but">SIGN UP</a> <span class="line">|</span> <a href="#" class="sign_in_but">SIGN IN</a></p>
        </div>
        </div>
        <hr>
    </header>
    <div class="sing_up_pos hide">
    <div class="sing_up">
        <div class="sing_up_title">
        <h5>Зарегеструватися</h5>
        </div>
        <div class="gmail">
            <p>Електронна пошта</p>
            <input type="text" placeholder="Електронна пошта">
        </div>
        <div class="password">
            <p>Пароль</p>
            <input type="text" placeholder="Пароль">
        </div>
        <div class="password_repeat">
            <p>Повторіть пароль</p>
            <input type="text" placeholder="Повторіть пароль">
        </div>
        </div>
    </div>
    </div>
    <div class="sing_in_pos hide">
        <div class="sing_in">
        <div class="sing_in_title">
        <h5>Увійти</h5>
        </div>
        <div class="gmail">
            <p>Електронна пошта</p>
            <input type="text" placeholder="Електронна пошта">
        </div>
        <div class="password">
            <p>Пароль</p>
            <input type="text" placeholder="Пароль">
        </div>
        </div>
        </div>
    <?php
    require('dopjs/dopjs.php');
    ?>