<?php 
  $mymail='saihemanthkumar.gummaraju@gmail.com';

  if(isset($_POST['submitvalue'])){
   $category = $_POST['category'];
   $mail = $_POST['email'];
  } 
    $body =' Requested category '.$category.' by '.$mail.'';
               
$to_email = "$mymail";
$subject = "Request to add category";
$headers = "From: Online learning(admin) email";

if (mail($to_email, $subject, $body, $headers)) {
    // echo "Email successfully sent to $to_email...";
    header('location:./coursetab.php');
} else {
    echo "Email sending failed...";
}
?>