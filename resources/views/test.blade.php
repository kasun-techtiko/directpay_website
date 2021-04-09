<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="utf-8"/>
		<title>Directpay - Business</title>
		<meta name="description" content="Creative Agency, Marketing Agency Template">
		<meta name="keywords" content="Creative Agency, Marketing Agency">
		<meta name="author" content="rajesh-doot">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="theme-color" content="#fff">
		<!--website-favicon-->
		<link href="images/favicon.png" rel="icon">
		<!--plugin-css-->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/plugin.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
		<!-- template-style-->
		<link href="css/style-b.css" rel="stylesheet">
		<link href="css/responsive.css" rel="stylesheet">
	</head>
	<body>

			<!--Start Header -->

		<!-- top bar end -->
		<header class="nav-bg-w main-header navfix fixed-top menu-white">
			<div class="container-fluid m-pad">

				<div class="menu-header">
					<div class="dsk-logo"><a class="nav-brand" href="consumer.php">
						<img src="images/white-logo-b.png" alt="Logo" class="mega-white-logo"/>
						<img src="images/logo-b.png" alt="Logo" class="mega-darks-logo"/ width="180px">
					</a></div>
					<div class="custom-nav" role="navigation">
						<ul class="nav-list">
							<li class="sbmenu"><a href="consumer.php" class="menu-links">Home</a>

						</li>
						<li class="sbmenu"><a href="#" class="menu-links">Services and Solutions</a>
						<div class="nx-dropdown">
							<div class="sub-menu-section">
								<div class="container">
									<div class="sub-menu-center-block">
										<div class="sub-menu-column">
											<ul>
												<li><a href="consumer.php"><font color="#012480" size="3.5px">Consumer</font></a></li>
												<li><a href="consumer.php">User App</a></li>
												<li><a href="web.php">Web</a></li>

											</ul>
										</div>
										<div class="sub-menu-column">
											<ul>
												<li><a href="merchant.php"><font color="#ff822e" size="3.5px">Business</font></font></a></li>
												<li><a href="ipg.php">IPG</a></li>
												<li><a href="merchant.php">Merchant App</a> </li>
												<li><a href="pos.php">POS</a> </li>
												<li><a href="vpos.php">VPOS</a> </li>
												<li><a href="whitelable.blade.php">White Lable</a> </li>
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
					<li class="sbmenu rpdropdown"><a href="blogs-grid.php" class="menu-links">NEWS</a></li>
					<li class="sbmenu rpdropdown"><a href="about.php" class="menu-links">About us</a></li>
					<li class="sbmenu rpdropdown"><a href="Career.php" class="menu-links">Careers</a></li>
					<li class="sbmenu rpdropdown"><a href="contact.php" class="menu-links">Contacts</a></li>
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
<li><a href="consumer.php">Home</a>

</li>
<li><a href="">Services and Solutions</a>
<ul>
<li><a href="consumer.php"><font color="#012480" size="3.5px">Consumer</font></a></li>
												<li><a href="consumer.php">User App</a></li>
												<li><a href="web.php">Web</a></li>
<li><a href="merchant.php"><font color="#012480" size="3.5px">Business</font></font></a></li>
												<li><a href="ipg.php">IPG</a></li>
												<li><a href="merchant.php">Merchant App</a> </li>
												<li><a href="pos.php">POS</a> </li>
												<li><a href="vpos.php">VPOS</a> </li>
												<li><a href="whitelable.blade.php">White Lable</a> </li>
<li><a href="https://www.directpay.lk/developer/"><font color="#012480" size="3.5px">Developer</font></a> </li>
												<li><a href="https://www.directpay.lk/developer/">Sandbox</a> </li>

</ul>
</li>
<li class="sbmenu rpdropdown"><a href="blogs-grid.php" class="menu-links">NEWS</a></li>
					<li class="sbmenu rpdropdown"><a href="about.php" class="menu-links">About us</a></li>
					<li class="sbmenu rpdropdown"><a href="Career.php" class="menu-links">Careers</a></li>
					<li class="sbmenu rpdropdown"><a href="contact.php" class="menu-links">Contacts</a></li>
</ul>

</nav>
</div>
</header>
<body>

<?php
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
// Use the function
if(isMobile()){


   echo'<section class="breadcrumb-area banner-1" data-background="images/banner/9.jpg">
<div class="text-block">
<div class="container">
<div class="row">


 <div class="split2 top2">
  <div class="centered">
    <img src="images/img/b.png" alt="Avatar woman">
    <h2>IPG</h2>
    <p>Some text.</p>
  </div>
</div>

 <div class="split2 top2">
  <div class="centered">
    <img src="images/img/b.png" alt="Avatar woman">
    <h2>POS</h2>
    <p>Some text.</p>
  </div>
</div>

 <div class="split2 top2">
  <div class="centered">
    <img src="images/img/b.png" alt="Avatar woman">
    <h2>VPOS</h2>
    <p>Some text.</p>
  </div>
</div>

 <div class="split2 top2">
  <div class="centered">
    <img src="images/img/b.png" alt="Avatar woman">
    <h2>Merchant App</h2>
    <p>Some text.</p>
  </div>
</div>

<div class="split2 top2">
  <div class="centered">
    <img src="images/img/b.png" alt="Avatar woman">
    <h2>Developer</h2>
    <p>Some text here too.</p>
  </div>
</div>

</div>
</div>
</div>
</section>';
}



else {

    echo'<section class="breadcrumb-area banner-1" data-background="images/banner/9.jpg">
<div class="text-block">
<div class="container">
<div class="row">
 <div class="split left2">
  <div class="centered">
    <img src="images/img/b.png" alt="Avatar woman">
    <h2>IPG</h2>
    <p>Some text.</p>
  </div>
</div>

 <a href="pos.php"><div class="split left1">
  <div class="centered">
    <img src="images/img/b.png" alt="Avatar woman">
    <h2>POS</h2>
    <p>Some text.</p>
  </div>
</div></a>

 <div class="split left">
  <div class="centered">
    <img src="images/img/b.png" alt="Avatar woman">
    <h2>VPOS</h2>
    <p>Some text.</p>
  </div>
</div>

 <div class="split right">
  <div class="centered">
    <img src="images/img/b.png" alt="Avatar woman">
    <h2>Merchant App</h2>
    <p>Some text.</p>
  </div>
</div>

<div class="split right1">
  <div class="centered">
    <img src="images/img/b.png" alt="Avatar woman">
    <h2>Developer</h2>
    <p>Some text here too.</p>
  </div>
</div>

</div>
</div>
</div>
</section>';
}

?>














































<br><br><br><br>




<!--End Footer-->
<!--scroll to top-->
<a id="scrollUp" href="#top"></a>
<!-- js placed at the end of the document so the pages load faster -->
<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/plugin.min.js"></script>
<script src="js/preloader.js"></script>
<!--common script file-->
<script src="js/main.js"></script>
</body>
</html>
