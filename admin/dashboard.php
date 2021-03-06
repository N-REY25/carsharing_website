<?php
    if (!isset($_SESSION['user'])) {
        header('Location: /admin');
    }
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>FreeDrive - Прокат автомобилей в городе Пенза</title>
        <link rel="stylesheet" href="../css/style_a.css">
    </head>
    <body>
        <header>
            <div class="wrapper">
                <div class="header">
                    <h1 class="h_h1">FreeDrive</h1>
                    <nav class="h_nav">
                        <a href="/admin?page=reviews" class="hn_a">Отзывы</a>
                        <a href="/admin?page=booking" class="hn_a">Бронь</a>
                        <a href="/admin?page=news" class="hn_a">Новости</a>
                    </nav>
                    <nav class="h_nav">
                        <p class="hn_a">Администратор - <?php echo $_SESSION['user']->surname ?> <?php echo $_SESSION['user']->name ?></p>
                        <a class="hn_a" href="/admin?logout">Выход</a>
                    </nav>
                </div>
            </div>
        </header>
        <section class="dashboard_section">
            <div class="wrapper">
                <h2>Добро пожаловать в панель управления!</h2>
            </div>
        </section>
    </body>
</html>