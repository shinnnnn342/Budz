<?php
session_start();

if(isset($_POST['logout_btn_1']))
{
    unset( $_SESSION['auth']);
    unset( $_SESSION['auth_role']);
    unset( $_SESSION['auth_user']);

    $_SESSION['message'] = "Logged Out Successfully";
    header("Location: ../admin_login.php");
    exit(0);
}

?>