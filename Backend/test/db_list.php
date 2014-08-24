<?php
    $db = new Database("localhost", "username", "password", "testDatabase");

class Database
{
  protected $server;
  protected $username;
  protected $password;
  protected $database_name;
	


  //We are going to call 
  function __construct($database_name = 'akirachix', $password = '', $username = 'root', $server = 'localhost')
  {
    $this->database_name = $database_name;
    $this->server        = $server;
    $this->username      = $username;
    $this->password      = $password;
  }

  
  public function connection()
  {
    return new mysqli($this->server, $this->username, $this->password, $this->database_name);
  }

 
  public function db_query($query)
  {
    if ($result = $this->connection()->query($query))
    {

      /* fetch object array */
      while ($obj = $result->fetch_object())
      {
        $items[] = $obj;
      }

      /* free result set */
      $result->close();

      return $items;
    }

  }
}

/

?>