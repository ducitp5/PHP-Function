<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/phpmailer/src/Exception.php';
require_once __DIR__ . '/vendor/phpmailer/src/PHPMailer.php';
require_once __DIR__ . '/vendor/phpmailer/src/SMTP.php';


echo 'hehe <br>';

if(!empty($_POST["send"])) {

    try{
     
        $name          = $_POST["userName"];
        $email         = $_POST["userEmail"];
        $subject       = $_POST["subject"];
        $content       = $_POST["content"];
        
        echo 'p22 <br>';
        
        $mail          = new PHPMailer(true);
        
        
        $mail->isSMTP();
        $mail->Host        = 'smtp.gmail.com';
        $mail->SMTPAuth    = true;
        $mail->Username    = 'ducitp5@gmail.com';        // YOUR gmail email
        $mail->Password    = 'rkgslzyzkxmgzymd';         // APP gmail password
        $mail->Port        = 465;                        // 465
        $mail->SMTPSecure  = 'ssl';       // ssl
        
        
        
        // Setting the email content
        
        $mail->IsHTML(true);
        $mail->setFrom('example@gmail.com', 'Sender Name');
        $mail->addAddress('phppot@example.com', 'Receiver Name');
        $mail->Subject = "Send email using Gmail SMTP and PHPMailer";
        $mail->Body = 'HTML message body. <b>Gmail</b> SMTP email body.';
        
        
        echo 'p48 <br>';
        
        if($mail->send()){
            
            $status    =   "success";
            $response  =   "Email is sent!";
        }
        else {
            
            $status    =   "failed";
            $response  =   "saome thing wrong " .$mail->ErrorInfo;
        }
        
        echo    'p58 <br>';
        
        exit(json_encode(array("status" => $status, "response" => $response)));
        
        echo    'p62 <br>';
    }
    
    catch(Exception $e) {
        echo 'Message: ' .$e->getMessage();
    }
    
    
    
	
/* 	
	$mail->AltBody = 'Plain text message body for non-HTML email client. Gmail SMTP email body.';
	
	
	$toEmail       =   "ductranp2@gmail.com";
	
	$mailHeaders   =   "From: " . $name . "<". $email .">\r\n";
	
	
	if(mail($toEmail, $subject, $content, $mailHeaders)) {
	
	    $message   =    "Your contact information is received successfully.";
	    
	    $type      =    "success";
	} */
}


require_once "contact-view.php";


?>