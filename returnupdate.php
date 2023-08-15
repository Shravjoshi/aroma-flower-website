<?php
include('inc/db.php');
echo "bhadvya";
if (isset($_POST["submit"])){

    $email=$_GET["email"];
    $product_name=$_POST['pname'];
    // echo "$product_name";
    $query="UPDATE orders SET status='pending' WHERE email='$email' AND product_name='$pname'";
    

    $run=mysqli_query($db,$query);

    if(mysqli_num_rows($run)) {
       $message = "Product will be returned in 2 to 3 days";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script> window.open('cart.php','_self')</script>";
    } else {

      if($product_quantity == 0){
        $message = "Product cant be returned,sorry";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script> window.open('single-product.php?id=$pd_id','_self')</script>";
      }
}


}


?>
