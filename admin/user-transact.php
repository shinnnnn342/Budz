<?php 

    session_start();

include('includes/header.php');
include('authentication.php');
?>

<div class="container-fluid px-4">
        <h1 class="mt-4">Transaction</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Menu</li>
            <li class="breadcrumb-item">Transaction</li>
</ol>

<!-- Transactions -->
<?php include('message.php'); ?>
<div class="row">
<div class="col-md-12">

    <div class="card">
        <div class="card-header">
            <h4>
                Transaction
            </h4>
        </div>
    <div class="card-body"> 
            <div class="row">
            <div class="col-md-12">
                <form method="POST">
                <label style="font-weight: bold;">Search Booking Id</label><br>
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
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#end_modal">End Transaction</button>
                </form>
             <div class="my-4 text-center">
                    <table class="table table-bordered">
                        <tr>
                            <th>Booking ID</th>
                            <th>User ID</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Book Date</th>
                        </tr>

              <?php
        if(isset($_POST['search_btn']))
        {   
            $str = $_POST['search'];
            $sql = "SELECT * FROM booking WHERE booking_id = '$str' AND b_status = '1'";
            $sql_run = mysqli_query($db, $sql);

            if(mysqli_num_rows($sql_run) > 0)
            {
                foreach($sql_run as $data)
                {
                    $book_user_id = $data['b_user_id'];
                ?>
                    <tr>
                        <td style="text-align: center"><?= $data['booking_id'] ?></td>
                        <td style="text-align: center"><?= $data['b_user_id'] ?></td>
                        <td><?= $data['b_fname'] ?> <?= $data['b_lname'] ?></td>
                        <td><?= $data['b_email'] ?></td>
                        <td><?= $data['book_date'] ?></td>                 
                    </tr>
                  
<!-- Modal -->
<div class="modal fade" id="end_modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Are you sure to end transacton?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="POST" action="code.php">
      <div class="modal-body">
        <label>Enter book id to confirm: </label>
        <input class="form-control"type="text" name="end_modal_input" placeholder="Enter Booking Id...">
        <input name="b_end_status" id="b_end_status"type="hidden" value="3"> 
        <input name="b_book_user_id" type="hidden" value="<?= $data['b_user_id'] ?>"> 
        
      </div>
  
      <div class="modal-footer">
        <button type="submit" name="end_modal_btn" class="btn btn-primary" data-bs-dismiss="modal">End Transaction</button>
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
