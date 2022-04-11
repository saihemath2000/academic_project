<?php
$mail = $_GET['mail'];
$db = mysqli_connect('localhost', 'root', '', 'multi_login');
$sql = "SELECT name,email,phone from teachers where email='$mail'";
$result = mysqli_query($db,$sql);
if(!$result){
    echo mysqli_error($db);
}
else{
    $result1 = mysqli_fetch_row($result);
    $name=$result1[0];
    $body ='Hi '.$name.' Welcome to Online Learning System your profile is registered
    and saved successfully. To create your first course in this platform please login.
    For any queries free to mail saihemanthkumar.Gummaraju@gmail.com';
               
}


$to_email = "$mail";
$subject = "Your Registration With Online Learning is Successful";
// $body = "Hi ";
$headers = "From: Online learning(admin)\'s email";

if (mail($to_email, $subject, $body, $headers)) {
    // echo "Email successfully sent to $to_email...";
    header('location:../registration/homepage.php');
} else {
    echo "Email sending failed...";
}
?>