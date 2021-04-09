<?php
session_start();
$provider = '';
$_SESSION['provider'] = $provider;

$logo = "";






?>

    <!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8"/>
    <title>Billing Portal- DirectPay</title>
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
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
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
                                                <li><a href="consumer"><font color="#012480"
                                                                             size="3.5px">Consumer</font></a></li>
                                                <li><a href="consumer">User App</a></li>
                                                <li><a href="web">Web</a></li>

                                            </ul>
                                        </div>
                                        <div class="sub-menu-column">
                                            <ul>
                                                <li><a href="merchant"><font color="#ff822e"
                                                                             size="3.5px">Business</font></a></li>
                                                <li><a href="ipg">IPG</a></li>
                                                <li><a href="merchant">Merchant App</a></li>
                                                <li><a href="pos">POS</a></li>
                                                <li><a href="vpos">VPOS</a></li>
                                                <li><a href="whitelable">White Lable</a></li>
                                            </ul>
                                        </div>
                                        <div class="sub-menu-column">
                                            <ul>
                                                <li><a href="https://www.directpay.lk/developer/"><font color="#012480"
                                                                                                        size="3.5px">Developer</font></a>
                                                </li>
                                                <li><a href="https://www.directpay.lk/developer/">Sandbox</a></li>
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

                    <li class="navm-"><a class="toggle" href="#"><span></span></a></li>
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
                        <li><a href="merchant">Merchant App</a></li>
                        <li><a href="pos">POS</a></li>
                        <li><a href="vpos">VPOS</a></li>
                        <li><a href="whitelable">White Lable</a></li>
                        <li><a href="https://www.directpay.lk/developer/"><font color="#012480"
                                                                                size="3.5px">Developer</font></a></li>
                        <li><a href="https://www.directpay.lk/developer/">Sandbox</a></li>

                    </ul>
                </li>
                <li class="sbmenu rpdropdown"><a href="blogs-grid" class="menu-links">Blog</a></li>
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
                    <button type="button" class="closes" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="form-block fdgn2 mt10 mb10">
                        <form action="#" method="post" name="feedback-form">
                            <div class="fieldsets row">
                                <div class="col-md-12"><input type="text" placeholder="Full Name" name="name"></div>
                                <div class="col-md-12"><input type="email" placeholder="Email Address" name="email">
                                </div>
                                <div class="col-md-12"><input type="number" placeholder="Contact Number" name="phone">
                                </div>
                                <div class="col-md-12"><input type="text" placeholder="Subject" name="subject"></div>
                                <div class="col-md-12"><textarea placeholder="Message" name="message"></textarea></div>
                            </div>
                            <div class="fieldsets mt20 pb20">
                                <button type="submit" name="submit" class="lnk btn-main bg-btn" data-dismiss="modal">
                                    Submit <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span>
                                </button>
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


<!--End Breadcrumb Area-->
<!--Start About-->
<section class="service-block bg-gradient6 pad-tb2 " id="Title">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="common-heading ptag">

                    <h1><font color="#000">DirectPay Web Portal</font></h1>
                    <p class="mb30">Select your service provider in the bellow section.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service-block bg-gradient6 pad-tb" id="reload">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="common-heading ptag">

                    <h3>Reload and TopUp</h3>

                </div>
            </div>
        </div>

        <div class="techonology-used-">
            <div class="container">

                <ul class="h-scroll tech-icons">


                    @foreach($Billnamekey->slice(0, 5) as $billdata)



                        <li><a href="payment?provider=<?php echo $billdata['name']?> "> <img
                                    src=<?php echo $billdata['logo'] ?>  alt="icon"></a></li>
                        <?php
                        //$_SESSION['logo2'] = $billdata['logo'];
                        //$logo2= $billdata['logo'];
                        //echo "<img src = '$logo2' >"
                        ?>

                    @endforeach


                </ul>
            </div>
        </div>

    </div>
</section>

<section class="service-block bg-gradient6 pad-tb" id="telephone">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="common-heading ptag">

                    <h3>Telephone Bills</h3>

                </div>
            </div>
        </div>
        <div class="techonology-used-">
            <div class="container">
                <ul class="h-scroll tech-icons">
                    @foreach($Billnamekey->slice(5, 2) as $billdata)


                        <li><a href="payment?provider=<?php echo $billdata['name']  ?>"> <img
                                    src=<?php echo $billdata['logo'] ?>  alt="icon"></a></li>


                    @endforeach

                </ul>
            </div>
        </div>

    </div>
</section>

<section class="service-block bg-gradient6 pad-tb" id="utility">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="common-heading ptag">

                    <h3>Utility Bills</h3>

                </div>
            </div>
        </div>
        <div class="techonology-used-">
            <div class="container">
                <ul class="h-scroll tech-icons">
                @foreach($Billnamekey->slice(7, 3) as $billdata) <!-- tips for fetching foreach - (7,3) - 7 means starting number and 2 is running count ) -->


                    <li><a href="payment?provider=<?php echo $billdata['name']  ?>"> <img
                    src=<?php echo $billdata['logo'] ?>  alt="icon"></a></li>


                @endforeach

                </ul>
            </div>
        </div>

    </div>
</section>

<section class="service-block bg-gradient6 pad-tb" id="finance">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="common-heading ptag">

                    <h3>Finance</h3>

                </div>
            </div>
        </div>
        <div class="techonology-used-">
            <div class="container">
                <ul class="h-scroll tech-icons">
                    @foreach($Billnamekey->slice(10, 9) as $billdata)


                        <li><a href="payment?provider=<?php echo $billdata['name']  ?>"> <img
                                    src=<?php echo $billdata['logo'] ?>  alt="icon"></a></li>


                    @endforeach

                </ul>
            </div>
        </div>

    </div>
</section>

<section class="service-block bg-gradient6 pad-tb" id="insurance">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="common-heading ptag">

                    <h3>Insurance</h3>

                </div>
            </div>
        </div>
        <div class="techonology-used-">
            <div class="container">
                <ul class="h-scroll tech-icons">
                    @foreach($Billnamekey->slice(19, 12) as $billdata)


                        <li><a href="payment?provider=<?php echo $billdata['name']  ?>"> <img
                                    src=<?php echo $billdata['logo'] ?>  alt="icon"></a></li>


                    @endforeach
                </ul>
            </div>
        </div>

    </div>
</section>

<section class="service-block bg-gradient6 pad-tb" id="gov">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="common-heading ptag">

                    <h3>Government</h3>

                </div>
            </div>
        </div>
        <div class="techonology-used-">
            <div class="container">
                <ul class="h-scroll tech-icons">
                    @foreach($Billnamekey->slice(31, 2) as $billdata)


                        <li><a href="payment?provider=<?php echo $billdata['name']  ?>"> <img
                                    src=<?php echo $billdata['logo'] ?>  alt="icon"></a></li>


                    @endforeach

                </ul>
            </div>
        </div>

    </div>
</section>

<section class="service-block bg-gradient6 pad-tb" id="internet">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="common-heading ptag">

                    <h3>Internet</h3>

                </div>
            </div>
        </div>
        <div class="techonology-used-">
            <div class="container">
                <ul class="h-scroll tech-icons">
                    @foreach($Billnamekey->slice(33, 3) as $billdata)


                        <li><a href="payment?provider=<?php echo $billdata['name'] ?>"> <img
                                    src=<?php echo $billdata['logo'] ?>  alt="icon"></a></li>


                    @endforeach

                </ul>
            </div>
        </div>

    </div>
</section>

<section class="service-block bg-gradient6 pad-tb" id="television">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="common-heading ptag">

                    <h3>Television</h3>

                </div>
            </div>
        </div>
        <div class="techonology-used-">
            <div class="container">
                <ul class="h-scroll tech-icons">
                    @foreach($Billnamekey->slice(36, 4) as $billdata)


                        <li><a href="payment?provider=<?php echo $billdata['name']  ?>" ,> <img
                                    src=<?php echo $billdata['logo'] ?>  alt="icon"></a></li>


                    @endforeach

                </ul>
            </div>
        </div>

    </div>
</section>


<!--End About-->
<!--Start Why Choose-->

<!--End Why Choose-->
<!--Start Enquire Form-->

<!--End Enquire Form-->

<br><br><br>
<!--Start Footer-->
<footer class="dark-footer dg-bg--1 pt60 upset dark-footer-1">
    <div class="up-curvs">
        <svg height="100" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg"
             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 1920 89.3" style="enable-background:new 0 0 1920 89.3;" xml:space="preserve" fill="#000731">
				<path d="M1919.5,89.5H-0.5c0,0,0-90,0-90c114.9,4.8,228.6,17.9,343.6,24.6c118.6,7,237.4,11.9,356.1,14.7
				c237.6,5.7,475.3,3.1,712.7-7.7c164.2-7.5,328.1-23.7,492.3-31c0.7,0,15.2-0.5,15.2-0.6C1919.5-0.5,1919.5,89.5,1919.5,89.5z"/>
			</svg>
    </div>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-4 col-sm-6  ftr-brand-pp">
                <a class="navbar-brand mb30 mt30" href="#"> <img src="images/white-logo.png" alt="Logo"
                                                                 width="140"/></a>
                <p>DirectPay is the solution to facilitate low value transactions via Clearing House using smart phones
                    between customers and merchants eliminating high cost to third party payment verification agencies
                    and expensive equipment.</p>
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
                        <p>Phone <span> <a href="tel:+94 772 448 144">(+94) 772 448 144 | (+94) 712 083 911</a></span>
                        </p>
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
<script src="js/validator.min.js"></script>
<script src="js/ajax.form.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/plugin.min.js"></script>
<!--common script file-->
<script src="js/main.js"></script>
<script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function () {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected")(fileName);
    });
</script>
</body>
</html>
