<?php
include_once('database.php');

// Define configuration
define("DB_HOST", "ec2-54-235-84-244.compute-1.amazonaws.com");
define("DB_USER", "pnrcvqkygfhofk");
define("DB_PASS", "14ecfb8285ab6dfad142b2c2027e6ba98508e66d98230ebc5c819d201dd555e7b");
define("DB_NAME", "dbc6hfmcn5rsv1");


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
