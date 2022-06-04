<?php 

    session_start();

include('includes/header.php');
include('authentication.php');
?>

<div class="container-fluid px-4">
        <h1 class="mt-4">Claim Code</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Menu</li>
            <li class="breadcrumb-item active">Transaction</li>
            <li class="breadcrumb-item">Claim</li>
</ol>

<!-- redeem -->
<?php include('message.php'); ?>
<div class="row">
<div class="col-md-12">

    <div class="card">
        <div class="card-header">
            <h4>
                Claim Code
            </h4>
        </div>
    <div class="card-body"> 
            <div class="row">
            <div class="col-md-12">
                <form method="POST">
                <label style="font-weight: bold;">Input Code</label><br>
                    <input style="border-radius: .25rem; height: calc(1.5em + .75rem + 2px);
                                    padding: .375rem .75rem;
                                    font-size: 1rem;
                                    font-weight: 400;
                                    line-height: 1.5;
                                    color: #495057;
                                    border: 1px solid #ced4da;
                                    background-color: #fff;"
                     type="text" name="r_code" placeholder="..." >
                    <button class="btn btn-primary" type="submit" name="search_redeem_btn">Search</button>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#redeen_modal">Claim</button>
                </form>
             <div class="my-4 text-center">
                    <table class="table table-bordered">
                        <tr>
                            <th>Redeem ID</th>
                            <th>Code</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Redeem Date</th>
                        </tr>

              <?php
        if(isset($_POST['search_redeem_btn']))
        {   
            $str = $_POST['r_code'];
            $sql = "SELECT * FROM redeemed WHERE redeem_code = '$str'";
            $sql_run = mysqli_query($db, $sql);

            if(mysqli_num_rows($sql_run) > 0)
            {
                foreach($sql_run as $data)
                {
                    $data['r_user_id'];
                ?>
                    <tr>
                        <td style="text-align: center"><?= $data['redeemed_id'] ?></td>
                        <td><?= $data['redeem_code'] ?></td>
                        <td><?php if($data['redeem_desc'] == '20') 
                                                        {
                                                            echo 'Reg Wash';
                                                        }
                                                        elseif($data['redeem_desc'] == '30')
                                                        {
                                                            echo 'Reg Wash + Dry';
                                                        }
                                                        elseif($data['redeem_desc'] == '70')
                                                        {
                                                            echo '1 Laundry Bag';
                                                        }
                                                        elseif($data['redeem_desc'] == '80')
                                                        {
                                                            echo '1 Load Full Service';
                                                        }
                                                        ?>
                                            </td>
                        <td><?php if($data['r_status'] == '0') 
                                {
                                    echo 'Redeemable';
                                }
                                elseif($data['r_status'] == '1')
                                {
                                    echo 'Redeemed';
                                }  
                                elseif($data['r_status'] == '2')
                                {
                                    echo 'Expired';
                                }     
                                ?>
                        </td>
                        <td><?= $data['redeemed_date'] ?></td>            
                    </tr>
                  
 <div class="modal fade" id="redeen_modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Confirmation!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="POST" action="code.php">
        <input name="redeem_code" type="hidden" value="<?= $data['redeem_code'] ?>">
        <input name="redeem_value" id="redeem_value"type="hidden" value="<?= $data['redeem_desc'] ?>">  
        <input name="redeem_id" type="hidden" value="<?= $data['redeemed_id'] ?>"> 
        <input name="redeem_status" type="hidden" value="1"> 
      <div class="modal-footer">
        <label style="margin-right: 75px;">Are you sure to redeem?</label>
      <button type="submit" name="claim_btn" class="btn btn-primary" data-bs-dismiss="modal">Confirm</button>
      </div>
      </form>
    </div>
  </div>
</div>                              
                <?php
                }
              
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
</div>
</div>

             
<?php 
include('includes/footer.php');
include('includes/scripts.php');

?>
