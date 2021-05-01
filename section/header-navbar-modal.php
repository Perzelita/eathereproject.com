<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light pt-2 pb-2 " >
                <a class="navbar-brand " href="../index.php">EAT HERE</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                
                      <li class="nav-item active">
                  <a class="nav-link" href="../html/cart.php">ตะกร้าสินค้า <span class="sr-only">(current)</span></a>
                      </li>

                        <?php if (isset($_SESSION['telephone'])) {
                          
                          ?>

                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo $_SESSION['user']; ?>
                              </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="../html/order-status.php"  >เช็คออเดอร์</a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalEditForm" >แก้ไขสมาชิก</a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalTopUpForm">เติมเงิน</a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalWithdrawForm">ถอนเงิน</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../php_front/signout.php">ออกจากระบบ</a>
                              </div>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">ยอดเงิน <?php echo $_SESSION['balance']; ?> Baht</a>
                            </li>
                            

                        <?php } else  {?>

                          <li class="nav-item active">
                            <a class="nav-link" href="" data-toggle="modal" data-target="#modalRegisterForm">สมัครสมาชิก<span class="sr-only">(current)</span></a>
                          </li>

                          <li class="nav-item active">
                            <a class="nav-link" href="" data-toggle="modal" data-target="#modalSigninForm">เข้าสู่ระบบ<span class="sr-only">(current)</span></a>
                          </li>

                    <li class="nav-item">
                      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
                    </li>

                            <?php } ?>


                  </ul>
                  
                </div>
              </nav>

              <modal>

             <!--Edit-->
            
             <form id="demo1" class="demo " action="../php_cruid/edit_member.php" method="post"  style="display:none" autocomplete="off"  >
                    <div class="modal fade" id="modalEditForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                      aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header text-center justify-content-center ">
                            <h4 class="modal-title w-100 h5 ">แก้ไขรายละเอียดสมาชิก</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body mx-1 ">
                          <input type="hidden" name="id" value ="<?php echo $_SESSION['user'];?>">
                            <div class="md-form mb-1">
                              <i class="  prefix dark-text ">
                              <label>ชื่อ</label>
                              <input type="text" name="user" id="user" class="form-control " placeholder="ชื่อ" value="<?php echo $_SESSION['user'];?>" requried>
                              
                            </div>
                            <div class="md-form mb-1">
                              <i class=" prefix dark-text"></i>
                              <label>อีเมลล์</label>
                              <input type="email" name="email" disabled id="email" class="form-control " placeholder="อีเมลล์" value="<?php echo $_SESSION['email'];?>" requried>
                              
                            </div>
                    
                              <div class="md-form mb-1">
                              <i class=" prefix dark-text"></i>
                              <label>เบอร์โทรศัพท์</label>
                              <input type="text" name="telephone" disabled id="telephone" class="form-control " placeholder="เบอร์โทรศัพท์10หลัก" value="<?php echo $_SESSION['telephone'];?>" requried>
                              
                            </div>

                            <div class="md-form mb-1">
                                    <i class=" prefix dark-text"></i>
                                    <label>ที่อยู่</label>
                                    <input type="text" name="no_address" id="no_address" class="form-control " placeholder="เลขที่ บ้าน/หมู่บ้าน  ถนน ซอย " value="<?php echo $_SESSION['no_address'];?>" requried>
                            </div>

                                  

                            <div class="md-form mb-1">
                                    <i class=" prefix dark-text"></i>
                                    <label >ตำบล</label>
                                    <input type="text" id="district" name="district" class="form-control " placeholder="ตำบล" value="<?php echo $_SESSION['district'];?>" requried>
                            </div>

                            <div class="md-form mb-1">
                                      <i class=" prefix dark-text"></i>
                                      <label>อำเภอ</label>
                                      <input type="text" id="amphoe" name="amphoe"  class="form-control " placeholder="อำเภอ" value="<?php echo $_SESSION['amphoe'];?>" requried>
    
                            </div>

                            <div class="md-form mb-1">
                                      <i class=" prefix dark-text"></i>
                                      <label>จังหวัด</label>
                                      <input type="text" id="province" name="province"  class="form-control " placeholder="จังหวัด" value="<?php echo $_SESSION['province'];?>" requried>  
                            </div>

                            <div class="md-form mb-1">
                                        <i class=" prefix dark-text"></i>
                                        <label>รหัสไปรษณีย์</label>
                                        <input type="text"  name="zipcode"  class="form-control " placeholder="รหัสไปรษณีย์" value="<?php echo $_SESSION['zipcode'];?>" requried>  
                            </div>
                            <div class="md-form mb-1 my-2">
                            <i class=" prefix dark-text"></i>
                            <label data-error="wrong" data-success="right" for="telephone">ค่าจุดพิกัดแกน X</label>
                            <input type="text" class="form-control " id="Latitude" name="latitude" value="<?php echo $_SESSION['latitude'];?>" > 
                            
                          </div>
                          <div class="md-form mb-1 my-2">
                            <i class=" prefix dark-text"></i>
                            <label data-error="wrong" data-success="right" for="telephone">ค่าจุดพิกัดแกน Y</label>
                            <input type="text" class="form-control " id="Longitude" name="longitude" value="<?php echo $_SESSION['longitude'];?>" > 
                            
                          </div>

                          <div class="md-form mb-1 my-2 float-right">
                            <i class=" prefix dark-text"></i>
                            <label data-error="wrong" data-success="right" for=""></label>
                            <a name="locations" id="" class="btn btn-primary colorbtn" href="#" role="button" onclick="getLocationConstant()">ปักหมุดพิกัดปัจจุบัน</a>
                            
                          </div>
                          </div>
                          <div class="modal-footer d-flex justify-content-center w-100 ">
                            <button class="btn btn-lg colorbtn text-white "name="submit"  type="submit">ยืนยัน</button>
                          </div>
                        </div>
                      </div>
                    </div>
        
        </form>
        

                    <!-- Topup -->

                    <form method="post" action="../php_cruid/create_topup_request.php" autocomplete="off" enctype="multipart/form-data" >
                    <div class="modal fade" id="modalTopUpForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" 
                    aria-hidden="true" auto-complete="off">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header text-center justify-content-center ">
                          <h4 class="modal-title w-100 h5 ">เติมเงิน</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body mx-1 ">
                          <div class="md-form mb-1">
                            <h2>ยอดเงิน</h2>
                            <input type="hidden" name="id_member" value ="<?php echo $_SESSION['member_id'];?>">
                            <span >
                                <label class="display-3 justify-content-center money" ><?php echo $_SESSION['balance'];?> </label>
                                <label class="display-3 justify-content-center" >บาท  </label>
                            </span>
                            <br>
                         
                            <div class="modal-body mx-1 ">
                                    <div class="md-form mb-1">
                                      <i class="  prefix dark-text align-content-center">0807464246 Promptpay </i>
                                      <i class="  prefix dark-text">เลขที่บัญชี 290 299 1347 ธนคารกสิกรไทย สาขา สาขามหาวิทยาลัยขอนแก่น</i>

                            </div>
                             <form   method="POST">
                            <div class="md-form mb-3">
                                    <label data-error="wrong" data-success="right" for="orangeForm-pass">จำนวนการเติมเงิน</label>
                                    <select class="form-control" name="amount" id="amount">
                                      <option>20</option>
                                      <option>50</option>
                                      <option>90</option>
                                      <option>200</option>
                                      <option>500</option>
                                      <option>1000</option>
                                    </select>
                                           
                                    <div class="md-form mb-3">
                                <i class=" prefix dark-text"></i>
                                <label data-error="wrong" data-success="right" for="orangeForm-pass">กดปุ่มด้านล่างเพื่อรับ Prompt Pay QR Code</label> 
                                
                                <input formtarget="_blank" type="submit" class="btn btn-primary" value="กดรับ QR Code" name="submit" onclick="this.form.action='/PromptPay-QR-generator-master/test.php'; submit()" ></input>
                                    
              
                    </div>
                        </div>
                        </form>
                        
                        <div class="md-form mb-3">
                                <i class=" prefix dark-text"></i>
                                <label data-error="wrong" data-success="right" for="orangeForm-pass">วันที่โอน</label>
                                <input type="date" id="date" name="date" class="form-control validate" ></<input>
                                        
              
                    </div>
                    <div class="md-form mb-3">
                                <i class=" prefix dark-text"></i>
                                <label data-error="wrong" data-success="right" for="orangeForm-pass">เวลาที่โอน</label>
                                <input type="time" id="time" name="time" class="form-control validate" ></<input>
                                        
              
                    </div>

                    
                    <div class="md-form mb-3">
                            <i class=" prefix dark-text"></i>
                            <label data-error="wrong" data-success="right" for="orangeForm-pass">ธนาคารที่โอน</label>
                            <select class="form-control validate"  id="namebank" name="namebank"  >
                                    <option>ธนคารกรุงไทย</option>
                                    <option>ธนคารเกรียตินาคิน</option>
                                    <option>ธนคารกรุงศรี</option>
                                    <option>ธนคารกสิกร</option>
                                    <option>ธนคารไทยพาณิชย์</option>
                                    <option>ธนคารออมสิน</option>
                                    <option>Promptpay</option>
                                    <option>Shoppee pay</option>
                                    <option>True Wallet</option>



                                  </select>
                                    
          
                </div>
                       
                        
                        <div class="md-form mb-3">
                                <i class=" prefix dark-text"></i>
                                <label data-error="wrong" data-success="right" for="orangeForm-pass">ภาพหลักฐานการโอน</label>
                                
                                <input type="file" class="form-control" id="evidence_tran" name="evidence_tran" value="Upload image" accept="image/*">
                                
                                
                            </div>

                                        
                                        

                    </div>

                  

                    
                    
                        <div class="modal-footer d-flex justify-content-center w-100">
                               
                          <input class="btn btn-lg colorbtn text-white " type="submit" name="submit" value="เติมเงิน"></input>
                        </div>
                      </div>
                    </div>
                  </div>
                      </div>
                    </div>
                    </div>

                </form>



                

                <form>
                  <div class="modal fade" id="modalStatusOrderForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header text-center justify-content-center ">
                        <h3 class="modal-title w-100 h5 ">รายการที่สั่งไว้</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                         
                          
                      
                          
            
                  </div>

                  </div>

                  

                  
                  
                      
                    </div>
                  


              </form>              
              
             
              <!-- sign up-->
                          <form action="../php_cruid/create_register.php" method="post">
              <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
              aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header text-center justify-content-center ">
                    <h4 class="modal-title w-100 h5 ">สมัครสมาชิก</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body mx-1 ">
                    <div class="md-form mb-1">
                      <i class="  prefix dark-text"></i>
                      <label data-error="wrong" data-success="right" for="name">ชื่อ</label>
                      <input type="text" id="user" name="user" class="form-control  " placeholder="ชื่อ" requried >
                      
                    </div>
                    <div class="md-form mb-1">
                      <i class=" prefix dark-text"></i>
                      <label data-error="wrong" data-success="right" for="email">อีเมลล์</label>
                      <input type="email" id="email" name="email" class="form-control " placeholder="อีเมลล์" requried >
                      
                    </div>
            
                    <div class="md-form mb-1">
                      <i class=" prefix dark-text"></i>
                      <label data-error="wrong" data-success="right" for="passowrd">รหัสผ่าน</label>
                      <input type="password" id="password" name="password" class="form-control " placeholder="รหัสผ่าน" requried >
                      
                    </div>
                    
                    <div class="md-form mb-1 my-2">
                      <i class=" prefix dark-text"></i>
                      <label data-error="wrong" data-success="right" for="telephone">เบอร์โทรศัพท์</label>
                      <input type="text" id="telephone" name="telephone" class="form-control " placeholder="เบอร์โทรศัพท์10หลัก" requried >
                      
                    </div>
                    
                    

                    <div class="md-form mb-1 mt-2  form-check">
                  
                      <input class="form-check-input" type="checkbox" id="accept">
                      <label class="form-check-label" for="accept">
                        ยอมรับเงื่อนไขของทางบริษัท
                      </label>
                </div>
                  </div>

                  <div class="modal-footer d-flex justify-content-center w-100">
                    <button class="btn btn-lg colorbtn text-white " value="submit" id="submit" name="submit" type="submit"> ลงทะเบียน</button>
                  </div>
                </div>
              </div>
            </div>
            </form>

            <!-- sign in-->
            <form action= "../php_front/signin.php" method="post">
            <div class="modal fade" id="modalSigninForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
              aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header text-center justify-content-center ">
                    <h4 class="modal-title w-100 h5 ">เข้าสู่ระบบ</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body mx-1 ">
                    
                    <div class="md-form mb-1">
                      <i class=" prefix dark-text"></i>
                      <label data-error="wrong" data-success="right" for="telephone">เบอร์โทรศัพท์</label>
                      <input type="text" id="telephone" name="telephone" class="form-control " placeholder="เบอร์โทรศัพท์10หลัก" required>
                    </div>
            
                    <div class="md-form mb-1">
                      <i class=" prefix dark-text"></i>
                      <label data-error="wrong" data-success="right" for="passowrd">รหัสผ่าน</label>
                      <input type="password" id="password" name="password"  class="form-control " placeholder="รหัสผ่าน" required>                      
                    </div>                  

                    <div class="md-form mb-1 mt-2  ">                  
                      <a href="" class="mb-2" style="color: inherit;" data-toggle="modal" data-target="#modalforgotForm">กรณีลืมลืมรหัสผ่าน</a> 
                    </div> 
                    </div>
                  <div class="modal-footer d-flex justify-content-center w-100">
                    <button class="btn btn-lg colorbtn text-white " value="submit" name="submit" type="submit"> เข้าสู่ระบบ</button>
                  </div>

                </div>
              </div>
            </div>
          </form>                

            <!--forgot password-->
            <div class="modal fade" id="modalforgotForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
              aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header text-center justify-content-center ">
                    <h4 class="modal-title w-100 h5 ">ลืมรหัสผ่าน</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body mx-1 ">

                    <div class="md-form mb-1">
                      <i class=" prefix dark-text"></i>
                      <label data-error="wrong" data-success="right" for="">ถ้าลืมรหัสผ่านโปรดกรอกอีเมลล์เพื่อรับรหัสผ่าน</label>
                      
                      
                    </div>
                    
                    <div class="md-form mb-1">
                      <i class=" prefix dark-text"></i>
                      <label data-error="wrong" data-success="right" for="email">อีเมลล์</label>
                      <input type="email" id="email" class="form-control validate" placeholder="อีเมลล์">
                      
                    </div>
            
                  </div>

                  <div class="modal-footer d-flex justify-content-center w-100">
                    <button class="btn btn-lg colorbtn text-white " id="submitforgot" type="submit"> ส่งไปยังอีเมลล์</button>
                  </div>
                </div>
              </div>
            </div>





            </modal>
            </header>