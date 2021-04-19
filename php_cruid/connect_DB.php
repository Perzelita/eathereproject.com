<?php
error_reporting(E_ALL);

 $conn = new mysqli('localhost','root','','eat_1');
 //$conn = new mysqli('localhost','eat_1','123456','eat_1');
 $conn->set_charset('utf8');


 if ($conn->connect_errno){
     echo "Connect Error :".$conn->connect_error;
     exit();
 }
 else{
    
 }
?>