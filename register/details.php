<?php
require_once("dbcredentials.php");
require_once("logs.php");

/**
 * Developed by ,
 */
class Details extends DBCredentials
{
	private $classname = "Details";
	private $logs = "";
	private $myconn = "";
	private $myerr = 0;

	public function __construct()
	{
		$this->logs = new Logs();
		$this->myconn = new mysqli($this->getHost(),$this->getUser(),$this->getPass(),$this->getDb());

		if (mysqli_connect_errno()) {
			$this->myerr = mysqli_connect_errno();
		}
	}

	


	public function addDetails($name,$mail,$phnno,$branch,$clg,$place,$rollno){
		$myname = $this->classname." - addDetails - ";
		$res = array();
		$res['status'] = 0;
		if($this->myerr==0 && !empty($this->myconn)){
				
				  $sqlqry = "SELECT MAX( slno ) FROM `details`";
			if ($stmt = $this->myconn->prepare($sqlqry)) {
				if($stmt->execute()){
					$stmt->bind_result($max);
					while($stmt->fetch()){
						$slnomax=$max;
						$slnomax++;
					}
			
		}
			}
		}

		else{
			$this->logs->errLog($myname."Mysqli Error or else");
		}
		$no=str_pad($slnomax, 4, '0', STR_PAD_LEFT);
		global $pixelid;
		$pixelid="pixel2k19".$no;



		
		

		if($this->myerr==0 && !empty($this->myconn)){
			
			  $sqlqry1 = "INSERT INTO `details`(`name`,`mail`,`phnno`,`branch`,`clg`,`place`,`rollno`,`pixelid`) VALUES (?,?,?,?,?,?,?,?)";
			if ($stmt1 = $this->myconn->prepare($sqlqry1)) {
				$stmt1->bind_param("ssssssss",$name,$mail,$phnno,$branch,$clg,$place,$rollno,$pixelid);
				if($stmt1->execute()){
					if($this->myconn->affected_rows){
					  $res['status'] = 1;
					  $res['rows_affected'] = $this->myconn->affected_rows;
					}
				}
				else{
					$this->logs->errLog($myname."Statement not executed".$this->myconn->error);
				}
			}
			else{
				$this->logs->errLog($myname."Not prepared");
			}
		}
		else{
			$this->logs->errLog($myname."Mysqli Error or else");
		}

		return $res;
	}
	
	

	

	public function __destruct(){
		if(!empty($this->myconn)){
		  $this->myconn->close();
		}
	}

}

 ?>
