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
    <title>Teacher Registration Form</title>

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
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>           
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all" />
    <style>
        #title:hover{
           color:red;  
        }
        #asterik:after{
          content:'*';
          color:red;
        }
    </style>
  </head>

  <body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
      <div class="wrapper wrapper--w790">
        <div class="card card-5">
          <div class="card-heading">
            <h2 class="title" id="title">Teacher Registration Form</h2>
          </div>
          <div class="card-body">
            <form method="POST" action="teacher_register.php" enctype="multipart/form-data">
              <?php echo display_error(); ?>
              <div class="form-row">
                <div style=" font-family:Open Sans, Arial, Helvetica Neue, sans-serif;padding:0;margin: 0;box-sizing: inherit;color: #555;font-weight: 700;display: block;width: 100%;margin-bottom: 7px;font-size: 18px;" id="asterik">Name</div>
                <div class="value">
                  <div class="input-group">
                    <input
                      class="input--style-5"
                      type="text"
                      name="name"
                      placeholder="enter your name"
                      required
                    />
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div style=" font-family:Open Sans, Arial, Helvetica Neue, sans-serif;padding:0;margin: 0;box-sizing: inherit;color: #555;font-weight: 700;display: block;width: 100%;margin-bottom: 7px;font-size: 18px;" id="asterik">Email</div>
                <div class="value">
                  <div class="input-group">
                    <input
                      class="input--style-5"
                      type="email"
                      name="email"
                      placeholder="enter your email"
                      required
                    />
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div style=" font-family:Open Sans, Arial, Helvetica Neue, sans-serif;padding:0;margin: 0;box-sizing: inherit;color: #555;font-weight: 700;display: block;width: 100%;margin-bottom: 7px;font-size: 18px;" id="asterik">Password</div>
                <div class="value">
                  <div class="input-group">
                    <input
                      class="input--style-5"
                      type="password"
                      name="password"
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
              <div class="form-row">
                <div id="asterik" style="  font-family:Open Sans, Arial, Helvetica Neue, sans-serif;padding:0;margin: 0;box-sizing: inherit;color: #555;font-weight: 700;display: block;width: 100%;margin-bottom: 7px;font-size: 18px;">Retype Password</div>
                <div class="value">
                  <div class="input-group">
                    <input
                      class="input--style-5"
                      type="password"
                      name="repassword"
                      placeholder="retype your password"
                      id="repassword"
                      required
                    />
                    <i class="far fa-eye" id="togglePassword1" style="margin-right: 30px; cursor: pointer;z-index: 9999;position: absolute;top: 30%;right: 10px;"></i>
                  </div>
                </div>
              </div>
              <div class="form-row m-b-55">
                <div id="asterik" style=" font-family:Open Sans, Arial, Helvetica Neue, sans-serif;padding:0;margin: 0;box-sizing: inherit;color: #555;font-weight: 700;display: block;width: 100%;margin-bottom: 7px;font-size: 18px;">Phone</div>
                <div class="value">
                  <div class="row row-refine">
                    <div class="col-9">
                      <div class="input-group-desc">
                        <input
                          class="input--style-5"
                          type="text"
                          name="phone"
                          placeholder="enter phone no"
                          pattern="[0-9]{10}"
                          title="A phone no number must be 10 digits without any spaces and special characters"
                          required
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div style=" font-family:Open Sans, Arial, Helvetica Neue, sans-serif;padding:0;margin: 0;box-sizing: inherit;color: #555;font-weight: 700;display: block;width: 100%;margin-bottom: 7px;font-size: 18px;" id="asterik">Address</div>
                <div class="value">
                  <div class="input-group">
                    <input
                      class="input--style-5"
                      type="text"
                      name="address"
                      placeholder="enter address"
                      required
                    />
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group">
                  <div style="  font-family:Open Sans, Arial, Helvetica Neue, sans-serif;padding:0;margin: 0;box-sizing: inherit;color: #555;font-weight: 700;display: block;width: 100%;margin-bottom: 7px;font-size: 18px;">Profile photo upload</div></br>
                  <input
                    type="file"
                    class="form-control-file"
                    id="profilephoto"
                    name="profilephoto"
                    style="font-size:18px;"
                  />
                </div>
              </div>
              <div class="form-row">
                  <div class="form-group">
                      <h3 style="font-family:Open Sans,Arial,Helvetica Neue, sans-serif;">Latest Qualification Details</h3>
                      <hr style="height:1px;border:none;color:#333;background-color:#333;"></br>
                      <div class="row">
                       <div class="col-4">
                           <div  style="font-size:18px;color: #555;font-weight: 700;display: block;width: 100%;">Highest qualification</div></br>
                           <input type="text" class="input--style-5" name="degree" placeholder="btech....">
                       </div>&nbsp;&nbsp;&nbsp;
                       <div class="col-4">
                       <div class="name" style="font-size:18px;">Institute</div></br>
                            <input type="text" class="input--style-5" name="institute" placeholder="institute name">
                       </div>  
                  </div><br>
              </div>
              <div class="form-row">
                <div  style="font-size:18px;color: #555;font-weight: 700;display: block;width: 100%;" id="asterik">Department</div><br><br>
                <div class="value">
                  <div class="input-group">
                    <input
                      class="input--style-5"
                      type="text"
                      name="department"
                      placeholder="CSE"
                      required
                    />
                  </div>
                </div>
              </div>
              <div class="form-row">
                  <div id="asterik" style="font-size:18px;color: #555;font-weight: 700;display: block;width: 100%;">Experience</div></br></br>
                  <textarea class="input--style-5" name="experience" id="experience" rows="3" placeholder="enter ur experience as a teacher" style="width: 100%; max-width: 100%;font-size:18px;"></textarea>
              </div>
              <div class="form-row">
                <div  id="asterik" style="  font-family:Open Sans, Arial, Helvetica Neue, sans-serif;padding:0;margin: 0;box-sizing: inherit;color: #555;font-weight: 700;display: block;width: 100%;margin-bottom: 7px;font-size: 18px;">Skills</div></br></br>
                <textarea class="input--style-5" name="skills" id="skills" rows="3" placeholder="skills you pursue" style="width: 100%; max-width: 100%;font-size:18px;"></textarea>
              </div>
              <div class="form-row">
                <div class="form-group ">
                  <div id="asterik" style="font-family:Open Sans, Arial, Helvetica Neue, sans-serif;padding:0;margin: 0;box-sizing: inherit;color: #555;font-weight: 700;display: block;width: 100%;margin-bottom: 7px;font-size: 18px;">Upload Skill Certifications<small>(can upload multiple)</small></div>
                  <input
                    type="file"
                    class="form-control-file"
                    id="files0"
                    name="files0[]"
                    style="font-size:18px"
                    multiple
                  />
                </div>
              </div>
              <span style="font-size: 10pt;">Click "+" for more files
            <a><i id="more_files" class='fa fa-plus'></i></a></span>
              <div class="form-row">
                <div class="form-group">
                  <div id="asterik" style="  font-family:Open Sans, Arial, Helvetica Neue, sans-serif;padding:0;margin: 0;box-sizing: inherit;color: #555;font-weight: 700;display: block;width: 100%;margin-bottom: 7px;font-size: 18px;">Video</div>
                  <input
                    type="file"
                    class="form-control-file"
                    id="video"
                    name="video"
                    style="font-size:18px"
                  /> 
                </div>
              </div>
              <button class="btn btn--radius-2 btn--red" type="submit" name="register"
              >Register</button>
            </form>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
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
      const togglePassword1 = document.querySelector('#togglePassword1');
      const password1 = document.querySelector('#repassword');
      togglePassword1.addEventListener('click', function (e) {
        // toggle the type attribute
        const type = password1.getAttribute('type') === 'password' ? 'text' : 'password';
        password1.setAttribute('type', type);
        // toggle the eye slash icon
        this.classList.toggle('fa-eye-slash');
      });
    </script>
    <script type="text/javascript">   
    $(document).ready(function() {
        $(document).on('click','#more_files', function() {
            var numOfInputs = 1;
            while($('#files'+numOfInputs).length) { numOfInputs++; }//once this loop breaks, numOfInputs is greater than the # of browse buttons
    
            $("<input type='file' multiple/>")
                .attr("style","font-size:18px;")
                .attr("id", "files"+numOfInputs)
                .attr("name", "files"+numOfInputs+"[]")
                .insertAfter("#files"+(numOfInputs-1));
    
            // $("<br/>").insertBefore("#files"+numOfInputs);
            $('#files'+(numOfInputs-1)).hide();
        });
    });
    </script>
  </body>
  <!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<!-- end document-->
