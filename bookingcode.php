
<?php 
session_start();
include('admin/config/dbcon.php');

//feedback

if(isset($_POST['sched_btn']))
{

    $b_user_id= $_POST['b_user_id'];
    $book_date= $_POST['book_date'];
    $b_fname= $_POST['b_fname'];
    $b_lname= $_POST['b_lname'];
    $b_number= $_POST['b_number'];
    $b_email= $_POST['b_email'];
    $b_message= $_POST['b_message'];
    
    $query = "INSERT INTO booking (b_user_id, book_date,b_fname,b_lname,b_number,b_email,b_message) VALUES ('$b_user_id','$book_date','$b_fname','$b_lname','$b_number','$b_email','$b_message')";
    $query_run = mysqli_query($db, $query);
    
    if($query_run)
    {
        $_SESSION['message'] = "Booking Success";
        header("Location: schedule_of_book.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong!";
        header("Location: schedule_of_book.php");
        exit(0);
    }
}
?>