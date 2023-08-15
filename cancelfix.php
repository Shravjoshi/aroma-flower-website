<?php 
 include 'inc/db.php';
    if(isset($_POST['register']))
  
      $fname=$_POST['fname'];
      $cname=$_POST['company'];
      $email=$_POST['email'];
      $mobile=$_POST['number'];
      $add1=$_POST['add1'];
      $add2=$_POST['add2'];
      $country=$_POST['country'];
      $state=$_POST['state'];
      $city=$_POST['city'];
      $pincode=$_POST['zip'];
      $password=$_POST['password'];

    $id=$_GET['id'];
    
    $sql="update orders SET fname='$fname',cname='$cname',email='$email',mobile='$mobile',address='$add1',address1='$add2',city='$city',state='$state',country='$country',password='$password',pincode='$pincode' WHERE id='$id' ";


    $run=mysqli_query($db,$sql);
    if($run)
    {   
        echo '<script type="text/javascript"> alert("Ordered has been cancelled From Customer End")</script>';
        echo "<script type='text/javascript'>window.open('cart.php', '_self');</script>";
        
    }
    else
    {
        echo '<script type="text/javascript"> alert("Data Not Updated")</script>';
    } 
  

?>