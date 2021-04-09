<?php
session_start();
$var_value = $_SESSION['provider'];
$result= "";
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="utf-8"/>
		<title>Payment Details- DirectPay</title>
		<meta name="description" content="Creative Agency, Marketing Agency Template">
		<meta name="keywords" content="Creative Agency, Marketing Agency">
		<meta name="author" content="rajesh-doot">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!--website-favicon-->
		<link href="images/favicon2.png" rel="icon">
		<!--plugin-css-->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/plugin.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
		<!-- template-style-->
		<link href="css/style.css" rel="stylesheet">
		<link href="css/responsive.css" rel="stylesheet">
	</head>
	<body>
		<!--Start Header -->
	
<header class="nav-bg-w main-header navfix fixed-top menu-white">
			<div class="container-fluid m-pad">
				
				<div class="menu-header">
					<div class="dsk-logo"><a class="nav-brand" href="consumer">
						<img src="images/white-logo.png" alt="Logo" class="mega-white-logo"/>
						<img src="images/logo.png" alt="Logo" class="mega-darks-logo"/ width="180px">
					</a></div>
					<div class="custom-nav" role="navigation">
						<ul class="nav-list">
							<li class="sbmenu"><a href="consumer" class="menu-links">Home</a>
						
						</li>
						<li class="sbmenu"><a href="#" class="menu-links">Services and Solutions</a>
						<div class="nx-dropdown">
							<div class="sub-menu-section">
								<div class="container">
									<div class="sub-menu-center-block">
										<div class="sub-menu-column">
											<ul>
												<li><a href="consumer"><font color="#012480" size="3.5px">Consumer</font></a></li>
												<li><a href="consumer">User App</a></li>
												<li><a href="web">Web</a></li>
												
											</ul>
										</div>
										<div class="sub-menu-column">
											<ul>
												<li><a href="merchant"><font color="#ff822e" size="3.5px">Business</font></font></a></li>
												<li><a href="ipg">IPG</a></li>
												<li><a href="merchant">Merchant App</a> </li>
												<li><a href="pos">POS</a> </li>
												<li><a href="vpos">VPOS</a> </li>
												<li><a href="whitelable">White Lable</a> </li>
											</ul>
										</div>
										<div class="sub-menu-column">
											<ul>
												<li><a href="https://www.directpay.lk/developer/"><font color="#012480" size="3.5px">Developer</font></a> </li>
												<li><a href="https://www.directpay.lk/developer/">Sandbox</a> </li>
											</ul>
										</div>
										<div class="sub-menu-column">
											<a href="#"><img src="images/banner/header-1.jpg" alt="" class="img-fluid"></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="sbmenu rpdropdown"><a href="blogs-grid" class="menu-links">NEWS</a></li>
					<li class="sbmenu rpdropdown"><a href="about" class="menu-links">About us</a></li>
					<li class="sbmenu rpdropdown"><a href="Career" class="menu-links">Careers</a></li>
					<li class="sbmenu rpdropdown"><a href="contact" class="menu-links">Contacts</a></li>
<li><a href="#" class="menu-links right-bddr">&nbsp;</a>



</ul>
</div>
<div class="mobile-menu2">
<ul class="mob-nav2">

<li class="navm-"> <a class="toggle" href="#"><span></span></a></li>
</ul>
</div>
</div>
<!--Mobile Menu-->
<nav id="main-nav">
<ul class="first-nav">
<li><a href="consumer">Home</a>

</li>
<li><a href="">Services and Solutions</a>
<ul>
<li><a href="consumer"><font color="#012480" size="3.5px">Consumer</font></a></li>
												<li><a href="consumer">User App</a></li>
												<li><a href="web">Web</a></li>
<li><a href="merchant"><font color="#012480" size="3.5px">Business</font></font></a></li>
												<li><a href="ipg">IPG</a></li>
												<li><a href="merchant">Merchant App</a> </li>
												<li><a href="pos">POS</a> </li>
												<li><a href="vpos">VPOS</a> </li>
												<li><a href="whitelable">White Lable</a> </li>
<li><a href="https://www.directpay.lk/developer/"><font color="#012480" size="3.5px">Developer</font></a> </li>
												<li><a href="https://www.directpay.lk/developer/">Sandbox</a> </li>

</ul>
</li>
<li class="sbmenu rpdropdown"><a href="blogs-grid" class="menu-links">NEWS</a></li>
					<li class="sbmenu rpdropdown"><a href="about" class="menu-links">About us</a></li>
					<li class="sbmenu rpdropdown"><a href="Career" class="menu-links">Careers</a></li>
					<li class="sbmenu rpdropdown"><a href="contact" class="menu-links">Contacts</a></li>
</ul>

</nav>
</div>
</header>
<!--Mobile contact-->
<div class="popup-modal1">
<div class="modal" id="menu-popup">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
	<div class="common-heading">
		<h4 class="mt0 mb0">Write a Message</h4>		
	</div>
<button type="button" class="closes" data-dismiss="modal">&times;</button></div>
<!-- Modal body -->
<div class="modal-body">
	<div class="form-block fdgn2 mt10 mb10">
		<form action="#" method="post" name="feedback-form">
			<div class="fieldsets row">
				<div class="col-md-12"><input type="text" placeholder="Full Name" name="name"></div>
				<div class="col-md-12"><input type="email" placeholder="Email Address" name="email"></div>
				<div class="col-md-12"><input type="number" placeholder="Contact Number" name="phone"></div>
				<div class="col-md-12"><input type="text" placeholder="Subject" name="subject"></div>
				<div class="col-md-12"><textarea placeholder="Message" name="message"></textarea></div>
			</div>
			<div class="fieldsets mt20 pb20">
				<button type="submit" name="submit" class="lnk btn-main bg-btn" data-dismiss="modal">Submit <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></button>
			</div>
		</form>
	</div>
</div>
</div>
</div>
</div>
</div>
<!--Mobile contact-->


<!--End Header -->
<!--Breadcrumb Area-->


<section class="breadcrumb-area banner-1" data-background="images/banner/9.jpg">
<div class="text-block">
<div class="container">
<div class="row">
<div class="col-lg-12 v-center">

</div>
</div>
</div>
</div>
</section>











<section class="contact-page pad-tb2">
	<div class="container">
	<div class="row justify-content-center">
	<div class="col-lg-6 v-center">
	<div class="common-heading text-l">
		<center>
	<span>You selected</span>

	

	
	<h2 class="mt0 mb0"><?php echo $provider = $_GET['provider'];?></h2>


	<p class="mb60 mt20">Enter your account number and amount.</p>
		</center>
	</div>

	

			<div class="form-block">
			<form id="billing-data" method="POST" action="https://testpay.directpay.lk/" data-toggle="validator" >
			<div class="messages"></div>
			<div class="fieldsets row">


			<input type="hidden" name="_returnUrl" id="_returnUrl" value="http://127.0.0.1:8000/consumer">
			<input type="hidden" name="_cancelUrl" id="_cancelUrl" value="http://127.0.0.1:8000/consumer">
			<input type="hidden" name="_responseUrl" id="_responseUrl" value="http://127.0.0.1:8000/consumer">
			<input type="hidden" name="_mId" id="_mId" value="--04563">
			<input type="hidden" name="api_key" id="api_key" value="94a4b22b6172079f2684acb11cc31ca268ce73e55a77675466722891bb8ba570">


					<div class="col-md-6 form-group" id="container">
					<input id="_description" type="text" name="_description"  placeholder="Account number" required="required" data-error="Account number is required.">
					<div class="help-block with-errors"></div>
					</div>

					<div class="col-md-6 form-group">
					<input id="_amount" type="text" name="_amount"  placeholder="00.00" required="required" data-error="Enter Valid Amount." min="20" max="100000" step="1" >
					<div class="help-block with-errors"></div>
					</div>

					<div class="col-md-6 form-group">
					<input id="_orderId" type="text" name="_orderId"  placeholder="Remarks">
					<div class="help-block with-errors"></div>
					</div>

			</div>
					<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" id="customCheck" name="example1" required="required">
					<label class="custom-control-label" for="customCheck">I agree to the <a href="terms"><font color="#012480">Terms &amp; Conditions</font></a> of DirectPay.</label>
					</div>



					<div class="fieldsets mt20">
					<button type="submit" class="lnk btn-main bg-btn" value="submit" form="billing-data">Verify & CHECKOUT <span class="circle"></span></button>
					</div>


					<p class="trm"><i class="fas fa-lock"></i>By clicking "Checkout" you will be re-directed to the payment options page."</p><br/>
					<a class="navbar-brand img-ctr" href="billers"><p><u>Go back</u></p></a>
			</form>


</div>
</div>
</div>
</div>
</section>











<br><br><br>
<!--Start Footer-->
<footer>

<hr class="hline">
<div class="footer-row3">
<div class="copyright">
<div class="container">
<div class="row">
	<div class="col-lg-12">
		
			<a class="navbar-brand img-ctr" href="index"><p><font color="#000">Powered by</font></p><img src="images/logo.png" alt="Logo" width="100" /></a><br/>
		<div class="footer-">
			<p>Copyright © 2021 DirectPay . All rights reserved.</p>
		</div>
	</div>
</div>
</div>
</div>
</div>
</footer>

  <!--End Footer-->
<!--scroll to top-->
<a id="scrollUp" href="#top"></a>
<!-- js placed at the end of the document so the pages load faster -->
<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/validator.min.js"></script>
<script src="js/ajax.form.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/plugin.min.js"></script>
<!--common script file-->
<script src="js/main.js"></script>
<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
var fileName = $(this).val().split("\\").pop();
$(this).siblings(".custom-file-label").addClass("selected")(fileName);
});
</script>
</body>
</html>