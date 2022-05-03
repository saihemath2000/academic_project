<?php include('./topdashboard.php');?>
<?php include('../teacherregistration/validation.php'); ?>
<?php 
  $db = mysqli_connect('localhost','root','','course_info');
  $sql = "SELECT category from addedcategory";
  $result = mysqli_query($db,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create course</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
    <style>
        body{
        font-size: 20px;
        }
    </style>
</head>
<body>
    <div class="container" style="margin-left:10px;margin-top: 50px;">
    <div class="row">
        <div class="col-8">
            <h2>Enter Course Details</h2></br>
        </div>
        <div class="col-4">
            <a href="moduletab.php" style="text-decoration: none;">Next to module</a>
        </div>
    </div>    
    <form style="margin-top: 10px; margin-left: 10px" method="POST" enctype='multipart/form-data' action='./courseinstructors.php'>
        <div class="form-group col-md-6">
          <label for="course">Course title</label>
          <input
            type="text"
            class="form-control"
            id="course1"
            placeholder="Enter title"
            name="coursetitle"
          />
        </div>
        <div class="row">
        <div class="form-group col-md-6" style="margin-left:14px;">
          <label for="exampleFormControlSelect1">Select category</label>
          <select class="form-control" id="exampleFormControlSelect1" name="category">
                <option selected>Choose</option> 
                <?php 
                  if (mysqli_num_rows($result)>0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo '<option>'.$row['category'].'</option>';  
                    }
                  }
                ?>
            <!-- <option>Choose category</option>
            <option>Computer science</option>
            <option>General</option> -->
          </select>
        </div>
        <div class="col-md-4">
        <a 
          data-toggle="modal" 
          data-target="#myModal1"
          href=""
          style="text-decoration:none;
                 padding-top:50px;
                 color:red;
                 ">Request new Category</a>
        </div>
        </div>
        <div class="form-group col-md-6">
          <label for="course">Mention Schedule</label>
          <input
            type="text"
            class="form-control"
            id="startdate"
            name="startdate"
            placeholder="enter start date"
          />
        </br>
          <input
            type="text"
            class="form-control"
            id="enddate"
            name="enddate"
            placeholder="enter end date"
          />
        </div>
        <div class="form-group col-md-6">
          <label for="course">Enter price(</label>
          <small>in rupees)</small>
          <input
            type="number"
            step="any"
            class="form-control"
            id="price"
            name="price"
            placeholder="price in rupees"
          />
        </div>
        <div class="form-group col-md-6">
          <label for="course">Tags</label>
          <input
            type="text"
            class="form-control"
            id="tags"
            placeholder="#html#programming...."
            name="tags"
          />
        </div>
        <div class="form-group col-md-6">
          <label for="exampleFormControlTextarea1">Description</label>
          <textarea
            class="form-control"
            id="exampleFormControlTextarea1"
            rows="5"
            name="description"
          ></textarea>
        </div>
        <div class="form-group col-md-6">
          <label for="exampleFormControlFile1">Image for course</label>
          <input
            type="file"
            class="form-control-file"
            id="exampleFormControlFile1"
            name="courseimage"
          />
        </div>
        <div class="form-group col-md-6">
              <label for="exampleFormControlFile1">Video for course</label>
              <input
                type="file"
                class="form-control-file"
                id="exampleFormControlFile1"
                name="coursevideo"
              />
        </div>
        <button
          type="submit"
          style="margin-left: 12px"
          class="btn btn-primary"
          name="submitforcourse"
        >
          Submit
        </button>
      </form>
      <div class="modal" id="myModal1" style="margin-top:50px;">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Enter category</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  
                  <!-- Modal body -->
                  <div class="modal-body">
                    <form action="categorysendmailtoadmin.php" method="POST">
                      <div class="form-group col-8">
                        <label for="email">Registered Email</label>
                        <input type="email"  class="form-control" name="email" id="email" placeholder="Your Email" required/>
                      </div>
                      <div class="form-group col-8">
                        <label for="category">Category</label>
                        <input type="text" placeholder="enter category" class="form-control" name="category" id="category" required>
                      </div>
                      <button id="categorysubmit" class="btn btn-primary" onclick="confirmsubmit();" style="margin-left:20px" type="submit" name="submitvalue">Submit</button>
                    </form>
                  </div>
                </div>
          </div>
      </div>
</body>
<script>
  function confirmsubmit(){
    alert("request submitted successfully, wait for approval");
  }
</script>
<script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
      integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
      integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
      crossorigin="anonymous"
    ></script>
       
</html>