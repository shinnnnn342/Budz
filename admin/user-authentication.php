<?php

if(! $_SESSION)
{
    session_start();
}

include('config/dbcon.php');


if(!isset($_SESSION['auth']))
{
    $_SESSION['message'] = "You are not Registered yet!";
    header("Location: index.php");
    exit(0);

}


?>