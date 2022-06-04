<?php 

    session_start();

include('includes/header.php');
include('authentication.php');
?>

<div class="container-fluid px-4">
        <h1 class="mt-4">Redeem Points</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Menu</li>
            <li class="breadcrumb-item active">Transaction</li>
            <li class="breadcrumb-item">Redeem Points</li>
</ol>

<!-- Transactions -->
<?php include('message.php'); ?>
<div class="row">
<div class="col-md-12">

    <div class="card">
        <div class="card-header">
            <h4>
                Redeem Points
            </h4>
        </div>
    <div class="card-body"> 
            <div class="row">
            <div class="col-md-12">
                <form method="POST">
                <label style="font-weight: bold;">Search User Id</label><br>
                    <input style="border-radius: .25rem; height: calc(1.5em + .75rem + 2px);
                                    padding: .375rem .75rem;
                                    font-size: 1rem;
                                    font-weight: 400;
                                    line-height: 1.5;
                                    color: #495057;
                                    border: 1px solid #ced4da;
                                    background-color: #fff;"
                     type="text" name="search" placeholder="Search..." >
                    <button class="btn btn-primary" type="submit" name="search_btn">Search</button>
                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Redeem</button>
                </form>
             <div class="my-4 text-center">
                    <table class="table table-bordered">
                        <tr>
                            <th>User ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Points</th>
                        </tr>

              <?php
              $n=10;
              function getRef($n) {
                  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                  $randomString = '';
                
                  for ($i = 0; $i < $n; $i++) {
                      $index = rand(0, strlen($characters) - 1);
                      $randomString .= $characters[$index];
                  }
                
                  return $randomString;
              }

        if(isset($_POST['search_btn']))
        {   
            $str = $_POST['search'];
            $sql = "SELECT * FROM users WHERE user_id = '$str'";
            $sql_run = mysqli_query($db, $sql);

            if(mysqli_num_rows($sql_run) > 0)
            {
                foreach($sql_run as $data)
                {
                   
                ?>
                    <tr>
                        <td style="text-align: center"><?= $data['user_id'] ?></td>
                        <td style="text-align: center"><?= $data['fname'] ?> <?= $data['lname'] ?></td>
                        <td style="text-align: center"><?= $data['email'] ?></td>
                        <td><?= $data['user_points'] ?></td>             
                    </tr>
                  
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Redeemables!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="text-align: left;">

      <form method="POST" action="code.php">

      <div class="form-group mb-2">
        <input type="radio" id="wash" name="wash_choice" value="20" required>
          <label for="wash">Reg Wash - 20 Points</label>
        </div>
        
        <div class="form-group mb-2">
        <input type="radio" id="wash" name="wash_choice" value="30" required>
          <label for="wash">Reg Wash + Dry - 30 Points</label><br>
          </div>

          <div class="form-group mb-2"> 
        <input type="radio" id="wash" name="wash_choice" value="70" required>
          <label for="wash">1 Laundry Bag - 70 Points</label><br>
          </div>

          <div class="form-group mb-2">
        <input type="radio" id="wash" name="wash_choice" value="80" required>
          <label for="wash">1 Load Full Service - 80 Points</label><br>
          </div>

      </div>
      <div class="modal-footer">
          <input name="redeem_user_points" type="hidden" value="<?= $data['user_points']; ?>">
      <input name="redeemed_code" type="hidden" value="<?php echo getRef($n); ?>">
          <input name="redeem_user_id" type="hidden" value="<?= $data['user_id']; ?>">
        <button type="submit" class="btn btn-primary" name="confirm_btn">Confirm</button>
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
