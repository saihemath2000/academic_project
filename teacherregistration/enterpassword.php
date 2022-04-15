<?php 
  if(isset($_GET['mail'])){
  $mail = $_GET['mail'];
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter new Password</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>           
    <link
      href="./vendor/mdi-font/css/material-design-iconic-font.min.css"
      rel="stylesheet"
      media="all"
    />
    <link
      href="./vendor/font-awesome-4.7/css/font-awesome.min.css"
      rel="stylesheet"
      media="all"
    />
    <!-- Font special for pages-->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
      rel="stylesheet"
    />
    <style>
		html,body{
           font-size:20px;
		   font-family: 'Pacifico', cursive;  
		}
		#verifytext{
			margin-top:150px;
			margin-left:500px;
		}
	</style>
</head>
<body>
<form id="verifytext" action="./verifyenteredpassword.php?mail=<?php echo $mail; ?>" method="POST">
		<h3>Resetting Password</h3><br>
		<div class="form-group col-6">
            <label 
			   for="newpassword">
			   New Password
			</label>
            <input 
			   type="password" 
			   class="form-control" 
			   id="newpassword"  
			   placeholder="Enter new password"
               pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
               title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" 
               required
			   name="newpassword">
               <i class="fa fa-eye" 
                  id="togglePassword" 
                  style="margin-right: 30px;margin-top:23px; cursor: pointer;z-index: 9999;position: absolute;top: 30%;right: 10px;"></i>
         </div><br>
         <div class="form-group col-6">
            <label 
			   for="renewpassword">
			   Re-enter New Password
			</label>
            <input 
			   type="password" 
			   class="form-control" 
			   id="reenternewpassword"  
			   placeholder="Re-enter new password"
               pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
               title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" 
               required
			   name="reenternewpassword">
               <i 
               class="fa fa-eye" 
               id="togglePassword1" 
               style="margin-right: 30px;margin-top:23px; 
               cursor: pointer;z-index: 9999;position: absolute;top: 30%;right: 10px;"></i>
         </div><br>
		 <button 
		 type="submit" 
		 name="submit"
		 class="btn btn-primary"
		 style="margin-left:20px;">Submit</button>
	</form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
    <script>
      const togglePassword = document.querySelector('#togglePassword');
      const password = document.querySelector('#newpassword');
      togglePassword.addEventListener('click', function (e) {
        // toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        // toggle the eye slash icon
        this.classList.toggle('fa-eye-slash');
      });
      const togglePassword1 = document.querySelector('#togglePassword1');
      const password1 = document.querySelector('#reenternewpassword');
      togglePassword1.addEventListener('click', function (e) {
        // toggle the type attribute
        const type = password1.getAttribute('type') === 'password' ? 'text' : 'password';
        password1.setAttribute('type', type);
        // toggle the eye slash icon
        this.classList.toggle('fa-eye-slash');
      });
    </script>
</body>
</html>