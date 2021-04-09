<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="utf-8"/>
		<title>DirectPay - Consumer</title>
		<meta name="description" content="DirectPay is your digital partner that simplifies the checkout process across your purchases online in Sri Lanka.">
		<meta name="keywords" content="Directpay">
		<meta name="author" content="Paymedia">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="theme-color" content="#fff">

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



		<!--End Preloader -->
	 	<!--Start Header -->
	 	<!-- top bar start -->

	 	<!--<div class="notification-top-bar">
	 		<div class="container">
  			<p><font size="2px" color="#292929">Find out how DirectPay can help you out during COVID 19 </font></p></a>
  			</div>
		</div>-->
		<!-- top bar end -->
		<div class="onloadpage" id="page_loader">
			<div class="pre-content">
				<div class="logo-pre"><img src="images/logo.png" alt="Logo" class="img-fluid" /></div>
				<div class="pre-text-"><span></span></div>
			</div>
		</div>
		<header class="nav-bg-w main-header navfix fixed-top menu-white">
			<div class="container">

				<div class="menu-header">
					<div class="dsk-logo"><a class="nav-brand" href="consumer">
						<img src="images/white-logo.png" alt="Logo" class="mega-white-logo"/>
						<img src="images/logo.png" alt="Logo" class="mega-darks-logo" width="180px">
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
												<li><a href="merchant"><font color="#ff822e" size="3.5px">Business</font></a></li>
												<li><a href="ipg">IPG</a></li>
												<li><a href="merchant">Merchant App</a> </li>
												<li><a href="pos">POS</a> </li>
												<li><a href="vpos">VPOS</a> </li>
												<li><a href="whitelable">Platform</a> </li>
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
<li><a href="merchant"><font color="#012480" size="3.5px">Business</font></a></li>
												<li><a href="ipg">IPG</a></li>
												<li><a href="merchant">Merchant App</a> </li>
												<li><a href="pos">POS</a> </li>
												<li><a href="vpos">VPOS</a> </li>
												<li><a href="whitelable">Platform</a> </li>
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


<!--End Header -->
<?php
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
// Use the function
if(isMobile()){

   echo'<section class="hero-section minimal-portfolio" data-background="images/shape/bg-light.png" id="home">';
}
else {

    echo'<section class="hero-section fl-hero">';
}

?>


<div class="text-block">
<div class="container">
  <div class="row">
    <div class="col-lg-6 v-center">
      <div class="header-heading">

<?php if(isMobile()){
    // Do something for only mobile users
   echo'<div class="wow fadeInUp " data-wow-delay=".2s">
		<h1 class="wow fadeInUp"><span><font color="#808080" size="14px">Pay Your</font></span></h1>
		<h1><font color="#012480">Bills Online With DirectPay !</font></h1>
		<p class="wow fadeInUp" ><font color="#000">Secured billing Portal</font><br><br></p>
		</div>';
}
	else{
	echo'<div class="wow fadeInUp" data-wow-delay=".2s">
		<h1 class="wow fadeInUp" ><span><font color="#808080">Pay Your</font></span></h1>
		<h1><font color="#012480">Bills Online With DirectPay !</font></h1>
		<p class="wow fadeInUp" ><font color="#000"></font></p>
		</div>';

}

?>








        <a href="billers" class="btn-main bg-btn lnk wow fadeInUp" data-wow-delay=".6s">&nbsp;&nbspPay Bills&nbsp &nbsp;&nbsp;<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
      </div>
    </div>
    <div class="col-lg-6 wow fadeIn" data-wow-delay=".4s"><div class="single-image"><img src="images/hero/freelancer-mobile.png" alt="service" class="img-fluid showin-mobile"/></div></div>
  </div>
</div>
</div>
</section>

<!--End Hero-->

<section class="about-dg-busign pb120 pt120 bg-light-ylo upset">

<div class="container">

<div class="row" >
	<!--whyus start-->
<div class="col-lg-6 v-center" >
<div class="common-heading-2 text-l">

<div class="sctxt">WHY US?</div>

</div>
</div>

<div class="col-lg-6 v-center">
<div class="awrd-sec text-w mt40 wow fadeIn" data-wow-delay="0.8s">

<div class="bages-slider owl-carousel mt30">
	<div class="img-badge-"><a href="#"> <img src="images/icons/badge1.png" alt="DirectPay" class="img100w"></a> </div>
	<div class="img-badge-"><a href="#"> <img src="images/icons/badge2.png" alt="DirectPay" class="img100w"></a> </div>
	<div class="img-badge-"><a href="#"> <img src="images/icons/badge3.png" alt="DirectPay" class="img100w"></a> </div>
	<div class="img-badge-"><a href="#"> <img src="images/icons/badge11.png" alt="DirectPay" class="img100w"></a> </div>

</div>
</div>
</div>
<!--whyus end-->
<br><br><br>
<div class="col-lg-6 v-center mt40 order2">
	<div class="awrd-sec text-w mt40 wow fadeIn" data-wow-delay="0.8s">
<div class="bages-slider owl-carousel mt30">
	<div class="img-badge-"><a href="#"> <img src="images/icons/badge5.png" alt="DirectPay" class="img100w"></a> </div>
	<div class="img-badge-"><a href="#"> <img src="images/icons/badge8.png" alt="DirectPay" class="img100w"></a> </div>
	<div class="img-badge-"><a href="#"> <img src="images/icons/badge9.png" alt="DirectPay" class="img100w"></a> </div>
	<div class="img-badge-"><a href="#"> <img src="images/icons/badge10.png" alt="DirectPay" class="img100w"></a> </div>
	<div class="img-badge-"><a href="#"> <img src="images/icons/badge6.png" alt="DirectPay" class="img100w"></a> </div>
</div>
</div>
</div>
<div class="col-lg-6 v-center mt40 order1">
<div class="sctxt">CERTIFIED & SECURED</div><br><br>
</div>
</div>

</div>
</section>

<br><br>

<section class="work-category pad-tb">
<div class="container">

    <br/>
<center><div class="col-lg-8">
<div class="common-heading ptag">
<h2>What we do?</h2>
</div>
</div></center>
<div class="row mt30">
<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.1s"> <a href="consumer"><div class="industry-workfor hoshd"><img src="images/icons/house.svg" alt="img"> <h6><font color="#012480">Consumer App</font></h6> </div></a></div>

<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.3s"> <a href="billers"><div class="industry-workfor hoshd"><img src="images/icons/travel-case.svg" alt="img"> <h6><font color="#012480">Consumer Web Portal</font></h6> </div></a></div>

<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.5s"> <a href="ipg"><div class="industry-workfor hoshd"><img src="images/icons/video-tutorials.svg" alt="img"> <h6><font color="#ff822e">IPG</font></h6> </div></a></div>

<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.7s"> <a href="pos"><div class="industry-workfor hoshd"><img src="images/icons/taxi.svg" alt="img"> <h6><font color="#ff822e">POS</font></h6> </div></a></div>

<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.9s"> <a href="vpos"><div class="industry-workfor hoshd"><img src="images/icons/event.svg" alt="img"> <h6><font color="#ff822e">VPOS</font></h6> </div></a></div>

<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.1s"> <a href="merchant"><div class="industry-workfor hoshd"><img src="images/icons/smartphone.svg" alt="img"> <h6><font color="#ff822e">Merchant App</font></h6> </div></a></div>

<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.3s"> <a href="whitelable"><div class="industry-workfor hoshd"><img src="images/icons/joystick.svg" alt="img"> <h6><font color="#ff822e">Platform</font></h6> </div></a></div>

<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.5s"> <a href="https://www.directpay.lk/developer"><div class="industry-workfor hoshd"><img src="images/icons/healthcare.svg" alt="img"> <h6><font color="#ff822e">Dev Sandbox</font></h6> </div></a></div>

</div>
</div>
</section>


<section class="about-dg-busign pb120 pt120 bg-light-ylo upset" id="stores">
<div class="container">
<div class="row">
<div class="col-lg-6 v-center">
<div class="common-heading-2 text-l">

<h4 class="mb20">All your transactions in just 3 taps.</h4>
<h2>Click. Scan. Pay!</h2>
<br><br>
<a href="https://play.google.com/store/apps/details?id=com.directpay.userapp" class="btn-outline lnk wow fadeInUp" data-wow-delay=".6s"><i class="fab fa-google-play"></i></i>&nbspGet it on Google Play
 <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
<br><br>
<a href="https://apps.apple.com/us/app/directpay/id1437707340" class="btn-outline lnk wow fadeInUp" data-wow-delay=".6s"><i class="fab fa-app-store"></i>&nbspAvailable on App Store <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>



</div>
</div>
<div class="col-lg-6 v-center">
<img src="images/about/finance-cuate.png" alt="img" class="img-fluid">
</div>
</div>
</div>

</section>

<!--<section class="work-category pad-tb">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-8">
<div class="common-heading ptag">
<h4>Get a feel for the DirectPay Experience
before diving head on in to it.
</h4><br>
<h3>Give it a try!</h3><br><br>
<a href="#" class="btn-main bg-btn lnk wow fadeInUp" data-wow-delay=".6s">Get DirectPay <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
</div>
</div>

</div>
</section>-->
<section>
<div class="common-heading ptag">
<div class="container">
<h5><font color="#a0a0a0">Innovative Companies have one thing common -</font> They Trust DirectPay</h5><br>
</div>
</div>
<div class="weworkfor pt20 pb20">
<div class="container">
<div class="logo-weworkfor owl-carousel">
<div class="items"><img src="images/client/clients-1.png" alt="DirectPay Clients" class="img100w"></div>
<div class="items"><img src="images/client/clients-2.png" alt="DirectPay Clients" class="img100w"></div>
<div class="items"><img src="images/client/clients-3.png" alt="DirectPay Clients" class="img100w"></div>
<div class="items"><img src="images/client/clients-4.png" alt="DirectPay Clients" class="img100w"></div>
<div class="items"><img src="images/client/clients-5.png" alt="DirectPay Clients" class="img100w"></div>
<div class="items"><img src="images/client/clients-6.png" alt="DirectPay Clients" class="img100w"></div>
<div class="items"><img src="images/client/clients-7.png" alt="DirectPay Clients" class="img100w"></div>
<div class="items"><img src="images/client/clients-9.png" alt="DirectPay Clients" class="img100w"></div>
<div class="items"><img src="images/client/clients-10.png" alt="DirectPay Clients" class="img100w"></div>
<div class="items"><img src="images/client/clients-11.png" alt="DirectPay Clients" class="img100w"></div>
<div class="items"><img src="images/client/clients-12.png" alt="DirectPay Clients" class="img100w"></div>
<div class="items"><img src="images/client/clients-13.png" alt="DirectPay Clients" class="img100w"></div>

</div>
</div>
</div>
</section>
<br><br><br><br>

<div class="common-heading ptag">
	<div class="sctxt">
<h1>S&nbsp&nbspT&nbsp&nbspO&nbsp&nbspR&nbsp&nbspI&nbsp&nbspE&nbsp&nbspS</h1></div>
</div><br><br>
<div class="photosets- pb80 pt50">
<div class="container">
<div class="row">
<div class="col-lg-5 mt30 h-scl-"><div class="img-ca2set h-scl-base"><a href="https://www.instagram.com/p/CBkZjZYAVjs/"><img src="images/about/office-1.jpg" alt="companyname" class="img-fluid"></a></div> </div>
<div class="col-lg-7 mt30 h-scl-"><div class="img-ca2set h-scl-base"><a href="https://www.facebook.com/directpay.srilanka/posts/750552515502118"><img src="images/about/office-2.jpg" alt="companyname" class="img-fluid"></a></div> </div>
<div class="col-lg-7 mt30 h-scl-"><div class="img-ca2set h-scl-base"><a href="https://www.facebook.com/directpay.srilanka/posts/791578108066225"><img src="images/about/office-3.jpg" alt="companyname" class="img-fluid"></a></div> </div>
<div class="col-lg-5 mt30 h-scl-"><div class="img-ca2set h-scl-base"><a href="https://www.instagram.com/p/CJi9gGzh881/"><img src="images/about/office-4.jpg" alt="companyname" class="img-fluid"></a></div> </div>
</div>
</div>
</div>




<section class="work-category pad-tb1">
<div class="container">

<div class="row justify-content-center">
<div class="col-lg-8">

<div class="common-heading ptag">
<h1>DirectPay in Numbers</h1>
</div>


<div class="row small t-ctr">
<div class="col-lg-3 col-sm-6">
<div class="statistics">
<div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
<img src="images/icons/deal.svg" alt="happy" class="img-fluid" />
</div>
<div class="statnumb">
<span class="counter">25</span>
<p>Platform Services</p>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="statistics">
<div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
<img src="images/icons/computers.svg" alt="project" class="img-fluid" />
</div>
<div class="statnumb counter-number">
<span class="counter">1000</span><span>+</span>
<p>Transactions Per Day</p>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="statistics">
<div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
<img src="images/icons/worker.svg" alt="work" class="img-fluid" />
</div>
<div class="statnumb">
<span class="counter">85</span><span></span>
<p>Awards and Certifications</p>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="statistics mb0">
<div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
<img src="images/icons/customer-service.svg" alt="support" class="img-fluid" />
</div>
<div class="statnumb">
    <span class="counter">1</span><span>M+</span>
    <p>Transactions</p>
</div>
</div>
</div>
</div><br/><br/>

</div>
</div>
</section>
<!--End photo gallery-->
<!--Start Blogs-->
<section class="blogs-section bg-flat6 pb120 pt120">
<div class="container">
<div class="row justify-content-center">
	<div class="col-lg-8">
		<div class="common-heading-2">
			<span class="text-effect-1">what's going on</span>
			<h2 class="mb30">See what the NEWS has to about us</h2>
		</div>
	</div>
</div>
<div class="row">

	<div class="col-lg-4 mt30">
		<div class="single-blog-post- up-hor shdo">
			<div class="single-blog-img-">
				<a href="blog6"><center><img src="images/blog/blog-dg-3.jpg" alt="girl" class="img-fluid"/></center></a>
			</div>
			<div class="blog-content-tt pt20">
				<div class="single-blog-info-">
					<p class="mb10"><i class="fas fa-clock"></i>Tuesday, January 1, 2019</p>
					<h4><a href="Blog6">PayMedia wraps up 2018 with Eleven Awards</a></h4>
					<p>A rapidly evolving Financial Technology company in Sri Lanka, won eleven awards in total in 2018, and was highly commended for the leadership of its Founding Director, Kanishka Weeramunda, who was recognized with multiple leadership awards himself.</p>
				</div>
				<div class="post-social">
						<div class="ss-inline-share-content">

					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-4 mt30">
		<div class="single-blog-post- up-hor shdo">
			<div class="single-blog-img-">
				<a href="blog4"><center><img src="images/blog/blog-dg-4.jpg" alt="girl" class="img-fluid"/></center></a>
			</div>
			<div class="blog-content-tt pt20">
				<div class="single-blog-info-">
					<p class="mb10"><i class="fas fa-clock"></i>23 April 2018</p>
					<h4><a href="blog4">Kanishka Weeramunda Bags Two Awards At The CMI Excellence Awards</a></h4>
					<p>PayMedia CEO and Founder, Kanishka Weeramunda, has been named the Best CEO of the Year and the Best Future Leader of the Year in the small and medium service sector category at the CMI Excellence Awards 2017. </p>
				</div>
				<div class="post-social">
						<div class="ss-inline-share-content">

						</div>
					</div>
				</div>
			</div>
		</div>

	<div class="col-lg-4 mt30">
		<div class="single-blog-post- up-hor shdo">
			<div class="single-blog-img-">
				<a href="blog5"><center><img src="images/blog/blog-dg-5.jpg" alt="girl" class="img-fluid"/></center></a>
			</div>
			<div class="blog-content-tt pt20">
				<div class="single-blog-info-">
					<p class="mb10"><i class="fas fa-clock"></i>Thursday, 3 August 2017</p>
					<h4><a href="blog5">DirectPay wins big at Disrupt Asia 2017</a></h4>
					<p>The past years, Sri Lanka has seen an immense growth in its startup ecosystem, producing startups that have gained a competitive in the global market.Amongst these top players was DirectPay, specialised in unique software solutions.</p>
				</div>
				<div class="post-social">
						<div class="ss-inline-share-content">

						</div>
					</div>
				</div>
			</div>
		</div>

</div>
</div>
</section><br><br>



<!--End Blogs-->

<!--Start Footer-->
<footer class="dark-footer dg-bg--1 pt60 upset dark-footer-1">
	<div class="up-curvs"><svg height="100" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				viewBox="0 0 1920 89.3" style="enable-background:new 0 0 1920 89.3;" xml:space="preserve" fill="#000731">
				<path d="M1919.5,89.5H-0.5c0,0,0-90,0-90c114.9,4.8,228.6,17.9,343.6,24.6c118.6,7,237.4,11.9,356.1,14.7
				c237.6,5.7,475.3,3.1,712.7-7.7c164.2-7.5,328.1-23.7,492.3-31c0.7,0,15.2-0.5,15.2-0.6C1919.5-0.5,1919.5,89.5,1919.5,89.5z"/>
			</svg>
		</div>
<div class="container">
<div class="row justify-content-between">
<div class="col-lg-4 col-sm-6  ftr-brand-pp">
<a class="navbar-brand mb30 mt30" href="#"> <img src="images/white-logo.png" alt="Logo" width="140" /></a>
<p>DirectPay is the solution to facilitate low value transactions via Clearing House using smart phones between customers and merchants eliminating high cost to third party payment verification agencies and expensive equipment.</p>
<div class="ff-social-icons mt30">
<a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
<a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
<a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
<a href="javascript:void(0)" target="blank"><i class="fab fa-instagram"></i></a>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<h5 class="mb30 mt30">Contact Us</h5>
<ul class="footer-address-list ftr-details">
<li>
<span><i class="fas fa-envelope"></i></span>
<p>Email <span> <a href="mailto:hello@directpay.lk">hello@directpay.lk</a></span></p>
</li>
<li>
<span><i class="fas fa-phone-alt"></i></span>
<p>Phone <span> <a href="tel:+94 772 448 144">(+94) 772 448 144 | (+94) 712 083 911</a></span></p>
</li>
<li>
<span><i class="fas fa-map-marker-alt"></i></span>
<p>Address <span> 410/33, Bauddhaloka Mawatha, Colombo 07,<br>
Sri Lanka</span></p>
</li>
</ul>
</div>

<div class="col-lg-3 col-sm-6 footer-blog-">
<h5 class="mb30 mt30">Quick Contact</h5>
<div class="instagram-post">
<div class="thumb hover-scale">
<a href="#">
<img src="images/portfolio/image-1.png" alt="instagram images" class="w-100">
</a>
</div>
<div class="thumb hover-scale">
<a href="#">
<img src="images/portfolio/image-2.png" alt="instagram images" class="w-100">
</a>
</div>
<div class="thumb hover-scale">
<a href="#">
<img src="images/portfolio/image-3.png" alt="instagram images" class="w-100">
</a>
</div>

</div>
</div>
</div>
<div class="row end-footer-">
<div class="col-lg-6">
<div class="footer-copyrights-">
<p>Copyright © 2020 <a href="http://www.DirectPay.lk">DirectPay </a>. All rights reserved.</p>
</div>
</div>
<div class="col-lg-6">
<ul class="footer-link-- link-hover">
<li><a href="privacy">Privace &amp; Policy.</a></li>
<li><a href="faq">Faq.</a></li>
<li><a href="terms">Terms.</a></li>
</ul>
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
<script src="js/bootstrap.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/plugin.min.js"></script>
<script src="js/preloader.js"></script>
<!--common script file-->
<script src="js/main.js"></script>
</body>
</html>
