<?php 
session_start();
include('admin/config/dbcon.php');



if(isset($_POST['login_btn']))
{
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    $login_query = "SELECT * FROM users WHERE email ='$email' AND password = '$password' LIMIT 1";
    $login_query_run = mysqli_query($db, $login_query);

    if(mysqli_num_rows($login_query_run) > 0)
    {
        foreach($login_query_run as $data)
        {
            $user_id = $data['user_id'];
            $user_fname = $data['fname'];
            $user_lname = $data['lname'];
            $user_number = $data['number'];
            $user_email = $data['email'];
            $user_address = $data['address'];
            $user_password = $data['password'];
            $user_created_at = $data['created_at'];      
            $role_as = $data['role_as'];

        }
        $_SESSION['auth'] = true;
        $_SESSION['auth_role'] = "$role_as";
        $_SESSION['auth_user'] = [
            'user_id'=>$user_id,
            'user_fname'=>$user_fname,
            'user_lname'=>$user_lname,
            'user_number'=>$user_number,
            'user_email'=>$user_email,
            'user_address'=> $user_address,
            'user_created_at'=> $user_created_at,
            'user_password'=>$user_password,

        ];
        $_SESSION['user_id'] = "$user_id";
        $_SESSION['email'] = "$user_email";
        $_SESSION['password'] = "$user_password";
    

        if($_SESSION['auth_role'] == "1")
        {
            $_SESSION['message'] ="Welcome";
            header("Location: admin/index.php");
            exit(0);
        }
        elseif($_SESSION['auth_role'] == "0")
        {
            $_SESSION['message'] = "You are Logged In";
            header("Location: index.php");
            exit(0);
        }
    }
    else
    {
        $_SESSION['message'] = "Invalid Email or Password";
    header("Location: index.php");
    exit(0);
    }

}   
else
{
    $_SESSION['message'] = "Access Denied";
    header("Location: index.php");
    exit(0);

}






?>