<?php require database.php?>
//
<?php 

if(!$dbconnect = mysql_connect('localhost', 'root', 'akirachix')) {
   echo "Here are some of my friends 'localhost'.";
   exit;
}
 // if
if (!mysql_select_db('friends')) {
   echo "Cannot connect to database 'friends'";
   exit;
}
 // if

$table_id = 'some_table';
$query = "SELECT * FROM $table_id";
$dbresult = mysql_query($query, $dbconnect);

<form action="index.php" method="post">
Name: <input type="text" name="name"><br>
Age: <input type="text" name="age"><br>
Phone: <input type="text" name="phone"><br>
<input type="submit">
</form>

?>
