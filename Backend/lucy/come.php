
<?php
class List
{
    protected $come;
 
        public function __construct()
        {
            $this->DbConnect();
        }
 
        protected function DbConnect()
        {
            include "db_config.php";
            $this->come = mysql_connect($host,$user,$password) OR die("Unable to connect to the database");
            mysql_select_db($db,$this->come OR die("can not select the database $db");
            return TRUE;
        }
 
        public function ShowStudents()
        {
            $sql = "SELECT * FROM Students";
            $res = mysql_query($sql,$this->come);
            $Students = '<option value="0">choose...</option>';
            while($row = mysql_fetch_array($res))
            {
                $category .= '<option value="' . $row['id_clot'] . '">' . $row['name'] . '</option>';
            }
            return $Students;
        }
 
        public function ShowType()
        {
            $sql = "SELECT * FROM type WHERE id_clot=$_POST[id]";
            $res = mysql_query($sql,$this->come;
            $type = '<option value="0">choose...</option>';
            while($row = mysql_fetch_array($res))
            {
                $type .= '<option value="' . $row['id_type'] . '">' . $row['name'] . '</option>';
            }
            return $type;
        }
}
 
$opt = new List();
?>