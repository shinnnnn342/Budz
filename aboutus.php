<?php

session_start(); ?>
<html>
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

    <title>Budz Laundy Hub -  About us</title>
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
         <li class="hover_effect"><a href="https://www.facebook.com/budzlaundryhub/" target="facebook-profile" class="hoverA text-decoration-none"><img src="Navigation Bar/facebook.JPG" alt="" class="side-media"><span class="hoverp" style="color: #fff;">FACEBOOK</span></a></li>
         <li><a href="https://www.facebook.com/messages/t/2024978074490873" class="hoverA text-decoration-none"><img src="Navigation Bar/messenger.png" alt="" class="side-media"><span class="hoverp" style="color: #fff;">MESSENGER</span></a></li>
         <li><a href="#" class="hoverA text-decoration-none"><img src="Navigation Bar/gmail.JPG" alt="" class="side-media"><span class="hoverp" style="color: #fff;">TWITTER</span></a></li>
      </ul>
   </nav>

<!-- About us section -->

    <h2 class="container pt-5 border-bottom text-center" style="text-transform:uppercase; font-weight: 700; margin-top: 100px;">About us</h2>
<div class="container col-xxl-8 px-4 pt-5">
  <div class="row flex-lg-row-reverse align-items-center d-flex justify-content-center g-5 py-3">
    <div class="col-10 col-sm-8 col-lg-6">
      <img
        src="Home-page/hiw-image1.png"
        class="d-block mx-lg-auto img-fluid"
        alt="Bootstrap Themes"
        width="400"
        height="400"
        loading="lazy"
      />
    </div>
    <div class="col-lg">
      <h1 class="fw-bold lh-1 text-center">
        Vision
      </h1>
      <p class="lead text-center" id="hiw-paragraph">
        To become the most prominent laundry service provider in the area that offers customers with excellent and reliable service
        with satisfaction and ease.
      </p>
    </div>
  </div>
</div>
<div class="container col-xxl-8 px-4">
  <div class="row align-items-center d-flex justify-content-center g-5">
    <div class="col-10 col-sm-8 col-lg-6">
      <img
        src="Home-page/hiw-image2.png"
        class="d-block img-fluid"
        alt="Bootstrap Themes"
        width="400"
        height="400"
        loading="lazy"
      />
    </div>
    <div class="col-lg-6">
      <h1 class="fw-bold lh-1 mb-3 text-center">
        Mission
      </h1>
      <p class="lead text-center" id="hiw-paragraph">
        Our mission is to provide superior customer care and laundry service through:
      </p>
      <ul class="lead" style="margin-left: 100px;">
        <li>Professional customer assistance</li>
        <li>Efficient and effective service</li>
        <li>Continuous innovation of products and services, and</li>
        <li>Integrity in work</li>
      </ul>
    </div>
  </div>
</div>
<div class="container col-xxl-8 px-4 py-2">
  <div class="row flex-lg-row-reverse align-items-center d-flex justify-content-center g-5 py-3">
    <div class="col-10 col-sm-8 col-lg-6">
      <img
        src="Home-page/hiw-image3.png"
        class="mx-lg-auto img-fluid d-flex justify-content-center"
        alt="Bootstrap Themes"
        width="400"
        height="400"
        loading="lazy"
      />
    </div>
    <div class="col-lg-6">
      <h1 class="fw-bold text-center">
        Core Values
      </h1>
      <p class="lead text-center" id="hiw-paragraph">
        Integrity and Commitment <br>
        Family and Community Oriented <br>
        Professionalism <br>
        Cleanliness <br>
      </p>
    </div>
  </div>
</div>

<div class="footer-container border-top">
      <h3 class="social-med-h3">Social Media Accounts:</h3>
      <ul class="links-ul">
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
            <a href="#" class="nav-link px-2">About</a>
          </li>
        </ul>
        <p class="text-center">
          &copy; Copyright © 2022 PowerWash Laundromat, Inc. All Rights Reserved
        </p>
      </footer>
    </div>
    </body>
  </html>