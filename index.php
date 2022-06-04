<?php

session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    <link rel="stylesheet" href="index.css" />
    <link
      rel="Webpage icon"
      type="device-icon/png"
      href="Navigation Bar/LOGO.png"
    />
    <title>Budz Laundy Hub -  Home</title>
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
        <li class="nav-item dropdown">
        <a  aria-hidden="true" class="nav-link text-dark dropdown" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="color: #980799; font-size: 12px; display:flex; justify-content:center; align-items: center; padding-top: 13px;">
        <i class="fa fa-user fa-fw" style="color: #980799;"></i><?= $_SESSION['auth_user']['user_fname'] ?> <?= $_SESSION['auth_user']['user_lname'] ?></a>
            
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
          </nav>
        </div>

    <!-- Floating icon Section -->
    <nav class="side">
      <ul class="ulimage mb-0">
         <li class="hover_effect"><a href="https://www.facebook.com/budzlaundryhub/" target="facebook-profile" class="hoverA text-decoration-none"><img src="Navigation Bar/facebook.JPG" alt="" class="side-media"><span class="hoverp" style="color:#fff;">FACEBOOK</span></a></li>
         <li><a href="https://www.facebook.com/messages/t/2024978074490873" class="hoverA text-decoration-none"><img src="Navigation Bar/messenger.png" alt="" class="side-media"><span class="hoverp" style="color: #fff;">MESSENGER</span></a></li>
         <li><a href="#" class="hoverA text-decoration-none"><img src="Navigation Bar/gmail.JPG" alt="" class="side-media"><span class="hoverp" style="color: #fff;">TWITTER</span></a></li>
      </ul>
   </nav>
    <!-- Homepage Section -->

    <br />
      <br />
      <br />
      <?php include 'message.php'; ?>
    
  

      <div class="container">
        <div class="row position-relative">
          <div class="col-sm pt-5 my-3 position-relative">
            <br />
            <br />

            <h2 class="pt-md-5">
              <span style="color: #34dcd4; font-size: 50px; font-weight: 600;">b<span style="color:#980799;">u</span>dz</span>

              <span style="color: #980799; font-size: 50px; font-weight: 600;">Laundry Hub</span>
            </h2>
            <p class="lead" style="color: #980799;">
              A dependable laundromat. We will take care of your laundry so
              that you Don't have to waste time doing it.
            </p>
            
            <button class="btn mt-3" style="position: relative; left: 0;"><a href="schedule_of_book.php" class="btn_sched" style="text-decoration: none; color: #fff;">
              RESERVE NOW!
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16" style="margin: 2px 2px 4px 15px;">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
              </svg>
            </a></button>
          </div>
          <div class="col-sm justify-content-center">
            <img src="Home-page/pic1.png" alt="" class="img-fluid pb-5" />
          </div>
        </div>
      </div>
    </div>

    <!-- Quality and Benefits Section -->
     
   
        <h2 class="container mb-5 border-bottom text-center" style="text-transform:uppercase; font-weight: 700; color:#980799;">Membership Deals</h2>
        <div class="container">
          <div class="row">
            <div class="col-sm">
              <p class="lead text-center" style="color: #980799;">
                Budz Laundry Hub membership gives you access to an exclusive  offers and reward in the form of loyalty points that you can exchange for our services.  Loyal members can get a chance to receive lot of promos, deals and discount. Using just one of these offers can save you more than the cost of your laundry expenses.
              </p>

            </div>
          </div>
          <div class="row d-flex justify-content-center">
            <div class="col-xs d-flex justify-content-center align-items-center">
                <li class="list-unstyled mx-5">
                  <img class="img_deals" src="Home-page/discounts.png" alt="">
                </li>
            </div>
            <div class="col-xs d-flex justify-content-center align-items-center">
              <li class="list-unstyled mx-5">
                <img class="img_deals" src="Home-page/promos.png" alt="">
              </li>
            </div>
             <div class="col-xs d-flex justify-content-center align-items-center">
               <li class="list-unstyled mx-5">
                 <img class="img_deals" src="Home-page/coins.png" alt="">
              </li>
            </div>  
          </div>
       
        </div>

    <!-- How it Works Section -->

    <h2 class="container pt-5 border-bottom text-center" style="text-transform:uppercase; font-weight: 700; color:#980799;">How it Works</h2>

    <div class="container col-xxl-8 px-4 pt-5">
      <div class="row flex-lg-row-reverse align-items-center d-flex justify-content-center g-5 py-3">
        <div class="col-10 col-sm-8 col-lg-6" >
          <img
            src="Home-page/register.png"
            class="d-block mx-lg-auto img-fluid"
            alt="Bootstrap Themes"
            width="400"
            height="300"
            loading="lazy"
          />
        </div>
        <div class="col-lg-6" style="color: #980799;">
          <h1 class="fw-bold lh-1 text-center">
            Register
          </h1>
          <p class="lead text-center" id="hiw-paragraph">
              Create an Account to be a Member 
          </p>
        </div>
      </div>
    </div>
    <div class="container col-xxl-8 px-4">
      <div class="row align-items-center d-flex justify-content-center g-5">
        <div class="col-10 col-sm-8 col-lg-6" style="display: flex; justify-content: center;">
          <img
            src="Home-page/book.png"
            class="d-block img-fluid"
            alt="Bootstrap Themes"
            width="400"
            height="400"
            loading="lazy"
          />
        </div>
        <div class="col-lg-6" style="color: #980799;">
          <h1 class="fw-bold lh-1 mb-3 text-center">
              Reserve
          </h1>
          <p class="lead text-center" id="hiw-paragraph">
              Schedule preffered date and time to reserve a slot.
          </p>
        </div>
      </div>
    </div>
    <div class="container col-xxl-8 px-4 py-2">
      <div class="row flex-lg-row-reverse align-items-center d-flex justify-content-center g-5 py-3">
        <div class="col-10 col-sm-8 col-lg-6" style="display: flex; justify-content: center;">
          <img
            src="Home-page/hiw-image1.png"
            class="mx-lg-auto img-fluid d-flex justify-content-center"
            alt="Bootstrap Themes"
            width="400"
            height="400"
            loading="lazy"
          />
        </div>
        <div class="col-lg-6" style="color: #980799;">
          <h1 class="fw-bold text-center">
              Notification
          </h1>
          <p class="lead text-center" id="hiw-paragraph">
              Check notification for more details and to be updated about your booking status.
          </p>
        </div>
      </div>
    </div>
    <div class="container col-xxl-8 px-4">
      <div class="row align-items-center d-flex justify-content-center g-5">
        <div class="col-10 col-sm-8 col-lg-6" style="display: flex; justify-content: center;">
          <img
            src="Home-page/points.png"
            class="d-block img-fluid"
            alt="Bootstrap Themes"
            width="300"
            height="300"
            loading="lazy"
          />
        </div>
        <div class="col-lg-6" style="color: #980799;">
          <h1 class="fw-bold lh-1 mb-3 text-center">
            Points
          </h1>
          <p class="lead text-center" id="hiw-paragraph">
            End booking transaction to claim exclusive points and you're done.
          </p>
        </div>
      </div>
    </div>


    <!-- Testimonials Section -->

    <div id="testimonials" class="testimonials-cont">
      <h2 class="pb-2-testimonials border-bottom text-center" style="text-transform:uppercase; font-weight: 700; color:#980799;">Testimonials</h2>
      <div
        class="t-container d-flex align-items-center justify-content-center position-relative flex-wrap"
      >
        <div class="card d-flex position-relative flex-column">
          <div class="imgContainer"><img src="Home-page/aila.png" /></div>
          <div class="content" style="color: #980799;">
            <h2>Aila Danielle Sandag</h2>
            <p>
              "The pick-ups and drop-offs are all done at the same time. There's
              no excuse not to put the clothes away when they've been returned
              fresh and clean. Before Budz Laundry Hub, I had no idea that laundry was
              causing me stress."
              <img src="Home-page/star-ratings.PNG" alt="" class="first_ratings" style="top: 30px;
              position: relative;
              right: 30px;" />
            </p>
          </div>
        </div>
        <div class="card d-flex position-relative flex-column">
          <div class="imgContainer"><img src="Home-page/estelle.png" /></div>
          <div class="content" style="color: #980799;">
            <h2>Estelle Joy Balbuena</h2>
            <p>
              "Budz Laundry Hub is known for its excellent customer service. With
              queries or requests, I can text a real person at any time. And
              every time I've met one of your Attendants in person, I've had
              nothing but good things to say about them."
              <img src="Home-page/star-great.PNG" alt="" class="ratings" />
            </p>
          </div>
        </div>
        <div class="card d-flex position-relative flex-column">
          <div class="imgContainer"><img src="Home-page/russele.png" /></div>
          <div class="content" style="color: #980799;">
            <h2>Rusele Berami</h2>
            <p>
              "Without time in the day and access to coins, Budz Laundry Hub is a
              painless way to get your laundry done."
              <img src="Home-page/star-ratings.PNG" alt="" class="ratings_last" />
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->

    <div class="footer-container border-top" style="color: #980799;">
      <h3 class="social-med-h3">Social Media Accounts:</h3>
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
            <a href="aboutus.php" class="nav-link px-2">About us</a>
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
                <input minlength="2" type="text" name="fname" id="fname" placeholder="Enter First Name" class="form-control"  required>
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
                <input minlength="2" type="text" name="address" id="address" placeholder="Enter Address" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label>Password <a style="color: red;">*</a></label>
                <input pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters"
                 type="password" name="password" id="password" placeholder="Enter Password" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label>Confirm Password <a style="color: red;">*</a></label>
                <input type="password" name="cpassword" id="cpassword" placeholder="Enter Confirm Password" 
                class="form-control"required>
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
                <button type="submit" class="btn_register" name="register_btn">
                 Register
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

