<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FreeDrive - Прокат автомобилей в городе Пенза</title>
        <!-- Остальные модули -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header>
            <div class="wrapper">
                <div class="header">
                    <h1>FreeDrive</h1>
                    <nav>
                        <a href="#actual">Актуально</a>
                        <a href="#about">О нас</a>
                        <a href="#car">Автомобили</a>
                        <a href="#rates">Тарифы</a>
                        <a href="#application">Приложение</a>
                        <a href="#reviews">Отзывы</a>
                    </nav>
                </div>
            </div>
        </header>
        <section class="welcome_section">
            <div class="wrapper">
                <div class="ws_div">
                    <div class="wsd_text">
                        <h2>ПРОКАТ АВТОМОБИЛЕЙ В ГОРОДЕ ПЕНЗА</h2>
                        <p>Будь экономным и свободным вместе с сервисом FreeDrive</p>
                    </div>
                    <div class="wsd_info">
                        <div class="wsdi_text">
                            <div>
                                <img src="img/2.png" alt="Часы">
                                <p>Круглосуточно</p>
                            </div>
                            <div>
                                <img src="img/3.png" alt="Телефон">
                                <p>8 800 600-34-82</p>
                            </div>
                        </div>
                        <a href="#booking">НАЧАТЬ</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="about_section">
            <div class="wrapper">
                <div class="as_div">
                    <h3>О нас</h3>
                    <p>FreeDrive — это каршеринговый сервис, где быстрая и удобная аренда автомобилией разных классов на короткий срок с помощью нашего приложения.</p>
                    <p>Находимся по адресу г. Пенза, ул. Московская, 24 Б</p>
                    <div class="asd_items">
                        <div>
                            <h4>Широкий выбор авто</h4>
                            <img src="img/4.png" alt="Машинка">
                            <h4>От эконом класса до премиум</h4>
                        </div>
                        <div>
                            <h4>Автомобили застрахованы в КАСКО</h4>
                            <img src="img/5.png" alt="Защита">
                            <h4>В случае ДТП, страховая компания возмещает убытки</h4>
                        </div>
                        <div>
                            <h4>Поддержка по телефону</br>24 / 7</h4>
                            <img src="img/6.png" alt="Оператор">
                            <h4>Наши специалисты всегда готовы Вам помочь</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="car" class="car_section">
            <div class="wrapper">
                <div class="cs_div">
                    <h3>Автомобили</h3>
                    <div class="csd_filter">
                        <a href="#car" onclick="ajax_cars('all_cars')">Все автомобили</a>
                        <p>/</p>
                        <a href="#car" onclick="ajax_cars('economy')">Эконом</a>
                        <p>/</p>
                        <a href="#car" onclick="ajax_cars('comfort')">Комфорт</a>
                        <p>/</p>
                        <a href="#car" onclick="ajax_cars('premium')">Премиум</a>
                    </div>
                    <div class="csd_items">
                        <!-- AJAX ответ -->
                    </div>
                </div>
            </div>
        </section>
        <section class="rates_section">
            <div class="wrapper">
                <div class="rs_div">
                    <h3>Тарифы</h3>
                    <div class="rsd_items">
                        <div>
                            <h4>Эконом</h4>
                            <p>Возраст: от 20 лет</p>
                            <p>Стаж: от 2-х лет</p>
                            <h5>Стоимость</h5>
                            <h6>Поминутная аренда</h6>
                            <p>Управление: 7 руб/мин</p>
                            <p>Режим ождидания: с 21 мин 2 руб/мин</p>
                            <h6>Суточная аренда</h6>
                            <p>2000 руб/сут - до 200 км</p>
                            <p>Более 200 км - 6 руб/мин</p>
                            <h6>Автомобили</h6>
                            <p>Kia Rio X-Line, Renault Logan, Nissan Almera, Ford Fiesta</p>
                        </div>
                        <div>
                            <h4>Комфорт</h4>
                            <p>Возраст: от 22-х лет</p>
                            <p>Стаж: от 2-х лет</p>
                            <h5>Стоимость</h5>
                            <h6>Поминутная аренда</h6>
                            <p>Управление: 10 руб/мин</p>
                            <p>Режим ождидания: с 21 мин 3 руб/мин</p>
                            <h6>Суточная аренда</h6>
                            <p>2800 руб/сут - до 200 км</p>
                            <p>Более 200 км - 8 руб/мин</p>
                            <h6>Автомобили</h6>
                            <p>Skoda Octavia Volkswagen Polo, BMW 4</p>
                        </div>
                        <div>
                            <h4>Премиум</h4>
                            <p>Возраст: от 24-х лет</p>
                            <p>Стаж: от 4-х лет</p>
                            <h5>Стоимость</h5>
                            <h6>Поминутная аренда</h6>
                            <p>Управление: 14 руб/мин</p>
                            <p>Режим ождидания: с 21 мин 5 руб/мин</p>
                            <h6>Суточная аренда</h6>
                            <p>3500 руб/сут - до 200 км</p>
                            <p>Более 200 км - 12 руб/мин</p>
                            <h6>Автомобили</h6>
                            <p>Audi A6, Mercedes C-Class</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="app_section">
            <div class="wrapper">
                <div class="as_div">
                    <h3>Приложение</h3>
                </div>
            </div>
        </section>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script>
            $.ajax({
                url: '/api/',
                method: 'get',
                dataType: 'json',
                data: {query: 'cars', filter: 'all_cars'},
                success: function(data) {
                    let i = 0;
                    while (i < data['cars'].length) {
                        $('.csd_items').append('<div><img src="img/' + data['cars'][i]['photo'] + '" alt="' + data['cars'][i]['name'] + '"><h4>' + data['cars'][i]['name'] + '</h4></div>');
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
                        $('.csd_items').empty();
                        let i = 0;
                        while (i < data['cars'].length) {
                            $('.csd_items').append('<div><img src="img/' + data['cars'][i]['photo'] + '" alt="' + data['cars'][i]['name'] + '"><h4>' + data['cars'][i]['name'] + '</h4></div>');
                            i++;
                        }
                    }
                });
            }
        </script>
    </body>
</html>