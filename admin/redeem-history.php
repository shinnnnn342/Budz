<?php 

session_start();

include('includes/header.php');
include('user-authentication.php');
?>

<div class="container-fluid px-4">
        <h1 class="mt-4">Redeem History</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Menu</li>
            <li class="breadcrumb-item">Redeem History</li>
        </ol>
        <div class="row">

        <div class="col-md-12">

            <?php include('message.php'); ?>

            <div class="card">
                <div class="card-header">
                    <h4>
                        History
                    </h4>
                        
                </div>
                <div class="card-body">
   
                <form method="POST" action="code.php">   
                    <table class="table table-bordered dataTable-table" >
                            <tr>
                                <th style="text-align: center;">Redeem Id</th>
                                <th style="text-align: center;">User Id</th>
                                <th style="text-align: center;">Code</th>
                                <th style="text-align: center;">Description</th>
                                <th style="text-align: center;">Status</th>
                                <th style="text-align: center;">Date</th>
                            </tr>     

                                <?php

                                $redeem = "SELECT * FROM redeemed";
                                $redeem_run = mysqli_query($db, $redeem);
                                

                                if(mysqli_num_rows($redeem_run) > 0)
                                {
                                    foreach($redeem_run as $row)
                                    {
                                        
                                ?>
                                        <tr>
                                            <td style="text-align: center"><?= $row['redeemed_id'] ?></td>
                                            <td style="text-align: center"><?= $row['r_user_id'] ?></td>
                                            <td style="text-align: center;"><?= $row['redeem_code'] ?></td>
                                         <td style="text-align: center;"><?php if($row['redeem_desc'] == '20') 
                                                        {
                                                            echo 'Reg Wash';
                                                        }
                                                        elseif($row['redeem_desc'] == '30')
                                                        {
                                                            echo 'Reg Wash + Dry';
                                                        }
                                                        elseif($row['redeem_desc'] == '70')
                                                        {
                                                            echo '1 Laundry Bag';
                                                        }
                                                        elseif($row['redeem_desc'] == '80')
                                                        {
                                                            echo '1 Load Full Service';
                                                        }
                                                        ?>
                                            </td>
                                             <td style="text-align: center;"><?php if($row['r_status'] == '0') 
                                                        {
                                                            echo 'Redeemable';
                                                        }
                                                        elseif($row['r_status'] == '1')
                                                        {
                                                            echo 'Redeemed';
                                                        }  
                                                        elseif($row['r_status'] == '2')
                                                        {
                                                            echo 'Expired';
                                                        }     
                                                        ?>
                                             </td>
                                            <td style="text-align: center;"><?= $row['redeemed_date'] ?></td>
            
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


