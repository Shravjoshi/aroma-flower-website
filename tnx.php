<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Thank for Ordering Product</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
</head>
<body>
  <?php

include ('inc/db.php');

$orderr_id=$_GET['id'];


$query="select * from customers_cart where email='$orderr_id'";
$result=mysqli_query($db,$query);

    $row=mysqli_fetch_array($result);

    $aamount=$row['product_price'];
    //echo "$aamount";
    $subtotal=$row['subtotal'];
    //echo "$subtotal";
    $pname=$row['product_name'];
    //echo "$pname";
    $email=$row['email'];
    //echo "$email";
    $quantity=$row['product_quantity'];
    //echo "$quantity";

    $sql = "INSERT INTO orders (`id`,`order_id`,`email`,`fname`,`pname`,`address`,`country`,`state`,`city`,`pincode`,`mobile`,`quantity`,`pay_method`,`amount`,`status`) VALUES ('','NULL','$email','','$pname','','','','','','','$quantity','','$subtotal','delivered')";
    $sql1 = "UPDATE customers_cart SET status='delivered' WHERE email='$email' AND product_name='$pname' AND status='incart'";
    // $sql2 = "select * from products where product_name='$pname'";
    // $result=mysqli_query($db,$query);
    
    // $row=mysqli_fetch_array($result);
    // $prd_qty=$row['product_quantity'];

    // $remains=$prd_qty-$quantity;
    // $sql3 = "UPDATE products SET product_quantity='$remains' WHERE product_name='$pname'";
    // $result2 = mysqli_query($db,$sql3);
    // if(!$result2)
    // {
    //   echo "product data not updated in db";
    // }

    $result = mysqli_query($db,$sql);
    $result1 = mysqli_query($db,$sql1);
    // echo "$result1";
if ($result && $result1) {
      
        //$subject = "Response From Festival.com";
        //$message1 = "Thank you for the Registration With us";
        //$headers = "From: prashat@yfestival.in";
        //mail($email,$subject,$message1,$headers);

        ?>
        <div class="jumbotron text-center">
  <h1 class="display-3">Thank You!</h1>
  <p class="lead"><strong>Please check your email</strong> for further shipping setup.</p>
  <hr>
  <p>
  Within 3 to 4 days you get delievry
  </p>
  <p>
    Having trouble? <a href="contact.php">Contact us</a>
  </p>
  <p class="lead">
    <a class="btn btn-primary btn-sm" href="index.php" role="button">Continue to homepage</a>
  </p>
</div>
<!-- partial -->
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js'></script>
<?php
        $message = "Within 3 to 4 days you get delievry";
        //echo "<script type='text/javascript'>alert('$message');</script>";
        //echo "<script>window.open('index.php','_self');</script>";
      

} else {
    echo "Error updating record: " . $db->error;
}

?>
<!-- partial:index.partial.html -->


</body>
</html>