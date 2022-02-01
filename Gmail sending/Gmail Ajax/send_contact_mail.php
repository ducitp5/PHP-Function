<?php


use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



require_once    __DIR__ .'/PHPmailer/Exception.php';
require_once    __DIR__ .'/PHPmailer/PHPMailer.php';
require_once    __DIR__ .'/PHPmailer/SMTP.php';


if(!empty($_POST["send"])) {

    try{
     
        $name               = $_POST["name"];
        $email              = $_POST["email"];
        $subject            = $_POST["subject"];
        $content            = $_POST["body"];
        
                
        $mail               = new PHPMailer(true);
        
        
        $mail->isSMTP();
        
        $mail->Host         = 'smtp.gmail.com';
        $mail->SMTPAuth     = true;
        $mail->Username     = 'ducitp5@gmail.com';        // YOUR gmail email
        $mail->Password     = 'rkgslzyzkxmgzymd';         // APP gmail password
        $mail->Port         = 465;                        // 465
        $mail->SMTPSecure   = 'ssl';       // ssl
        
        
        
        // Setting the email content
        
        $mail   ->IsHTML(true);
        
        $mail   ->setFrom('example@gmail.com', 'Ajax Name');          // FROM personalize company
        
        $mail   ->addAddress( $email   ,    $name);                    // sent to
        
        $mail   ->Subject       =    $subject;
        
        $mail   ->Body          =    $content;
        
                
        if($mail->send()){
            
            $status    =   "success";
            $response  =   "Email is sent!";
        }
        else {
            
            $status    =   "failed";
            $response  =   "saome thing wrong " .$mail->ErrorInfo;
        }
        
        
        
        exit(json_encode(array("status" => $status, "response" => $response)));
        
        
    }
    
    catch(Exception $e) {
        
        echo 'Message - 83: ' .$e->getMessage();
    }
}
else{

    header("Location: contact-view.php");
    
//    echo    "rong tuech";
}


?>