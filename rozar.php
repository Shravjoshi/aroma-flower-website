<?php

include ('inc/db.php');

$orderr_id=$_GET['id'];


$query="select * from customers_cart where email='$orderr_id'";
$result=mysqli_query($db,$query);

    $row=mysqli_fetch_array($result);

    $subtotal=$row['subtotal'];
    $amount=sprintf("%.2f",$subtotal);
	$aamount=$amount*100;
    $pname=$row['product_name'];
    $email=$row['email'];
    $quantity=$row['product_quantity']

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width">
	<title>Payment For Seasonal Business</title>
</head>
<body>

<div class="container card">
      <div class="row white">
        <div class="col-md-8 col-sm-12 section-head">
          <div class="section-title">
            <h4>Payment For Seasonal Business</h4>
            <!--hr class="botm-line">
            <p class="sec-para black">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</p-->
          </div>
        </div>

<form action="tnx.php?id=<?php echo $orderr_id; ?>" method="POST">
    <label class="label">Product Name</label>
	<input type="text" class="form-control" value="<?php echo $pname; ?>" readonly>
	<label class="label">Amount</label>
	<input type="text" class="form-control" value="<?php echo $amount; ?>" readonly>
	<label class="label">Quantity</label>
	<input type="text" class="form-control" value="<?php echo $quantity; ?>" readonly>
	<label class="label">E-mail</label>
	<input type="text" class="form-control" value="<?php echo $email; ?>" readonly>
	<?php

include ('inc/db.php');

$orderr_id=$_GET['id'];
$query="select * from customers where email='$orderr_id'";
$result=mysqli_query($db,$query);
{
    $row=mysqli_fetch_array($result);
    $cname=$row['fname'];
    $mobile=$row['mobile'];
    $address=$row['address'];
?>
<label class="label">Customer Name</label>
	<input type="text" class="form-control" value="<?php echo $cname; ?>" readonly> 
	<label class="label">Mobile No.</label>
	<input type="text" class="form-control" value="<?php echo $mobile; ?>" readonly> 
	<label class="label">Shipping Address</label>
	<input type="text" class="form-control" value="<?php echo $address; ?>" readonly> 
	<?php } ?>
	<br><br>
<!-- Note that the amount is in its subunit value = 599 -->
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="rzp_test_iaJMJ95YM6YzVr"
    data-amount="<?php echo $aamount; ?>" // The amount is shown in currency subunits. Actual amount is ₹599.
    
    
    data-buttontext="Proceed to Pay"
    data-name="Seasonal Business"
    data-description="Seasonal Business"
    data-image="https://your-awesome-site.com/your_logo.jpg"
    data-prefill.name="<?php echo $name; ?>"
    data-prefill.email="<?php echo $email; ?>"
    data-theme.color="#F37254"
>
</script>

</form>
<form action="canceled.php" method="POST">

<button class="btn btn-danger" type="submit">Cancel</button>
</form>
</div>
</div>
<style>
.razorpay-payment-button{
	#background-color: #FE8600;
	margin-bottom:20px;
	margin-left:250px;
	
	padding: 10px 10px 10px 10px;
	color: white;
	font-size:14px;
	font-weight:500;
	background: rgb(28, 184, 65);
	
}
.section-head{
       background-color: #FE8600;
       width:100%; 
       border-radius: 10px;
       margin-bottom: 15px;
   }
   
  .card{ 
    margin-top:50px;
    margin-bottom:50px;
    margin-left:center;
	margin-right:center;
    width:50%; 
    line-height: 1.42857143;
    color: #555;
    background-color: #EBEBEB;
    background-image: none;
    border: 2px solid #FE8600;
    border-radius: 15px;
	
	-webkit-box-shadow: 0px 2px 7px 0px #557db7;
	}
h4{
	
	color:white;
}
.form-control{
	width:80%;
	margin-bottom: 5px;
	margin-left:30px;
	#margin-right:50px;
}
.label{
	 margin-left:30px;
	 margin-bottom:5px;
	 color:black;
	 font-size:14px;
 }

@media only screen and (max-width: 600px) {

.form-control {
		margin-bottom:10px;
		margin-left:30px;
	}
h4{
	margin-top: 0px;
	
 }	
 .card{
	 width:80%;
 }
 .label{
	 margin-left:30px;
	 margin-bottom:5px;
	 color:black;
 }
 .razorpay-payment-button{
	 margin-left:100px;
 }
}
</style>
</body>
<html>