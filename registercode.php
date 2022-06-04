<?php
session_start();
include('admin/config/dbcon.php');

//registercode

if(isset($_POST['register_btn']))
{
    $fname = mysqli_real_escape_string($db, $_POST['fname']);
    $lname = mysqli_real_escape_string($db, $_POST['lname']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $number = mysqli_real_escape_string($db, $_POST['number']);
    $address = mysqli_real_escape_string($db, $_POST['address']);
    $password= mysqli_real_escape_string($db, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($db, $_POST['cpassword']);

    if($password == $confirm_password)
    {
        $checkemail = "SELECT email FROM users WHERE email='$email'";
        $checkemail_run = mysqli_query($db, $checkemail);

        if(mysqli_num_rows($checkemail_run) > 0)
        {
            $_SESSION['message'] = "Email Already Exists";
            header("Location: index.php");
            exit(0);
        }
        else
        {
            $user_query= "INSERT INTO users (fname,lname,number,email,address,password) VALUES ('$fname','$lname','$number','$email','$address','$password')";
            $user_query_run = mysqli_query($db, $user_query);
        
            if($user_query_run)
            {
                $_SESSION['message'] = "Registerd Successfully!";
                header("Location: index.php");
                exit(0);
            }

            else
            {
                $_SESSION['message'] = "Something went wrong";
                header("Location: index.php");
                exit(0);
            }
        }

    }
    else
    {
        $_SESSION['message'] = "Password and Confirm Password does not match!";
        header("Location: index.php");
        exit(0);
    }
}
else
{
    header("Location: index.php");
    exit(0);
}
?>


