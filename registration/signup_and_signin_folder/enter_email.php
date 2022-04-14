<?php include('../functions.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Enter Mail to Verify</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
    <form id="verifytext" action="verifymail.php" method="POST">
		<h3>Enter your mail to verify</h3><br>
		<div class="form-group col-6">
            <label 
			   for="email">
			   Email address
			</label>
            <input 
			   type="email" 
			   class="form-control" 
			   id="email" 
			   aria-describedby="emailHelp" 
			   placeholder="Enter email"
			   name="email">
            <small 
			   id="emailHelp" 
			   class="form-text text-muted">
		    	We'll never share your email with anyone else.
			</small>
         </div><br>
		 <button 
		 type="submit" 
		 name="submit"
		 class="btn btn-primary"
		 style="margin-left:20px;">Submit</button>
	</form>  	
</body>
</html>