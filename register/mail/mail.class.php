<?php
use PHPMailer\PHPMailer\PHPMailer;
require_once 'vendor/autoload.php';
require_once "logs.class.php";

class Mail{

    private $logs;
    private $email = "support@pixel2k19.in";
    private $pass = "Pixel2k19";
    private $mails;
    
    public function __construct(){
        $this->logs = new Logs();
        $this->mails = new PHPMailer;
        $this->mails->isSMTP();
        $this->mails->SMTPDebug = 0;
        $this->mails->Host = 'smtp.hostinger.com';
        $this->mails->Port = 587;
        $this->mails->SMTPAuth = true;
        $this->mails->Username = $this->email;
        $this->mails->Password = $this->pass;
        $this->mails->setFrom($this->email, 'PIXEL-2K19');
        $this->mails->addReplyTo($this->email, 'PIXEL-2K19');
    }
    
    public function sendmail($to_mail,$to_name,$subject,$body){
        $res = 0;
        $mailinfo = $to_mail." ,".$to_name." ,".$subject;
        $this->mails->addAddress($to_mail,$to_name);
        $this->mails->Subject = $subject;
        $this->mails->msgHTML($body, __DIR__);
        $this->mails->AltBody = 'Welcome to PIXEL - 2K19';
        if (!$this->mails->send()) {
            $res = 2;
            $this->logs->errLog($mailinfo." ,".$this->mails->ErrorInfo);
        } else {
            $res = 1;
            $this->logs->accessLog($mailinfo." ,sent");
        }        
        return $res;
    }
}

?>