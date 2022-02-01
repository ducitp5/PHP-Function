<?php

session_start();

use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if(@include_once( __DIR__.'/PHPmailer/Exception.php')) {
    
    echo 'co <hr>';
}
else{
    echo 'ko co <hr>';
}


require_once    __DIR__ .'/PHPmailer/Exception.php';
require_once    __DIR__ .'/PHPmailer/PHPMailer.php';
require_once    __DIR__ .'/PHPmailer/SMTP.php';
 

echo 'hehe <br>';

$rep   =  isset($_POST["send"]);

echo '<script> console.log("chao 27 - '.$rep.'") </script>';

echo 'type methodePOST --'.gettype($rep). "<hr>";

echo 'REQUEST methode ? --'.$_SERVER["REQUEST_METHOD"]. "<hr>";

echo 'isset methodePOST ? --'.$rep. "<hr>";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    try{
     
        if(isset($_POST["sender"]))
            
                    $sender         =   $_POST["sender"];
        
        else        $sender         =   "vo danh";
        
        $name          = $_POST["userName"];
        $email         = $_POST["userEmail"];
        $subject       = $_POST["subject"];
        $content       = $_POST["content"];
        
        echo $name ." - ".$email ." - " .$subject ." - " .$content;
        
        echo '<hr> p22 <br>';
        
        $mail          = new PHPMailer(true);
        
        
        $mail->isSMTP();
        
        $mail->Host        = 'smtp.gmail.com';
        $mail->SMTPAuth    = true;
        $mail->Username    = 'ducitp5@gmail.com';        // YOUR gmail email
        $mail->Password    = 'rkgslzyzkxmgzymd';         // APP gmail password
        $mail->Port        = 465;                        // 465
        $mail->SMTPSecure  = 'ssl';       // ssl
        
        
        
        // Setting the email content
        
        $mail   ->IsHTML(true);
        
        $mail   ->setFrom('toiladuc@gmail.com', $sender);          // FROM personalize company
        
        $mail   ->addAddress( $email   ,    $name);                    // sent to
        
        $mail   ->Subject       =    $subject;
        
        $mail   ->Body          =    $content;
        
        
        echo 'p48 <br>';
        
        if($mail->send()){
            
            $_SESSION["message"]    =   "send reussit";
            
            echo '<script> console.log("send is reussit") </script>';
        }
        else {
            
            $_SESSION["message"]    =   "cant not send";
            
            $response  =   "saome thing wrong " .$mail->ErrorInfo;
            
            echo '<script> console.log("erreur - '.$mail->ErrorInfo.'") </script>';
        }
        
        echo    'p58 <br>';
        
/*         exit(json_encode(array("status" => $status, "response" => $response))); */
        
        echo    'p62 <br>';
        
        
        
        header("Location: index.php");
    }
    
    catch(Exception $e) {
        
        echo 'Message 96: ' .$e->getMessage();
    }
    
    
    
	

}
else {
    
    $_SESSION["message"]    =   "u must remplit all champ";
    
    header("Location: index.php");
} 
// require_once "contact-view.php";
    


/*
 $mail->AltBody = 'Plain text message body for non-HTML email client. Gmail SMTP email body.';
 
 
 $toEmail       =   "ductranp2@gmail.com";
 
 $mailHeaders   =   "From: " . $name . "<". $email .">\r\n";
 
 
 if(mail($toEmail, $subject, $content, $mailHeaders)) {
 
 $message   =    "Your contact information is received successfully.";
 
 $type      =    "success";
 } */
    
?>