<?php
    require 'vendor/autoload.php';    

    class SendEmail{
        public static function SendMail($to, $subject, $content){
            $key = 'D9589B8CE38436ED96850FBD8CDE4BC620640E535554A990B2855A39E5EEFD11060DBF8CE8A34095D521F54996DD3ECE';
            $url = 'https://api.elasticemail.com/v2/email/send';

              // $email = new \SendGrid\Mail\Mail();
            // $email->setFrom("nahum_kelly@yahoo.com", "Nahum Kelly");
            // $email->setSubject($subject);
            // $email->addTo($to);
            // $email->addContent("text/plain", $content);
            // //$email->addContent("text/html", $content);

            try {

                $email = array('from' => 'nahum_kelly@yahoo.com',
                'fromName' => 'IT Conference',
                'apikey' => $key,
                'subject' => $subject,
                'to' => $to,
                'bodyHtml' => $content,
                'bodyText' => $content,
                'isTransactional' => false);
                
                $ch = curl_init();
                curl_setopt_array($ch, array(
                    CURLOPT_URL => $url,
                    CURLOPT_POST => true,
                    CURLOPT_POSTFIELDS => $email,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_HEADER => false,
                    CURLOPT_SSL_VERIFYPEER => false
                ));
                
                $result=curl_exec ($ch);
                curl_close ($ch);
                
                //echo $result;

            } catch (Exception $e) {
                echo 'Email exception Caught : ' . $e->getMessage() . "\n";
                return false;
            }
        }
    }
?>