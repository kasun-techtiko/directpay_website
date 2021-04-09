<!DOCTYPE html>
<html lang="en">

<head>
    <title>DirectPay - News portal</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">



</head>
<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar menu-light ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >

				<div class="">
					<div class="main-menu-header">
						<img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="User-Profile-Image">
						<div class="user-details">
							<div id="more-details">Kasun anuranga <i class="fa fa-caret-down"></i></div>
						</div>
					</div>
					<div class="collapse" id="nav-user-link">
						<ul class="list-unstyled">
							<li class="list-group-item"><a href="user-profile.html"><i class="feather icon-user m-r-5"></i>View Profile</a></li>
							<li class="list-group-item"><a href="#!"><i class="feather icon-settings m-r-5"></i>Settings</a></li>
							<li class="list-group-item"><a href="/logout"><i class="feather icon-log-out m-r-5"></i>Logout</a></li>
						</ul>
					</div>
				</div>

				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item pcoded-menu-caption">
					    <label>Navigation</label>
					</li>
					<li class="nav-item">
					    <a href="index.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
					</li>
					<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Articles</span></a>
					    <ul class="pcoded-submenu">
					        <li><a href="create-article" target="_blank">Create new Article</a></li>
					        <li><a href="layout-horizontal.html" target="_blank">Edit Article</a></li>
					    </ul>
					</li>
					<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Vacancies</span></a>
					    <ul class="pcoded-submenu">
					        <li><a href="layout-vertical.html" target="_blank">Create new Vacancy</a></li>
					        <li><a href="layout-horizontal.html" target="_blank">Edit Vacancy</a></li>
					    </ul>
					</li>
					<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Rates</span></a>
					    <ul class="pcoded-submenu">
					        <li><a href="layout-horizontal.html" target="_blank">Edit rates</a></li>
					    </ul>
					</li>

				</ul>



			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">


				<div class="m-header">
					<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
					<a href="#!" class="b-brand">
						<!-- ========   change your logo hear   ============ -->
						<h3><font face="Century gothic" color="#fff">DirectPay</font></h3>
						<img src="assets/images/logo-icon.png" alt="" class="logo-thumb">
					</a>
					<a href="#!" class="mob-toggler">
						<i class="feather icon-more-vertical"></i>
					</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
							<div class="search-bar">
								<input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
								<button type="button" class="close" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						</li>
					</ul>

					<ul class="navbar-nav ml-auto">
						<li>
						<!-- login alert place  -->
						</li>
					</ul>

				</div>


	</header>
	<!-- [ Header ] end -->
    @section('content')
        <div class="card-header">{{ __('Dashboard') }}</div>
    @endsection

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">News and Content management Panel</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Dashboard</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="col-xl-12">

				<div class="row">
					<div class="col-sm-4">
						<div class="card bg-light ">
							<div class="card-header">Page Views</div>
							<div class="card-body">
								<h5 class="card-title">There are 16 News article Views.</h5>
								<p class="card-text">You can share post link directly in to social media platforms.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card bg-light ">
							<div class="card-header">Total News Articles</div>
							<div class="card-body">
								<h5 class="card-title">Total 6 Articles Published.</h5>
								<p class="card-text">Create new or edit articles using below portals.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card bg-light ">
							<div class="card-header">Carreer Openings</div>
							<div class="card-body">
								<h5 class="card-title">2 Job vacancies active and published.</h5>
								<p class="card-text">You can pause/complete or create new vacancy using below portal.</p>
							</div>
						</div>
					</div>

				</div>
			</div>
        <div class="row">




          			<div class="col-xl-12">

				<div class="card-group">
					<div class="card">
						<img class="img-fluid card-img-top" src="assets/images/slider/img-slide-4.jpg" alt="Card image cap">
						<div class="card-body">
							<center><h5 class="card-title">IPG | VPOS | POS Rates and Table Data</h5>
							<button type="button" class="btn  btn-outline-primary">&nbsp;&nbsp;&nbsp;&nbsp;Enter&nbsp;&nbsp;&nbsp;&nbsp;</button></center>
						</div>
						<div class="card-footer">
							<small class="text-muted">Last updated 3 mins ago</small>
						</div>
					</div>
					<div class="card">
						<img class="img-fluid card-img-top" src="assets/images/slider/img-slide-2.jpg" alt="Card image cap">
						<div class="card-body">
							<center><h5 class="card-title">Articles and Blog Contents</h5>
							<button type="button" class="btn  btn-outline-primary">&nbsp;&nbsp;&nbsp;&nbsp;Enter&nbsp;&nbsp;&nbsp;&nbsp;</button></center>
						</div>
						<div class="card-footer">
							<small class="text-muted">Last updated 3 mins ago</small>
						</div>
					</div>
					<div class="card">
						<img class="img-fluid card-img-top" src="assets/images/slider/img-slide-1.jpg" alt="Card image cap">
						<div class="card-body">
							<center><h5 class="card-title">Carreer Openings</h5>
							<button type="button" class="btn  btn-outline-primary">&nbsp;&nbsp;&nbsp;&nbsp;Enter&nbsp;&nbsp;&nbsp;&nbsp;</button></center>
						</div>
						<div class="card-footer">
							<small class="text-muted">Last updated 3 mins ago</small>
						</div>
					</div>
				</div>
			</div>
            <!-- prject ,team member start -->
            <!-- seo start -->

            <!-- seo end -->

            <!-- Latest Customers start -->

            <!-- Latest Customers end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>


    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/ripple.js"></script>
    <script src="assets/js/pcoded.min.js"></script>

<!-- Apex Chart -->
<script src="assets/js/plugins/apexcharts.min.js"></script>


<!-- custom-chart js -->
<script src="assets/js/pages/dashboard-main.js"></script>
</body>

</html>
