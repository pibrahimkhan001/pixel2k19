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
          CODIGO (Online Coding) will be on 23<sup>rd</sup> March 2019 from 11:00 AM to 4:00 PM in two sessions. Registrations are opened.
          
          Do you intend to make your brain storm and make it sharper.
          Do you wanna prove that you can unriddle the riddles.
          An excellent event to thrill you and enhance your thinking power.
          
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