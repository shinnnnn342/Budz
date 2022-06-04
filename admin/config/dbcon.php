<?php 
 $host = "localhost";
 $username = "root";
 $password = "";
 $database = "budz_db";

 $db = mysqli_connect($host, $username, $password, $database);
 
if(!$db)
{
    die();
}
?>