<?php include('./validation.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags-->
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Title Page-->
    <title>Teacher Login Form</title>

    <!-- Icons font CSS-->
    <link
      href="vendor/mdi-font/css/material-design-iconic-font.min.css"
      rel="stylesheet"
      media="all"
    />
    <link
      href="vendor/font-awesome-4.7/css/font-awesome.min.css"
      rel="stylesheet"
      media="all"
    />
    <!-- Font special for pages-->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
      rel="stylesheet"
    />

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all" />
    <link
      href="vendor/datepicker/daterangepicker.css"
      rel="stylesheet"
      media="all"
    />
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all" />
    <link href="teacher_login.css" rel="stylesheet"/>
    <style>
        #title:hover{
           color:red;  
        }
    </style>
  </head>

  <body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
      <div class="wrapper wrapper--w790">
        <div class="card card-5" style="width:700px;margin-left:60px;">
          <div class="card-heading">
            <h2 class="title" id="title">Teacher Login Form</h2>
          </div>
          <div class="card-body">
            <form method="POST" action="teacher_login.php" enctype="multipart/form-data" style="display:center">
              <?php echo display_error(); ?>
              <div class="form-row">
                <div class="name" style="font-size:18px;">Email</div>
                <div class="value">
                  <div class="input-group">
                    <input
                      style="width:225px;margin-left:100px;"
                      class="input--style-5"
                      type="email"
                      name="your_email"
                      placeholder="enter your email"
                      required
                    />
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="name" style="font-size:18px;">Password</div>
                <div class="value">
                  <div class="input-group">
                    <input
                      style="width:225px;margin-left:100px;"
                      class="input--style-5 col-4"
                      type="password"
                      name="your_password"
                      placeholder="enter your password"
                      id="id_password"
                      autocomplete="current-password"
                      pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                      title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" 
                      required
                    />
                    <i class="far fa-eye" id="togglePassword" style="margin-right: 30px; cursor: pointer;z-index: 9999;position: absolute;top: 30%;right: 10px;"></i>
                  </div>
                </div>
              </div>
                <button class="btn btn--radius-2 btn--green" style="margin-left:200px;" type="submit" name="login">Login</button>
            </form></br></br>
            <center><div style="font-size:16px;"><b><a>new Member?</a></b><b><a href="teacher_register.php" style="text-decoration:none;"> &nbsp;&nbsp; create account</a></b></div></center><br>
            <a 
              style="text-decoration:none;margin-left:200px;font-size:18px;" 
              href="enter_mail.php">Forgot password ?</a>
            <div class="social-login" style="display:flex;margin-left:200px;">
                <span class="social-label" style="font-size:16px;"><b>Or login with </b></span>
                    <ul class="socials" style="display:flex;">
                        <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                        <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                    </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
    <script>
      const togglePassword = document.querySelector('#togglePassword');
      const password = document.querySelector('#id_password');
      togglePassword.addEventListener('click', function (e) {
        // toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        // toggle the eye slash icon
        this.classList.toggle('fa-eye-slash');
      });
    </script>
  </body>
</html>

