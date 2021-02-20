<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light pt-2 pb-2 " >
                <a class="navbar-brand " href="#">EAT HERE</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                  <a class="nav-link" href="#">เกี่ยวกับเรา <span class="sr-only">(current)</span></a>
                      </li>

                        <?php if (isset($_SESSION['telephone'])) {?>

                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo $_SESSION['user']; ?>
                              </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#"  data-toggle="modal" data-target="#modalStatusOrderForm">เช็คออเดอร์</a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalEditForm" >แก้ไขสมาชิก</a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalTopUpForm">เติมเงิน</a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalWithdrawForm">ถอนเงิน</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../php_front/signout.php">ออกจากระบบ</a>
                              </div>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">1000 B</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">0 CB</a>
                                  </li>

                        <?php } else  {?>

                          <li class="nav-item active">
                            <a class="nav-link" href="" data-toggle="modal" data-target="#modalRegisterForm">สมัครสมาชิก<span class="sr-only">(current)</span></a>
                          </li>

                          <li class="nav-item active">
                            <a class="nav-link" href="" data-toggle="modal" data-target="#modalSigninForm">เข้าสู่ระบบ<span class="sr-only">(current)</span></a>
                          </li>

                    <li class="nav-item">
                      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">0 บาท</a>
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
                              <input type="text" name="user" id="user" class="form-control " placeholder="ชื่อ" value="<?php echo $_SESSION['user']?>" requried>
                              
                            </div>
                            <div class="md-form mb-1">
                              <i class=" prefix dark-text"></i>
                              <label>อีเมลล์</label>
                              <input type="email" name="email" disabled id="email" class="form-control " placeholder="อีเมลล์" value="<?php echo $_SESSION['email']?>" requried>
                              
                            </div>
                    
                              <div class="md-form mb-1">
                              <i class=" prefix dark-text"></i>
                              <label>เบอร์โทรศัพท์</label>
                              <input type="text" name="telephone" disabled id="telephone" class="form-control " placeholder="เบอร์โทรศัพท์10หลัก" value="<?php echo $_SESSION['telephone']?>" requried>
                              
                            </div>

                            <div class="md-form mb-1">
                                    <i class=" prefix dark-text"></i>
                                    <label>ที่อยู่</label>
                                    <input type="text" name="no_address" id="no_address" class="form-control " placeholder="เลขที่ บ้าน/หมู่บ้าน  ถนน ซอย " value="<?php echo $_SESSION['no_address']?>" requried>
                            </div>

                                  

                            <div class="md-form mb-1">
                                    <i class=" prefix dark-text"></i>
                                    <label >ตำบล</label>
                                    <input type="text" id="district" name="district" class="form-control " placeholder="ตำบล" value="<?php echo $_SESSION['district']?>" requried>
                            </div>

                            <div class="md-form mb-1">
                                      <i class=" prefix dark-text"></i>
                                      <label>อำเภอ</label>
                                      <input type="text" id="amphoe" name="amphoe"  class="form-control " placeholder="อำเภอ" value="<?php echo $_SESSION['amphoe']?>" requried>
    
                            </div>

                            <div class="md-form mb-1">
                                      <i class=" prefix dark-text"></i>
                                      <label>จังหวัด</label>
                                      <input type="text" id="province" name="province"  class="form-control " placeholder="จังหวัด" value="<?php echo $_SESSION['province']?>" requried>  
                            </div>

                            <div class="md-form mb-1">
                                        <i class=" prefix dark-text"></i>
                                        <label>รหัสไปรษณีย์</label>
                                        <input type="text"  name="zipcode"  class="form-control " placeholder="รหัสไปรษณีย์" value="<?php echo $_SESSION['zipcode']?>" requried>  
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

                    <form >
                    <div class="modal fade" id="modalTopUpForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">
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
                            
                            <span >
                                <label class="display-3 justify-content-center money" id="youramount"> 1000 </label>
                                <label class="display-3 justify-content-center" >บาท  </label>
                            </span>
                            <br>
                                <label class="display-4 justify-content-center align-baseline" id="yourcashback"> 10 </label>
                                <label class="display-4 justify-content-center align-baseline" > CB </label>
                            
                            <div class="modal-body mx-1 ">
                                    <div class="md-form mb-1">
                                      <i class="  prefix dark-text align-content-center">เลขที่บัญชี 000000000 Promptpay </i>
                                      <i class="  prefix dark-text">เลขที่บัญชี 00.10110-1-1111 ธนคารกรุงไทย สาขา มหาวิทยาลัยขอนแก่น</i>

                            </div>
                        
                            <div class="md-form mb-3">
                                    <i class=" prefix dark-text"></i>
                                    <label data-error="wrong" data-success="right" for="orangeForm-pass">จำนวนการเติมเงิน</label>
                                    <input type="text" id="Street" class="form-control validate money" id="money" placeholder="100บาทขึนไป">
                                           
                  
                        </div>


                        <div class="md-form mb-3">
                                <i class=" prefix dark-text"></i>
                                <label data-error="wrong" data-success="right" for="orangeForm-pass">วันที่โอน</label>
                                <input type="text" id="datepicker" class="form-control validate"></<input>
                                        
              
                    </div>

                    
                    <div class="md-form mb-3">
                            <i class=" prefix dark-text"></i>
                            <label data-error="wrong" data-success="right" for="orangeForm-pass">ธนาคารที่โอน</label>
                            <select class="form-control validate"  id="namebank"  >
                                    <option>ธนคารกรุงไทย</option>
                                    <option>ธนคารเกรียตินาคิน</option>
                                    <option>ธนคารกรุงศรี</option>
                                    <option>ธนคารกสิกร</option>
                                    <option>ธนคารไทยพาณิชย์</option>
                                    <option>ธนคารออมสิน</option>
                                  </select>
                                    
          
                </div>
                       
                        
                        <div class="md-form mb-3">
                                <i class=" prefix dark-text"></i>
                                <label data-error="wrong" data-success="right" for="orangeForm-pass">ภาพหลักฐานการโอน</label>
                                <div class="custom-file">
                                <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                
                            </div>

                                        
                                        

                    </div>

                    <div class="md-form mb-1 ">

                            <label for="orangeForm-pass" class="modal-footer ">สถานะการโอน : ยังไม่โอนหลักฐานการโอนเงิน</label>
                    
                </div>

                    
                    
                        <div class="modal-footer d-flex justify-content-center w-100">
                               
                          <button class="btn btn-lg colorbtn text-white " type="submit">เติมเงิน</button>
                        </div>
                      </div>
                    </div>
                  </div>
                      </div>
                    </div>
                    </div>

                </form>







                    <!-- Withdraw-->
                                <form>
                    <div class="modal fade" id="modalWithdrawForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header text-center justify-content-center ">
                          <h3 class="modal-title w-100 h5 ">ถอนเงิน</h3>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body mx-1 align-items-center ">
                          <div class="md-form mb-1">
                                <h4 class="modal-title w-100 h5 ">สามารถถอนได้</h4>
                            
                            
                                
                                <label class="display-3 justify-content-center" id="yourcashback"> &NonBreakingSpace; 10 </label>
                                <label class="display-3 justify-content-center" id="yourcashback">CB </label>
                                <i class="fa fa-underline" aria-hidden="true">1CB=1บาท</i>
                                
                           
                            <div class="modal-body mx-1 ">
                                    <div class="md-form mb-1">
                                      <p class="text-dark">สามารถถอนได้ขั้นต่ำ100บาทสูงสุด1000บาทต่อครั้ง ทางระบบจ่ายทาง Promptpay ระยะดำเนินการภายใน5วันทำการ</p>

                            </div>
                        
                            <div class="md-form mb-3">
                                    <i class=" prefix dark-text"></i>
                                    <label data-error="wrong" data-success="right" for="promptpaynum">เบอร์โทรศัพท์10หลัก หรือ หมายเลขบัตรประชาชน</label>
                                    <input type="text" id="promptpaynum" class="form-control validate" placeholder="เบอร์โทรศัพท์ หรือ หมายเลขบัตรประชาชน">
                                           
                  
                        </div>


                        <div class="md-form mb-3">
                                <i class=" prefix dark-text"></i>
                                <label data-error="wrong" data-success="right" for="orangeForm-pass">จำนวนเงินต้องการถอน</label>
                                <input type="number" id="amountwithdraw" value="100" min="100" max="1000" step="100" class="form-control validate " required/></input>

                                
                                
              
                    </div>

                    </div>

                    <div class="md-form mb-1 ">

                            <label for="orangeForm-pass" class="modal-footer ">สถานะการโอน : กำลังรอการพิจารณา</label>
                    
                </div>

                    
                    
                        <div class="modal-footer d-flex justify-content-center w-100">
                               
                          <button class="btn btn-lg colorbtn text-white " type="submit">ถอนเงิน</button>
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
                          <ul class="list-group">
                              
                            <li class="list-group-item d-flex justify-content-between align-items-center ">

                                <span class="badge badge-primary badge-pill badge mr-auto ">3 Sep 2019</span>
                                <span class=" mr-auto " style="font-size: 1em;">ร้านเค้กบิ้กบึ้ม</span>
                                <span class="ml-auto  lead" style="color:black; text-shadow: black;">สั่งอาหารเสร็จสิ้น</span>
                                
                            </li>
                            
                              
                              
                            <li class="list-group-item d-flex justify-content-between align-items-center ">

                                <span class="badge badge-primary badge-pill badge mr-auto ">3 Sep 2019</span>
                                <span class=" mr-auto " style="font-size: 1em;">ร้านเค้กบิ้กบึ้ม</span>
                                <span class="ml-auto  lead" style="color:orange; text-shadow: black;">กำลังทำอาหาร</span>
                                
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center ">

                                <span class="badge badge-primary badge-pill badge mr-auto ">3 Sep 2019</span>
                                <span class=" mr-auto " style="font-size: 1em;">ร้านเค้กบิ้กบึ้ม</span>
                                <span class="ml-auto  lead" style="color:lightskyblue; text-shadow: black;">รอไดรฟ์เวอร์รับอาหาร</span>
                                
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center ">

                                <span class="badge badge-primary badge-pill badge mr-auto ">3 Sep 2019</span>
                                <span class=" mr-auto " style="font-size: 1em;">ร้านเค้กบิ้กบึ้ม</span>
                                <span class="ml-auto  lead" style="color:olivedrab; text-shadow: black;">รับอาหารเสร็จสิ้น</span>
                                
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center ">

                                <span class="badge badge-primary badge-pill badge mr-auto ">3 Sep 2019</span>
                                <span class=" mr-auto " style="font-size: 1em;">ร้านเค้กบิ้กบึ้ม</span>
                                <span class="ml-auto  lead" style="color:darkred; text-shadow: black;">ปฏิเสธรับออเดอร์</span>
                                
                            </li>
                          </ul>
                          
                      
                          
            
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