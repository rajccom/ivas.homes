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
            <h2 class="m-0 py-4">Become an IVAS Dealer</h2>
          </div>
		   </div>
      </div>
        </div>
      </div>


      <div class="container mt-5">
     
     <nav aria-label="breadcrumb">
       <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="index.php">Home</a></li>
         <li class="breadcrumb-item active" aria-current="page">Become an IVAS Dealer</li>
       </ol>
     </nav>
     </div>


	  <section class="contact-us inquiry-model my-5">
    <div class="container">
			<div class="terms-condition">
			<h2 class="mb-2">Apply for Dealership</h2>
<p>Gain access to an extensive product range, and comprehensive support by becoming an IVAS dealer. <br>Fill out the form below and our team will get in touch with you.</p>
<div class="form-enquiry">

<form id="enquiry-form" action="dealer-mail.php"  method="POST">
<div class="row">

<div class="col-sm-4">
    <div class="form-floating">
    <select name="category" class="form-control">
    <option value="" disabled selected >Select Category</option>
    <option value="Modular Kitchen">Modular Kitchen</option>
    <option value="Designer Hardware">Designer Hardware</option>
    <option value="Sanitaryware">Sanitaryware</option>
    <option value="Tiles">Tiles</option>
    <option value="Bath Fittings">Bath Fittings</option>
  </select>
      </div>
    </div>

<div class="col-sm-4">
	 <div class="form-floating">
      <input type="text" name="state" class="form-control" placeholder="State"/>
    </div>
  </div>


  <div class="col-sm-4">
	 <div class="form-floating">
      <input type="text" name="city" class="form-control" placeholder="City"/>
    </div>
  </div>



		<div class="col-sm-4">
	 <div class="form-floating">
      <input type="text" name="sname" class="form-control" placeholder="Name"/>
    </div>
  </div>



    <div class="col-sm-4">
    <div class="form-floating">
      <input type="text" name="bname" class="form-control" placeholder="Business Name">
    </div></div>


  <div class="col-sm-4">
	 <div class="form-floating">
      <input type="email" name="email" class="form-control" placeholder="Email Id"/>
    </div>
  </div>

  
	<div class="col-sm-4">
	    <div class="form-floating">
      <input type="tel" name="phone" class="form-control" placeholder="Phone No"/>
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