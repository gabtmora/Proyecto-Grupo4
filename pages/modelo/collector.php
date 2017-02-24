<?php
include_once('database.php');

// Define configuration
define("DB_HOST", "ec2-23-21-204-166.compute-1.amazonaws.com");
define("DB_USER", "dbdvljzpcsyvny");
define("DB_PASS", "244dfce1724c5391982a5d1b37c7aded1a7600a56701f0ed179eb6bd1c60d53a");
define("DB_NAME", "ddnlu2ehchh7kl");


class Collector extends database
{
  public static $db;
  private $host      = DB_HOST;
  private $username  = DB_USER;
  private $password  = DB_PASS;
  private $dbname    = DB_NAME;
    
  public function __construct()
  {
    self::$db = new dataBase($this->username, $this->password, $this->host, $this->dbname);
  }

}

?>
