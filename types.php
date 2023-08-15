<?php require_once('inc/top.php'); ?>
<style>
 
#categories{
  overflow:hidden;
  width:90%;
  margin:0 auto;
}
.clr:after{
  content:"";
  display:block;
  clear:both;
}
#categories li{
  position:relative;
  list-style-type:none;
  width:27.85714285714286%; /* = (100-2.5) / 3.5 */
  padding-bottom: 32.16760145166612%; /* =  width /0.866 */
  float:left;
  overflow:hidden;
  visibility:hidden;
 
  -webkit-transform: rotate(-60deg) skewY(30deg);
  -ms-transform: rotate(-60deg) skewY(30deg);
  transform: rotate(-60deg) skewY(30deg);
}
#categories li:nth-child(3n+2){
  margin:0 1%;
}
#categories li:nth-child(6n+4){
  margin-left:0.5%;
}
#categories li:nth-child(6n+4), #categories li:nth-child(6n+5), #categories li:nth-child(6n+6) {
	margin-top: -6.9285714285%;
  margin-bottom: -6.9285714285%;
  
  -webkit-transform: translateX(50%) rotate(-60deg) skewY(30deg);
  -ms-transform: translateX(50%) rotate(-60deg) skewY(30deg);
  transform: translateX(50%) rotate(-60deg) skewY(30deg);
}
#categories li:nth-child(6n+4):last-child, #categories li:nth-child(6n+5):last-child, #categories li:nth-child(6n+6):last-child{
  margin-bottom:0%;
}
#categories li *{
  position:absolute;
  visibility:visible;
}
#categories li > div{
  width:100%;
  height:100%;
  text-align:center;
  color:#fff;
  overflow:hidden;
  
  -webkit-transform: skewY(-30deg) rotate(60deg);
  -ms-transform: skewY(-30deg) rotate(60deg);
  transform: skewY(-30deg) rotate(60deg);
  
	-webkit-backface-visibility:hidden;
  
}

/* HEX CONTENT */
#categories li img{
  left:-100%; right:-100%;
  width: auto; height:100%;
  margin:0 auto;   
}

#categories div h1, #categories div p{
  width:90%;
  padding:0 5%;
  background-color:#008080; background-color: rgba(0, 128, 128, 0.8);
  font-family: 'Raleway', sans-serif;
  
  -webkit-transition: top .2s ease-out, bottom .2s ease-out, .2s padding .2s ease-out;
  -ms-transition: top .2s ease-out, bottom .2s ease-out, .2s padding .2s ease-out;
  transition: top .2s ease-out, bottom .2s ease-out, .2s padding .2s ease-out;
}
#categories li h1{
  bottom:110%;
  font-style:italic;
  font-weight:normal;
  font-size:1.5em;
  padding-top:100%;
  padding-bottom:100%;
}
#categories li h1:after{
	content:'';
  display:block;
  position:absolute;
  bottom:-1px; left:45%;
  width:10%;
  text-align:center;
  z-index:1;
  border-bottom:2px solid #fff;
}
#categories li p{
	padding-top:50%;
	top:110%;
	padding-bottom:50%;
}


/* HOVER EFFECT  */

#categories li div:hover h1 {
  bottom:50%;
  padding-bottom:10%;
}

#categories li div:hover p{
  top:50%;
  padding-top:10%;
}

    </style>
</head>
<body>
  <!--================ Start Header Menu Area =================-->
  <?php require_once('inc/header.php'); ?>
  <!--================ End Header Menu Area =================-->

  <!-- ================ start banner area ================= --> 
  <section class="blog-banner-area" id="category"style="height:150px">
    <div class="container h-100">
      <div class="blog-banner">
        <div class="text-center">
          <h1>Festivel Categories</h1>
          <nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Categories</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ end banner area ================= -->
  <!-- ================ top product area start ================= -->  
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,800italic,400,700,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Raleway:400,700,300,200,100,900' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Amatic+SC:400,700' rel='stylesheet' type='text/css'>

<ul id="categories" class="clr">
  <!-- <li class="pusher"></li> -->
	<li>
      <div>
        <img src="img/home/fest.jpg" alt=""/>
        <h1>Pooja decor</h1>
        <p>Some sample text about the article this hexagon leads to<br>
        <a class="button button-header" href="category.php"Style="color:white">More</a></p>
    </div>
  </li>
    <li>
      <div>
        <img src="img/home/fest1.jpg" alt=""/>
        <h1>Home Decor</h1>
        <p>Some sample text about the article this hexagon leads to<br>
        <a class="button button-header" href="panti.php"Style="color:white">Panti</a></p>
    </div>
  </li>
  <li>
      <div>
        <img src="img/home/fest2.jpg" alt=""/>
        <h1>Wedding Decor</h1>
         <p>Some sample text about the article this hexagon leads to<br>
        <a class="button button-header" href="rakhi.php"Style="color:white">Rakhi</a></p>
    </div>
  </li>
  <li>
      <div>
        <img src="img/home/fest3.jpg" alt=""/>
        <h1>Birthday Decor</h1>
         <p>Some sample text about the article this hexagon leads to<br>
        <a class="button button-header" href="murti.php"Style="color:white">Ganpati</a></p>
    </div>
  </li>
  <!-- <li class="pusher"></li> -->
  <!-- <li>
      <div>
        <img src="https://farm7.staticflickr.com/6217/6216951796_e50778255c.jpg" alt=""/>
        <h1>Shirts</h1>
         <p>Some sample text about the article this hexagon leads to<br>
        <a class="button button-header" href="shirts.php"Style="color:white">Shirts</a></p>
    </div>
  </li> -->
  
  <li>
      <div>
        <img src="img/home/fest4.jpg" alt=""/>
        <h1>Baby Shower Decor</h1>
         <p>Some sample text about the article this hexagon leads to<br>
        <a class="button button-header" href="fatake.php"Style="color:white">Fatake</a></p>
    </div>
  </li>

   <li>
      <div>
        <img src="img/home/fest5.jpg" alt=""/>
        <h1>Congratulations ceremony</h1>
         <p>Some sample text about the article this hexagon leads to<br>
        <a class="button button-header" href="kristmas.php"Style="color:white">Kristmas</a></p>
    </div>
  </li>
  <li>
      <div>
        <img src="img/home/fest6.jpg" alt=""/>
        <h1>Valentine Decor</h1>
         <p>Some sample text about the article this hexagon leads to<br>
        <a class="button button-header" href="sankranti.php"Style="color:white">Sankranti</a></p>
    </div>
  </li>
 <li>
      <div>
        <img src="img/home/fest7.jpg" alt=""/>
        <h1>Bouquets</h1>
         <p>Some sample text about the article this hexagon leads to<br>
        <a class="button button-header" href="rangpanchami.php"Style="color:white;align-left:-100px">Rangpanchami</a></p>
    </div>
  </li>
</ul>

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