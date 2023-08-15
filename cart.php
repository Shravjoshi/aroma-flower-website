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
					<h1>Shopping Cart</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
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
                              <th scope="col">Product</th>
                              <th scope="col">Price</th>
                              <th scope="col">Quantity</th>
                              <th scope="col">Total</th>
                              <th scope="col">Delete</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php
                            include('inc/db.php');
                        
                        $email=$_SESSION["email"];
                        $view_arts_query="select * from customers_cart where email='$email' AND status='incart'";//select query for viewing Parts.UNION select * from orders where email='$email'
                        $run=mysqli_query($db,$view_arts_query);//here run the sql query.

                        $sql = "select SUM(subtotal) AS subtotal FROM customers_cart where email='$email' AND status='incart'";
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
                            // $status=$row['status'];
                    ?> 
                          <tr>
                              <td>
                                  <div class="media">
                                      <div class="d-flex">
                                          <img src="<?php echo $imageURL ?>" alt="" style="width: 200px; height: 200px;">
                                      </div>
                                      <div class="media-body">
                                          <p><?php echo $product_name ?></p>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <h5>RS. <?php echo $product_price ?></h5>
                              </td>
                              <td>
                                  <div class="product_count">
                                      <input type="text" name="qty" id="sst" maxlength="12" value="<?php echo $product_quantity ?>" title="Quantity:"
                                          class="input-text qty">
                                  </div>
                              </td>
                              <td>
                                  <h5>Rs. <?php echo $subtotal; ?></h5>
                              </td>
                              <td>
                                <ul>
                                  <li class="nav-item"><button><a href="pro_delete.php?del=<?php echo $id; ?>"><i class="ti-trash"></i></a></button></li>
                                </ul>
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
                        $view_arts_query="select * from customers_cart where email='$email' ";//select query for viewing Parts.
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
                                  <h5>Total Amount Rs.<?php echo $t ?></h5>
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
                                      <a class="primary-btn ml-2" href="checkout.php">Proceed to checkout</a>
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