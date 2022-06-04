<?php

session_start(); 
include('../admin/config/dbcon.php');
include ('access.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />

    <!-- CSS File and Fonts-->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
    <link
     href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap"
     rel="stylesheet"
   />
    <link rel="stylesheet" href="profile.css" />
    <link rel="Webpage icon" type="device-icon/png" href="Navigation Bar/LOGO.png" />
  </head>
  <body>
    <!-- Navigation Bar Section -->
    <div class="fixed-top">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="index.php">
          <img class="logo" src="Navigation Bar/LOGO.png" alt="" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav text-center" style="color: #980799;">
            <li class="nav-item">
              <a class="nav-link" href="../index.php" style="color: #980799;">
                Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../serviceandpricing.php" style="color: #980799;">
                Services & Prices
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../contacts.php" style="color: #980799;">
                Contacts & MapView
              </a>
            </li>

            <?php if (isset($_SESSION['auth_user'])): ?>
        <li class="nav-item dropdown">
        <a  aria-hidden="true" class=" nav-link text-dark dropdown" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="font-size: 12px; display:flex; justify-content:center; align-items: center; padding-top: 13px;">
        <i class="fa fa-user fa-fw" style="color: #980799;"></i><?= $_SESSION['auth_user'][
            'user_fname'
        ] ?> <?= $_SESSION['auth_user']['user_lname'] ?></a>
            
    <div class="dropdown-menu"> 
        <a class="dropdown-item" href="#" style="color: #980799;">My Account</a>
          <form action="../logout.php" method="POST">
              <button name="logout_btn" type="submit" class="dropdown-item" style="color: #980799;">Logout</button>
           </form>
        </li>
          <?php else: ?>

         <button data-toggle="modal" data-target="#register_modal" type="button" class="btn .sign"><a style="text-decoration: none; color: #fff;">
            Sign up<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16" style="margin: 0px 0px 1.5px 5px;">
              <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
              <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
            </svg>
          </a></button>
        <?php endif; ?>
          </ul>
          
        </div>
      </nav>
      <?php include '../message.php'; ?>
    </div>

          <?php
          $id = $_SESSION['user_id'];
          $query = "SELECT * FROM users WHERE user_id = '$id' ";
          $query_run = mysqli_query($db, $query);

          if(mysqli_num_rows($query_run) > 0)
          {
              foreach($query_run as $row)
              {
                  ?>
    <!-- Profile -->
  
    
    <div class="container">
        <div class="row position-relative">
          <div class="col-sm pt-5 my-3 position-relative">
            <br />
            <br />
           
              <h2 class="title border-bottom text-center pb-2" style="color: #980799; font-weight: 700; text-transform:uppercase;">
              Profile</h2>
    
          <div class="containter" style="color: #980799;">
   
            <div class="row">
            <div class="col-md-6">

                <div class="card mt-5">         
                <div class="card-body">
                <form action=""method="POST">
                <div class="form-group mb-1">
                        <label style="font-weight: bold;">Current Points:</label>
                        <?= $row['user_points']; ?> Pts
                    </div>
                    <div class="form-group mb-1">
                        <label style="font-weight: bold;">First Name:</label>
                        <?= $row['fname']; ?>
                    </div>
                    <div class="form-group mb-1">
                        <label style="font-weight: bold;">Last Name:</label>
                        <?= $row['lname']; ?>
                    </div>
                    <div class="form-group mb-1">
                        <label style="font-weight: bold;">Number:</label>
                        <?= $row['number']; ?>
                    </div>
                    <div class="form-group mb-1">
                        <label style="font-weight: bold;">Email:</label>
                        <?= $row['email']; ?>
                    </div>
                    <div class="form-group mb-1">
                        <label style="word-break: break-all; font-weight: bold;">Address:</label>
                        <?= $row['address']; ?>
                      
                    </div>             
                    <div class="form-group mb-1">
                        <label style="font-weight: bold;">Date Joined:</label>
                       <?= $row['created_at']; ?>
                    </div>
                       </form>
                    </div>
                </div>
            </div>

            <!-- options -->
            
            <div class="col-md-6 text-center mt-2">
              <h4 style="margin-bottom: 40px;"></h1>
              <div class="card">        
                <div class="card-body">

                <div class="form-group mb-1">
                  <a href="" type="button"style="color:grey; font-weight:bold;" data-toggle="modal" data-target="#redeen_modal">Redeem Points &nbsp;</a>
                </div>

                <div class="form-group mb-1">
                  <a href="edit-profile.php?id=<?= $row['user_id']; ?>" style="color:grey; font-weight:bold;">Edit Profile  &nbsp;</a>
                </div>

                  <div class="form-group mb-1">
                  <a href="edit-password.php?id=<?= $row['user_id']; ?>" style="color:grey; font-weight:bold;">Edit Password &nbsp;</a>
                </div>

                </div>
            </div>
              </div>
<?php
              }
            }
            ?>
                            <!-- data Table -->
                            
           <div class="card col-md-12 my-4 text-center">
              <h5 style="margin-bottom: 10px; color:black; margin:15px;">Recent Booking</h5>     
                <table class="table table-bordered dataTable-table" >
                            <tr>
                                <th style="text-align: center;">Booking Id</th>
                                <th style="text-align: center;">BookingDate</th>
                                <th style="text-align: center;">Status</th>
                                                      
                            </tr>     

                                <?php
                                 $id = $_SESSION['user_id'];
                                $find = "SELECT * FROM booking WHERE b_user_id = $id";
                                $find_run = mysqli_query($db, $find);

                                if(mysqli_num_rows($find_run) > 0)
                                {
                                    foreach($find_run as $row)
                                    {
                                ?>
                                        <tr>
                                            <td style="text-align: center"><?= $row['booking_id'] ?></td>
                                            <td><?= $row['book_date'] ?></td>
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

                                               
           <div class="card col-md-12 my-4 text-center">
              <h5 style="margin-bottom: 10px; color:black; margin:15px;">Redeem History</h5>     
                <table class="table table-bordered dataTable-table" >
                            <tr>  
                                <th style="text-align: center;">Code</th>
                                <th style="text-align: center;">Description</th>
                                <th style="text-align: center;">Status</th>
                                <th style="text-align: center;">Date</th>
                                                      
                            </tr>     

                                <?php
                                $id = $_SESSION['user_id'];
                                $find = "SELECT * FROM redeemed WHERE r_user_id = $id LIMIT 5";
                                $find_run = mysqli_query($db, $find);

                                if(mysqli_num_rows($find_run) > 0)
                                {
                                    foreach($find_run as $row)
                                    {
                                ?>
                                        <tr>
                                            <td><?= $row['redeem_code'] ?></td>
                                            <td><?php if($row['redeem_desc'] == '20') 
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
                                             <td><?php if($row['r_status'] == '0') 
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
                                            <td><?= $row['redeemed_date']; ?></td>
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


   
 <!-- Footer -->

 <div id="cont_footer" class="footer-container border-top" style="color: #980799;">
      <h3 class="social-med-h3">Social Media Accounts:</h3>
      <ul class="links-ul" style="color: #980799;">
        <li class="">
          <a href="https://www.facebook.com/budzlaundryhub/">
            <img src="../Footer/facebook.JPG" alt="" class="image-footer" />
          </a>
        </li>
        <li class="">
          <a href="">
            <img src="../Footer/gmail.JPG" alt="" class="image-footer" />
          </a>
        </li>
        <li class="">
          <a href="#">
            <img src="../Footer/instagram.JPG" alt="" class="image-footer" />
          </a>
        </li>
        <li class="">
          <a href="">
            <img src="../Footer/twitter.png" alt="" class="image-footer" />
          </a>
        </li>
      </ul>
      <footer class="py-2 my-4">
        <ul class="nav justify-content-center pb-3 mb-3">
          <li class="nav-item">
            <a href="../index.php" class="nav-link px-2">Home</a>
          </li>
          <li class="nav-item">
            <a href="../serviceandpricing.php" class="nav-link px-2">Services & Prices</a>
          </li>
          <li class="nav-item">
            <a href="../contacts.php" class="nav-link px-2">Contact</a>
          </li>
          <li class="nav-item">
            <a href="aboutus.php" class="nav-link px-2">About</a>
          </li>
        </ul>
        <p class="text-center">
          &copy; Copyright © 2022 PowerWash Laundromat, Inc. All Rights Reserved
        </p>
      </footer>
    </div>
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.Fjs"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

<!-- Redeem -->

                  
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
                                $id = $_SESSION['user_id'];
                                $sql = "SELECT * FROM users WHERE user_id = $id";
                                $sql_run = mysqli_query($db, $sql);

                                

                                if(mysqli_num_rows($sql_run) > 0)
                                {
                                    foreach($sql_run as $data)
                                    {
                                ?>

<div class="modal fade" id="redeen_modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Redeem!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">x</span>
        </button>
      </div>
      <form method="POST" action="code.php">
      <div class="modal-body" style="margin-bottom: 35px;">
        <label>Reedemables!</label>
        <input name="current_points" type="hidden" value="<?= $data['user_points'] ?>"> <br>
          
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
        
        <input name="redeem_code" type="hidden" value="<?php echo getRef($n); ?>">
        <input name="r_user_id" type="hidden" value="<?= $data['user_id'] ?>">   
        <button style="margin: -3px; margin-right: -50px;" type="submit" name="redeem_btn" class="btn btn-primary" data-bs-dismiss="modal">Redeem</button>
        
      </div>
   
      </form>
    </div>
  </div>
</div>   
    
      </div>
    </div>
  </div>
</div>
 </div>
 <?php
                                    }
                                  }
                                  ?>