<?php require_once('inc/top.php'); ?>
</head>
<body>
  <!--================ Start Header Menu Area =================-->
	<?php require_once('inc/header.php'); ?>
	<!--================ End Header Menu Area =================-->

	<!-- ================ start banner area ================= -->	
	<section class="blog-banner-area" id="category">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Product Return</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Return</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
	<!-- ================ end banner area ================= -->
  
  
  <!--================Checkout Area =================-->
  <section class="checkout_area section-margin--small">
    <div class="container">
        <div class="billing_details">
            <div class="row">

              <?php
        include("inc/db.php");
        $pname=$_GET["user"];
        if(isset($_SESSION["email"])){
        $email=$_SESSION["email"];
        // $pname=$_SESSION["pname"];
        

        $query="select * from customers where email='$email'";

        $run=mysqli_query($db,$query);

                    $t=0;
                    while($row=mysqli_fetch_array($run))
                     {
                    
                    global $status;
                     $t++;

                     $id=$row['id'];
                     $fname=$row['fname'];
                     $cname=$row['cname'];
                     
                     $email=$row['email'];
                     $mobile=$row['mobile'];
                     $add1=$row['address'];
                     $add2=$row['address1'];
                     $city=$row['city'];
                     $state=$row['state'];
                     $pincode=$row['pincode'];
                     $password=$row['password']; 
      
?>
                <div class="col-lg-12">
                    <h3>Billing Details</h3>
                    <form class="row contact_form" action="returnupdate.php?id=<?php echo $id; ?>" method="post" novalidate="novalidate">
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="first" name="fname" value="<?php echo $fname; ?>" placeholder="Full Name" required>
                            <span class="placeholder" data-placeholder="First name"></span>
                        </div>
                        
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="company" name="company" placeholder="Company name">
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="number" name="number" value="<?php echo $mobile; ?>" placeholder="8806259662" required>
                            <span class="placeholder" data-placeholder="Phone number"></span>
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>" placeholder="abc@gmail.com" required>
                            <span class="placeholder" data-placeholder="Email Address"></span>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="number" name="country" value="India" placeholder="India" required readonly>
                            <span class="placeholder" data-placeholder="country"></span>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="add1" name="add1" placeholder="Address line 01" required value="<?php echo $add1; ?>">
                            <span class="placeholder" data-placeholder="Address line 01"></span>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="add2" name="add2" placeholder="Address line 02" value="<?php echo $add2; ?>">
                            <span class="placeholder" data-placeholder="Address line 02"></span>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="city" name="city" value="Pune" placeholder="Pune" required readonly="">
                            <span class="placeholder" data-placeholder="Town/City" value="pune"></span>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="city" name="state" value="Maharashtra" placeholder="Maharashtra" required readonly="">
                            <span class="placeholder" data-placeholder="Town/City" value="state"></span>
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="zip" name="zip" placeholder="Postcode/ZIP" required value="<?php echo $pincode; ?>">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="textarea" class="form-control" id="zip" name="Remark" placeholder="Remark">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="hidden" class="form-control" id="product_name" name="pname" placeholder="product Name" required value="<?php echo $pname; ?>">
                        </div>
                      <input type="hidden" name="password" value="<?php echo $password; ?>">
                      
                        <div class="text-center">
                          <input type="submit" class="button button-paypal" name="submit" value="Submit">
                        </div>
                    </form>
                </div>
                <?php } 
              } 
              ?>
            </div>
        </div>
    </div>
  </section>
  <!--================End Checkout Area =================-->



  <?php require_once('inc/footer.php'); ?>