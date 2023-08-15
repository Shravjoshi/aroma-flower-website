<?php require_once('inc/top.php'); ?>
</head>
<body>
	<!--================ Start Header Menu Area =================-->
	<?php require_once('inc/header.php'); ?>
	<!--================ End Header Menu Area =================-->
	
	<!-- ================ start banner area ================= -->	
	<section class="blog-banner-area" id="blog">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Product Details</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Shop Single</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
	<!-- ================ end banner area ================= -->


  <!--================Single Product Area =================-->
	<div class="product_image_area">
		<div class="container">
			<div class="row s_product_inner">
				<?php
                    include("inc/db.php");
                    $id=$_GET['id'];
                    $view_arts_query="select * from products where id='$id'";
                    $run=mysqli_query($db,$view_arts_query);

                    $t=0;
                    while($row=mysqli_fetch_array($run))
                     {
                        global $status;
                     $t++;
                     $imageURL = 'admin/images/products/'.$row["product_image"];
                     $id=$row['id'];
                     $category_name=$row['category_name'];
                     $product_name=$row['product_name'];
                     $product_price=$row['product_price'];
                     $product_description=$row['product_description'];
                     $uploaded_on=$row['uploaded_on'];
       
                ?>     
				<div class="col-lg-6">
					<div class="owl-carousel owl-theme s_Product_carousel">
						<div class="single-prd-item">
							<img class="img-fluid" src="<?php echo $imageURL; ?>" alt="" style="width: 400px;height: 400px;">
						</div>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
						<h3><?php echo $product_name; ?></h3>
						<h2>Rs.<?php echo $product_price; ?></h2>
						<ul class="list">
							<li><a class="active" href="#"><span>Category</span> : <?php echo $category_name; ?></a></li>
							<li><a href="#"><span>Availibility</span> : In Stock</a></li>
						</ul>
						<p><?php echo $product_description ?></p>
						<div class="product_count">
             				 <label for="qty">Quantity:</label>
             		 <form action="addtocart.php" method="POST" enctype="multipart/form-data">  

                    <input type="hidden" name="imageURL" value="<?php echo $imageURL; ?>">
                    <input type="hidden" name="product_name"  value="<?php echo $product_name; ?>">                 
                    <input type="hidden" name="pd_id"  value="<?php echo $id; ?>">                 
                    <!-- <input type="hidden" name="product_price" value="<?php echo $product_price; ?>">                  -->
                    <input type="hidden" name="category_name" value="<?php echo $category_name; ?>">                 
                    <input type="hidden" name="product_unit"  value="<?php echo $product_unit; ?>">             
                    <input type="hidden" name="product_price"  value="<?php echo $product_price; ?>">             
                    <!-- <input type="hidden" name="product_quantity" value="<?php echo $product_quantity; ?>">    -->
							<input type="text" name="product_quantity" id="sst" size="2" maxlength="12" value="1" title="Quantity:" class="input-text qty">
							
							<input type="submit" value="submit" class="btn primary-btn" name="submit1"></button>  
							</form>            
						</div>
						
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<!--================End Single Product Area =================-->

	<!--================Product Description Area =================-->
	
	<!--================ end related Product area =================-->  	

  <?php require_once('inc/footer.php'); ?>