<?php
    require '../orm/db.php';

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
        $reviews = R::findAll('reviews', 'WHERE status = "1" LIMIT 3');
        $rev_arr = array();
        foreach ($reviews as $rev) {
            array_push($rev_arr, ['id'=>$rev['id'], 'name'=>$rev['name'], 'url'=>$rev['url'], 'text'=>$rev['text']]);
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