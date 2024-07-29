<?php

/**
 *
 */

class DBCredentials
{
  private $host = "localhost";
  private $db = "register";
  private $user = "root";
  private $pass = "";


  //private $host = "localhost";
  //private $db = "u182589698_pixel";
  //private $user = "u182589698_pixel";
  //private $pass = "Pixel2k19";

  protected function __construct()
  {
    /**/
  }

  protected function getHost(){
    return $this->host;
  }

  protected function getDb(){
    return $this->db;
  }

  protected function getUser(){
    return $this->user;
  }

  protected function getPass(){
    return $this->pass;
  }

}


 ?>
