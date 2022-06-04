<?php 

session_start();

include('includes/header.php');
include('authentication.php');
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
                        User Booking
                    </h4>
          
                        
                </div>
                <div class="card-body">

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
                                <th style="text-align: center;">SubmittedDate</th>
                                <th style="text-align: center;">Status</a></th>
                                <th style="text-align: center;">Approve</th>
                                <th style="text-align: center;">Decline</th>                                                       
                            </tr>     
   
                                <?php
                                $status = "SELECT * FROM booking WHERE b_status = 0" ;
                                $status_run = mysqli_query($db, $status);

                                if(mysqli_num_rows($status_run) > 0)
                                {
                                    foreach($status_run as $row )
                                    {
                                        $b_status = $row['b_status'];
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
                                            <td><?php if($row['b_status'] == '0') 
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
                                                        
                                                        </td>
                                            <td>                              
                                                <form method="POST" action="statuscode.php"> 
                                                    <input name="booking_id" id="booking_id" type="hidden" value="<?php echo $row['booking_id'];?>"/> 
                                                    <input name="b_approve_status" id="b_approve_status" type="hidden" value="1"> 
                                                    <button 
                                                    type="submit" name="approve_btn" 
                                                    style=" width: 50px;
                                                            height: 50px;
                                                            padding: 0px;
                                                            margin: 1px 20px;"
                                                    class="btn btn-primary">
                                                    <i class="fa fa-check fa-fw"></i>
                                                </button> 
                                                <form>
                                            </td>
                                            <td>
                                                    <button type="button" name="decline_btn" 
                                                    style=" width: 50px;
                                                            height: 50px;
                                                            padding: 0px;
                                                            margin: 1px 20px;"
                                                    class="btn btn-secondary" 
                                                    data-bs-toggle="modal" data-bs-target="#decline_modal">
                                                    <i class="fa fa-close fa-fw"></i>
                                                </button> 
                                                </form>
                                            </td>
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
<!-- Modal -->
<div class="modal fade" id="decline_modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Decline Reason:</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="POST" action="statuscode.php">
      <div class="modal-body">
      <div class="col-md-6 mb-3">
            <select name="role_as" required class="form-control">
                <option value="">--Select Reason--</option>
                <option value="1">Booking Full</option>
                <option value="0">Unavailable</option>
            </select>
        </div>
        <textarea class="form-control"type="text" name="end_modal_input" placeholder="Message..."></textarea>
        
      </div>
  
      <div class="modal-footer">
        <input name="booking_id" id="booking_id" type="hidden" value="<?php echo $row['booking_id'];?>"/> 
        <input name="b_decline_status" id="b_decline_status"type="hidden" value="2"> 
        <button type="submit" name="decline_btn" class="btn btn-primary" data-bs-dismiss="modal">Decline</button>
      </div>
      </form>
    </div>
  </div>
</div>              

