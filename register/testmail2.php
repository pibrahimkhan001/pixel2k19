
                        
  <?php
$con=mysqli_connect('localhost','root','','register');


        
   
  $query="select * from categories";
  $run_qry=mysqli_query($con,$query);
  while ($row_qry=mysqli_fetch_array($run_qry)) {
    $name=$row_qry['name'];
    $email=$row_qry['mail'];
    $pixleid=$row_qry['pixelid'];

    //require_once("mail/mail.class.php");

//$mail = new Mail();

/* sendMail Parameters - to_email, to_name, $subject, $body */

//$to_email = $email;
//$to_name = $ename;
//$subject = "Welcome to PIXEL-2K19..!";
//$body = "<h2>Hello ".$to_name.", <br />Welcome to PIXEL-2K19.....your pixel id is ".$pixelid."!</h2>";

//$res = $mail->sendMail($to_email,$to_name,$subject,$body);
//echo $res;
//if($res==1){
  //  echo "Mail sent..!";
//}else{
//    echo "Mail Error..!";
//}

             

    echo '<div class="">registered successfully.</div>';
  }
    
		?>		