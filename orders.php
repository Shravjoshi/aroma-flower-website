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
					<h1>My Order Tracking</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Order Tracking</li>
            </ol>
          </nav>
				</div>
			</div>
        </div>
	</section>
	<!-- ================ end banner area ================= -->
  
  

  <!--================Cart Area =================-->
  <section class="cart_area">
      <div class="container">
          <div class="cart_inner">
              <div class="table-responsive">
                
                  <table class="table">
                      <thead>
                          <tr>
                            <!-- <th>Order ID</th> -->
                            <!-- <th>Product name</th> -->
                            <th>Product name</th>
                            <th>Status</th>
                            <th>Action</th>
                            <!-- <th>Cancel</th> -->
                            <th>Return</th>
                          </tr>
                      </thead>
                      <tbody>
                      <?php
        include("inc/db.php");
        $email=$_SESSION["email"];
        $view_arts_query="select * from orders where email='$email' AND (status='delivered') ORDER by id DESC;";//select query for viewing Parts.
        $run=mysqli_query($db,$view_arts_query);//here run the sql query.
        // echo $staus;


        $i=0;
        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
        	global $status;

        	//$imageURL = '../website/user/user_images/'.$row["user_image"];
        	$i++;
            $id=$row[0];
            $order_id=$row['order_id'];
            $fname=$row['fname'];
            $pname=$row['pname'];
            $email=$row['email'];
            $mobile=$row['mobile'];
            $address=$row['address'];
            // $order_date=$row['order_date'];
            $status=$row['status'];
            // $status = $row[7];
        ?> 
                          <tr>
                              <td>
                                  <div class="media">
                                      <div class="media-body">
                                          <p><?php echo $pname ?></p>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                <div class="media">
                                    <div class="media-body">
                                        <p><span style="background-color:red"; class="badge badge-primary"><?php echo $status ?></span></p>
                                    </div>
                                </div>
                              </td>
                              <td>
                                <div class="media">
                                    <div class="media-body">
                                    <a href="cust_order_details.php?user=<?php echo $order_id ?>"><input type="submit"class="btn btn-primary"  value="View Order"></a>  
                                    </div>
                                </div>
                              </td>
                              <!-- <td>
                                <div class="media">
                                    <div class="media-body">
                                    <a href="cust_order_details.php?user=<?php echo $order_id ?>"><input type="submit"class="btn btn-primary" name="delete" value="View Order"></a>  
                                    </div>
                                </div>
                              </td> -->
                              <td>
                                <div class="media">
                                    <div class="media-body">
                                    <a href="tpreturn.php?user=<?php echo $pname; ?>&<?php echo $email; ?>"><input type="submit"class="btn btn-primary"  value="Return"></a>  
                                    </div>
                                </div>
                              </td>
                          </tr>
                        <!-- /////////////////////// -->
                          <tr>
                              <td>
                              </td>
                              <!-- <td>
                                  <h5><a class="button" href="cancelfix.php">Cancel</a></h5>
                              </td>
                              <td>
                                  <h5><a class="button" href="#">Return</a></h5>
                              </td> -->
                              <!-- <td>
                                  <h5><a class="button" href="#"></a></h5>
                              </td> -->
                              <td>
                                
                              </td>
                          </tr>



                        <!-- /////////////////////// -->
                        <?php } ?>

                            <?php
                            include('inc/db.php');
                        
                        $email=$_SESSION["email"];
                        $view_arts_query="select * from customers_cart where email='$email' AND status='delivered'";//select query for viewing Parts.
                        $run=mysqli_query($db,$view_arts_query);//here run the sql query.

                        $sql = "SELECT SUM(subtotal) AS subtotal FROM customers_cart where email='$email'";
                        $result = $db->query($sql);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                $t = $row["subtotal"];
                            }
                        } else {
                            echo "0 results";
                        }

                      
                      //  $total = 0
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
                          }
                    ?> 
                    
                          <tr class="bottom_button">
                              <td>
                                  <!-- <a class="button" href="#">Update Cart</a> -->
                              </td>
                              <td>

                              </td>
                              <td>

                              </td>
                              
                              
                              <td>
                                  <div class="cupon_text d-flex align-items-center">
                                      
                                      <a class="primary-btn" href="index.php">Continue Shopping</a>
                                    
                                  </div>
                              </td>
                          </tr>
                          <tr>
                              <td>

                              </td>
                              <td>

                              </td>
                            
                              <td>
                                  <!-- <h5>Total Amount Rs.<?php //echo $t ?></h5> -->
                              </td>
                              
                          </tr>
                          <tr class="shipping_area">
                              
                              <td>

                              </td>
                              <td>
                                
                              </td> 
                              <td>
                                  <h5>Shipping Rate Rs. 50</h5>
                              </td>
                          </tr>
                          <tr class="out_button_area">
                              <td class="d-none-l">

                              </td>
                              <td>

                              </td>
                              <td>

                              </td>
                              <td>
                                
                              </td>
                              <td>
                                  <div class="checkout_btn_inner d-flex align-items-center">
                                      <!-- <a class="primary-btn ml-2" href="checkout.php">Proceed to checkout</a> -->
                                  </div>
                              </td>
                          </tr>
                       
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </section>
  <!--================End Cart Area =================-->
<?php require_once('inc/footer.php'); ?>