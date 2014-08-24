<?php require db-list.php?>
<?php
//This is a database connect
// Connection data (server_address, database, username, password)
$hostdb = 'localhost';
$namedb = 'students';
$userdb = 'root';
$passdb = 'akirachix';
 
//This should display the data successfully unless otherwise
try {
  $connect = new PDO("mysql:host=$hostdb; dbname=$namedb", $userdb, $passdb);
  echo 'Connected to database';
}
catch(PDOException $e) {
//we need  everything to output.
  echo $e->getMessage();
}

?>
