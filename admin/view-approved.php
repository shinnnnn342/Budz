<?php 

session_start();

include('includes/header.php');
include('user-authentication.php');
?>

<div class="container-fluid px-4">
        <h1 class="mt-4">Booking</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Menu</li>
            <li class="breadcrumb-item">Booking</li>
        </ol>
        <div class="row">

        <div class="col-md-12">

            <?php include('message.php'); ?>

            <div class="card">
                <div class="card-header">
                    <h4>
                        Approved Booking
                    </h4>
                        
                </div>
                <div class="card-body">
   
                <form method="POST" action="code.php">   
                    <table class="table table-bordered dataTable-table" >
                            <tr>
                                <th style="text-align: center;">Booking Id</th>
                                <th style="text-align: center;">User Id</th>
                                <th style="text-align: center;">BookingDate</th>
                                <th style="text-align: center;">First Name</th>
                                <th style="text-align: center;">Last Name</th>
                                <th style="text-align: center;">Mobile Number</th>
                                <th style="text-align: center;">Email Address</th>
                                <th style="text-align: center;">Message</th>
                                <th style="text-align: center;">Status</th>
                                <th style="text-align: center;">SubmittedDate</th>
                                


                            </tr>     

                                <?php

                                $booking = "SELECT * FROM booking WHERE b_status = '1'";
                                $booking_run = mysqli_query($db, $booking);
                                

                                if(mysqli_num_rows($booking_run) > 0)
                                {
                                    foreach($booking_run as $row)
                                    {
                                        
                                ?>
                                        <tr>
                                            <td style="text-align: center"><?= $row['booking_id'] ?></td>
                                            <td style="text-align: center"><?= $row['b_user_id'] ?></td>
                                            <td><?= $row['book_date'] ?></td>
                                            <td><?= $row['b_fname'] ?></td>
                                            <td><?= $row['b_lname'] ?></td>
                                            <td><?= $row['b_number'] ?></td>
                                            <td><?= $row['b_email'] ?></td>
                                            <td style="word-break: break-all;"><?= $row['b_message'] ?></td>
                                            <td><?= $row['b_submitted_date'] ?></td>
                                            <td style="text-align: center;"><?php if($row['b_status'] == '0') 
                                                        {
                                                            echo 'Pending';
                                                        }
                                                        elseif($row['b_status'] == '1')
                                                        {
                                                            echo 'Approved';
                                                        }
                                                        elseif($row['b_status'] == '2')
                                                        {
                                                            echo 'Declined';
                                                        }
                                                        elseif($row['b_status'] == '3')
                                                        {
                                                            echo 'End Transaction';
                                                        }
                                                        ?>
                                        </tr>
                                        
                                <?php
                        }

                        }
                        else
                        {
                            ?> 
                                <tr>
                                    <td colspan="5"> No Record Found </td>
                                </tr>
                                <?php
                        }
                            ?>

                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

<?php 
include('includes/footer.php');
include('includes/scripts.php');


?>


