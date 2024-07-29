
<?php

class Logs
{
  private $rootdir = __DIR__."/logs";
  public function __construct()
  {
    if(!file_exists($this->rootdir)){
      mkdir($this->rootdir);
    }
  }

  public function errLog($msg){
    $filename = $this->rootdir."/error.csv";
    $data = "\n".date('d-m-Y H:i:s')." ,".$_SERVER['REMOTE_ADDR']." ,".$msg;
    file_put_contents($filename,$data,FILE_APPEND);
  }

  public function accessLog($msg){
    $filename = $this->rootdir."/access.csv";
    $data = "\n".date('d-m-Y H:i:s')." ,".$_SERVER['REMOTE_ADDR']." ,".$msg;
    file_put_contents($filename,$data,FILE_APPEND);
  }  
}

?>
