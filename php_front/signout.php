<?php 
session_start();
session_destroy();
header('location:../../../index.php');
setcookie("username");
setcookie("setpassword");


?>