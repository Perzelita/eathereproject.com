<?php

 require_once("../php_front/authen.php");

if(isset($_POST['checkprice'])){
  
$menu_total= array();
$total = 0;
$i=0;

    foreach ($_POST['price'] as $row => $value) {
    //  $menu_total[] = $_POST['price'][$row] * $_POST['qty'][$row];
  /*  echo   $_POST['price'][$row];
    echo '<br>';
    echo   $_POST['qty'][$row];
    echo '<br>';
*/
print_r($_POST['menu_id'][$row]);
$menu_name =$_POST['menu_name'][$row];

 $subtotal = $_POST['price'][$row] * $_POST['qty'][$row];
$qty=$_POST['qty'][$row];

 echo $menu_name;
 
 echo '<br>';
 echo $qty;
 echo '<br>';
 echo $subtotal;
 echo '<br>';

 $total += $subtotal;
 echo '<br>';
 echo '<br>';



echo '<br>';
print_r($_POST['menu_total'][$row]=$subtotal) ;
$menu_total=$_POST['menu_total'];
$temporary ="INSERT INTO `temp_price` ( `partner_id_fk`, `menu_id`, `menu_name`, `avalable`, `unit`, `price_def`,  `price`, `total`)
  
VALUES('".$_POST['get']."','".$_POST['menu_id'][$row]."','".$menu_name."','".$_POST['avalable'][$row]."','".$qty."','".$_POST['price'][$row]."','".$subtotal."','".$total."');";
 $i++;
 $result= $conn->query($temporary) or die ($conn->error);

  }

$_POST['menu_total'];
  echo "total" ;
  echo $total;
  echo '<br>';
 echo$i;

if($result){


 header('Location: ' . $_SERVER['HTTP_REFERER']);

//}

}
}
?>