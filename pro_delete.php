
<?php

include('inc/db.php');
$delete_id=$_GET['del'];
$delete_query="delete  from customers_cart WHERE id='$delete_id'";//delete query
$run=mysqli_query($db,$delete_query);
if($run)
{
//javascript function to open in the same window
    echo '<script type="text/javascript"> alert("Product Deleted Successfully")</script>';
    echo "<script type='text/javascript'>window.open('cart.php', '_self');</script>";
}

?>