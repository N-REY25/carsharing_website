<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>FreeDrive - Прокат автомобилей в городе Пенза</title>
        <link rel="stylesheet" href="css/style.css">
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
                    <a class="h_a" href="#" onclick="menu_down()"><img class="h_ai" src="img/menu.png" alt="Меню"></a>
                </div>
            </div>
        </header>
        <section class="welcome_section">
            <div class="wrapper">
                <div class="welcome">
                    <div class="w_text">
                        <h2 class="wt_h2">ПРОКАТ АВТОМОБИЛЕЙ В ГОРОДЕ ПЕНЗА</h2>
                        <p class="wt_p">Будь экономным и свободным вместе с сервисом FreeDrive</p>
                    </div>
                    <div class="w_info">
                        <div class="wi_texts">
                            <div class="wi_text">
                                <img class="wit_img" src="img/2.png" alt="Часы">
                                <p class="wit_p">Круглосуточно</p>
                            </div>
                            <div class="wi_text">
                                <img class="wit_img" src="img/3.png" alt="Телефон">
                                <p class="wit_p">8 800 600-34-82</p>
                            </div>
                        </div>
                        <a id="button-down" class="wi_a" href="#booking">НАЧАТЬ</a>
                    </div>
                </div>
            </div>
        </section>
        <section id="actual" class="news_section">
            <div class="wrapper">
                <div class="news">
                    <h3 class="n_h3">Новости</h3>
                    <div class="n_items">
                        <!-- AJAX ответ -->
                    </div>
                </div>
            </div>
        </section>
        <section id="about" class="about_section">
            <div class="wrapper">
                <div class="about">
                    <h3 class="a_h3">О нас</h3>
                    <p class="a_p">FreeDrive — это каршеринговый сервис, где быстрая и удобная аренда автомобилией разных классов на короткий срок с помощью нашего приложения.</p>
                    <p class="a_p">Находимся по адресу г. Пенза, ул. Московская, 24 Б</p>
                    <div class="a_items">
                        <div class="a_item">
                            <h4 class="ai_h4">Широкий выбор авто</h4>
                            <img class="ai_img" src="img/4.png" alt="Машинка">
                            <h4 class="ai_h4">От эконом класса до премиум</h4>
                        </div>
                        <div class="a_item">
                            <h4 class="ai_h4">Автомобили застрахованы в КАСКО</h4>
                            <img class="ai_img" src="img/5.png" alt="Защита">
                            <h4 class="ai_h4">В случае ДТП, страховая компания возмещает убытки</h4>
                        </div>
                        <div class="a_item">
                            <h4 class="ai_h4">Поддержка по телефону</br>24 / 7</h4>
                            <img class="ai_img" src="img/6.png" alt="Оператор">
                            <h4 class="ai_h4">Наши специалисты всегда готовы Вам помочь</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="car" class="car_section">
            <div class="wrapper">
                <div class="car">
                    <h3 class="c_h3">Автомобили</h3>
                    <div class="c_filter">
                        <a class="cf_a" href="#car" onclick="ajax_cars('all_cars')">Все автомобили</a>
                        <p class="cf_p">/</p>
                        <a class="cf_a" href="#car" onclick="ajax_cars('economy')">Эконом</a>
                        <p class="cf_p">/</p>
                        <a class="cf_a" href="#car" onclick="ajax_cars('comfort')">Комфорт</a>
                        <p class="cf_p">/</p>
                        <a class="cf_a" href="#car" onclick="ajax_cars('premium')">Премиум</a>
                    </div>
                    <div class="c_cars">
                        <!-- AJAX ответ -->
                    </div>
                </div>
            </div>
        </section>
        <section id="rates" class="rates_section">
            <div class="wrapper">
                <div class="rates">
                    <h3 class="r_h3">Тарифы</h3>
                    <div class="r_items">
                        <div class="r_item">
                            <h4 class="ri_h4">Эконом</h4>
                            <p class="ri_p">Возраст: от 20 лет</p>
                            <p class="ri_p">Стаж: от 2-х лет</p>
                            <h5 class="ri_h5">Стоимость</h5>
                            <h6 class="ri_h6">Поминутная аренда</h6>
                            <p class="ri_p">Управление: 7 руб/мин</p>
                            <p class="ri_p">Режим ождидания: с 21 мин 2 руб/мин</p>
                            <h6 class="ri_h6">Суточная аренда</h6>
                            <p class="ri_p">2000 руб/сут - до 200 км</p>
                            <p class="ri_p">Более 200 км - 6 руб/мин</p>
                            <h6 class="ri_h6">Автомобили</h6>
                            <p class="ri_p">Kia Rio X-Line, Renault Logan, Nissan Almera, Ford Fiesta</p>
                        </div>
                        <div class="r_item">
                            <h4 class="ri_h4">Комфорт</h4>
                            <p class="ri_p">Возраст: от 22-х лет</p>
                            <p class="ri_p">Стаж: от 2-х лет</p>
                            <h5 class="ri_h5">Стоимость</h5>
                            <h6 class="ri_h6">Поминутная аренда</h6>
                            <p class="ri_p">Управление: 10 руб/мин</p>
                            <p class="ri_p">Режим ождидания: с 21 мин 3 руб/мин</p>
                            <h6 class="ri_h6">Суточная аренда</h6>
                            <p class="ri_p">2800 руб/сут - до 200 км</p>
                            <p class="ri_p">Более 200 км - 8 руб/мин</p>
                            <h6 class="ri_h6">Автомобили</h6>
                            <p class="ri_p">Skoda Octavia Volkswagen Polo, BMW 4</p>
                        </div>
                        <div class="r_item">
                            <h4 class="ri_h4">Премиум</h4>
                            <p class="ri_p">Возраст: от 24-х лет</p>
                            <p class="ri_p">Стаж: от 4-х лет</p>
                            <h5 class="ri_h5">Стоимость</h5>
                            <h6 class="ri_h6">Поминутная аренда</h6>
                            <p class="ri_p">Управление: 14 руб/мин</p>
                            <p class="ri_p">Режим ождидания: с 21 мин 5 руб/мин</p>
                            <h6 class="ri_h6">Суточная аренда</h6>
                            <p class="ri_p">3500 руб/сут - до 200 км</p>
                            <p class="ri_p">Более 200 км - 12 руб/мин</p>
                            <h6 class="ri_h6">Автомобили</h6>
                            <p class="ri_p">Audi A6, Mercedes C-Class</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="application" class="app_section">
            <div class="wrapper">
                <div class="app">
                    <h3 class="a_h3">Приложение</h3>
                    <div class="a_info">
                        <img class="ain_img" src="img/17.png" alt="Машина">
                        <div class="ain_text">
                            <h4 class="aint_h4">01 Скачивание мобильного приложения</h4>
                            <p class="aint_p">Установите приложение FreeDrive для IOS и Android</p>
                            <img class="aint_img" src="img/18.png" alt="Приложения"></br></br>
                            <h4 class="aint_h4">02 Регистрация</h4>
                            <p class="aint_p">Введите свои данные, скан паспорта и водительские права. Затем после подтверждения системы, добавляете одну из платёжных карт</p></br></br>
                            <h4 class="aint_h4">03 Выбор автомобиля</h4>
                            <p class="aint_p">Выбираете подходящий автомобиль из списка, забронируйте, и начните вашу поездку. По завершении поездки сумма аренды будет автоматически списана с вашей карты</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="reviews" class="reviews_section">
            <div class="wrapper">
                <div class="reviews">
                    <h3 class="re_h3">Отзывы</h3>
                    <div class="re_items">
                        <!-- AJAX ответ -->
                    </div>
                </div>
            </div>
        </section>
        <section class="reviews_сreate_section">
            <div class="wrapper">
                <div class="reviews_сreate">
                    <h3 class="rc_h3">Оставить отзыв</h3>
                    <div class="rc_form">
                        <input class="rcf_input" id="name" type="text" placeholder="ФИО">
                        <input class="rcf_input" id="url" type="text" placeholder="Ссылка на социальную сеть">
                        <textarea class="rcf_textarea" id="text" name="" placeholder="Комментарий"></textarea>
                        <button class="rcf_button" onclick="ajax_reviews_сreate()">Отправить</button>
                    </div>
                </div>
            </div>
        </section>
        <section id="booking" class="booking_section">
            <div class="wrapper">
                <div class="booking">
                    <h3 class="b_h3">Бронь</h3>
                    <p class="b_p">Выбирайте и бронируйте себе авто и мы Вам перезвоним для уточнения</p>
                    <div class="b_items">
                        <div class="b_form">
                            <input class="bf_input" id="name_b" type="text" placeholder="ФИО">
                            <input class="bf_input" id="phone" type="text" placeholder="Телефон">
                            <select class="bf_select" id="select">
                                <?php if (isset($_GET['car'])) : ?>
                                    <option selected value="<?php echo $_GET['car']?>"><?php echo $_GET['car']?></option>
                                    <option disabled>----------------</option>
                                <?php else : ?>
                                <option selected disabled>Выбирите автомобиль</option>
                                <?php endif ?>
                            </select>
                            <p>Нажимая на конопку "Забронировать" вы автоматически соглашаетесь на обработку персональных данных</p></br>
                            <button class="bf_button" onclick="ajax_booking_сreate()">Забронировать</button>
                        </div>
                        <div class="b_info">
                            <img class="bi_img1" src="img/18.png" alt="Приложения">
                            <img class="bi_img2" src="img/26.png" alt="Иконки">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="wrapper">
                <div class="footer">
                    <h2 class="f_h2">FreeDrive</h2>
                    <p class="f_p">© 2022 FreeDrive. Все права защищены.</p>
                </div>
            </div>
        </footer>
        <a id="button-up" class="top a_off" href="#"><img src="img/27.png" alt="Кнопка вверх"></a>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script>
            $.ajax({
                url: '/api/',
                method: 'get',
                dataType: 'json',
                data: {query: 'news'},
                success: function(data) {
                    let i = 0;
                    while (i < data['news'].length) {
                        $('.n_items').append('<a class="n_item n_item_1" href="/new?id=' + data['news'][i]['id'] + '"><h4>' + data['news'][i]['title'] + '</h4></a>');
                        i++;
                    }
                }
            });

            $.ajax({
                url: '/api/',
                method: 'get',
                dataType: 'json',
                data: {query: 'cars', filter: 'all_cars'},
                success: function(data) {
                    let i = 0;
                    while (i < data['cars'].length) {
                        $('.c_cars').append('<a class="c_car" href="/?car=' + data['cars'][i]['name'] + '#booking"><img src="img/' + data['cars'][i]['photo'] + '" alt="' + data['cars'][i]['name'] + '"><h4 class="cc_h4">' + data['cars'][i]['name'] + '</h4></a>');
                        $('#select').append('<option value="' + data['cars'][i]['name'] + '">' + data['cars'][i]['name'] + '</option>');
                        i++;
                    }
                }
            });

            function ajax_cars(filter) {
                $.ajax({
                    url: '/api/',
                    method: 'get',
                    dataType: 'json',
                    data: {query: 'cars', filter: filter},
                    success: function(data) {
                        $('.c_cars').empty();
                        let i = 0;
                        while (i < data['cars'].length) {
                            $('.c_cars').append('<a class="c_car" href="/?car=' + data['cars'][i]['name'] + '#booking"><img src="img/' + data['cars'][i]['photo'] + '" alt="' + data['cars'][i]['name'] + '"><h4 class="cc_h4">' + data['cars'][i]['name'] + '</h4></a>');
                            i++;
                        }
                    }
                });
            }

            $.ajax({
                url: '/api/',
                method: 'get',
                dataType: 'json',
                data: {query: 'reviews'},
                success: function(data) {
                    let i = 0;
                    while (i < data['reviews'].length) {
                        $('.re_items').append('<div class="re_item"><img class="rei_img" src="https://cdn-icons-png.flaticon.com/512/476/476705.png" alt="img holder"><div class="rei_text"><p>' + data['reviews'][i]['text'] + '</p></br><p>— ' + data['reviews'][i]['name'] + ', ' + data['reviews'][i]['url'] + '</p></div></div>');
                        i++;
                    }
                }
            });

            function ajax_reviews_сreate() {
                $.ajax({
                    url: '/api/',
                    method: 'post',
                    dataType: 'json',
                    data: {query: 'reviews_сreate', name: document.querySelector('#name').value, url: document.querySelector('#url').value, text: document.querySelector('#text').value},
                    success: function(data) {
                        console.log(data);
                        document.querySelector('#name').value = '';
                        document.querySelector('#url').value = '';
                        document.querySelector('#text').value = '';
                        alert("Отзыв отправлен!");
                    }
                });
            }

            function ajax_booking_сreate() {
                $.ajax({
                    url: '/api/',
                    method: 'post',
                    dataType: 'json',
                    data: {query: 'booking', name: document.querySelector('#name_b').value, phone: document.querySelector('#phone').value, car: document.querySelector('#select').value},
                    success: function(data) {
                        console.log(data);
                        document.querySelector('#name_b').value = '';
                        document.querySelector('#phone').value = '';
                        alert("Бронь отправлена!");
                    }
                });
            }

            $(document).on("scroll", window, function () {
                if ($(window).scrollTop() > 500) {
                    $('.top').removeClass('a_off');
                } else {
                    $('.top').addClass('a_off');
                }
            });
            
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

            $('#button-up').click(function () {
                $('body,html').animate({
                    scrollTop: 0
                }, 1000);
                return false;
            });

            $('#button-down').click(function () {
                $('body,html').animate({
                    scrollTop: 4300
                }, 2000);
                return false;
            });
        </script>
    </body>
</html>