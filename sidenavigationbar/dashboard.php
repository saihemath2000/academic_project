<?php 
  $db = mysqli_connect("localhost", "root", "", "course_info");
  if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
  }
  $sql ="SELECT title from courseinstructors order by id desc limit 3";
  $sql2= "SELECT count(*) as count from courseinstructors where publish=1 ";
  $sql3= "SELECT count(*) as count from courseinstructors";
  $result1= mysqli_query($db,$sql2);
  $result = mysqli_query($db,$sql);
  $result3 = mysqli_query($db,$sql3);
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
    <link rel="stylesheet" href="dashboard.css">
    <style>
      html,
      body {
        margin: 0;
        font-family: 'Pacifico', cursive;
        /* padding: 3em;   */
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
    <div class="card" style="width: 18rem;margin-top:40px;margin-left:40px;">
      <div class="card-body">
        <h5 class="card-title" style="font-weight:bold;">Recent courses</h5>
        <h6 class="card-subtitle mb-2 text-muted"><hr style="height:1px;background-color:red;"></h6>
        <p class="card-text">
      <?php 
        if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
            echo '<a href="./courseinformation.php?course='.$row['title'].'"
                     style="text-decoration:none;color:brown;"><h5>'.$row['title'].'</h5></a>';
          }
        }
      ?>
        </p>
        <!-- <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a> -->
      </div>
    </div>
    <div class="card" style="width: 25rem;margin-top:40px;margin-left:40px;">
      <div class="card-body">
        <h5 class="card-title" style="font-weight:bold;">Course completions</h5>
        <h6 class="card-subtitle mb-2 text-muted"><hr style="height:1px;background-color:red;"></h6>
        <p class="card-text">
          <?php
          $row1 = mysqli_fetch_assoc($result1);
          $a =  $row1['count'];
          $b = $row2['count'];
          $c=($a/$b)*100;
          echo '<div class="progress">
            <div class="progress-bar" role="progressbar" style="width:'.$c.'%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">'.$c.'%</div>
          </div>';
          ?></br>
          <p class="text-muted" style="float:right;">Courses:
           <?php  echo $a.'/'.$b;?>
          </p>           
        </p>
      </div>
    </div>
  </body>
</html>
