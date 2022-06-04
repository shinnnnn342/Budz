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
              <a class="nav-link" href="index.php" style="color: #980799;">
                Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="serviceandpricing.php" style="color: #980799;">
                Services & Prices
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contacts.php" style="color: #980799;">
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
        <a class="dropdown-item" href="#" style="color: #980799;">My profile</a>
          <form action="logout.php" method="POST">
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

    <!-- edit -->

    <div class="container">
        <div class="row position-relative">
          <div class="col-sm pt-5 my-3 position-relative">
            <br />
            <br />
        <div class="col-md-12"  >
            <div class="card"  >
                <div class="card-header" style="background: white;">
                    <h4  style="color: #980799; text-align: center;">Edit Password
                    <a href="profile.php" class="btn btn-danger float-end"> 
                            Back
                        </a>
                  </h4>   
                </div>
                <div class="card-body">
            <?php
                if(isset($_GET['id']))
                        {
                            $user_id = $_GET['id'];
                            $sql_user = "SELECT * FROM users WHERE user_id='$user_id' ";
                            $sql_user_run = mysqli_query($db, $sql_user);

                            if(mysqli_num_rows($sql_user_run) > 0)
                            {
                                foreach($sql_user_run as $user)
                                {
                                ?>
                                 <form action="code.php" method="POST">
                                <input type="hidden" name="user_id" value="<?= $user['user_id'];?>">
                                <div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Current Password<a style="color:red;">*</a></label>
                                        <input type="password" name="current_pass" placeholder="Current Password" class="form-control" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="">New Password<a style="color:red;">*</a></label>
                                        <input type="password" name="new_pass" placeholder="New Password" class="form-control" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="">Confirm Password<a style="color:red;">*</a></label>
                                        <input type="password" name="confirm_pass" placeholder="Confirm Password" class="form-control" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                            
                                    <button type="submit" name="update_password" class="btn btn-primary">Update Password</button>
                                        <br>
                                    </div>

                                </div>
                            </form>
                        <?php
                                }
                            }
                    
                        }
                        ?>
         
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


   
 <!-- Footer -->

 <div id="cont_footer" class="footer-container border-top" style="color: #980799;">
      <h3 class="social-med-h3">Social Media Accounts:</h3>
      <ul class="links-ul" style="color: #980799;">
        <li class="">
          <a href="">
            <img src="Footer/facebook.JPG" alt="" class="image-footer" />
          </a>
        </li>
        <li class="">
          <a href="">
            <img src="Footer/gmail.JPG" alt="" class="image-footer" />
          </a>
        </li>
        <li class="">
          <a href="#">
            <img src="Footer/instagram.JPG" alt="" class="image-footer" />
          </a>
        </li>
        <li class="">
          <a href="">
            <img src="Footer/twitter.png" alt="" class="image-footer" />
          </a>
        </li>
      </ul>
      <footer class="py-2 my-4">
        <ul class="nav justify-content-center pb-3 mb-3">
          <li class="nav-item">
            <a href="index.php" class="nav-link px-2">Home</a>
          </li>
          <li class="nav-item">
            <a href="serviceandpricing.php" class="nav-link px-2">Services & Prices</a>
          </li>
          <li class="nav-item">
            <a href="contacts.php" class="nav-link px-2">Contact</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link px-2">FAQs</a>
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
