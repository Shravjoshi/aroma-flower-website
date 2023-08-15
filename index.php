<?php require_once('inc/top.php'); ?>
</head>
<body>
  <!--================ Start Header Menu Area =================-->
	<?php require_once('inc/header.php'); ?>

	<!--================ End Header Menu Area =================-->

  <main class="site-main">
    
    <!--================ Hero banner start =================-->
    <section class="hero-banner">
      <div class="container">
        <div class="row no-gutters align-items-center pt-60px">
          <div class="col-5 d-none d-sm-block">
            <div class="hero-banner__img">
              <img class="img-fluid" src="img/home/flowers.jpg" alt="">
            </div>
          </div>
          <div class="col-sm-7 col-lg-6 offset-lg-1 pl-4 pl-md-5 pl-lg-0">
            <div class="hero-banner__content">
              <h4>Shop is fun</h4>
              <h1>Browse Our Premium Product</h1>
              <p>Us which over of signs divide dominion deep fill bring they're meat beho upon own earth without morning over third. Their male dry. They are great appear whose land fly grass.</p>
              <a class="button button-hero" href="#">Browse Now</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ Hero banner start =================-->

    <!--================ Hero Carousel start =================-->
    <!-- <section class="section-margin mt-0 m" >
      <div class="owl-carousel owl-theme hero-carousel">
        <div class="hero-carousel__slide">
          <img src="img/home/flower1.jpg" alt="" class="img-fluid" href="category.php" style="height: 400px; padding:40px">
          <a href="category.php" class="hero-carousel__slideOverlay">
            <h3>Kandil</h3>
            <p>Accessories Item</p>
          </a>
        </div>
        <div class="hero-carousel__slide">
          <img src="img/home/flower2.jpg" alt="" class="img-fluid" href="panti.php" style="height: 400px; padding:40px;">
          <a href="panti.php" class="hero-carousel__slideOverlay">
            <h3>Panti</h3>
            <p>Accessories Item</p>
          </a>
        </div>
        <div class="hero-carousel__slide">
          <img src="img/home/flower3.jpg" alt="" class="img-fluid" style="height: 400px; padding:40px;">
          <a href="murti.php" class="hero-carousel__slideOverlay">
            <h3>Ganesh Murti</h3>
            <p>Accessories Item</p>
          </a>
        </div>
      </div>
    </section> -->
    <!--================ Hero Carousel end =================-->

    <!-- ================ trending product section start ================= -->  
    <section class="section-margin calc-60px">
      <div class="container">
        <div class="section-intro pb-60px">
          <p>Popular Item in the market</p>
          <h2>Trending <span class="section-intro__style">Product</span></h2>
        </div>
        <div class="row">
                <?php
                    include("inc/db.php");
                  

                    $view_arts_query="select * from products where category_name='Bouquet'";
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
                 <img src="<?php echo $imageURL; ?>" class="img-thumbnail" alt="...">
                <!-- <img class="card-img" src="<?php echo $imageURL; ?>" alt="" style="border: 1px solid #EEEEEE;"> -->
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
    <section class="section-margin calc-60px">
      <div class="container">
        <!-- <div class="section-intro pb-60px">
          <p>Popular Item in the market</p>
          <h2>Trending <span class="section-intro__style">Product</span></h2>
        </div> -->
        <div class="row">
                <?php
                    include("inc/db.php");
                  

                    $view_arts_query="select * from products where category_name='flowers'";
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
    <!-- ================ trending product section end ================= -->  


    <!-- ================ offer section start ================= --> 
  
    <!-- ================ offer section end ================= --> 

    <!-- ================ Best Selling item  carousel ================= --> 
   
    <!-- ================ Blog section end ================= -->  

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

    

  </main>


  <!--================ Start footer Area  =================-->	
	<?php require_once('inc/footer.php'); ?>