<?php
session_start();

$items = $_SESSION['items'];
$total_cost = $_SESSION['cost'];

$item_data = filter_has_var(INPUT_POST, 'item_data')   ? $_POST['item_data']   : null;



foreach ($items as $item => $qtty){
    if ($item == $item_data){
        $items[$item] = $items[$item] - 1;

        $fields = explode("-", $item);

        $total_cost = round($total_cost - (float) $fields[1]);

        if($items[$item] === 0){
            unset($items[$item]);
        }
    }
}

$_SESSION['items'] = $items;
$_SESSION['cost']= $total_cost;