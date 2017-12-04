<?php

class DB{
  private $dbhost = "localhost";
  private $dbname = "slimapp";
  private $dbuser = "root";
  private $dbpass = "";

  public function connect(){
    $mysql_connect_str = "mysql:host=$this->dbhost;dbname=$this->dbname";
    $dbConnection = new PDO($mysql_connect_str, $this->dbuser, $this->dbpass);
    $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbConnection;
  }
}
