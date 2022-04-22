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
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
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
        <?php if ($_GET['page'] == 'reviews') : ?>
            <section class="content_reviews_section">
                <div class="wrapper">
                    <div class="content_reviews">
                        <h3 class="cr_h3">Управление отзывами</h3>
                        <div class="cr_active">
                            <h4>Активные отзывы</h4>
                            <div id="rev3" class="cra_items">
                                <span>Загрузка...</span>
                                <!-- AJAX ответ -->
                            </div>
                        </div>
                        <div class="cr_arhive">
                            <h4>Все отзывы</h4>
                            <div id="rev" class="cra_items">
                                <span>Загрузка...</span>
                                <!-- AJAX ответ -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <script>
                function ajax() {
                    $.ajax({
                        url: '/api/',
                        method: 'get',
                        dataType: 'json',
                        data: {query: 'reviews'},
                        success: function(data) {
                            let i = 0;
                            $('#rev3').empty();
                            while (i < data['reviews'].length) {
                                if (data['reviews'][i]['status'] == '1') {
                                    var a = '<a class="craib_down" onclick="ajax_button_down(' + data['reviews'][i]['id'] + ')" href="#">Снять с публикации</a>';
                                } else {
                                    var a = '<a class="craib_up" onclick="ajax_button_up(' + data['reviews'][i]['id'] + ')" href="#">Опубликовать</a>';
                                };
                                $('#rev3').append('<div class="cra_item"><div class="crai_text"><h4 class="crait_name">' + data["reviews"][i]["name"] + ', ' + data["reviews"][i]["url"] + '</h4><p class="crait_text">' + data['reviews'][i]['text'] + '</p></div><div class="crai_button">' + a + '</div class=""></div>');
                                i++;
                            }
                        }
                    });
                    
                    $.ajax({
                        url: '/api/',
                        method: 'get',
                        dataType: 'json',
                        data: {query: 'admin_reviews'},
                        success: function(data) {
                            let i = 0;
                            $('#rev').empty();
                            while (i < data['reviews'].length) {
                                if (data['reviews'][i]['status'] == '1') {
                                    var a = '<a class="craib_down" onclick="ajax_button_down(' + data['reviews'][i]['id'] + ')" href="#">Снять с публикации</a>';
                                } else {
                                    var a = '<a class="craib_up" onclick="ajax_button_up(' + data['reviews'][i]['id'] + ')" href="#">Опубликовать</a>';
                                };
                                $('#rev').append('<div class="cra_item"><div class="crai_text"><h4 class="crait_name">' + data["reviews"][i]["name"] + ', ' + data["reviews"][i]["url"] + '</h4><p class="crait_text">' + data['reviews'][i]['text'] + '</p></div><div class="crai_button">' + a + '</div class=""></div>');
                                i++;
                            }
                        }
                    });
                }

                function ajax_button_down(id) {
                    $.ajax({
                        url: '/api/',
                        method: 'get',
                        dataType: 'json',
                        data: {query: 'reviews_down', reviews_id: id},
                        success: function(data) {
                            ajax();
                            alert('Отзыв снят с публикации!');
                        }
                    });
                }

                function ajax_button_up(id) {
                    $.ajax({
                        url: '/api/',
                        method: 'get',
                        dataType: 'json',
                        data: {query: 'reviews_up', reviews_id: id},
                        success: function(data) {
                            ajax();
                            alert('Отзыв опубликован!');
                        }
                    });
                }

                setInterval(ajax, 3000);
            </script>
        <?php elseif ($_GET['page'] == 'booking') : ?>
            <section class="content_booking_section">
                <div class="wrapper">
                    <div class="content_booking">
                        <h3 class="cb_h3">Забронированые машины</h3>
                        <div id="book" class="cb_items">
                            <span>Загрузка...</span>
                            <!-- AJAX ответ -->
                        </div>
                    </div>
                </div>
            </section>
            <script>
                function ajax() {
                    $.ajax({
                        url: '/api/',
                        method: 'get',
                        dataType: 'json',
                        data: {query: 'booking_get'},
                        success: function(data) {
                            let i = 0;
                            $('#book').empty();
                            while (i < data['booking'].length) {
                                $('#book').append('<div class="cd_item"><h3>Бронирование №' + data['booking'][i]['id'] + '</h3></br><p><b>ФИО:</b> ' + data['booking'][i]['name'] + '</p><p><b>Телефон:</b> ' + data['booking'][i]['phone'] + '</p><p><b>Машина:</b> ' + data['booking'][i]['car'] + '</p><p><b>Дата и время:</b> ' + data['booking'][i]['date'] + '</p></div>');
                                i++;
                            }
                        }
                    });
                }

                setInterval(ajax, 3000);
            </script>
        <?php elseif ($_GET['page'] == 'news') : ?>
            <section class="content_news_section">
                <div class="wrapper">
                    <div class="content_news">
                        <h3 class="cn_h3">Добавить новость</h3>
                        <input id="title" class="cn_input" type="text" placeholder="Введите заголовок">
                        <textarea id="news_text" class="cn_input" placeholder="Введите текст новости"></textarea>
                        <button class="button_news" onclick="news_up()">Добавить</button>
                    </div>
                </div>
            </section>
            <script>
                function news_up() {
                    $.ajax({
                        url: '/api/',
                        method: 'post',
                        dataType: 'json',
                        data: {query: 'news_up', title:  document.querySelector('#title').value, text:  document.querySelector('#news_text').value},
                        success: function(data) {
                            alert('Новость опубликована!');
                        }
                    });
                }
            </script>
        <?php else : ?>

        <?php endif ?>
    </body>
</html>