<?php
    require 'rb.php';
    R::setup('mysql:host=localhost;dbname=carsharing', 'root', ''); 
    session_start();