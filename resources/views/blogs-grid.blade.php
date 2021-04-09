<?php
session_start();
$num = "";
?>

    <!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8"/>
    <title>News - DirectPay</title>
    <meta name="description" content="Creative Agency, Marketing Agency Template">
    <meta name="keywords" content="Creative Agency, Marketing Agency">
    <meta name="author" content="rajesh-doot">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#fff">
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

<!-- top bar end -->
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
<!--Start Hero-->
<section class="breadcrumb-area banner-1" data-background="images/banner/9.jpg">
    <div class="text-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 v-center">
                    <div class="bread-inner">
                        <div class="bread-menu wow fadeInUp" data-wow-delay=".2s">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="block-a1 pad-tb2">
    <div class="container">
        <div class="row justify-content-center">

            <div class="common-heading-2 text-l">

                <center><h2 class="mb30"><font color="#333">DirectPay NEWS</font></h2></center>

            </div>

            <!--whyus end-->

        </div>
    </div>
</section>

<!--End Hero-->
<section class="blog-page pad-tb pt40">
    <div class="container">
        <div class="row">


            <div class="col-lg-4 col-sm-6 single-card-item">
                <div class="isotope_item hover-scale">
                    <div class="item-image">
                        <a href="blog7"><img src="images/blog/blog-7.jpg" alt="blog" class="img-fluid"/> </a>
                        <span class="category-blog"><a href="#">SLASSCOM Awards</a> <a
                                href="#">Best Disruptor</a></span>
                    </div>
                    <div class="item-info blog-info">
                        <div class="entry-blog">
                            <span class="bypost"><a href="#"><i class="fas fa-user"></i> Paymedia</a></span>
                            <span class="posted-on">
                <a href="#"><i class="fas fa-clock"></i>Friday, 02 April 2021</a>
                </span>

                        </div>
                        <h4><a href="blog7">DirectPay wins national “Best Disruptor” award from SLASSCOM</a></h4>
                        <p> DirectPay was recognized as the island-wide winner of the “Best Disruptor 2021” award at the
                            SLASSCOM National Ingenuity Awards 2021.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 single-card-item">
                <div class="isotope_item hover-scale">
                    <div class="item-image">
                        <a href="blog8"><img src="images/blog/blog-8.jpg" alt="blog" class="img-fluid"/> </a>
                        <span class="category-blog"><a href="#">SLASSCOM Awards</a> <a
                                href="#">Best Disruptor</a></span>
                    </div>
                    <div class="item-info blog-info">
                        <div class="entry-blog">
                            <span class="bypost"><a href="#"><i class="fas fa-user"></i> Directpay</a></span>
                            <span class="posted-on">
                    <a href="#"><i class="fas fa-clock"></i>Wednesday, 10 February 2021</a>
                </span>

                        </div>
                        <h4><a href="blog8">DirectPay Wins 3 awards at the National ICT Awards (NBQSA) 2020.</a></h4>
                        <p>We are still overjoyed by winning 3 awards at the National ICT Awards (NBQSA) 2020 and being
                            selected to represent Sri Lanka at APICTA in Malaysia </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 single-card-item">
                <div class="isotope_item hover-scale">
                    <div class="item-image">
                        <a href="blog9"><img src="images/blog/blog-9.jpg" alt="blog" class="img-fluid"/> </a>
                        <span class="category-blog"><a href="#">WTIA</a> <a
                                href="#">ASA Ceremony</a></span>
                    </div>
                    <div class="item-info blog-info">
                        <div class="entry-blog">
                            <span class="bypost"><a href="#"><i class="fas fa-user"></i> Directpay</a></span>
                            <span class="posted-on">
                    <a href="#"><i class="fas fa-clock"></i>Wednesday, 10 February 2021</a>
                </span>

                        </div>
                        <h4><a href="blog9">DirectPay won the Merit Award at the Asia Smart App (ASA) Awards 2020!</a>
                        </h4>
                        <p>We are the only Sri Lankan app to be recognized at the ceremony with a Merit Award among all
                            the Asian apps.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 single-card-item">
                <div class="isotope_item hover-scale">
                    <div class="item-image">
                        <a href="blog6"><img src="images/blog/blog-6.jpg" alt="blog" class="img-fluid"/> </a>
                        <span class="category-blog"><a href="#">Eleven Awards</a> <a href="#">News</a></span>
                    </div>
                    <div class="item-info blog-info">
                        <div class="entry-blog">
                            <span class="bypost"><a href="#"><i class="fas fa-user"></i> Dailymirror</a></span>
                            <span class="posted-on">
                <a href="#"><i class="fas fa-clock"></i>Tuesday, January 1, 2019</a>
                </span>

                        </div>
                        <h4><a href="blog6">PayMedia wraps up 2018 with Eleven Awards</a></h4>
                        <p>PayMedia, a rapidly evolving Financial Technology company in Sri Lanka, won eleven awards in
                            total in 2018, and was highly commended for the leadership of its Founding Director,
                            Kanishka Weeramunda.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 single-card-item">
                <div class="isotope_item hover-scale">
                    <div class="item-image">
                        <a href="blog"><img src="images/blog/blog-1.jpg" alt="blog" class="img-fluid"/> </a>
                        <span class="category-blog"><a href="#">Award</a> <a href="#">Seedstars</a></span>
                    </div>
                    <div class="item-info blog-info">
                        <div class="entry-blog">
                            <span class="bypost"><a href="#"><i class="fas fa-user"></i> Dailymirror</a></span>
                            <span class="posted-on">
                <a href="#"><i class="fas fa-clock"></i> Wednesday, 31 October 2018</a>
                </span>

                        </div>
                        <h4><a href="blog">DirectPay wins Seedstars Colombo 2018</a></h4>
                        <p>Seedstars World, the largest start-up competition for emerging markets and fast-growing
                            start-up scenes, brought its Sri Lanka round to a successful close during Seedstars
                            Colombo.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 single-card-item">
                <div class="isotope_item hover-scale">
                    <div class="item-image">
                        <a href="blog2"><img src="images/blog/blog-2.jpg" alt="blog" class="img-fluid"/> </a>
                        <span class="category-blog"><a href="#">Fintech</a> <a href="#">News</a></span>
                    </div>
                    <div class="item-info blog-info">
                        <div class="entry-blog">
                            <span class="bypost"><a href="#"><i class="fas fa-user"></i> Echelon</a></span>
                            <span class="posted-on">
                <a href="#"><i class="fas fa-clock"></i> May 21, 2018</a>
                </span>

                        </div>
                        <h4><a href="blog2">The Fintech Revolution Begins in Sri Lanka</a></h4>
                        <p>Cards and mobile wallets have largely failed to challenge the dominance of cash in retail
                            transactions.A unique concept using the simple smartphone is set to usher in a profound
                            transformation. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 single-card-item">
                <div class="isotope_item hover-scale">
                    <div class="item-image">
                        <a href="blog3"><img src="images/blog/blog-3.jpg" alt="blog" class="img-fluid"/> </a>
                        <span class="category-blog"><a href="#">Fintech</a> <a href="#">News</a></span>
                    </div>
                    <div class="item-info blog-info">
                        <div class="entry-blog">
                            <span class="bypost"><a href="#"><i class="fas fa-user"></i> Dailymirror</a></span>
                            <span class="posted-on">
                <a href="#"><i class="fas fa-clock"></i>Monday, 22 October 2018</a>
                </span>

                        </div>
                        <h4><a href="blog3">Fintech startups make Sri Lanka proud by winning Gold and Merit awards at
                                APICTA</a></h4>
                        <p>APITCA awards 2018, which was held in Guangzhou, China, named DirectPay as the overall winner
                            in the Consumer – Wealth and Retail Category.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 single-card-item">
                <div class="isotope_item hover-scale">
                    <div class="item-image">
                        <a href="blog4"><img src="images/blog/blog-4.jpg" alt="blog" class="img-fluid"/> </a>
                        <span class="category-blog"><a href="#">CMI Awards</a> <a href="#">News</a></span>
                    </div>
                    <div class="item-info blog-info">
                        <div class="entry-blog">
                            <span class="bypost"><a href="#"><i class="fas fa-user"></i> Dailymirror</a></span>
                            <span class="posted-on">
                <a href="#"><i class="fas fa-clock"></i>23 April 2018</a>
                </span>

                        </div>
                        <h4><a href="blog4">Kanishka Weeramunda Bags Two Awards At The CMI Excellence Awards</a></h4>
                        <p>PayMedia CEO and Founder, Kanishka Weeramunda, has been named the Best CEO of the Year and
                            the Best Future Leader of the Year in the small and medium service sector category.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 single-card-item">
                <div class="isotope_item hover-scale">
                    <div class="item-image">
                        <a href="blog5"><img src="images/blog/blog-5.jpg" alt="blog" class="img-fluid"/> </a>
                        <span class="category-blog"><a href="#">Distrupt Asia</a> <a href="#">News</a></span>
                    </div>
                    <div class="item-info blog-info">
                        <div class="entry-blog">
                            <span class="bypost"><a href="#"><i class="fas fa-user"></i> Dailymirror</a></span>
                            <span class="posted-on">
                <a href="#"><i class="fas fa-clock"></i>Thursday, 3 August 2017</a>
                </span>

                        </div>
                        <h4><a href="blog5">PayMedia wins big at Disrupt Asia 2017</a></h4>
                        <p>the past couple of years, Sri Lanka has seen an immense growth in its startup ecosystem,
                            producing a number of startups that have gained a competitive edge in the global market.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<br><br><br><br>
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
                        <p>Address <span> <a href="https://goo.gl/maps/oC5K6GnLjPx4ctJo8">410/33, Bauddhaloka Mawatha, Colombo 07,<br>
            Sri Lanka</a></span></p>
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
