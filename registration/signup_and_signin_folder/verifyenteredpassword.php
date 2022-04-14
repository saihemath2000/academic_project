<?php 
//  echo 'hi';
//  include('./enterpassword.php');
 $db = mysqli_connect('localhost', 'root', '', 'multi_login');
 if(isset($_GET['mail'])){
   $mail = $_GET['mail'];
 }
 if(isset($_POST['submit'])){
     $newpassword = $_POST['newpassword'];
     $reenteredpassword = $_POST['reenternewpassword'];
     $errors = array();
     if ($newpassword != $reenteredpassword) {
        echo '<script>alert("two passwords doesnt match");</script>';
        echo '<script>window.location.href="enterpassword.php?mail='.$mail.'"</script>';
    }
    if(count($errors)==0){
       $encrypted=  md5($newpassword); 
       $sql="UPDATE users set password='$encrypted' where email='$mail'";
       $result=mysqli_query($db,$sql);
       if(!$result){
           echo mysqli_error($db);
       }  
       else{
           echo '<center><p style="font-size:20px;font-weight:bold;margin-top:200px;font-family: "Pacifico", cursive;">New Password
           has been set successfully please login <a href="./signin.php">here</a></p></center>';
       }  
    } 
 }
 else{
     echo 'he;lo';
 }
 function display_error(){
    global $errors;

    if (count($errors) > 0) {
        echo '<div class="error">';
        foreach ($errors as $error) {
            echo $error . '<br>';
        }
        echo '</div>';
    }
}
?>
