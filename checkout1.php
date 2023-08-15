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
					<h1>Product Checkout</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Checkout</li>
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
                <div class="col-lg-12">
                  
                    <div class="order_box">
                        <h2>Your Order</h2>
                 
                        <ul class="list">
                            <li><a href="#"><h4>Product <span>Total</span></h4></a></li>
                                   <?php
                            include('inc/db.php');
                        
                        $email=$_SESSION["email"];
                        $view_arts_query="select * from customers_cart where email='$email'";//select query for viewing Parts.
                        $run=mysqli_query($db,$view_arts_query);//here run the sql query.

                        $idd = 0;
                        while($row=mysqli_fetch_array($run))
                        {
                          $idd++;
                            global $status;

                            $imageURL = 'admin/images/cart/'.$row["imageURL"];
                            
                            $id=$row['id'];
                            $imageURL=$row['imageURL'];
                            $product_name=$row['product_name'];
                            $product_price=$row['product_price'];
                            $product_unit=$row['product_unit'];
                            $product_quantity=$row['product_quantity'];
                            $subtotal=$row['subtotal'];
            
                    ?> 
                            <li><a href="#"><?php echo $product_name; ?><span class="middle">x <?php echo $product_quantity; ?></span> <span class="last">Rs. <?php echo $subtotal; ?></span></a></li>
                             <?php } ?>
                        </ul>
                     
                        <ul class="list list_2">
                          <?php
                            include('inc/db.php');
                        
                        $email=$_SESSION["email"];
                        $view_arts_query="select * from customers_cart where email='$email'";//select query for viewing Parts.
                        $run=mysqli_query($db,$view_arts_query);//here run the sql query.

                        $sql = "SELECT SUM(subtotal) AS subtotal FROM customers_cart where email='$email'";
                        $result = $db->query($sql);


                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                $t = $row["subtotal"];
                                $gt = $t + 30;
                            }
                        } else {
                            echo "0 results";
                        }
                    ?> 
                            <li><a href="#">Subtotal <span>Rs. <?php echo $t; ?></span></a></li>
                            <li><a href="#">Shipping <span>Flat rate: RS. 30.00</span></a></li>
                            <li><a href="#">Total <span>Rs. <?php echo $gt; ?></span></a></li>
                        </ul>
                      <!--   <div class="payment_item">
                            <div class="radion_btn">
                                <input type="radio" id="f-option5" name="selector">
                                <label for="f-option5">Cash On Delivery</label>
                                <div class="check"></div>
                            </div>
                            <p>Please send a check to Store Name, Store Street, Store Town, Store State / County,
                                Store Postcode.</p>
                        </div> -->
                       <!--  <div class="payment_item active">
                            <div class="radion_btn">
                                <input type="radio" id="f-option6" name="selector">
                                <label for="f-option6">Online Payment </label>
                                <img src="img/product/card.jpg" alt="">
                                <div class="check"></div>
                            </div>
                            
                        </div> -->
                        <div class="text-center">
                          <a class="button button-paypal" href="rozar.php?id=<?php echo $email; ?>">Proceed to Pay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
  <!--================End Checkout Area =================-->



  <?php require_once('inc/footer.php'); ?>