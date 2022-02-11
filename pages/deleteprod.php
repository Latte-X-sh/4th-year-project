<?php
require '../lib/functions.php';
session_start();
$productid = $_GET['id'];
// var_dump($productid);
// die();
delete_prod($productid);
header('location:./../index.php?page=products');