<?php
include("phpmailer/PHPMailerAutoload.php");
//Create a new PHPMailer instance
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Debugoutput = 'html';
$mail->Host = 'smtp.google.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;

$mail->Username = "ramanareddysane20"; // SMTP username
$mail->Password = "Company@123."; // SMTP password
$webmaster_email = "coordinator@pixel2k16.in"; //Reply to this email ID
$mail->From = "coordinator@pixel2k16.in";
$mail->FromName = "Team Pixel";
$mail->AddReplyTo($webmaster_email,"PIXEL2K16");
$mail->WordWrap = 100; // set word wrap
$mail->IsHTML(true); // send as HTML
$mail->Subject = "PIXEL - 2K16, Event Update";


$myconn= new mysqli("localhost","pixelbc7","Ramsurya58$$","pixelbc7_pixel");

if($myconn->connect_errno)
 {
   die("connection error");
 }

 $mysel = $myconn->query("select firstname, mailid from registered join enigma on registered.pixelid=enigma.pid ");
 
 $count = 0;
 
 if($mysel->num_rows>0){ 
 while($row = $mysel->fetch_assoc()){
  echo $name = $row["firstname"];
  echo " && ";
  echo $email=$row["mailid"];	
	
  $mail->ClearAddresses();
  $mail->Body = "";
  $mail->Body = "<pre style='font-size:1.1em; color:#000000; font-family: calibri; ' >
    
    Hi Participant,
          Deep Learning is making many breakthroughs and leading to many advancements in the technologies.
          
          Avail a great chance of learning deep learning through hands-on experience with experts through our <b>workshop</b>.
          The workshop will be on 23<sup>rd</sup> & 24<sup>th</sup> March 2019.we have only 100 slots left . Hurry up!

          Inform this to your friends who are interested in deep learning. Ignore this if you registered already.
          
          Payments(Through SBI Collect) have already begun. It's just for people like you.
          
          visit <a href='http://pixel2k19.in/'>www.pixel2k19.in</a> for more details.
          
          Feel free to contact us for any queries.
          Email us @ <a href='mailto:pixel.jntua@gmail.com'>pixel.jntua@gmail.com</a>
      	
    With Regards,
    Team Pixel.
  </pre>";
  
  $mail->addAddress($email,$name);
  
  if(!$mail->Send())
  echo "<br />Mailer Error: " . $mail->ErrorInfo."".$to;
  else{
    echo "<br/>Message has been sent".$email;
    echo $count +=1;
  } 
  
  
  echo "<br><br>";
 
 }
 
 echo "<br><br>";
 echo $count;   
 }
?>