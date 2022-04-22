<?php
    require '../orm/db.php';

    // Выход
    if (isset($_GET['logout'])) {
        unset($_SESSION['user']);
        header('Location: /admin');
    }

    // Обработка отображения страниц
    if (isset($_SESSION['user'])) {
        switch ($_GET['page']) {
            case 'reviews': include 'content.php';
            break;
            case 'booking': include 'content.php';
            break;
            case 'news': include 'content.php';
            break;
            default: include 'dashboard.php';
        }
    } else {
        include 'login.html';
    }