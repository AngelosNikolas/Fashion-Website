<?php
session_start();

$items = $_SESSION['items'];

$item_name = filter_has_var(INPUT_POST, 'item_name')   ? $_POST['item_name']   : null;
$total_cost = filter_has_var(INPUT_POST, 'total_cost')   ? $_POST['total_cost']   : null;
$item_price = filter_has_var(INPUT_POST, 'item_price')   ? $_POST['item_price']   : null;
$img = filter_has_var(INPUT_POST, 'img')   ? $_POST['img']   : null;
$quantity = filter_has_var(INPUT_POST, 'quantity')   ? $_POST['quantity']   : null;



foreach ($items as $item => $qtty){
    if ($item == $item_name . "-" . $item_price ."-". $img){
        $quantity = $items[$item] + 1;
    }
}

$items[$item_name . "-" . $item_price ."-". $img] = $quantity;


$_SESSION['items'] = $items;
$_SESSION['cost'] = $total_cost;
