<?php 
session_start();
require_once('../php_cruid/connect_DB.php');
date_default_timezone_set("Asia/Bangkok");

if ( !isset($_SESSION['authen_id'])){
  //  header('location: ../../eathere_proto/html/nav_test.php');
}
else{echo "ssss";}
?>