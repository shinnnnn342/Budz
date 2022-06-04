<?php 

    session_start();

include('includes/header.php');
include('authentication.php');
?>

<div class="container-fluid px-4">
        <h1 class="mt-4">Contacts Us</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Menu</li>
            <li class="breadcrumb-item">Contacts Us</li>
</ol>
<div class="row">

<div class="col-md-12">

    <?php include('message.php'); ?>

    <div class="card">
        <div class="card-header">
            <h4>
                User Contacts
            </h4>
                
        </div>
    <div class="card-body">

    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="word-break: break-all;">Contact Id</th>
                                <th>Email Address</th>
                                <th>Mobile Number</th>
                                <th>Message</th>
                                <th>Submitted Date</th>
                            </tr>
                            <?php
                                $query = "SELECT * FROM contact_us";
                                $query_run = mysqli_query($db, $query);

                                if(mysqli_num_rows($query_run) > 0)
                                {
                                    foreach($query_run as $row)
                                    {
                                        ?>
                                        <tr>
                                            <td><?= $row['contact_id']; ?></td>
                                            <td><?= $row['c_email']; ?></td>
                                            <td><?= $row['c_number']; ?></td>
                                            <td style="word-break:break-all"><?= $row['c_message']; ?></td>
                                            <td><?= $row['c_submitted_date']; ?></td>
   
                                        </tr>
                                        <?php
                                    }
                                }
                                else
                                {
                                ?>
                                    <tr>
                                        <td colspan="6">No Record Found</td>
                                    </tr>
                                <?php
                                }
                            ?>
                        </thead>
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

