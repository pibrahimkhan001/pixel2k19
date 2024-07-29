<?php

require_once("mail/mail.class.php");

$mail = new Mail();

/* sendMail Parameters - to_email, to_name, $subject, $body */

$to_email = "pathanmohammedibrahimkhan@gmail.com";
$to_name = "Mohammed ibrahim";
$subject = "Welcome to PIXEL-2K19..!";
$body = "<h2>Hello ".$to_name.", <br />Welcome to PIXEL-2K19.....!</h2>";

$res = $mail->sendMail($to_email,$to_name,$subject,$body);
echo $res;
if($res==1){
    echo "Mail sent..!";
}else{
    echo "Mail Error..!";
}
?>