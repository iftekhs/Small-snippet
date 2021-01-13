function sendMail{
    
    $mail = new PHPMailer();
          

                                        
   $mail->Host       = Config::SMTP_HOST;                   
   $mail->SMTPAuth   = true;                                   
   $mail->Username   = Config::SMTP_USER;                    
   $mail->Password   = Config::SMTP_PASSWORD;                         
   $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;        
   $mail->Port       = Config::SMTP_PORT;                             
   $mail->IsSMTP();
   $mail->setFrom('your.email@gmail.com', 'Mailer');
   $mail->addAddress($email);     
   $mail->isHTML(true);   
   $mail->CharSet = 'UTF-8';
   $mail->Subject = 'Here is the subject';
   $mail->Body    = 'Your body <b> bold! </b>';
   $mail->send();
// sometimes it works without the $mail->send() if it dosent then make
// sure to use this
              
              
              if($mail->send()) {
                  
                 echo "Email has been sent";
                  
                  
              } else {
                  
                  echo "Error: {$mail->ErrorInfo}";
                  
                  
              }
   
   
   
}