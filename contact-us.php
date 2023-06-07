<?php
$page ='contact-us';
?>

<?php include 'inc/head.php'; ?>

<title>Ivas</title>
<meta name="description" content="" />
<link rel="canonical" href="" />
<?php include 'inc/header.php'; ?>

<div class="modular-kitchen-banner py-5" id="contact-banner">
        <div class="container">
		<div class="row align-items-center">
		<div class="col-sm-8 px-5 py-3">
          <div class="text-start">
            <h2 class="m-0 py-4">Contact Us</h2>
          </div>
		   </div>
      </div>
        </div>
      </div>


      <div class="container mt-5">
     <nav aria-label="breadcrumb">
       <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="index.php">Home</a></li>
         <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
       </ol>
     </nav>
     </div>  



	  <section class="contact-us inquiry-model my-5">
    <div class="container">
			<div class="terms-condition">
			<h2 class="mb-2">Get In Touch</h2> 
<p>Kindly fill in the below details and our team will get in touch with you shortly.</p>
<div class="form-enquiry">

<form id="enquiry-form" action="mail.php"  method="POST">
<div class="row">
		<div class="col-sm-4">
	 <div class="form-floating">
      <input type="text" name="sname" class="form-control" placeholder="Name" >
    </div>
  </div>

  
	<div class="col-sm-4">
	    <div class="form-floating">
      <input type="tel" name="phone" class="form-control" placeholder="Phone No" >
    </div>
    </div>

    <div class="col-sm-4">
    <div class="form-floating">
      <input type="email" name="email" class="form-control" placeholder="Email" >
    </div></div>

    <div class="col-sm-4">
    <div class="form-floating">
      <input type="text" name="city" class="form-control" placeholder="City" >
      </div>
    </div>


    <div class="col-sm-4">
    <div class="form-floating">
    <textarea class="form-control mesage-box" name="message" placeholder="Message"></textarea>
      </div>
    </div>
    <div class="col-sm-4">
    <button class="w-100 btn btn-lg btn-primary rounded-circle" type="submit" name="submit" value="Submit">Submit</button>    </div>

    </div>


  </form>

</div>
</div>
</div>
</section>


<?php include 'inc/dealer.php'; ?>




		  


<?php include 'inc/footer-js.php'; ?>
<script type="text/javascript" src="js/location.js"></script>
<?php include 'inc/footer.php'; ?>