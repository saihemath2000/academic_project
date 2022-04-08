<?php 
$course = $_GET['course'];
$text = $_GET['text'];
$db = mysqli_connect("localhost", "root", "", "course_info");
if (!$db) {
    die('connection failed:' . mysqli_connect_error());
}
else{
    $sql1 = "UPDATE courseinstructors set title='$text' where title='$course'";
    $sql2 = "UPDATE module set coursename='$text' where coursename='$course'";
    $sql3 = "UPDATE topic set coursename='$text' where coursename='$course'";
    $result1 = mysqli_query($db,$sql1);
    $result2 = mysqli_query($db,$sql2);
    $result3 = mysqli_query($db,$sql3);
    if($result1){
        echo "<script>alert('course updated successfully');";
        // header('location:editcourse.php');
        echo 'window.location.href="editcourse.php"';
        echo '</script>';
    }
    else{
        echo mysqli_error($db);
    }
    if($result2 and $result3){
        //
    }
    else{
        echo mysqli_error($db);
    }
}
?>