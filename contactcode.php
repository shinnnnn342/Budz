
<?php 
session_start();
include('admin/config/dbcon.php');

//contact

if(isset($_POST['contact_btn']))
{


    $c_email = $_POST['c_email'];
    $c_number = $_POST['c_number'];
    $c_message = $_POST['c_message'];

    
    $query = "INSERT INTO contact_us (c_email, c_number,c_message) VALUES ('$c_email','$c_number','$c_message')";
    $query_run = mysqli_query($db, $query);
    
    if($query_run)
    {
        $_SESSION['message'] = "Submitted Successfully";
        header("Location: contacts.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong!";
        header("Location: contacts.php");
        exit(0);
    }
}

?>