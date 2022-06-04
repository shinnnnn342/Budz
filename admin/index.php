<?php 

session_start();

include('includes/header.php');
include('authentication.php');

?>

<div class="container-fluid px-4">
        <h1 class="mt-4">Admin Panel</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Menu</li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <?php include('message.php'); ?>

        <!-- total user -->
            <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <div class="card-body ">
                                         Users
                                        
                                        <?php
                                        
                                            $dash_user_query = "SELECT * FROM users";
                                            $dash_user_query_run = mysqli_query($db, $dash_user_query);

                                            if($user_total = mysqli_num_rows($dash_user_query_run))
                                            {
                                                echo '<h4 class="mb-0"><i class="fa fa-user fa-fw"></i> ' .$user_total.' </h4>';
                                            }
                                            else
                                            {
                                                echo '<h4 class="mb-0"><i class="fa fa-user fa-fw"></i> No data </h4>';
                                            }
                                            ?>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="view-register.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

          <!-- total feedback -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <div class="card-body">
                                         Contacts Us
                                        <?php
                                            $dash_user_query = "SELECT * FROM contact_us";
                                            $dash_user_query_run = mysqli_query($db, $dash_user_query);

                                            if($total_feedback = mysqli_num_rows($dash_user_query_run))
                                            {
                                                echo '<h4 class="mb-0"><i class="fa fa-message fa-fw"></i> ' .$total_feedback.' </h4>';
                                            }
                                            else
                                            {
                                                echo '<h4 class="mb-0"><i class="fa fa-message fa-fw"></i> No data </h4>';
                                            }
                                            ?>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="user-contacts.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
            <!-- total user -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <div class="card-body ">
                                         Booked
                                        
                                        <?php
                                        
                                            $dash_user_query = "SELECT * FROM booking";
                                            $dash_user_query_run = mysqli_query($db, $dash_user_query);

                                            if($total_booking = mysqli_num_rows($dash_user_query_run))
                                            {
                                                echo '<h4 class="mb-0"><i class="fa fa-book fa-fw"></i> ' .$total_booking.' </h4>';
                                            }
                                            else
                                            {
                                                echo '<h4 class="mb-0"><i class="fa fa-book fa-fw"></i> No data </h4>';
                                            }
                                            ?>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="view-booking.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                               <!-- total redeem -->

                               <div class="col-xl-3 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <div class="card-body ">
                                        Redeems
                                        
                                        <?php
                                        
                                            $dash_user_query = "SELECT * FROM redeemed";
                                            $dash_user_query_run = mysqli_query($db, $dash_user_query);

                                            if($total_booking = mysqli_num_rows($dash_user_query_run))
                                            {
                                                echo '<h4 class="mb-0"><i class="fa fa-barcode fa-fw"></i> ' .$total_booking.' </h4>';
                                            }
                                            else
                                            {
                                                echo '<h4 class="mb-0"><i class="fa fa-book fa-fw"></i> No data </h4>';
                                            }
                                            ?>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="redeem-history.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>





                        </div>
                </div>
        </div>
</div>

<?php 
include('includes/footer.php');
include('includes/scripts.php');


?>