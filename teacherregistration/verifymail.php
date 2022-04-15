<?php
$db = mysqli_connect('localhost', 'root', '', 'multi_login');
if(isset($_POST['submit'])){
    $mail = $_POST['email'];
    $sql = "SELECT name from teachers where email='$mail'";
    $result = mysqli_query($db,$sql);
    if(!$result){
        echo mysqli_error($db);
    }
    $row= mysqli_fetch_assoc($result);
    if(isset($row['name'])){
    $name= $row['name'];
    $body ='Hi '.$name.' Welcome to Online Learning System. To reset your password 
    <a href="localhost/academic_project/teacherregistration/enterpassword.php?mail='.$mail.'">
    click here</a> .For any queries free to mail saihemanthkumar.Gummaraju@gmail.com';
    $to_email = "$mail";
    $subject = "Request to reset password";
    // $headers = "From: Online learning(admin) email";
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
    if (mail($to_email, $subject, $body, implode("\r\n", $headers))) {
        echo '<center><p style="font-size:20px;margin-top:200px;font-weight:bold;font-family: "Pacifico", cursive;">
        Mail sent successfully, please check your email to verify account before
        resetting password</p></center>';
    } else {
        echo "Email sending failed...";
    }
}
else{
    echo '<script>alert("invalid email");</script>';
}
}

?>