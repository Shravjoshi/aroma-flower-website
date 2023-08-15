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
					<h1>Panti</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Product</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
	<!-- ================ end banner area ================= -->


	<!-- ================ category section start ================= -->		  
  <section class="section-margin calc-60px">
      <div class="container">
        <div class="section-intro pb-60px">
          <h2><span class="section-intro__style">Panti</span></h2>
        </div>
        <div class="row">
           <?php
                    include("inc/db.php");
                  

                    $view_arts_query="select * from products where category_name='Panti'";
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

          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <img class="card-img" src="<?php echo $imageURL; ?>" alt="" style="border: 1px solid #EEEEEE;">
                <ul class="card-product__imgOverlay">
                  <li><button><a href="single-product.php?id=<?php echo $id; ?>"><i class="ti-search"></i></a></button></li>
                  <li><button><a href="single-product.php?id=<?php echo $id; ?>"><i class="ti-shopping-cart"></i></a></button></li>
                  <li><button><a href="single-product.php?id=<?php echo $id; ?>"><i class="ti-heart"></i></a></button></li>
                </ul>
              </div>
              <div class="card-body" style="border: 1px solid #EEEEEE;">
                <p><?php echo $category_name; ?></p>
                <h4 class="card-product__title"><a href="single-product.php?id=<?php echo $id; ?>"><?php echo $product_name; ?></a></h4>
                <p class="card-product__price">Rs. <?php echo $product_price; ?></p>
              </div>
            </div>
          </div>
<?php } ?>
        </div>
      </div>
    </section>
	<!-- ================ category section end ================= -->		  

	<!-- ================ top product area start ================= -->	
	
	<!-- ================ top product area end ================= -->		

	<!-- ================ Subscribe section start ================= -->		  
  <section class="subscribe-position">
    <div class="container">
      <div class="subscribe text-center">
        <h3 class="subscribe__title">Get Update From Anywhere</h3>
        <p>Bearing Void gathering light light his eavening unto dont afraid</p>
        <div id="mc_embed_signup">
          <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe-form form-inline mt-5 pt-1">
            <div class="form-group ml-sm-auto">
              <input class="form-control mb-1" type="email" name="EMAIL" placeholder="Enter your email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '" >
              <div class="info"></div>
            </div>
            <button class="button button-subscribe mr-auto mb-1" type="submit">Subscribe Now</button>
            <div style="position: absolute; left: -5000px;">
              <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
            </div>

          </form>
        </div>
        
      </div>
    </div>
  </section>
	<!-- ================ Subscribe section end ================= -->		  


  <?php require_once('inc/footer.php'); ?>