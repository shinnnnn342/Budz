<?php
session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Budz Laundry Hub - Services & Price</title>

     <!-- Bootstrap CSS -->
     <link
     rel="stylesheet"
     href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
     crossorigin="anonymous"
   />

   <!-- CSS File and Fonts-->
   <<link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
    <link
     href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap"
     rel="stylesheet"
   />
   <link rel="stylesheet" href="serviceandpricing.css" />
   <link rel="stylesheet" href="index.css" />
   <link
      rel="Webpage icon"
      type="device-icon/png"
      href="Navigation Bar/LOGO.png"
    />
 </head>
<body>

  <!-- NavBar Section -->
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
          <ul class="navbar-nav text-center">
            <li class="nav-item">
              <a class="nav-link " href="index.php" style="color: #980799;">
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
              <a class="nav-link " href="contacts.php" style="color: #980799;">
                Contacts & MapView
              </a>
            </li>

            <?php if (isset($_SESSION['auth_user'])): ?>
        <li id="nav_acc" class="nav-item dropdown">
        <a  aria-hidden="true" class="nav-link text-dark dropdown" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="font-size: 12px; display:flex; justify-content:center; align-items: center; padding-top: 13px;">
        <i class="fa fa-user fa-fw" style="color: #980799;"></i><?= $_SESSION['auth_user'][
            'user_fname'
        ] ?> <?= $_SESSION['auth_user']['user_lname'] ?></a>
            
    <div class="dropdown-menu"> 
        <a class="dropdown-item" href="user/profile.php" style="color: #980799;">My Account</a>
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
      </div>
          </ul>
          
        </div>
      </nav>
    </div>
         <!-- Floating icon Section -->
        
         <nav class="side">
          <ul class="ulimage mb-0">
             <li class="hover_effect"><a href="https://www.facebook.com/budzlaundryhub/" target="facebook-profile" class="hoverA text-decoration-none"><img src="Navigation Bar/facebook.JPG" alt="" class="side-media"><span class="hoverp" style="color: #fff;">FACEBOOK</span></a></li>
             <li><a href="#" class="hoverA text-decoration-none"><img src="Navigation Bar/messenger.png" alt="" class="side-media"><span class="hoverp" style="color: #fff;">MESSENGER</span></a></li>
             <li><a href="#" class="hoverA text-decoration-none"><img src="Navigation Bar/gmail.JPG" alt="" class="side-media"><span class="hoverp" style="color: #fff;">TWITTER</span></a></li>
          </ul>
       </nav>

         <!-- Services introduction  -->

         <div class="container col-xxl-8" style="margin-top: 100px;" >
          <div class="row flex-lg-row-reverse align-items-center py-5">
            <div class="col-10 col-sm-8 col-lg-6 mt-5">
              <img
                src="Services & Pricing/gif_snp.gif"
                class="d-block mx-lg-auto img-fluid"
                alt="Bootstrap Themes"
                width="500"
                height="500"
                loading="lazy"
              />
            </div>
            <div class="col-lg-6">
              <h1 class="display-5 fw-bold lh-1 mb-3"> <span class="superwash_highlight">b<span class="laundromat_highlight">u</span>dz</span> <span class="laundromat_highlight">Laundry Hub</span></h1>
              <p class="lead" style="text-align:justify; color: #980799;">
                budz Laundry Hub provides effortless Reserving and scheduling that will help to be more productive and save your time.
              </p>
              <button class="btn" style="position: relative; left: 0;"><a href="schedule_of_book.php" class="" style="text-decoration: none; color: #fff; flex-direction: row-reverse;">
                RESERVE NOW!
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16" style="margin: 2px 2px 4px 15px;">
                  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                </svg>
              </a></button>
            </div>
          </div>
        </div>

        <!-- Services and Pricing Description -->
        <h2 class="pb-2 border-bottom text-center" style="text-transform:uppercase; font-weight: 700; color:#980799;"> Services </h2>

        <div id="accordion" style="display: flex; width: 100%; justify-content: center; align-items: center; flex-direction: column-reverse;">
          <div class="card mx-4">
            <div class="card-header" id="headingOne" style="background: #00c5ce;">
              <h5 class="SandB_title mb-0">
                <button class="btn_SandP_collapse" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="color:#980799;">
                  Self-Service Laundry
                </button>
              </h5>
            </div>
        
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="text-center mx-5 px-5 py-5" style="color: #980799;">
                Budz Laundry Hub offers self-service laundry services; where our value customers can just pop into the laundry shop, find a vacant washing machine, load their dirty laundry, and pay to use the machine by themselves. Budz Laundry Hub are equipped with the finest washing machines and dryers that are easy to use; this make it easy for anyone to wash or dry their own laundry and frees you up to enjoy more time to do more of what you love that saves time and money.
              </div>
            </div>
          </div>
          <div class="card mx-4">
            <div class="card-header" id="headingTwo" style="background: #00c5ce;">
              <h5 class="SandB_title mb-0">
                <button class="btn_SandP_collapse" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="color:#980799;">
                  Full-Service Laundry
                </button>
              </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="text-center mx-5 px-5 py-5" style="color:#980799;"> 
                Budz Laundry Hub offers full service so there is no need for you to do anything except drop off your laundry at the shop. Full Service offers clean, fold and pack your laundries.  We take the hassle out of getting your clothes back to you by washing, drying, folding that make it very helpful for working moms and busy professionals who value their time and effort at an affordable price.
              </div>
            </div>
          </div>

        </div>
<!-- Pricing Section -->
        <h2 class="pb-2 border-bottom text-center" style="text-transform:uppercase; font-weight: 700; color:#980799;">Pricing</h2>

        <div class="pricing-area">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-price">
                  <div class="deal-top">
                    <h3 style="font-weight: 700;">Self Service Laundry</h3>
                  </div>
                  <div class="deal-bottom">
                    <ul class="deal-item" style="color: #980799;">
                      <li  style="font-size: 23px; font-weight: 700; color: #980799;">Wash</li>
                      <li>Regular Wash(35 mins/max of 8kgs). <br>= 65pesos</li>
                      <li>Super Wash(45 mins/max of 8kgs). <br>= 85pesos</li>
                      <li><span style="font-size: 23px; font-weight: 700; color: #980799;">Dry</span></li>
                      <li> 40minutes <br> Ideal for comforters and thick fabric <br>= 60pesos</li>
                      <li>Ideal for regular and medium heavy 7kgs and below <br>= 45pesos</li>
                      <li>Add on Drying Time (10minutes).<br>= 15pesos</li>
                    </ul>
                    <div class="btn-area">
                      <a type="button" data-target="#register_modal" data-toggle="modal">Sign Up</a>       
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-price">
                  <div class="deal-top">
                    <h3 style="font-weight: 700;">Full Service Laundry <br>Wash, Dry, & Fold</h3>
                  </div>
                  <div class="deal-bottom">
                    <ul class="deal-item" style="color: #980799;">
                      <li class="margin_bottom">Regular Clothes (T-shirt, polo, shorts, dress, <br> pillow case, under garments, etc).<br> = 35pesos</li>
                      <li class="margin_bottom">Jeans, Towels (Blankets, jackets, sweaters, <br> bedsheets).<br> = 55pesos</li>
                      <li class="margin_bottom">Comforters (Curtains, seat covers).<br>= 75pesos</li>
                      <li class="border_bottom"></li>
                    </ul>
                    <div class="btn-area">
                      <a href="schedule_of_book.php">Reserve Now</a>       
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>       
        </div>
        
        <div class="footer-container border-top">
            <h3 class="social-med-h3" style="color: #980799;">Social Media Accounts:</h3>
            <ul class="links-ul">
              <li class="">
                <a href="https://www.facebook.com/budzlaundryhub/">
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
              <ul class="nav justify-content-center pb-3 mb-3" style="color: #980799;">
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
                  <a href="aboutus.php" class="nav-link px-2">About us</a>
                </li>
              </ul>
              <p class="text-center" style="color: #980799;">
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
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
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
<!-- signup form modal -->

<div class="modal fade" id="register_modal" tabindex="-1" 
    role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalTitle">Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">x</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group mb-3">
        <form action="registercode.php" method="POST" id="register_form">
                <label>First Name <a style="color: red;">*</a></label>
                <input type="text" name="fname" id="fname" placeholder="Enter First Name" class="form-control"  required>
            </div>
            <div class="form-group mb-3">
                <label>Last Name</label>
                <input type="text" name="lname" id="lname" placeholder="Enter Last Name" class="form-control" >
            </div>
            <div class="form-group mb-3">
                <label>Number</label>
                <input type="text" name="number" id="number" placeholder="Enter Number" class="form-control" >
            </div>
            <div class="form-group mb-3">
                <label>Email <a style="color: red;">*</a></label>
                <input type="text" name="email" id="email" placeholder="Enter Email Address" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label>Address <a style="color: red;">*</a></label>
                <input type="text" name="address" id="address" placeholder="Enter Address" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label>Password <a style="color: red;">*</a></label>
                <input type="password" name="password" id="password" placeholder="Enter Password" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label>Confirm Password <a style="color: red;">*</a></label>
                <input type="password" name="cpassword" id="cpassword" placeholder="Enter Confirm Password" class="form-control"required>
            </div>
            <div class="col-12">
                  <div class="form-group">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="invalidCheck2"
                        required
                      />
                      <label class="form-check-label" for="invalidCheck2">
                        Accept the Term & conditions
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group mb-3">
                <button type="submit" class="btn_register" name="btn_register">
                  Sign up
                </button>
                </div>
                <div class="form-group mb-3">
                    <label>Already have an Account?<a class="link" href="" data-target="#login_modal"  data-toggle="modal" class="close" data-dismiss="modal" aria-label="Close"> Login Here!</a></label>
                </div>
          </form>
      </div>
    </div>
  </div>
</div>

<!-- modal login -->

<div class="modal fade" id="login_modal" tabindex="-1" 
    role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group mb-3">
      
      <form action="logincode.php"method="POST">
            <div class="form-group mb-3">
                <label>Email</label>
                <input name="email" type="text" placeholder="Enter Email Address" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label>Password</label>
                <input name="password" type="password" placeholder="Enter Password" class="form-control">
            </div>
                <div class="form-group mb-3">
                    <button name="login_btn" type="submit" class="btn_login">Login Now</button>
                </div>
                <div class="form-group mb-3">
                    <label>Don't have an Account yet?<a a class="link" href="" data-target="#register_modal"  data-toggle="modal" class="close" data-dismiss="modal" aria-label="Close"> Register Now!</a></label>
                </div>
        </form>
    
      </div>
    </div>
  </div>
</div>
 </div>
