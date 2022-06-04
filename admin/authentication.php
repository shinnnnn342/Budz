<?php

if(! $_SESSION)
{
    session_start();
}

include('config/dbcon.php');


if(!isset($_SESSION['auth_role']))
{
    $_SESSION['message'] = "You are not an Admin!";
    header("Location: ../index.php");
    exit(0);

}
else
{

    if($_SESSION['auth_role'] != "1")
    {
        $_SESSION['message'] = "You are not an Admin!";
        header("Location: ../index.php");
        exit(0);
    }
}



?>