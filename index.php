<?php
$page ='index';
?>
<?php include 'inc/head.php'; ?>

<title>Ivas</title>
<meta name="description" content="">
<link rel="canonical" href="">
<script type="text/javascript" src="./js/jquery-1.10.2.min.js"></script>
<?php include 'inc/header.php'; ?>

 
<div class="bg-body-light-gray">


<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">


    <div class="carousel-item active">
       <img src="images/tiles-home-banner.jpg" alt="" title="" width="1920" height="1080">
       
          <div class="carousel-caption text-start">
          <div class="container">
            <h2>From Classic to Modern, <br>We Have The Perfect <br>Tiles For You</h2>
            
            <div class="explore-btn"><a class="btn btn-lg btn-light rounded-circle px-5" href="tiles">Explore</a></div>
          </div>
        </div>
      </div>


      <div class="carousel-item">
       <img src="images/b.jpg" alt="" title="" width="1920" height="1080">
       
          <div class="carousel-caption text-start">
          <div class="container">
            <h2>Tiles That Will Make <br>Your Home Shine</h2>
            
            <div class="explore-btn"><a class="btn btn-lg btn-light rounded-circle px-5" href="tiles">Explore</a></div>
          </div>
        </div>
      </div>

      <div class="carousel-item">
       <img src="images/d.jpg" alt="" title="" width="1920" height="1080">
       
          <div class="carousel-caption text-start">
          <div class="container">
            <h2>Sleek, Modern Design <br>That Will Complement <br>Any Bathroom Décor</h2>
            
            <div class="explore-btn"><a class="btn btn-lg btn-light rounded-circle px-5" href="sanitaryware">Explore</a></div>
          </div>
        </div>
      </div>

      <div class="carousel-item">
       <img src="images/f.jpg" alt="" title="" width="1920" height="1080">
       
          <div class="carousel-caption text-start">
          <div class="container">
            <h2>The Perfect Way to <br>Add Luxury to <br>Your Bathroom</h2>
            
            <div class="explore-btn"><a class="btn btn-lg btn-light rounded-circle px-5" href="bath-fittings">Explore</a></div>
          </div>
        </div>
      </div>



   <!-- <div class="carousel-item">
       <img src="images/banner-2.webp" alt="" title="" width="1920" height="1080">
       
          <div class="carousel-caption text-start">
          <div class="container">
            <h2>Intelligent <br>Products for the <br>Intelligent <br>Homemaker</h2>
            
            <div class="explore-btn"><a class="btn btn-lg btn-light rounded-circle px-5" href="#">Explore</a></div>
          </div>
        </div>
      </div>

      <div class="carousel-item">
       <img src="images/banner.webp" alt="" title="" width="1920" height="1080">
        
          <div class="carousel-caption text-start">
          <div class="container">
            <h2>Intelligent Products for the Intelligent Homemaker</h2>
            
            <div class="explore-btn"><a class="btn btn-lg btn-light rounded-circle px-5" href="sanitaryware">Explore</a></div>
          </div>
        </div>
      </div>-->
      
	  
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  
  <div class="product-slide my-5">
<div class="container" >
<h2>Explore the world of IVAS</h2>
</div>

<section class="carousel-section">
  <div class="carousel-container">


  <div class="nonloop owl-carousel owl-theme" id="home-cat00">
            <div class="item"><a href="modular-kitchen">
			 <img src="images/Modular-Kitchen.jpg" alt="" title="" width="367" height="367">
              <h4>Modular Kitchens</h4></a>
            </div>
            <div class="item"><a href="designer-hardware">
             <img src="images/hardware-designer.jpg" alt="" title="" width="367" height="367">
              <h4>Designer Hardware</h4></a>
            </div>
            <div class="item"><a href="sanitaryware">
             <img src="images/sanitaryare.jpg" alt="" title="" width="367" height="367">
              <h4>Sanitaryware</h4></a>
            </div>
            <div class="item"><a href="tiles">
             <img src="images/tiles-1.jpg" alt="" title="" width="367" height="367">
              <h4>Tiles</h4></a>
            </div>
            <div class="item"><a href="bath-fittings">
             <img src="images/bath-fittings.jpg" alt="" title="" width="367" height="367">
              <h4>Bath Fittings</h4></a>
            </div>
            
           
          </div>  </div>  </section>  </div>
 
  
  
		  
<div class="container my-5 mb-5">

<h2 class="mb-3">About Us</h2>
<div class="row mb-5">
<div class="col-sm-4 mb-3">
<div class="planning">
  
<p>IVAS bring you the best Modular Kitchens, Sanitaryware, Bath Fittings, Tiles & Designer Hardware.<br> IVAS is a one stop shop for all your home makeover reqirements & needs.</p>
</div>


<div class="home-intelligently">



<!-- popup the ivas story-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content p-4">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">IVAS STORY</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <p>IVAS derives its identity from the Sanskrit word NIVAS, which means Home. Every Nivas should look different and Unique and this is the core purpose of the Brand IVAS. IVAS offers a wide range of products that help a consumer build their home as per their own taste and preferences. Equipped with latest contemporary designs suited to the Indian consumer’s taste in categories like Tiles, Sanitaryware, Bath Fittings, Fans, Lights, Modular Kitchens, Customized Furniture and Designer Hardware, IVAS is well poised to become the world’s first brand offering such a wide range of products for home construction. IVAS truly believes that our homes are actual living beings, whose wellbeing directly affects our happiness. Our homes are our true extended family which needs to be taken care of too. It is where memories are made, and families’ bond. Therefore, by providing high involvement home construction products, IVAS is helping its consumers take pride in transforming their Homes into one of their own family members whose care their can take like they would do for any other member in family. In a short span of time, Consumers have already started to appreciate the brand's attention to detail, its international appeal and the wide range of product options that it has to offer in each category.</p> 
      </div>
    </div>
  </div>
</div>


<!-- popup the IVAS PROMISE-->
<div class="modal fade" id="promises" tabindex="-1" aria-labelledby="ivas-promise" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content p-4">
      <div class="modal-header">
        <h2 class="modal-title" id="ivas-promise">IVAS PROMISE</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <p>The IVAS Promise is a commitment that the brand makes to its customers. It is a pledge to provide nothing but the best both in terms of products and services. </p>

      <ul>
<li><b>Quality:</b> IVAS promises to provide products that are made from high-quality materials and crafted with care. The brand believes that quality is the foundation of a good product and therefore all Products are manufactured in state-of-the-art manufacturing plants and designed to last a lifetime when you choose IVAS for your Home.</li>
<li><b>Innovation:</b> IVAS promises to stay at the forefront of fashion and technology, bringing the latest trends and innovations to its customers due to its inhouse panel of internationally acclaimed designers. The brand is constantly exploring new ideas and finding ways to improve its products and services so that you get the best and latest trends whenever you begin your process of your home construction or renovation.</li>
<li><b>Pricing:</b> IVAS had a wide range of products in all categories. It understands that making a home is an emotional decision but always starts first with making a budget as per each family’s requirements, which must not be overshot during the process of construction. Therefore, all IVAS Products are High on Design but provide Best Value for Money.</li>
<li><b>Customer Satisfaction:</b> IVAS promises to put its customers first, providing solutions that meet their needs and preferences. The brand acknowledges that making a home or renovating it, is both a joyful but at the same time a difficult activity and any kind of delay in the availability or quality of products purchased can make it more stressful. Therefore, IVAS has a high quality and a wide range, as well as an expert customer care team equipped to solve product issues across all categories. Non-Availability of Products during the process or construction or renovation of your home or any other product-related issue should never be a reason for delay in project execution and this is the most important IVAS promise to its customers.</li>

      </ul>
      </div>
    </div>
  </div>
</div>
  
<a href="about-us.php">
  <div class="geeks rounded">
<img src="images/gallery_08.jpg" class="rounded" alt="" width="367" height="367"></div>
<div class="home-intelligently-sec">
<h5>The IVAS story</h5>
<div class="btn btn-link">Know our journey <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
</div>
</a>
</div>

</div>
<div class="col-sm-4 mb-3">
<div class="home-intelligently">
<a href="ivas-promise.php">
<div class="geeks rounded">
<img src="images/gallery_03.jpg" class="rounded" alt="" width="367" height="367"></div>
<div class="home-intelligently-sec">
<h5>The IVAS Promise</h5>
<div class="btn btn-link">Read what sets us apart from the rest <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
</div>
</a>
</div>

</div>

<div class="col-sm-4">
<div class="home-intelligently mb-3">
<a href="download-catalogue.php">
<div class="geeks rounded">
<img src="images/gallery_05.jpg" alt="" class="rounded" width="367" height="367"></div>
<div class="home-intelligently-sec">
<h5>Download Catalogues</h5>

</div>
</a>
</div>

<div class="home-intelligently"><div class="geeks rounded">
<img src="images/gallery_11.jpg" alt="" class="rounded" width="367" height="235"></div>
<div class="home-intelligently-sec">
<h5>Get inspired daily on</h5>
<div class="follow-us mt-2">
<p class="mb-0"><a href="https://www.facebook.com/HomesIvas" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a> <a href="https://www.instagram.com/ivas.homes/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>  <a href="https://twitter.com/IvasHomes" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>  <a href="https://www.linkedin.com/company/90835972/admin/" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> <a href="https://in.pinterest.com/IvasHomes/" target="_blank"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a> <a href="https://www.youtube.com/@ivashomes" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></p>
</div>
</div></div>


</div>
</div>
 
 
<div class="row treding-section topspace-u">
  <div class="col-sm-4 mb-3">
<div class="card gray-dark-bg px-3 height-100">

  <div class="card-body text-left para-large">
  <img class="image-auto-width mt-3" src="images/next.png" alt="" width="78" height="73">
    <h2 class="card-title mt-3 mb-3">Modular Kitchens</h2>
    <p>Beautiful. Efficient. Personalised. Long Lasting. Just some of the reasons why people are falling 
in love with us.</p>

  <div class="trending-design-btn">
    <a href="modular-kitchen" class="btn btn-link text-white">Explore Designs <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
  </div>  </div>
</div></div>
  <div class="col-sm-4 mb-3">
  <a href="modular-kitchen/products.php?category=Straight-Kitchen">
<div class="card shadow-sm one-sec-img-text overflow-hidden rounded"><div class="geeks">
  <img class="card-img-top" src="images/gallery.jpg" alt="" width="367" height="367"></div>
  <div class="card-body text-center mx-4 pb-4">
  <h6 class="card-title">Straight kitchen</h6>
    <h5 class="card-title">Best suited for small apartments & studios</h5>

  <div class="btn btn-link">Explore <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
  </div>
</div>
</a>
</div>

<div class="col-sm-4 mb-3">
<a href="modular-kitchen/products.php?category=Parallel-Kitchen">
<div class="card shadow-sm one-sec-img-text overflow-hidden rounded"><div class="geeks">
  <img class="card-img-top" src="images/two-wall-gallery.jpg" alt="" width="367" height="367"></div>
  <div class="card-body text-center mx-4 pb-4">
  <h6 class="card-title">Parallel Kitchen</h6>
    <h5 class="card-title">Best for larger spaces with 2 parallel walls</h5>

  <div class="btn btn-link">Explore <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
  </div>
</div>
</a>
</div>
<div class="col-sm-4 mb-3">
<a href="modular-kitchen/products.php?category=L-Shaped-Kitchen">
<div class="card shadow-sm one-sec-img-text overflow-hidden rounded"><div class="geeks">
  <img class="card-img-top" src="images/dining-and-living-spaces.jpg" alt="" width="367" height="367"></div>
  <div class="card-body text-center mx-4 pb-4">
  <h6 class="card-title">L-Shape kitchen</h6>
    <h5 class="card-title">Best for integrating kitchen with dining & living spaces</h5>

  <div class="btn btn-link">Explore <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
  </div>
</div>
</a>
</div>
<div class="col-sm-4 mb-3">
<a href="modular-kitchen/products.php?category=C-Shaped-Kitchen">
<div class="card shadow-sm one-sec-img-text overflow-hidden rounded"><div class="geeks">
  <img class="card-img-top" src="images/storage-spaces.jpg" alt="" width="367" height="367"></div>
  <div class="card-body text-center mx-4 pb-4">
  <h6 class="card-title">C-Shape kitchen</h6>
    <h5 class="card-title">For those who prefer lots of counter & storage spaces</h5>

  <div class="btn btn-link">Explore <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
  </div>
</div>
</a>
</div>
<div class="col-sm-4 mb-3">
<a href="modular-kitchen/products.php?category=Island-Kitchen">
<div class="card shadow-sm one-sec-img-text overflow-hidden rounded"><div class="geeks">
  <img class="card-img-top" src="images/preparation-serving-and-dining.jpg" alt="" width="367" height="367"></div>
  <div class="card-body text-center mx-4 pb-4">
  <h6 class="card-title">Island kitchen</h6>
    <h5 class="card-title">Can be used for preparation, serving & dining</h5>

  <div class="btn btn-link">Explore <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
  </div>
</div>
</a>
</div>

</div>	</div>	  



<!--<div class="product-slide my-4">
<div class="container">
<h2>Top categories in furniture</h2>
</div>


<section class="carousel-section">
  <div class="carousel-container">
  <div class="nonloop owl-carousel owl-theme">
            <div class="item shadow-sm">
            <a href="#">
            <div class="card one-sec-img-text">
  <img class="card-img-top" src="images/beds.png" alt="">
  <div class="card-body text-center px-4 pb-4 bg-light">
  <h6 class="card-title">bedroom furniture</h6>
    <h5 class="card-title">Beds with storage spaces</h5>

  <div class="btn btn-link">See Collection <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
  </div>
</a>
</div>
            </div>
            
            <div class="item shadow-sm">
			<a href="#">
            <div class="card one-sec-img-text">
  <img class="card-img-top" src="images/sofa.png" alt="">
  <div class="card-body text-center px-4 pb-4 bg-light">
  <h6 class="card-title">living room furniture</h6>
    <h5 class="card-title">Armschairs & lounge chairs</h5>

  <div class="btn btn-link">Explore <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
  </div>
  </a>
</div>
            </div>
            <div class="item shadow-sm">
			<a href="#">
            <div class="card one-sec-img-text">
  <img class="card-img-top" src="images/tv-unit.png" alt="">
  <div class="card-body text-center px-4 pb-4 bg-light">
  <h6 class="card-title">living room furniture</h6>
    <h5 class="card-title">TV Units & Book Cases</h5>

  <div class="btn btn-link">Explore <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
  </div>
  </a>
</div>
            </div>
            <div class="item shadow-sm">
			<a href="#">
            <div class="card one-sec-img-text">
  <img class="card-img-top" src="images/sofa.png" alt="">
  <div class="card-body text-center px-4 pb-4 bg-light">
  <h6 class="card-title">One wall Gallery	</h6>
    <h5 class="card-title">Dummy Caption please</h5>

  <div class="btn btn-link">Explore <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
  </div>
  </a>
</div>
            </div>
            
 </div>
            </div>
			</section>
          </div>-->



          <div class="product-slide my-4">
<div class="container">
<h2>Explore IVAS Designer Hardware</h2>
</div>


<section class="carousel-section">
  <div class="carousel-container">
  <div class="nonloop owl-carousel owl-theme">
            <div class="item shadow-sm">
            <a href="designer-hardware/products.php?category=Mortise-Handles">
            <div class="card one-sec-img-text">
  <img class="card-img-top" src="images/home-page-mortise-handle.webp" alt="" width="700" height="700">
  <div class="card-body text-center px-4 pb-4 bg-light">
  <h6 class="card-title">Mortise Handles</h6>
    <h5 class="card-title">Elegant handles for any decor</h5>

  <div class="btn btn-link">See Collection <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
  </div>
</a>
</div>
            </div>


            <div class="item shadow-sm">
			<a href="designer-hardware/products.php?category=Pull-Handles">
            <div class="card one-sec-img-text">
  <img class="card-img-top" src="images/home-page-pul-handle.jpg" alt="" width="700" height="700">
  <div class="card-body text-center px-4 pb-4 bg-light">
  <h6 class="card-title">Pull Handles</h6>
    <h5 class="card-title">Timeless design for your doors</h5>

  <div class="btn btn-link">See Collection <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
  </div>
  </a>
</div>
            </div>


            
            <div class="item shadow-sm">
			<a href="designer-hardware/products.php?category=Aldrops">
            <div class="card one-sec-img-text">
  <img class="card-img-top" src="images/home-page-aldrops.jpg" alt="" width="700" height="700">
  <div class="card-body text-center px-4 pb-4 bg-light">
  <h6 class="card-title">Aldrop Antique</h6>
    <h5 class="card-title">Timeless design for your doors</h5>

  <div class="btn btn-link">See Collection <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
  </div>
  </a>
</div>
            </div>
            <div class="item shadow-sm">
			<a href="designer-hardware/products.php?category=Door-Stoppers">
            <div class="card one-sec-img-text">
  <img class="card-img-top" src="images/home-page-door-stopers.jpg" alt="" width="700" height="700">
  <div class="card-body text-center px-4 pb-4 bg-light">
  <h6 class="card-title">Door Stoppers</h6>
    <h5 class="card-title">Elevate your door design</h5>

  <div class="btn btn-link">See Collection <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
  </div>
  </a>
</div>
            </div>
            <div class="item shadow-sm">
			<a href="designer-hardware/products.php?category=Tower-Bolts">
            <div class="card one-sec-img-text">
  <img class="card-img-top" src="images/home-page-tower-bolts.jpg" alt="" width="700" height="700">
  <div class="card-body text-center px-4 pb-4 bg-light">
  <h6 class="card-title">Tower Bolts</h6>
    <h5 class="card-title">Secure your space in style</h5>

  <div class="btn btn-link">See Collection <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
  </div>
  </a>
</div>
</div>


<div class="item shadow-sm">
			<a href="designer-hardware/products.php?category=Pin-Cylinders">
            <div class="card one-sec-img-text">
  <img class="card-img-top" src="images/home-page-cylinders.jpg" alt="" width="700" height="700">
  <div class="card-body text-center px-4 pb-4 bg-light">
  <h6 class="card-title">Pin Cylinders</h6>
    <h5 class="card-title">Keep your doors safe</h5>

  <div class="btn btn-link">See Collection <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
  </div>
  </a>
</div>
</div>



<div class="item shadow-sm">
			<a href="designer-hardware/products.php?category=Lock-Body">
            <div class="card one-sec-img-text">
  <img class="card-img-top" src="images/sutton.jpg" alt="" width="700" height="700">
  <div class="card-body text-center px-4 pb-4 bg-light">
  <h6 class="card-title">Lock Bodies</h6>
    <h5 class="card-title">Designed for enhanced security</h5>

  <div class="btn btn-link">See Collection <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
  </div>
  </a>
</div>
</div>



<div class="item shadow-sm">
			<a href="designer-hardware/products.php?category=Hinges">
            <div class="card one-sec-img-text">
  <img class="card-img-top" src="images/home-page-hinges.jpg" alt="" width="700" height="700">
  <div class="card-body text-center px-4 pb-4 bg-light">
  <h6 class="card-title">Hinges</h6>
    <h5 class="card-title">Experience the perfect movement</h5>

  <div class="btn btn-link">See Collection <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
  </div>
  </a>
</div>
</div>


<div class="item shadow-sm">
			<a href="designer-hardware/products.php?category=Drawer-Channels">
            <div class="card one-sec-img-text">
  <img class="card-img-top" src="images/home-page-channels.webp" alt="" width="700" height="700">
  <div class="card-body text-center px-4 pb-4 bg-light">
  <h6 class="card-title">Drawer Channels</h6>
    <h5 class="card-title">Smooth and silent functionality</h5>

  <div class="btn btn-link">See Collection <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
  </div>
  </a>
</div>
</div>

            
 </div>
            </div>
			</section>
          </div>
		  
		  
		  
		  <div class="product-slide my-4">
<div class="container">
<h2>Explore IVAS Sanitaryware</h2>
</div>


<section class="carousel-section">
  <div class="carousel-container">
  <div class="nonloop owl-carousel owl-theme">


  
  <div class="item shadow-sm">
			<a href="sanitaryware/products.php?type=Smart-Intelligent-Toilet">
            <div class="card one-sec-img-text">
  <img class="card-img-top" src="images/products/sanitaryware/water-closets/smart-intelligent-toilet/amadeo/amadeo-1.webp" alt="" width="700" height="700">
  <div class="card-body text-center px-4 pb-4 bg-light">
  <h6 class="card-title">Smart Intelligent Toilets</h6>
    <h5 class="card-title">Experience luxury, embrace innovation.</h5>

  <div class="btn btn-link">See Collection <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
  </div>
  </a>
</div>
            </div>


  <div class="item shadow-sm">
            <a href="sanitaryware/products.php?category=Wash-Basins">
            <div class="card one-sec-img-text">
  <img class="card-img-top" src="images/home-page-wash-basin.webp" alt="" width="700" height="700">
  <div class="card-body text-center px-4 pb-4 bg-light">
  <h6 class="card-title">Wash basins</h6>
    <h5 class="card-title">In your favourite shapes & colours</h5>

  <div class="btn btn-link">See Collection <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
  </div>
</a>
</div>
            </div>

  <div class="item shadow-sm">
			<a href="sanitaryware/products.php?category=Water-Closets">
            <div class="card one-sec-img-text">
  <img class="card-img-top" src="images/home-page-water-closet.webp" alt="" width="700" height="700">
  <div class="card-body text-center px-4 pb-4 bg-light">
  <h6 class="card-title">Water Closets</h6>
    <h5 class="card-title">Designed for style, comfort & hygiene</h5>

  <div class="btn btn-link">See Collection <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
  </div>
  </a>
</div>
            </div>



            
            
          <!--  <div class="item shadow-sm">
			<a href="sanitaryware/products.php?category=Bath-tubs">
            <div class="card one-sec-img-text">
  <img class="card-img-top" src="images/home-page-bath-tub.webp" alt="" width="700" height="700">
  <div class="card-body text-center px-4 pb-4 bg-light">
  <h6 class="card-title">Bath Tub</h6>
    <h5 class="card-title">Experience spa-like comfort</h5>

  <div class="btn btn-link">See Collection <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
  </div>
  </a>
</div>
            </div>


            <div class="item shadow-sm">
			<a href="sanitaryware/products.php?category=Shower-Enclosures">
            <div class="card one-sec-img-text">
  <img class="card-img-top" src="images/home-page-shower-encloser.webp" alt="" width="700" height="700">
  <div class="card-body text-center px-4 pb-4 bg-light">
  <h6 class="card-title">Shower Enclosures</h6>
    <h5 class="card-title">Transform your shower time</h5>

  <div class="btn btn-link">See Collection <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
  </div>
  </a>
</div>
            </div>-->


            
 </div>
            </div>
			</section>
          </div>
		  
		  
		  <div class="product-slide my-4">
<div class="container">
<h2>Explore IVAS Tiles</h2>
</div>


<section class="carousel-section">
  <div class="carousel-container">
  <div class="nonloop owl-carousel owl-theme">
            <div class="item shadow-sm">
            <a href="tiles/products.php?app=Floor-Tiles">
            <div class="card one-sec-img-text">
  <img class="card-img-top" src="images/home-page-GVT-Slabs.webp" alt="" width="700" height="700">
  <div class="card-body text-center px-4 pb-4 bg-light">
  <h6 class="card-title">Floor Tiles</h6>
    <h5 class="card-title">Tiles that will last for years</h5>

  <div class="btn btn-link">See Collection <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
  </div>
</a>
</div>
            </div>
            
            <div class="item shadow-sm">
			<a href="tiles/products.php?category=GVT">
            <div class="card one-sec-img-text">
  <img class="card-img-top" src="images/Home-page-GVT.webp" alt="" width="700" height="700">
  <div class="card-body text-center px-4 pb-4 bg-light">
  <h6 class="card-title">GVT</h6>
    <h5 class="card-title">For kitchens, bathrooms & more </h5>

  <div class="btn btn-link">See Collection <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
  </div>
  </a>
</div>
            </div>
            <div class="item shadow-sm">
			<a href="tiles/products.php?app=Wall-Tiles">
            <div class="card one-sec-img-text">
  <img class="card-img-top" src="images/home-page-wall-tiles.webp" alt="" width="700" height="700">
  <div class="card-body text-center px-4 pb-4 bg-light">
  <h6 class="card-title">Wall tiles</h6>
    <h5 class="card-title">All sizes. Many designs.</h5>

  <div class="btn btn-link">See Collection <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
  </div>
  </a>
</div>
            </div>
            <div class="item shadow-sm">
			<a href="tiles/products.php?category=Monocotta">
            <div class="card one-sec-img-text">
  <img class="card-img-top" src="images/river-edge.webp" alt="" width="700" height="700">
  <div class="card-body text-center px-4 pb-4 bg-light">
  <h6 class="card-title">Monocotta</h6>
    <h5 class="card-title">Subtle, stylish and timeless</h5>

  <div class="btn btn-link">See Collection <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
  </div>
  </a>
</div>
            </div>

<!--<div class="item shadow-sm">
			<a href="tiles/products.php?category=Monocotta">
            <div class="card one-sec-img-text">
  <img class="card-img-top" src="images/home-page-monocotta.webp" alt="" width="700" height="700">
  <div class="card-body text-center px-4 pb-4 bg-light">
  <h6 class="card-title">Monocotta</h6>
    <h5 class="card-title">Impress with striking designs</h5>

  <div class="btn btn-link">See Collection <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
  </div>
  </a>
</div>
            </div>-->

<div class="item shadow-sm">
			<a href="tiles/products.php?category=Elevation">
            <div class="card one-sec-img-text">
  <img class="card-img-top" src="images/home-page-elevation.webp" alt="" width="700" height="700">
  <div class="card-body text-center px-4 pb-4 bg-light">
  <h6 class="card-title">Elevation</h6>
    <h5 class="card-title">Add beauty and durability to your home</h5>

  <div class="btn btn-link">See Collection <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
  </div>
  </a>
</div>
            </div>

<div class="item shadow-sm">
			<a href="tiles/products.php?category=Parking">
            <div class="card one-sec-img-text">
  <img class="card-img-top" src="images/home-page-Parking-Tile.webp" alt="" width="700" height="700">
  <div class="card-body text-center px-4 pb-4 bg-light">
  <h6 class="card-title">Parking</h6>
    <h5 class="card-title">Tiles that last a lifetime</h5>

  <div class="btn btn-link">See Collection <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
  </div>
  </a>
</div>
            </div>



            </div>
            
 </div>
            </div>
			</section>
          </div>

  
  		  <div class="product-slide my-4">
<div class="container">
<h2>Explore IVAS Bath Fittings</h2>
</div>


<section class="carousel-section">
  <div class="carousel-container">
  <div class="nonloop owl-carousel owl-theme">
            <div class="item shadow-sm">
            <a href="bath-fittings/products.php?category=Faucets">
            <div class="card one-sec-img-text">
  <img class="card-img-top" src="images/home-page-faucets.webp" alt="" width="700" height="700">
  <div class="card-body text-center px-4 pb-4 bg-light">
  <h6 class="card-title">Faucets</h6>
    <h5 class="card-title"> Crafted for elegance</h5>

  <div class="btn btn-link">See Collection <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
  </div>
</a>
</div>
            </div>
            

            <div class="item shadow-sm">
			<a href="bath-fittings/products.php?type=Over-Head-Showers">
            <div class="card one-sec-img-text">
  <img class="card-img-top" src="images/home-page-showers.webp" alt="" width="700" height="700">
  <div class="card-body text-center px-4 pb-4 bg-light">
  <h6 class="card-title">Overhead Showers</h6>
    <h5 class="card-title">Shower in style & comfort</h5>

  <div class="btn btn-link">See Collection <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
  </div>
  </a>
</div>
            </div>
            <div class="item shadow-sm">
			<a href="bath-fittings/products.php?category=Shower-Panels">
            <div class="card one-sec-img-text">
  <img class="card-img-top" src="images/home-page-shower-panel.webp" alt="" width="700" height="700">
  <div class="card-body text-center px-4 pb-4 bg-light">
  <h6 class="card-title">Showers Panels</h6>
    <h5 class="card-title">Experience showering nirvana</h5>

  <div class="btn btn-link">See Collection <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
  </div>
  </a>
</div>
            </div>



<div class="item shadow-sm">
<a href="bath-fittings/products.php?category=Shower-Sets">
<div class="card one-sec-img-text">
  <img class="card-img-top" src="images/home-page-shower-sets.webp" alt="" width="700" height="700">
  <div class="card-body text-center px-4 pb-4 bg-light">
  <h6 class="card-title">Showers Sets</h6>
 <h5 class="card-title">Elevate your bathroom style</h5>
  <div class="btn btn-link">See Collection <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
  </div>
  </a>
</div>
</div>






<div class="item shadow-sm">
<a href="bath-fittings/products.php?category=Bath-Accessories">
<div class="card one-sec-img-text">
  <img class="card-img-top" src="images/home-page-bath-accessories.webp" alt="" width="700" height="700">
  <div class="card-body text-center px-4 pb-4 bg-light">
  <h6 class="card-title">Bath Accessories</h6>
 <h5 class="card-title">Accessories that impress</h5>
  <div class="btn btn-link">See Collection <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
  </div>
  </a>
</div>
</div>



<!-- <div class="item shadow-sm">
<a href="bath-fittings/products.php?category=Smart-Kitchen-Sink">
<div class="card one-sec-img-text">
  <img class="card-img-top" src="images/home-page-kitchen-sink.webp" alt="" width="700" height="700">
  <div class="card-body text-center px-4 pb-4 bg-light">
  <h6 class="card-title">Kitchen Sinks & Smart Kitchen Sinks</h6>
 <h5 class="card-title">Smart solutions for modern kitchens</h5>
  <div class="btn btn-link">See Collection <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
  </div>
  </a>
</div>
</div>

<div class="item shadow-sm">
<a href="bath-fittings/products.php?category=Exclusive-Sink-Faucets">
<div class="card one-sec-img-text">
  <img class="card-img-top" src="images/home-page-exclusive-sink-faucets.webp" alt="" width="700" height="700">
  <div class="card-body text-center px-4 pb-4 bg-light">
  <h6 class="card-title">Exclusive Sink Faucets</h6>
 <h5 class="card-title">Turn your sink into a statement</h5>
  <div class="btn btn-link">See Collection <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
  </div>
  </a>
</div>
</div> -->

<!--<div class="item shadow-sm">
<a href="#">
<div class="card one-sec-img-text">
  <img class="card-img-top" src="images/home-page-mirrors.webp" alt="" width="700" height="700">
  <div class="card-body text-center px-4 pb-4 bg-light">
  <h6 class="card-title">Mirrors</h6>
 <h5 class="card-title">A mirror to suit your every mood</h5>
  <div class="btn btn-link">See Collection <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
  </div>
  </a>
</div>
</div>-->





           
 </div>
            </div>
			</section>
          </div>
		  
		  		 <!-- <div class="product-slide my-4">
<div class="container">
<h2>Top categories in decorative elecricals</h2>
</div>


<section class="carousel-section">
  <div class="carousel-container">
  <div class="nonloop owl-carousel owl-theme">
            <div class="item shadow-sm">
            <a href="#">
            <div class="card one-sec-img-text">
  <img class="card-img-top" src="images/lamps.png" alt="">
  <div class="card-body text-center px-4 pb-4 bg-light">
  <h6 class="card-title">lamps</h6>
    <h5 class="card-title">Floor lamps & wall lamps</h5>

  <div class="btn btn-link">See Collection <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
  </div>
</a>
</div>
            </div>
            
            <div class="item shadow-sm">
			<a href="#">
            <div class="card one-sec-img-text">
  <img class="card-img-top" src="images/led-lights.png" alt="">
  <div class="card-body text-center px-4 pb-4 bg-light">
  <h6 class="card-title">LED LIGHTS</h6>
    <h5 class="card-title">Battons, bulbs, ceiling lights, industrial lights</h5>

  <div class="btn btn-link">See Collection <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
  </div>
  </a>
</div>
            </div>
            <div class="item shadow-sm">
			<a href="#">
            <div class="card one-sec-img-text">
  <img class="card-img-top" src="images/fans.png" alt="">
  <div class="card-body text-center px-4 pb-4 bg-light">
  <h6 class="card-title">bathrooms</h6>
    <h5 class="card-title">Portable fans, ceiling fans & ventillation fans</h5>

  <div class="btn btn-link">See Collection <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
  </div>
  </a>
</div>
            </div>
            <div class="item shadow-sm">
			<a href="#">
            <div class="card one-sec-img-text">
  <img class="card-img-top" src="images/lamps.png" alt="">
  <div class="card-body text-center px-4 pb-4 bg-light">
  <h6 class="card-title">water closets</h6>
    <h5 class="card-title">Dummy Caption please</h5>

  <div class="btn btn-link">See Collection <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
  </div>
  </a>
</div>
            </div>
            
 </div>
            </div>
			</section>
          </div>-->
		  

  
  
              
  <?php include 'inc/dealer.php'; ?>




  <div class="container my-5">

<h2>Intelligent home makeover tips</h2>

<div class="row tips-box">
        <div class="col "><a href="https://www.instagram.com/p/Cp2cSjnoLUG/?igshid=NTc4MTIwNjQ2YQ==" class="btn btn-link" target="_blank">
        <div class="gray-dark-bg rounded p-4">
          <p>Spatula Storage Hack</p>
          <div class="text-right"><i class="fa fa-angle-right" aria-hidden="true"></i>
  </div> </div> </a></div>
        <div class="col">  <a href="https://www.instagram.com/p/Cp5C2mIIa0M/?igshid=NTc4MTIwNjQ2YQ==" class="btn btn-link" target="_blank">
        <div class="gray-dark-bg rounded p-4">
        <p>Masala Storage Hack</p>
          <div class="text-right"><i class="fa fa-angle-right" aria-hidden="true"></i>
  </div> </div> </a></div>
		<div class="col "><a href="https://www.instagram.com/p/Cp7cgmVSC7k/?igshid=NTc4MTIwNjQ2YQ==" class="btn btn-link" target="_blank">
        <div class="gray-dark-bg rounded p-4">
        <p>Cutlery Storage Hack</p>
          <div class="text-right"><i class="fa fa-angle-right" aria-hidden="true"></i>
  </div> </div></a> </div>
		<div class="col "><a href="https://www.instagram.com/p/CqIZXbnsmmM/?igshid=NTc4MTIwNjQ2YQ==" class="btn btn-link" target="_blank">
        <div class="gray-dark-bg rounded p-4">
        <p>How to increase your kitchen storage?</p>
          <div class="text-right"><i class="fa fa-angle-right" aria-hidden="true"></i>
  </div></div> </a>  </div>

  <div class="col "><a href="https://www.instagram.com/p/CqLBhzVtNv1/?igshid=NTc4MTIwNjQ2YQ==" class="btn btn-link" target="_blank">
        <div class="gray-dark-bg rounded p-4">
          <p>What makes Smart Water Closet the perfect addition to any modern bathroom?</p>
          <div class="text-right"><i class="fa fa-angle-right" aria-hidden="true"></i>
  </div></div>  </a> </div>

    </div>
	

	
</div>


<div class="container my-5 tab-home">
<div class="tabsy shadow-sm rounded overflow-hidden">

            <input type="radio" id="tab1" name="tab" checked>
            <label class="tabButton" for="tab1"><img src="images/design.png" alt="" title="" class="w-auto" width="55" height="41"> Design</label>
            
            <div class="tab">
                <div class="content p-5">
                <div id="owl-demo" class="owl-carousel">

<div class="item">
<div class="tc-client-thumb">
<div class="tc-client-img"><img src="images/Aarushi-Vyajanti-Sundereshwar.png" alt="" class="w-auto" width="97" height="97"></div>
<div class="tc-author-details">
<div class="author-infobox">
<h3>Choosing IVAS for my modular kitchen was one of the best decisions I made for my home. They have an extensive range of options, from contemporary to classic designs.</h3>
<p class="tc-author-name">Aarushi Vyajanti Sundereshwar</p>
<!--<p class="tc-author-dec">Product purchased: IVAS Modular Kitchen</p>-->
</div></div>
</div>

</div>






  </div>  

                </div>
            </div>

            <input type="radio" id="tab2" name="tab">
            <label class="tabButton" for="tab2"><img src="images/On-time-delivery.png" alt="" title="" class="w-auto" width="55" height="41">  On time delivery</label>
            
            <div class="tab">
                <div class="content p-5">
                <div id="owl-demo-1" class="owl-carousel">

                <div class="item">
<div class="tc-client-thumb">
<div class="tc-client-img"><img src="images/Shivalika-Das.png" alt="" class="w-auto" width="97" height="97"></div>
<div class="tc-author-details">
<div class="author-infobox">
<h3>My shopping experience with IVAS was phenomenal. Not only do they have gorgeous designs but also deliver on time.</h3>
<p class="tc-author-name">Shivalika Das</p>

</div></div>
</div>

</div>

  </div> 
                </div>
            </div>

            <input type="radio" id="tab3" name="tab">
            <label class="tabButton" for="tab3"><img src="images/Six-month-experience.png" alt="" title="" class="w-auto"  width="55" height="41"> Six month experience</label>
            
            <div class="tab">
                <div class="content p-5">
                    <div id="owl-demo-2" class="owl-carousel">

                    <div class="item">
<div class="tc-client-thumb">
<div class="tc-client-img"><img src="images/Stuti-Arora.png" alt="" class="w-auto" width="97" height="97"></div>
<div class="tc-author-details">
<div class="author-infobox">
<h3>I couldn't be happier with the modular kitchen from IVAS. From start to finish, their team impressed me with timely delivery and exceptional quality. The transparent quotes and smooth processes made the entire experience seamless. Highly recommended!</h3>
<p class="tc-author-name">Stuti Arora</p>

</div></div>
</div>

</div>


  </div> 
                </div>
            </div>

        </div>
</div>





<?php include 'inc/footer-blog.php'; ?> 
  

  <div style="clear:both;"></div>
	
  </div>
	
	
	

<?php include 'inc/footer-js.php'; ?>


<script src="js/owl.carousel.js"></script>
<script>
            jQuery(document).ready(function($) {
              $('.nonloop').owlCarousel({
                //stagePadding: 108,
				        nav: true,
                center: false,
				        lazyLoad:true,
                loop: false ,
                margin: 15,
                items: 3,
                responsive: {
                  200: {
                    items: 1
                  },
                  600: {
                    items: 2
                  },
                 900: {
                    items: 3
                  },
                  1600: {
                    items: 4
                  },
                }
              });

              // https://codepen.io/atulkumarsingh/pen/jOMGjGQ 


/* testimonial */

$('#owl-demo, #owl-demo-1, #owl-demo-2').owlCarousel({
				        nav: true,
                center: true,
				        lazyLoad:true,
                loop: true,
                margin: 15,
                items: 1,
              });

            });
          </script>




<?php include 'inc/footer.php'; ?>


