<?php
session_start();

if (isset($_SESSION['cost'])){
    echo $_SESSION['cost'];
}
else{
    echo 0;
}
