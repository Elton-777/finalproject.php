<?php
 $host = "localhost";
 $username = "root";
 $password = "";
 $db = "mybook_db";


 $connection = mysqli_connect($host,$username,$password,$db);

 $first_name = "eathrone";
 $last_name = "choongo";

 $query = "insert into users (first_name,last_name) values ('$first_name','$last_name')";

 mysqli_query($connection,$query);

 echo mysqli_error($connection);
