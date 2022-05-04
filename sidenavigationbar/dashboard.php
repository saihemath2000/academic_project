<?php 
  session_start();
  if(isset($_SESSION['user'])){
    $name =$_SESSION['user']['name'];
  }
  $db = mysqli_connect("localhost", "root", "", "course_info");
  if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
  }
  $sql ="SELECT title from courseinstructors where instructor='$name' order by id desc limit 3";
  $sql2= "SELECT count(*) as count from courseinstructors where publish=1 and instructor='$name' ";
  $sql3= "SELECT count(*) as count from courseinstructors where instructor='$name'";
  $sql4 = "SELECT title,image from courseinstructors where publish=1 and instructor='$name'";
  $result1= mysqli_query($db,$sql2);
  $result = mysqli_query($db,$sql);
  $result3 = mysqli_query($db,$sql3);
  $result4= mysqli_query($db,$sql4);
  $row2 = mysqli_fetch_assoc($result3);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="dashboard.css">
    <style>
      html,
      body {
        margin: 0;
        font-family: 'Pacifico', cursive;
        font-size:17px;
      }
      .banner {
        /* background-color: yellow; */
        background-image: url(./bannerimage/bgimage_1.jpg);
        height: 50px;
      }
      .banner__content {
        height: 50px;
        width: 700px;
        max-width: 1000px;
        padding: 16px;
        /* margin: 0 auto; */
        /* float:left; */
      }
      .banner__text {
        flex-grow: 1;
        line-height: 1.4;
        font-family: "Quicksand", sans-serif;
        font-size: 23px;
        /* margin-left:400px;  */
        float: right;
        color: red;
      }
      .banner__text:hover {
        color: black;
      }
      .banner__image {
        float: left;
      }
      .button {
        background: burlywood;
        box-shadow: 0 0 0;
        /* display:inline-block; */
        font-size: 2em;
        padding: 0.5em 2em;
        text-decoration: none;
        float: left;
      }
      .button:hover {
        box-shadow: 10px 10px 0 rgba(0, 0, 0, 0.5);
      }

      .parallelogram {
        transform: skew(-30deg);
        float: left;
        width: 20px;
        height: 2px;
        padding-top: 3px;
        padding-right: 30px;
        padding-bottom: 20px;
        padding-left: 35px;
      }

      .skew-fix {
        display: inline-block;
        transform: skew(30deg);
        text-align: center;
      }
    </style>
  </head>
  <body>
    <div class="banner">
      <div class="banner__content">
         <div class="banner__text">
          <strong style="font-family:'Pacifico', cursive;">ONLINE LEARNING SYSTEM</strong>
        </div>
      </div>
    </div>
    <div class="card bg-info text-white" style="width: 25rem;margin-top:40px;margin-left:40px;">
      <div class="card-body">
        <h5 class="card-title" style="font-weight:bold;">
        <i class="fa fa-location-arrow"></i>
        Recent courses</h5>
        <h6 class="card-subtitle mb-2 text-muted"><hr style="height:1px;background-color:red;"></h6>
        <p class="card-text">
      <?php 
        if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
            echo '<a href="./courseinformation.php?course='.$row['title'].'"
                     style="text-decoration:none;color:brown;"><h5>'.$row['title'].'</h5></a>';
          }
        }
        else{
          echo '<h4 style="margin-left:40px;color:red">No recent courses created to display</h4>';
        }
      ?>
        </p>
        <!-- <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a> -->
      </div>
    </div>
    <div class="card bg-secondary text-white" style="width: 25rem;margin-top:40px;margin-left:40px;">
      <div class="card-body">
        <h5 class="card-title" style="font-weight:bold;">Course completions</h5>
        <h6 class="card-subtitle mb-2 text-muted"><hr style="height:1px;background-color:yellow;"></h6>
        <p class="card-text">
          <?php
          $row1 = mysqli_fetch_assoc($result1);
          $a =  $row1['count'];
          $b = $row2['count'];
          if($b==0){
              echo '<h4 style="color:magenta;">No courses created to display</h4>'; 
          }
          else{
            $c=($a/$b)*100;
            echo '<div class="progress">
              <div class="progress-bar" role="progressbar" style="width:'.$c.'%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">'.$c.'%</div>
             </div>';
          }
          ?></br>
          <p  style="float:right;">Courses:
           <?php  echo $a.'/'.$b;?>
          </p>           
        </p>
      </div>
    </div>
    <div class="card" style="width: 55rem;margin-top:40px;margin-left:40px;background-color:#9d81ab">
      <div class="card-body">
        <h5 class="card-title" style="font-weight:bold;">My Courses</h5>
        <h6 class="card-subtitle mb-2 text-muted"><hr style="height:1px;background-color:green;"></h6>
        <p class="card-text">
      <?php 
        if (mysqli_num_rows($result4) > 0) {
          while($row = mysqli_fetch_assoc($result4)) {
            echo '<div class="row"><div class="col-4"><img src="courseimages/'.$row['image'].'" width="75px" height="75px;"/></div>';
            echo '<div class="col-8"><a href="./courseinformation.php?course='.$row['title'].'"
                     style="text-decoration:none;color:black;">
                     <h5>'.$row['title'].'</h5>
                     </a>
                  </div>
                  </div>';
            echo '<p style="float:right;color:white;">No of learners enrolled:5</p>';      
            echo '<br><br>';         
          }
        }
        else{
          echo '<h4 style="color:blue;">No courses created</h4>';
        }
      ?>
        </p>
        <!-- <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a> -->
      </div>
    </div>
  </body>
</html>
