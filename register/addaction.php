<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../favicon/favicon2.png" type="image/x-icon">
    <title>Pixel || Registration</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme2.css">


<style>
    @import url(http://fonts.googleapis.com/css?family=Raleway);
#cssmenu,
#cssmenu ul,
#cssmenu ul li,
#cssmenu ul li a {
  margin: 0;
  padding: 0;
  border: 0;
  list-style: none;
  line-height: 1;
  display: block;
  position: relative;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
#cssmenu:after,
#cssmenu > ul:after {
  content: ".";
  display: block;
  clear: both;
  visibility: hidden;
  line-height: 0;
  height: 0;
}
#cssmenu {
  width: auto;
  border-bottom: 3px solid #47c9af;
  font-family: Raleway, sans-serif;
  line-height: 1;
}
#cssmenu ul {
  background: #ffffff;
}
#cssmenu > ul > li {
  float: left;
}
#cssmenu.align-center > ul {
  font-size: 0;
  text-align: center;
}
#cssmenu.align-center > ul > li {
  display: inline-block;
  float: none;
}
#cssmenu.align-right > ul > li {
  float: right;
}
#cssmenu.align-right > ul > li > a {
  margin-right: 0;
  margin-left: -4px;
}
#cssmenu > ul > li > a {
  z-index: 2;
  padding: 18px 25px 12px 25px;
  font-size: 15px;
  font-weight: 400;
  text-decoration: none;
  color: #444444;
  -webkit-transition: all .2s ease;
  -moz-transition: all .2s ease;
  -ms-transition: all .2s ease;
  -o-transition: all .2s ease;
  transition: all .2s ease;
  margin-right: -4px;
}
#cssmenu > ul > li.active > a,
#cssmenu > ul > li:hover > a,
#cssmenu > ul > li > a:hover {
  color: #ffffff;
}
#cssmenu > ul > li > a:after {
  position: absolute;
  left: 0;
  bottom: 0;
  right: 0;
  z-index: -1;
  width: 100%;
  height: 120%;
  border-top-left-radius: 8px;
  border-top-right-radius: 8px;
  content: "";
  -webkit-transition: all .2s ease;
  -o-transition: all .2s ease;
  transition: all .2s ease;
  -webkit-transform: perspective(5px) rotateX(2deg);
  -webkit-transform-origin: bottom;
  -moz-transform: perspective(5px) rotateX(2deg);
  -moz-transform-origin: bottom;
  transform: perspective(5px) rotateX(2deg);
  transform-origin: bottom;
}
#cssmenu > ul > li.active > a:after,
#cssmenu > ul > li:hover > a:after,
#cssmenu > ul > li > a:hover:after {
  background: #ff004d;
}

</style>
    <script type="text/javascript">
function CheckBranch(val){
 var element=document.getElementById('branch');
 if(val=='others')
   element.style.display='block';
 else  
   element.style.display='none';
}

</script> 
</head>
<body>
    <div class="form-body">
        <div class="website-logo">
            <a href="index.html">
                <div class="logo">
                    <img class="logo-size" src="images/lg7.png" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">

                </div>
            </div>
            <div class="form-holder">
                <div id='cssmenu'>
                    <ul>
                        <li><a href='../index.php'>Home</a></li>
                        <li><a href='../about_event.php'>About-Event</a></li>
                        <li><a href='../workshop.php'>Workshop</a></li>
                        <li><a href='../faq2.php'>FAQ</a></li>
                        <li><a href='../aboutus.php'>About Us</a></li>
                        <li><a href='../contact.php'>Contact Us</a></li>
                    </ul>
                </div>
                <div class="form-content">
                    <div class="form-items">
                        <h3>Confirmation.</h3>
                        
                        <div class="page-links">
                            <a href="#" class="active">Invoice</a>
                        </div>
  <?php


  require_once("details.php");
  $obj = new Details();
  $res = $obj->addDetails($_POST['name'],$_POST['mail'],$_POST['phnno'],$_POST['branch'],$_POST['clg'],$_POST['place'],$_POST['rollno']);
  $email=$_POST['mail'];
  $ename=$_POST['name'];
  ?>
     
      <?php

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
?>
             

              
        <div class="jumbotron">
			<div class="row">
				<div class="col-md-4">&nbsp;
				</div>
				<div class="col-md-4">
				<?php if(!empty($res['status']) && $res['status']==1){ echo '<div class="">registered successfully.</div>'; ?>
				</div>
        
				</div>
				<div class="col-md-4">&nbsp;
				</div>
        <div>
          <p style="color: black;">Check your registered mail for Pixel-ID (13 digit number) and use it for payment.</p>
        </div>
                <?php
              }

                ?>            
		</div>
          <div class="form-button">
                                <a href="../instruction.php"><button class="ibtn">Payment</button></a>
                            </div>
 
		</div><br><br>


                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>