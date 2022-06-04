<?php

session_start();

include('authentication.php');
include('config/dbcon.php');


//admin delete
if(isset($_POST['user_delete']))
{
    $user_id = $_POST['user_delete'];

    $query = "DELETE FROM users WHERE user_id='$user_id' ";
    $query_run = mysqli_query($db, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Deleted Successfully";
        header("Location: view-register.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong!";
        header("Location: view-register.php");
        exit(0);
    }

}

//admin add
if(isset($_POST['add_user']))
{
    $user_id = $_POST['user_id'];
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $number= $_POST['number'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $role_as = $_POST['role_as'];
    $user_status = $_POST['user_status'] == true ? '1' : '0';

    $query = "INSERT INTO users (fname, lname,number, email,address, password, role_as, user_status) VALUES ('$fname','$lname','$number','$email','$address','$password','$role_as','$user_status')";
    $query_run = mysqli_query($db, $query);
    
    if($query_run)
    {
        $_SESSION['message'] = "User Added Successfully";
        header("Location: view-register.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong!";
        header("Location: view-register.php");
        exit(0);
    }
}
//admin edit
if(isset($_POST['update_user']))
{
    $user_id = $_POST['user_id'];
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $number= $_POST['number'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $role_as = $_POST['role_as'];
    $user_status = $_POST['user_status'] == true ? '1' : '0';

    $query = "UPDATE users SET fname='$fname', lname='$lname',number='$number', email='$email',address='$address', password='$password', role_as='$role_as', user_status='$user_status' 
                WHERE user_id ='$user_id' ";
    $query_run = mysqli_query($db, $query);
    
    if($query_run)
    {
        $_SESSION['message'] = "Updated Successfully";
        header("Location: view-register.php");
        exit(0);
    }
}

//end transaction
if(isset($_POST['end_modal_btn']))
{
    $book_id = $_POST['end_modal_input'];
    $book_user_id = $_POST['b_book_user_id'];

        $add_points = "UPDATE users SET user_points = user_points + 2 WHERE user_id = '$book_user_id'";
        $add_points_run = mysqli_query($db,$add_points);    

        $change_status = "UPDATE booking SET b_status = 3 WHERE booking_id = '$book_id'";
        $change_status_run = mysqli_query($db,$change_status);

            if($add_points_run . $change_status_run)
            {
                $_SESSION['message'] = "Transaction Complete!";
                header("Location: user-transact.php");
                exit(0);
            }
            else
            {
                $_SESSION['message'] = "Something Went Wrong!";
                header("Location: user-transact.php");
                exit(0);
            }
    }

//claim
if(isset($_POST['claim_btn']))
 {
  
    $redeem_status = $_POST['redeem_status'];
    $redeem_id = $_POST['redeemed_id'];
    $redeem_value = $_POST['redeem_value'];
    $redeem_code = $_POST['redeem_code'];

    $change_rstatus = "UPDATE redeemed SET r_status = $redeem_status WHERE redeem_code = '$redeem_code'";
    $change_rstatus_run = mysqli_query($db, $change_rstatus);

    if($change_rstatus_run)
    {
        $_SESSION['message'] = "Redeem Successful!";
        header("Location: user-claim.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Error!";
        header("Location: user-claim.php");
        exit(0);
    }
 }

//redeem
if(isset($_POST['confirm_btn']))
 {
    $redeem_code = $_POST['redeemed_code'];
    $redeem_wash_choice = $_POST['wash_choice'];
    $user_id = $_POST['redeem_user_id'];
    $r_points = $_POST['redeem_user_points'];

    if($r_points >= $redeem_wash_choice)
    {
       $update = "UPDATE users SET user_points = user_points - $redeem_wash_choice WHERE user_id = '$user_id'";
       $update_run = mysqli_query($db, $update);

       $insert = "INSERT INTO redeemed (r_user_id,redeem_code,redeem_desc) VALUES ('$user_id','$redeem_code', '$redeem_wash_choice')";
       $insert_run = mysqli_query($db, $insert);

       if($update_run . $insert_run)
       {
           $_SESSION['message'] = "Points Redeemed!";
           header("Location: redeem-points.php");
           exit(0);
       }

    }
    else
    {
        $_SESSION['message'] = "Insufficient Points!";
        header("Location: redeem-points.php");
        exit(0);
    }
    
 }
 
?>

   