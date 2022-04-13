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