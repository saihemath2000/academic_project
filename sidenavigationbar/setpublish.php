<?php 
  $value = $_GET['value'];
  $course = $_GET['course'];
//   echo $value.$course;
  $db = mysqli_connect("localhost", "root", "", "course_info");
  if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
  }
  if($value==1){
    $sql = "UPDATE courseinstructors set publish=1 where title='$course'";
    $result = mysqli_query($db,$sql);
    // echo "<script>alert('published successfully');</script>";
    header('location:./courseinformation.php?course='.$course.'');
  }
  else{
    header('location:./courseinformation.php?course='.$course.'');
  }
?>