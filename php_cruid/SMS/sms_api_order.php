<?php
if($_POST['order_status']='1'){
$sms = new thsms();
 
$sms->username   = 'Perzelita';
$sms->password   = '47e1d7';
 
$a = $sms->getCredit();
//var_dump( $a);
 
$b = $sms->send( 'NOTICE', '0807464246', 'ทางEathereได้แจ้งทางร้าน'+'เรียบร้อยแล้วหมายเลขOrderของคุณคือ'+$read_status['order_status']+'ถ้ามีปัญหากรณาติดต่อที่Eathereproject.com ขอบคุณที่ใช้บริการ');
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
}
elseif($_POST['order_status']='2'){$sms = new thsms();
 
    $sms->username   = 'Perzelita';
    $sms->password   = '47e1d7';
     
    $a = $sms->getCredit();
    //var_dump( $a);
     
    $b = $sms->send( 'NOTICE', '0807464246', 'ทางร้าน'+$read_partner['partner_name']+'ได้ทำการรับออเดอร์เรียบร้อยแล้วภายในเวลา'+$time_estimate+'จะจัดส่งทางผู้จัดส่ง');
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
    }


    elseif($read_status['order_status']='3'){$sms = new thsms();
 
        $sms->username   = 'Perzelita';
        $sms->password   = '47e1d7';
         
        $a = $sms->getCredit();
        //var_dump( $a);
         
        $b = $sms->send( 'NOTICE', '0807464246', 'ทางร้าน'+$read_partner['partner_name']+'ได้ทำการรับออเดอร์เรียบร้อยแล้วภายในเวลา'+$time_estimate+'ทางร้านจะจัดส่งให้ท่านเอง');
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
        }
        
        elseif($read_status['order_status']='4'){$sms = new thsms();
 
            $sms->username   = 'Perzelita';
            $sms->password   = '47e1d7';
             $venchle_brand=$_read_shipper['venchle_brand'];;
             $venchle_series=$_read_shipper['venchle_series'];
            $a = $sms->getCredit();
            //var_dump( $a);
             
            $b = $sms->send( 'NOTICE', '0807464246', 'ทางร้านได้จัดส่งให้ผู้ส่งเรียบร้อยแล้ว'+$time_estimate+'ทางผู้จัดส่งจะติดต่อท่านทันทีที่ใกล้ถึง'+$venchle_brand+$venchle_series);
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
            }
            
            elseif($read_status['order_status']='5'){$sms = new thsms();
 
                $sms->username   = 'Perzelita';
                $sms->password   = '47e1d7';
                 
                $a = $sms->getCredit();
                //var_dump( $a);
                 
                $b = $sms->send( 'NOTICE', '0807464246', 'หมายเลขออเดอร์'+$read_status['order_id']+'ทำการจัดส่งอาหารให้แล้วเรียบร้อยขอขอบคุณที่ใช้บริการค่ะ';
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
                }
                
                elseif($read_status['order_status']='6'){$sms = new thsms();
 
                    $sms->username   = 'Perzelita';
                    $sms->password   = '47e1d7';
                     
                    $a = $sms->getCredit();
                    //var_dump( $a);
                     
                    $b = $sms->send( 'NOTICE', '0807464246', 'หมายเลขออเดอร์'+$read_status['order_id']+'ทางร้านอาหารไม่สามารถจัดทำได้ จะทำการคืนเงินในระบบจำนวน'$read_status['total']+'บาทให้ ภายใน1ชั่วโมงขออภัยเป็นอย่างสูง';
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
                    }?>