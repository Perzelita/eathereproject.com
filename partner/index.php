<!doctype html>
<html lang="en">
  <head>
    <title>ร่วมกับเราที่ EAT HERE</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css" >
    <link rel="stylesheet" href="../node_modules/bootstrap/glyphicons/css/bootstrap.icon-large.min.css">

    <!-- Date pickup -->
    <link rel="stylesheet" href="code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <!--<link rel="stylesheet" href="../resources/demos/style.css">
-->
  <link rel="stylesheet" href="../jquery.Thailand.js/dist/jquery.Thailand.min.css">
  <link href='https://fonts.googleapis.com/css?family=Kanit:400,300&subset=thai,latin' rel='stylesheet' type='text/css'>

  



  </head>

  
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

              </div>
            </nav>


            <modal>
            <!-- sign up-->

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
                    <input type="text" id="name" class="form-control validate " placeholder="ชื่อ">
                    
                  </div>
                  <div class="md-form mb-1">
                    <i class=" prefix dark-text"></i>
                    <label data-error="wrong" data-success="right" for="email">อีเมลล์</label>
                    <input type="email" id="email" class="form-control validate" placeholder="อีเมลล์">
                    
                  </div>
          
                  <div class="md-form mb-1">
                    <i class=" prefix dark-text"></i>
                    <label data-error="wrong" data-success="right" for="passowrd">รหัสผ่าน</label>
                    <input type="password" id="password" class="form-control validate" placeholder="รหัสผ่าน">
                    
                  </div>
                  
                  <div class="md-form mb-1 my-2">
                    <i class=" prefix dark-text"></i>
                    <label data-error="wrong" data-success="right" for="telephone">เบอร์โทรศัพท์</label>
                    <input type="text" id="telephone" class="form-control validate" placeholder="เบอร์โทรศัพท์10หลัก">
                    
                  </div>
                  

                  <div class="md-form mb-1 mt-2  form-check">
                
                    
                    <input class="form-check-input" type="checkbox" id="accept">
                    <label class="form-check-label" for="accept">
                      ยอมรับเงื่อนไขของทางบริษัท
                    </label>
                  
                
              </div>
                </div>


                

</modal>
          </header>





                    <div class="jumbotron-fluid     section3 ">

                            <div class="container ">

                     <div class="row justify-content-center ">

                            <h1 class="display-1 text-dark  ">EAT HERE</h1>
                            <div class="row col-12 justify-content-center">
                                    
                            </div>
                     </div>
                    
                    </div>
                </div>

                <div class="container ">
                    <div class="row justify-content-center mt-3">
                      <h3 class="">สมัครได้แล้ววันนี้และรอการตอบรับพิจารณา</h3>
                      <h3 class="">ตรวจสอบข้อมูลเบื้องต้น</h3>
                            
                                

                          
                            </div>
                                
                            <form id="demo1" class="demo" style="display:none" autocomplete="off" action="partner.php" method="post" enctype="multipart/form-data" >
                                    <div class="form-row">
                                     
                                              
                                            
                                            <div class="col-md-3 mb-3">
                                              <label for="">รหัสบัตรประชาชน13หลัก</label>
                                              <input type="text" class="form-control" id="citizen_id" name="citizen_id" placeholder="รหัสบัตรประชาชน13หลัก" mask="0-0-000-00-000-00-0" >
                                            </div>
                                            
                                            
                                                                                      

                                           
                                            
                                            <div class="col-md-2 mb-2">
                                              <label for="">เบอร์โทรศัพท์</label>
                                              <input type="text" class="form-control validate" name="telephone" id="telephone" placeholder="เบอร์โทรศัพท์" >
                                            </div>

                                           
                                            
                                          
                                                <div class="col-md-3 mb-3">
                                                    <label for="">โค้ดที่อยู่จาก Google map พิกัด X</label>
                                                    <input type="text" class="form-control bg-white" id="Latitude" name="latitude" value="" >
                                                    
                                                    
                                                  </div>
                                                  <div class="col-md-3 mb-3">
                                                    <label for="">โค้ดที่อยู่จาก Google mapพิกัด Y</label>
                                                    <input type="text" class="form-control bg-white" id="Longitude" name="longitude" value="" > 
                                                    
                                                    
                                                  </div>
                                                  <div class="col-md-1 mb-5 float-right">
                                                    <label for="">&NonBreakingSpace;</label>
                                                    <a name="locations" id="" class="btn btn-primary colorbtn " href="#" role="button" onclick="getLocationConstant()">Location</a>
                                                  </div>
                                          </div>
                                          </div>
                                         
                                         
                                             
                                    
                                      
                                         
                                                              
                                
                                    
<footer>
                                    <input class="btn btn-primary btn-lg  footer-block w-100 sticky-top text-white colorbtn  " name="submit" type="submit" id="submit" value="ตรวจสอบข้อมูล" style="padding-top: 1em; padding-bottom: 1em;"></input>
                                  </form>
                                  </footer>
                    </div>
                    
                </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

  <!--Date pickup-->
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    
    
    
  <!-- dependencies for zip mode -->
  <script type="text/javascript" src="../jquery.Thailand.js/dependencies/zip.js/zip.js"></script>
  <!-- / dependencies for zip mode -->
  
  <script type="text/javascript" src="../jquery.Thailand.js/dependencies/JQL.min.js"></script>
  <script type="text/javascript" src="../jquery.Thailand.js/dependencies/typeahead.bundle.js"></script>
  
  <script type="text/javascript" src="../jquery.Thailand.js/dist/jquery.Thailand.min.js"></script>
  
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

<script type="text/javascript" src="../js/getlocation.js"></script>
  <script>
      
      $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
      });
      </script>
  

<script type="text/javascript">
 $.Thailand({
        database: '../jquery.Thailand.js/database/db.json', 

        $district: $('#demo1 [name="district"]'),
        $amphoe: $('#demo1 [name="amphoe"]'),
        $province: $('#demo1 [name="province"]'),
        $zipcode: $('#demo1 [name="zipcode"]'),

        onDataFill: function(data){
            console.info('Data Filled', data);
        },

        onLoad: function(){
            console.info('Autocomplete is ready!');
            $('#loader, .demo').toggle();
        }
    });

    // watch on change

    $('#demo1 [name="district"]').change(function(){
        console.log('ตำบล', this.value);
    });
    $('#demo1 [name="amphoe"]').change(function(){
        console.log('อำเภอ', this.value);
    });
    $('#demo1 [name="province"]').change(function(){
        console.log('จังหวัด', this.value);
    });
    $('#demo1 [name="zipcode"]').change(function(){
        console.log('รหัสไปรษณีย์', this.value);
    });
</script>



  </body>
</html>