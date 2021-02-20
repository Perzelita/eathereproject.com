<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	date_default_timezone_set("Asia/Bangkok");


	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$sToken = "D0mwvIPWAOG2OCh9VJeuqGnPJkYynGSi7kAwAQDsyvV";
	$sMessage = "มีรายการขอการร่วมเป็น Partnerจากคุณ +$name+ +$surname";

	
	$chOne = curl_init(); 
	curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify"); 
	curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0); 
	curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0); 
	curl_setopt( $chOne, CURLOPT_POST, 1); 
	curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=".$sMessage); 
	$headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$sToken.'', );
	curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers); 
	curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1); 
	$result = curl_exec( $chOne ); 

	//Result error 
	if(curl_error($chOne)) 
	{ 
		echo 'error:' . curl_error($chOne); 
	} 
	else { 
		$result_ = json_decode($result, true); 
		echo '<script> alert  ("ทำการสมัครสำเร็จ ท่านสามารถรอรับผลทาง E-mail ภายใน 3-5 วันทำการ")</script>';
                 echo '<script>  window.history.go(-1);</script>';
                 header('Refresh:0;');
	} 
	curl_close( $chOne );   
?>