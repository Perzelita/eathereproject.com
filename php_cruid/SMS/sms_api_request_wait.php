<?php

$id = $_POST['request_kyc_id'];
$sql ="SELECT * FROM `request_kyc` WHERE `request_kyc_id` = '".$id."' ORDER BY `request_kyc_id` DESC ";
$result = $conn->query($sql)  or die($conn->error);
$row = $result->fetch_assoc();

$sms = new thsms();
 
$sms->username   = 'Perzelita';
$sms->password   = '47e1d7';
 
$a = $sms->getCredit();
//var_dump( $a);
 
$b = $sms->send( 'NOTICE', '0807464246', 'ทางEathereจะทำการตรวจสอบตุณสมบัติของท่านและส่งผลทางSMSภายใน 2-3ชั่วโมงเวลาทำการ 09.00-17.00 ');
//var_dump( $b);
 
class thsms
{
     var $api_url   = 'http://www.thsms.com/api/rest';
     var $username  = null;
     var $password  = null;
 
    public function getCredit()
    {
        $params['method']   = 'credit';
        $params['username'] = $this->username;
        $params['password'] = $this->password;
 
        $result = $this->curl( $params);
 
        $xml = @simplexml_load_string( $result);
 
        if (!is_object($xml))
        {
            return array( FALSE, 'Respond error');
 
        } else {
 
            if ($xml->credit->status == 'success')
            {
              //  return array( TRUE, $xml->credit->amount);
            } else {
                return array( FALSE, $xml->credit->message);
            }
        }
    }
 
    public function send( $from='0000', $to=null, $message=null)
    {
        $params['method']   = 'send';
        $params['username'] = $this->username;
        $params['password'] = $this->password;
 
        $params['from']     = $from;
        $params['to']       = $to;
        $params['message']  = $message;
 
        if (is_null( $params['to']) || is_null( $params['message']))
        {
            return FALSE;
        }
 
        $result = $this->curl( $params);
        $xml = @simplexml_load_string( $result);
        if (!is_object($xml))
        {
            return array( FALSE, 'Respond error');
        } else {
            if ($xml->send->status == 'success')
            {
               // return array( TRUE, $xml->send->uuid);
            } else {
                return array( FALSE, $xml->send->message);
            }
        } 
    }
     
    private function curl( $params=array())
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->api_url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query( $params));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 
        $response  = curl_exec($ch);
        $lastError = curl_error($ch);
        $lastReq = curl_getinfo($ch);
        curl_close($ch);
 
        return $response;
    }
}
?>