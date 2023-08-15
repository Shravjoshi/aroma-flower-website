<?php
session_start();
if(!isset($_SESSION["email"])){
        $message = "Please Login First to add this product";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script> window.open('login.php','_self')</script>";
     
}
include('inc/db.php');

if (isset($_POST["submit1"])){

    $email=$_SESSION["email"];
    $product_name=$_POST['product_name'];
    $query="select * from customers_cart where email='$email' and product_name='$product_name'";

    $run=mysqli_query($db,$query);

    if(mysqli_num_rows($run)>0) {
       $message = "Product Already in Cart Please update cart quantity";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script> window.open('cart.php','_self')</script>";
    } else {

      $email=$_SESSION["email"];
      $product_name=$_POST['product_name'];
      $pd_id=$_POST['pd_id'];
      $product_price=$_POST['product_price'];
      $category_name=$_POST['category_name'];
      
      // $product_image=$_POST['product_image'];

      $imageURL=$_POST['imageURL'];
      $product_quantity=$_POST['product_quantity'];
      $subtotal = $product_quantity * $product_price;

      if($product_quantity == 0){
        $message = "Minimum quantity should be 1";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script> window.open('single-product.php?id=$pd_id','_self')</script>";
      }else{


$sql = "INSERT INTO customers_cart (`email`,`product_name`,`imageURL`,`product_price`,`product_unit`,`product_quantity`,`subtotal`,`status`) VALUES
('$email','$product_name','$imageURL','$product_price','$product_unit','$product_quantity','$subtotal','incart')";

if ($db->query($sql) === TRUE) {

        $message = "Product added to cart Successfully";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script> window.open('cart.php','_self')</script>";
        // echo "<script>window.open('cart-page.php','_self');</script>";
} else {
    echo "Error updating record: " . $db->error;
}
}


}
}

?>
