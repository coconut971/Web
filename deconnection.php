<?php 

session_start();
$_SESSION = array();

session_destroy();

setcookie('id', '');
setcookie('login', '');

header("Location: index.php");

 ?>