<?php
require_once(  '../section/head.php');
require_once( '../section/header-navbar-modal.php');
require_once('../php_cruid/connect_DB.php');

$sqlread ="SELECT * FROM `order` WHERE `member_id` = '".$_SESSION['member_id']."'; ";
                              $row_read= $conn->query($sqlread) or die($conn->error);
                              $pointer= $row_read->fetch_assoc();
                              
                              $sql2 = "SELECT * FROM `member` WHERE member_id = '".$pointer['partner_id']."' ";
                                         $result2 = $conn->query($sql2) or die($conn->error)  ;
                                         $read_partner = $result2->fetch_assoc();



?>

 

                    <div class="jumbotron-fluid    mt-3 mb-3 section1 ">
                            <div class="container ">
                      <!--   
                    <img src="/New folder/foodiesfeed.png" class="img-fluid" alt="Responsive image" height="35%" width="100%"/>  -->   
                     <div class="row justify-content-center ">
                            <h1 class="display-4 text-dark">สถานะการจัดส่ง</h1>
                            
                            <div class="row col-12 justify-content-center">
                                    <h4 class="text-dark" > </h4> 
                            </div>
                     </div>


                <div class="container mt-5">
                <ul class="list-group">
                              <?php 
                              

                              if ($row_read->num_rows > 0) {
                                while($read_status = $result->fetch_assoc()) {
                                  ?>

<li class="list-group-item d-flex justify-content-between align-items-center ">

<span class="badge badge-primary badge-pill badge mr-auto "><?php echo $read_status['time'];?></span>
<span class=" mr-auto " style="font-size: 1em;"><?php echo $read_partner['partner_name'];?></span>
<?php  

if($read_status["status_order"]==1){ echo'  <span class="ml-auto  lead" style="color:black; text-shadow: black;"> 
  ';
                                 echo "พิจารณาการรับออเดอร์"; 
                              }  
                               elseif($read_status["status_order"]==2){ 
                                 echo'  <span class="ml-auto  lead" style="color:orange; text-shadow: black;"> 
                                 ';
                                    echo "รับออเดอร์"; 

                                } 
                                 elseif($read_status["status_order"]==3){ 
                                   echo'  <span class="ml-auto  lead" style="color:lightskyblue; text-shadow: black;"> 
                                   ';
                                     echo "รับออเดอร์และส่งเอง"; 

                                   } 
                                   elseif($read_status["status_order"]==4){ 
                                     echo'  <span class="ml-auto  lead" style="color:lightskyblue; text-shadow: black;"> 
                                     ';
                                        echo "รอทางคนรับส่งมารับและส่งให้ลูกค้า"; 

                                     } 
                                     elseif($read_status["status_order"]==5){ 
                                       echo'  <span class="ml-auto  lead" style="color:olivedrab; text-shadow: orange;"> 
                                       ';
                                      
                                   echo "จัดส่งเรียบร้อย"; }

                                   elseif($read_status["status_order"]==6){ 
                                    echo'  <span class="ml-auto  lead" style="color:read; text-shadow: orange;"> 
                                    ';
                                   
                                echo "ปฏิเสธการรับออเดอร์"; 

                              }else{} ?></span>

</li>
                             
                              
                            

                           
                            <?php }
                           
                          }
                          else {
                            echo' <li class="list-group-item d-flex justify-content-between align-items-center ">

                            <span class="badge badge-primary badge-pill badge mr-auto "></span>
                            <span class=" mr-auto " style="font-size: 1em;">ไม่มีการสั่งอาหาร</span>
                            <span class="ml-auto  lead" style="color:darkred; text-shadow: black;"></span>
                            
                        </li>';
                          }
                          
                          ?>
                          </ul>
                </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <?php  require_once('../section/script.php'); ?>
  </html>