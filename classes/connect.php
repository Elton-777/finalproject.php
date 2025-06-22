<?php
class Database
{
 private $host = "localhost";
 private $username = "root";
 private $password = "";
 private $db = "mybook_db";

 function connect()

{
 $connection = mysqli_connect($this->host,$this->username,$this->password,$this->db);
 return $connection;
}
function read($qyery)
{

$conn = $this->connect();
$result = mysqli_query($conn,$quey);

if(!result)
{
    return false;
}
else
{
    return true;
}

}
}
