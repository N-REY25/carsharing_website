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