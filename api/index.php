<?php
    require '../orm/db.php';

    if ($_GET['query'] == 'news') {
        $news = R::findAll('news', 'ORDER BY id DESC LIMIT 3');
        $new_arr = array();
        foreach ($news as $new) {
            array_push($new_arr, ['id'=>$new['id'], 'title'=>$new['title'], 'text'=>$new['text'], 'autor'=>$new['autor']]);
        }
        $arr = ['status'=>'ok', 'news'=>$new_arr];
        $json = json_encode($arr);
        echo $json;
    }

    if ($_POST['query'] == 'news_up') {
        $new = R::dispense('news');
        $new->title = $_POST['title'];
        $new->text = $_POST['text'];
        $new->autor = $_SESSION['user']->surname.' '.$_SESSION['user']->name;
        R::store($new);
        $arr = ['status'=>'ok'];
        $json = json_encode($arr);
        echo $json;
    }

    if ($_GET['query'] == 'cars') {
        if ($_GET['filter'] == 'all_cars') {
            $cars = R::findAll('cars');
            $cars_arr = array();
            foreach ($cars as $car) {
                array_push($cars_arr, ['id'=>$car['id'], 'name'=>$car['name'], 'photo'=>$car['photo']]);
            }
            $arr = ['status'=>'ok', 'cars'=>$cars_arr];
            $json = json_encode($arr);
            echo $json;
        }
        if ($_GET['filter'] == 'economy') {
            $cars = R::findAll('cars', 'WHERE class = "Эконом"');
            $cars_arr = array();
            foreach ($cars as $car) {
                array_push($cars_arr, ['id'=>$car['id'], 'name'=>$car['name'], 'photo'=>$car['photo']]);
            }
            $arr = ['status'=>'ok', 'cars'=>$cars_arr];
            $json = json_encode($arr);
            echo $json;
        }
        if ($_GET['filter'] == 'comfort') {
            $cars = R::findAll('cars', 'WHERE class = "Комфорт"');
            $cars_arr = array();
            foreach ($cars as $car) {
                array_push($cars_arr, ['id'=>$car['id'], 'name'=>$car['name'], 'photo'=>$car['photo']]);
            }
            $arr = ['status'=>'ok', 'cars'=>$cars_arr];
            $json = json_encode($arr);
            echo $json;
        }
        if ($_GET['filter'] == 'premium') {
            $cars = R::findAll('cars', 'WHERE class = "Премиум"');
            $cars_arr = array();
            foreach ($cars as $car) {
                array_push($cars_arr, ['id'=>$car['id'], 'name'=>$car['name'], 'photo'=>$car['photo']]);
            }
            $arr = ['status'=>'ok', 'cars'=>$cars_arr];
            $json = json_encode($arr);
            echo $json;
        }
    }

    if ($_GET['query'] == 'reviews') {
        $reviews = R::findAll('reviews', 'WHERE status = "1" ORDER BY id DESC LIMIT 3');
        $rev_arr = array();
        foreach ($reviews as $rev) {
            array_push($rev_arr, ['id'=>$rev['id'], 'name'=>$rev['name'], 'url'=>$rev['url'], 'text'=>$rev['text'], 'status'=>$rev['status']]);
        }
        $arr = ['status'=>'ok', 'reviews'=>$rev_arr];
        $json = json_encode($arr);
        echo $json;
    }

    if ($_GET['query'] == 'admin_reviews') {
        $reviews = R::findAll('reviews', 'ORDER BY id DESC');
        $rev_arr = array();
        foreach ($reviews as $rev) {
            array_push($rev_arr, ['id'=>$rev['id'], 'name'=>$rev['name'], 'url'=>$rev['url'], 'text'=>$rev['text'], 'status'=>$rev['status']]);
        }
        $arr = ['status'=>'ok', 'reviews'=>$rev_arr];
        $json = json_encode($arr);
        echo $json;
    }

    if ($_POST['query'] == 'reviews_сreate') {
        $rev = R::dispense('reviews');
        $rev->name = $_POST['name'];
        $rev->url = $_POST['url'];
        $rev->text = $_POST['text'];
        $rev->status = 0;
        R::store($rev);
        $arr = ['status'=>'ok'];
        $json = json_encode($arr);
        echo $json;
    }

    if ($_GET['query'] == 'reviews_up') {
        $rev = R::load('reviews', $_GET['reviews_id']);
        $rev->status = 1;
        R::store($rev);
        $arr = ['status'=>'ok'];
        $json = json_encode($arr);
        echo $json;
    }

    if ($_GET['query'] == 'reviews_down') {
        $rev = R::load('reviews', $_GET['reviews_id']);
        $rev->status = 0;
        R::store($rev);
        $arr = ['status'=>'ok'];
        $json = json_encode($arr);
        echo $json;
    }

    if ($_POST['query'] == 'auth') {
        $user = R::findOne('users', 'WHERE `email` = "'.$_POST['email'].'"');
        if ($user) {
            if (md5($_POST['password']) == $user->password) {
                $_SESSION['user'] = $user;
                $arr = ['status'=>'successful'];
                $json = json_encode($arr);
                echo $json;
            } else {
                $arr = ['status'=>'error', 'message'=>'Неверно введен пароль!'];
                $json = json_encode($arr);
                echo $json;
            }
        } else {
            $arr = ['status'=>'error', 'message'=>'Пользователь не найден!'];
            $json = json_encode($arr);
            echo $json;
        }
    }

    if ($_POST['query'] == 'booking') {
        $book = R::dispense('booking');
        $book->name = $_POST['name'];
        $book->phone = $_POST['phone'];
        $book->car = $_POST['car'];
        $book->date = date("d.m.Y H:i:s");
        R::store($book);
        $arr = ['status'=>'ok'];
        $json = json_encode($arr);
        echo $json;
    }

    if ($_GET['query'] == 'booking_get') {
        $booking = R::findAll('booking', 'ORDER BY id DESC');
        $book_arr = array();
        foreach ($booking as $boo) {
            array_push($book_arr, ['id'=>$boo['id'], 'name'=>$boo['name'], 'phone'=>$boo['phone'], 'car'=>$boo['car'], 'date'=>$boo['date']]);
        }
        $arr = ['status'=>'ok', 'booking'=>$book_arr];
        $json = json_encode($arr);
        echo $json;
    }