<?php
session_start();
require_once('inc/db.php');
if(isset($_POST['login'])) {
    
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query="select * from customers where email='$email' and password='$password'";
    // echo $query; die;

    $run=mysqli_query($db,$query);

    if(mysqli_num_rows($run)>0) {
        // $subject = "Login on Jnana Prabodhini Aakash Kandil Vikri";
        // $message1 = "You have logged in at Festival.com..if this is not you please contact us";
        // $headers = "From: wangadeketan@gmail.com";
        // mail($email,$subject,$message1,$headers);
        
        echo "<script> window.open('index.php','_self')</script>"; 
        $_SESSION['email']=$email;
        // $_SESSION['email']=$email;
    } else {
        echo"<script>alert('Incorrect Email or Password')</script>";
        echo "<script> window.open('login.php','_self')</script>";
    }

}
?>