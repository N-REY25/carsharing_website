<?php
    if (isset($_GET['id'])) {
        require '../orm/db.php';
        $new = R::findOne('news', 'WHERE id = "'.$_GET['id'].'"');
    } else {
        header('Location: /');
    }
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>FreeDrive - Прокат автомобилей в городе Пенза</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <section class="menu menu_off" onclick="menu_up()">
            <div class="m_menu">
                <a class="m_a" href="/#actual">Актуально</a>
                <a class="m_a" href="/#about">О нас</a>
                <a class="m_a" href="/#car">Автомобили</a>
                <a class="m_a" href="/#rates">Тарифы</a>
                <a class="m_a" href="/#application">Приложение</a>
                <a class="m_a" href="/#reviews">Отзывы</a>
            </div>
        </section>
        <header>
            <div class="wrapper">
                <div class="header">
                    <h1 class="h_h1">FreeDrive</h1>
                    <nav class="h_nav">
                        <a class="hn_a" href="#actual">Актуально</a>
                        <a class="hn_a" href="#about">О нас</a>
                        <a class="hn_a" href="#car">Автомобили</a>
                        <a class="hn_a" href="#rates">Тарифы</a>
                        <a class="hn_a" href="#application">Приложение</a>
                        <a class="hn_a" href="#reviews">Отзывы</a>
                    </nav>
                    <a class="h_a" href="#" onclick="menu_down()"><img class="h_ai" src="../img/menu.png" alt="Меню"></a>
                </div>
            </div>
        </header>
        <section class="news_new_section">
            <div class="wrapper">
                <div class="news_new">
                    <div class="nn_crumbs">
                        <a class="nnc_a" href="/#actual">Новости</a>
                        <p>/ <?php echo $new->title ?></p>
                    </div>
                    <img class="nn_img" src="../img/23.png" alt="Новость">
                    <h3><?php echo $new->title ?></h3>
                    <p class="nn_p">Автор: <?php echo $new->autor ?></p>
                    <p><?php echo $new->text ?></p>
                </div>
            </div>
        </section>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script>
            function menu_down() {
                $('.menu').slideToggle(300, function(){
                    $('.menu').removeClass('menu_off');
                    $('.menu').addClass('menu_on');
                });
            }

            function menu_up() {
                $('.menu').slideToggle(300, function(){
                    $('.menu').removeClass('menu_off');
                    $('.menu').addClass('menu_on');
                });
            }
        </script>
    </body>
</html>