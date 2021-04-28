<?php

session_start();

if (!isset($_SESSION['items'])){
    $items = array();
    $_SESSION['items'] = $items;
}
else {
    $n_of_items = 0;
    $i = $_SESSION['items'];
    foreach ($i as $key=>$value){
        $n_of_items = $n_of_items + $i[$key];
    }
}





