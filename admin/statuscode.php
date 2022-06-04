<?php 

session_start();
include('authentication.php');

?>
<?php
if(isset($_POST['approve_btn']))
                    {
                        $booking_id = $_POST['booking_id'];
                        $b_approve_status = $_POST['b_approve_status'];

                        $booking = "UPDATE booking SET b_status='$b_approve_status'
                             WHERE booking_id ='$booking_id' ";
                        $booking_run = mysqli_query($db, $booking);
                    
                        if($booking_run)
                        {
                            $_SESSION['message'] = "Booking Approved!";
                            header("Location: view-booking.php");
                            exit(0);
                        }
                  
                }
                if(isset($_POST['decline_btn']))
                {
                    $booking_id = $_POST['booking_id'];
                    $b_decline_status = $_POST['b_decline_status'];

                    $booking = "UPDATE booking SET b_status='$b_decline_status'
                         WHERE booking_id ='$booking_id' ";
                    $booking_run = mysqli_query($db, $booking);
                
                    if($booking_run)
                    {
                        $_SESSION['message'] = "Booking Declined!";
                        header("Location: view-booking.php");
                        exit(0);
                    }
              
            }


?>