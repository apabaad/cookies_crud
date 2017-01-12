<?php
$id=$_GET['num'];
$cookie_data=json_decode($_COOKIE['users'], true);
unset($cookie_data[$id]);
$data=json_encode($cookie_data);
setcookie('users',$data, time()+(86400*30));
header('location: list.php');
?>