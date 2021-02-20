<?php
require_once("../php_front/authen.php");
if(isset($_POST['submit_del'])){


    if(!empty($_POST['CheckAllDel'])) {    
        $checkdel = implode(",",$_POST['CheckAllDel']);

        $fetch = "SELECT * FROM menu";
        $result_fetch= $conn->query($fetch)  or die($conn->error);
        $count = $result_fetch->num_rows;
        if($count > 0){    


            $sql = "DELETE FROM menu where menu_id in ";
            $sql .= "('".implode("','",array_values($_POST['CheckAllDel']))."')";

            $result = $conn->query($sql)  or die($conn->error);
   if($result){
   

 
header ('location: ../bn_partner/menu_list.php');   
  
        }
    }
}
else {header ('location: ../bn_partner/menu_list.php');   }
}

elseif(isset($_POST['submit_edit'])){
  

        foreach($_POST['menu_id'] as $row=>$value){

           echo  $_POST['menu_id'][$row];
           echo   $_POST['menu'][$row];
           echo   $_POST['price'][$row];
           echo  $_POST['avalable'][$row];

            $menu_id = $_POST['menu_id'][$row];
            $menu = $_POST['menu'][$row];
            $price = $_POST['price'][$row];
            $avalable = $_POST['avalable'][$row];
            $sql = "UPDATE menu SET

                `avalable`='".$avalable."',
                `menu_name`= '".$menu."',
                `price`= '".$price."'
                WHERE `menu_id` = '".$menu_id."';";
            $result = $conn->query($sql)  or die($conn->error);

             if($result){
   

 
                header ('location: ../bn_partner/menu_list.php');   
                  
                        }
                        else {
                            header ('location: ../bn_partner/menu_list.php');   }
                  
        }
    
       
    
}



?>