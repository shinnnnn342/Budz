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

    <link rel="stylesheet" href="contacts.css" />
    <link rel="stylesheet" href="index.css" />
    <link
      rel="Webpage icon"
      type="device-icon/png"
      href="Navigation Bar/LOGO.png"
    />
    <title>Budz Laundy Hub - Contacts & Map</title>
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
              <a class="nav-link " href="index.php" style="color:#980799;">
                Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="serviceandpricing.php" style="color:#980799;">
                Services & Prices
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="contacts.php" style="color:#980799;">
                Contacts & MapView
              </a>
            </li>

                <?php if (isset($_SESSION['auth_user'])): ?>
            <li class="nav-item dropdown">
            <a  aria-hidden="true" class=" nav-link text-dark dropdown" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="font-size: 12px; display:flex; justify-content:center; align-items: center; padding-top: 13px;">
            <i class="fa fa-user fa-fw" style="color:#980799;"></i><?= $_SESSION['auth_user'][
                'user_fname'
            ] ?> <?= $_SESSION['auth_user']['user_lname'] ?></a>
            
           <div class="dropdown-menu"> 
            <a class="dropdown-item" href="user/profile.php" style="color:#980799;">My Account</a>
              <form action="logout.php" method="POST">
                  <button name="logout_btn" type="submit" class="dropdown-item" style="color:#980799;">Logout</button>
              </form>
           </div>
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
      </nav>
        </div>

    <!-- Floating icon Section -->
    <nav class="side">
      <ul class="ulimage mb-0">
        <li class="hover_effect">
          <a
            href="https://www.facebook.com/budzlaundryhub/"
            target="facebook-profile"
            class="hoverA text-decoration-none"
          >
            <img src="Navigation Bar/facebook.JPG" alt="" class="side-media" />
            <span class="hoverp" style="color: #fff;">FACEBOOK</span>
          </a>
        </li>
        <li>
          <a href="#" class="hoverA text-decoration-none">
            <img
              src="Navigation Bar/messenger.png"
              alt=""
              class="side-media"
            />
            <span class="hoverp" style="color: #fff;">MESSENGER</span>
          </a>
        </li>
        <li>
          <a href="#" class="hoverA text-decoration-none">
            <img src="Navigation Bar/gmail.JPG" alt="" class="side-media" />
            <span class="hoverp" style="color: #fff;">TWITTER</span>
          </a>
        </li>
      </ul>
    </nav>

    <!-- Contact Section -->

    <div class="row" id="contact_id">
      <div class="container mt-5">
        <h2 class="pb-2 border-bottom text-center" style="text-transform:uppercase; font-weight: 700; color: #980799;">Contacts and MapView</h2>
         <?php include 'message.php'; ?>
        <div class="row" style="height: 550px;">
          <div class="col-md-6">

            <form action="contactcode.php" class="form_container" method="POST">
              <div class="row">
             
                
             
              <div class="col-lg-6">
                  <div class="form-group">
                    <input
                    name="c_email" id="c_email"
                      type="email"
                      class="form-control mt-2"
                      placeholder="Email Address"
                      required
                    />
                  </div>
             
                </div>

             
                <div class="col-lg-6">
                  <div class="form-group">
                    <input
                    name="c_number" id="c_number"
                      type="phone-number"
                      class="form-control mt-2"
                      placeholder="Mobile Number"
                      required
                    />
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-group">
                    <textarea
                      name="c_message" id="c_message"
                      class="form-control"
                      id="exampleFormControlTextarea1"
                      placeholder="Write a Message..."
                      rows="3"
                      required
                    ></textarea>
                  </div>
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


                <div class="col-12">
                  <div class="form-group">
                    <div class="form-check">
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <button name="contact_btn" type="submit" class="btn">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="16"
                      fill="currentColor"
                      class="bi bi-send-plus-fill"
                      viewBox="0 0 16 16"
                    >
                      <path
                        d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 1.59 2.498C8 14 8 13 8 12.5a4.5 4.5 0 0 1 5.026-4.47L15.964.686Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z"
                      ></path>
                      <path
                        d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 0 0 1 0v-1h1a.5.5 0 0 0 0-1h-1v-1a.5.5 0 0 0-.5-.5Z"
                      ></path>
                    </svg>
                    SUBMIT
                  </button>
                </div>
              </div>
            </form>
            
            <div class="" style="color:#980799;">
              <h2 class="text-uppercase mt-4 font-weight-bold">WHERE WE ARE</h2>

              <i class="fa fa-phone mt-3"></i>
              <a href="tel:+" style="color: #980799;">(083)877 6148</a>
              <br />
              <i class="fa fa-phone mt-3"></i>
              <a href="tel:+" style="color: #980799;">
                09429656743
              </a>
              <br />
              <i class="fa fa-envelope mt-3"></i>
              <a href="" style="color: #980799;">budzlaundryhub2022@gmail.com</a>
              <br />
              <i class="fa fa-globe mt-3"></i>
              514 Lapu-Lapu St. Cor. Quirino Ave, Brgy. East
              <br />
              <i class="fa fa-globe mt-3"></i>
              DOOR 3 SAFI Complex, Brgy. Calumpang
              <br />
              <div class="my-4">
                <a href=""><i class="fa fa-facebook fa-2x pr-3"></i></a>
                <a href=""><i class="fa fa-linkedin fa-2x"></i></a>
              </div>
            </div>
          </div>

          <div class="col-md-6 maps">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.7810918999281!2d125.17543668168139!3d6.113954643943688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9f07f161a0b41f9e!2sBUDZ%20Laundry%20Hub!5e0!3m2!1sen!2sph!4v1650346111778!5m2!1sen!2sph"
              width="400"
              height="300"
              style="border: 0;"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer Section -->

    <div class="footer-container border-top">
      <h3 class="social-med-h3" style="color:#980799;">Social Media Accounts:</h3>
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
      <footer class="py-2 my-4" style="color:#980799;">
        <ul class="nav justify-content-center pb-3 mb-3">
          <li class="nav-item">
            <a href="index.php" class="nav-link px-2">Home</a>
          </li>
          <li class="nav-item">
            <a href="serviceandpricing.php" class="nav-link px-2">
              Services & Prices
            </a>
          </li>
          <li class="nav-item">
            <a href="contacts.php" class="nav-link px-2">Contact</a>
          </li>
          <li class="nav-item">
            <a href="aboutus.php" class="nav-link px-2">About us</a>
          </li>
        </ul>
        <p class="text-center">
          &copy; Copyright © 2022 Budz Laundry Hub, Inc. All Rights Reserved
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

