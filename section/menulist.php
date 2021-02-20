<section class="container-fluid py-2" >
<h2 class="m-lg-3 " >ร้านอาหารเด็ด ต้องลอง</h2>
<div class="row m-lg-3">
<?php require_once('./php_cruid/connect_DB.php');
$sql_showshop = "SELECT pic_cover, partner_name, open_order, close_order, food_type,member_id, status 
 FROM member 

INNER JOIN partner_avalable
             ON member.member_id = partner_avalable.partner_id_fk WHERE status_member = 'partner'  ;";
$close ='close';
$result = $conn->query($sql_showshop)  or die($conn->error);
  $num=0;
  while($row = $result->fetch_assoc()) { ?> 



        
      
          <section class=" col-sm-12 col-md-4   flex-md-row mb-3 ">
          
              <div class="card" style="width: 100%; ">
           
              <a style="text-decoration: none !important;
" href="../html/restaurant.php?member_id=<?php echo $row["member_id"]; ?>">
                  <img class="card-img-top rounded " src="../pic/kyc/<?php echo $row["pic_cover"]?>" alt="Card image" style="width:100%;  height: 15vw;
    object-fit: cover;">    </a>
                  <div class="card-body">
                    <h4 class="card-title"><?php echo $row["partner_name"]; ?></h4>
                    <p class="card-text">ปรเภทอาหาร : <span > <?php echo $row["food_type"]; ?> </span><span>&NonBreakingSpace;</span> </p>
                   <p class="card-text">เปิดรับออเดอร์ : <span><?php echo $row["open_order"]; ?></span> ปิดรับออเดอร์  : <span><?php echo $row["close_order"]; ?></span></p>
                    
                   <form method="get" action="/html/restaurant.php">
                    <a href="../html/restaurant.php?member_id=<?php echo $row["member_id"]; ?>" class=" ml-auto colorbtn btn float-right btn-primary text-white <?php if ($row['status'] == 'close'){ ?> disabled <?php   } ?> >    " >สั่งอาหาร</a> 
                    </form>


                  
                  </div> 
             </div>
            </section>
 
           

       
       
      

            <?php } 

                        ?>
</div>
</section>
