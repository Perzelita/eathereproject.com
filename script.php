 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    
    
    <!-- dependencies for zip mode -->
    <script type="text/javascript" src="../jquery.Thailand.js/dependencies/zip.js/zip.js"></script>
    <!-- / dependencies for zip mode -->

    <script type="text/javascript" src="../jquery.Thailand.js/dependencies/JQL.min.js"></script>
    <script type="text/javascript" src="../jquery.Thailand.js/dependencies/typeahead.bundle.js"></script>

    <script type="text/javascript" src="/js/mask.js">></script>
    
    <script type="text/javascript" src="../jquery.Thailand.js/dist/jquery.Thailand.min.js"></script>
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

       



       <!--Date pickup
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
    $( function() {
      $( "#datepicker" ).datepicker();
    } );
    </script>
        -->  


        <div class="jumbotron-fluid    mb-3 section2  ">
          
                <div class="container-fluid  ">
          <!--   
        <img src="/New folder/foodiesfeed.png" class="img-fluid" alt="Responsive image" height="35%" width="100%"/>  -->   
                <div class="row">
                  <div class="col col-md-4 col-sm-8 ">
                      
                  
                      <h1 class="display-4 text-white ">EAT HERE คือ</h1>
                  </div>
                </div>
                
                <div class="row ">
                  <div class="col ">
                      <div class="card col-sm-4 col-md-6 col-xl-4 mb-3 mt-3 shadow-sm " >
                          <div class="">
                          <div class=" card-body ">
                            
                            <p class="card-text">Eat here เป็นเว็บไซต์สั่งอาหารแบบอัตโนมัติโดยเป็นตัวลางระหว่างผู้ประกอบการที่เป็นนักศึกษามหาวิทยาลัยขอนแก่น</p>
                                                      
                            <a href="../partner/partner.php" class=" colorbtn btn btn-primary mb-1 "> ร่วมเป็นพาร์ทเนอร์</a>
                            <a href="../shipper/shipper.php" class=" colorbtn btn btn-primary "> ร่วมเป็นไดรฟ์เวอร์</a>
                            </div>
                          </div> 
                     </div>
                
              </div>
                    
                  </div>
                  

                  
                </div>
                
      </div>
    
      </body>
</html>