<!DOCTYPE html>
<html lang="en">

<head>
    <title>DirectPay - News portal</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content=""/>
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded"/>
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/vendors/quill/quill.bubble.css">
    <link rel="stylesheet" href="assets/vendors/quill/quill.snow.css">

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
        <div class="navbar-content scroll-div ">

            <div class="">
                <div class="main-menu-header">
                    <img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="User-Profile-Image">
                    <div class="user-details">
                        <div id="more-details">Kasun anuranga <i class="fa fa-caret-down"></i></div>
                    </div>
                </div>
                <div class="collapse" id="nav-user-link">
                    <ul class="list-unstyled">
                        <li class="list-group-item"><a href="user-profile.html"><i class="feather icon-user m-r-5"></i>View
                                Profile</a></li>
                        <li class="list-group-item"><a href="#!"><i class="feather icon-settings m-r-5"></i>Settings</a>
                        </li>
                        <li class="list-group-item"><a href="auth-normal-sign-in.html"><i
                                    class="feather icon-log-out m-r-5"></i>Logout</a></li>
                    </ul>
                </div>
            </div>

            <ul class="nav pcoded-inner-navbar ">
                <li class="nav-item pcoded-menu-caption">
                    <label>Navigation</label>
                </li>
                <li class="nav-item">
                    <a href="index.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span
                            class="pcoded-mtext">Dashboard</span></a>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span
                            class="pcoded-mtext">Articles</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="layout-vertical.html" target="_blank" active>Create new Article</a></li>
                        <li><a href="layout-horizontal.html" target="_blank">Edit Article</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span
                            class="pcoded-mtext">Vacancies</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="layout-vertical.html" target="_blank">Create new Vacancy</a></li>
                        <li><a href="layout-horizontal.html" target="_blank">Edit Vacancy</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span
                            class="pcoded-mtext">Rates</span></a>
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

    </div>


</header>
<!-- [ Header ] end -->
<div class="pcoded-main-container">
    <div class="pcoded-content">


        <div class="col-sm-12">
            <div class="card">

                <div class="card-header">


                    <h4>Create new article</h4>
                </div>
                <div class="card-body">
                    <h6>Consider character limits before submit to the database.</h6>
                    <hr>
                    <div class="row">


                        <div class="col-md">
                            <form action="create" method="post">
                                @csrf
                                <div class="form-group">


                                    <label for="exampleInputEmail1">Article Title</label>
                                    <textarea type="text" class="form-control" id="title" name="title"
                                              placeholder="Enter article title here." rows="1"
                                              maxlength="120"></textarea>
                                    <small id="emailHelp" class="form-text text-muted">Maximum 120 Characters.</small>


                                    <label>Short Chapter</label>
                                    <textarea type="text" class="form-control" id="shortChapter" name="shortChapter"
                                              placeholder="Start here" rows="1" required maxlength="250"></textarea>
                                    <small id="emailHelp" class="form-text text-muted">Maximum 200 Characters.</small>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>


                                    <label>Source Link</label>
                                    <input type="text" id="sourceLink" name="sourceLink" class="form-control"
                                           placeholder="Enter web link here" maxlength="250">
                                    <small id="emailHelp" class="form-text text-muted">Maximum 180 Characters.</small>


                                    <label for="exampleInputEmail1">Date</label>
                                    <input type="date" id="ndate" name="ndate" class="form-control"
                                           placeholder="Type Date here" required>
                                    <small id="emailHelp" class="form-text text-muted">Example :- Wednesday, 31 October
                                        2018</small>


                                    <label for="exampleInputEmail1">News Source</label>
                                    <input type="text" id="nsource" name="nsource" class="form-control"
                                           placeholder="News Source">
                                    <small id="emailHelp" class="form-text text-muted">Example :- Daily Mirror
                                        FT</small>


                                    <label for="exampleFormControlSelect1">Select NEWS Category</label>
                                    <select class="form-control" id="category" name="category">
                                        <option>Business</option>
                                        <option>Financial</option>
                                        <option selected>Awards</option>
                                        <option>Offers and announcements</option>
                                        <option>Blogs</option>
                                    </select>


                                    <label for="exampleFormControlSelect1">Enter Article Body Here.</label>
                                    <small id="emailHelp" class="form-text text-muted">Maximum 600 words- Tip: Use
                                        Paragraph 2</small>


                                    <textarea class="form-control" id="mcontent" name="mcontent"
                                              aria-label="With textarea" placeholder="Enter Article body here"
                                              maxlength="4000"></textarea>
                                </div>
                                <hr>


                                <label for="exampleFormControlSelect1">Enter Paragraph 2 (Optional).</label>
                                <small id="emailHelp" class="form-text text-muted">Maximum 500 words</small>


                                <textarea class="form-control" id="paraTwo" name="paraTwo" aria-label="With textarea"
                                          placeholder="Enter Article body here" maxlength="3000"></textarea>


                                <label for="exampleFormControlSelect1">Enter Paragraph 3 (Optional).</label>
                                <small id="emailHelp" class="form-text text-muted">Maximum 500 words</small>


                                <textarea class="form-control" id="parathree" name="parathree"
                                          aria-label="With textarea" placeholder="Enter Article body here"
                                          maxlength="3000"></textarea>
                                <hr>


                                <div class="col-md-6">

                                    <label for="exampleFormControlSelect1">Select Main image</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="main" name="main" required>
                                        <label class="custom-file-label" for="validatedCustomFile">Choose
                                            file...</label>
                                        <small id="emailHelp" class="form-text text-muted">Image Resolution should
                                            be as 770px x 520px</small>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>

                                </div>


                                <div class="col-md-6">
                                    <label for="exampleFormControlSelect1">Select Main image for mobile
                                        devices</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="mainMobile" name="mainMobile"
                                               required>
                                        <label class="custom-file-label" for="validatedCustomFile">Choose
                                            file...</label>
                                        <small id="emailHelp" class="form-text text-muted">Image Resolution should
                                            be as 370px x 270px</small>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <label for="exampleFormControlSelect1">Select Title image</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="titleIcon" name="titleIcon"
                                               required>
                                        <label class="custom-file-label" for="validatedCustomFile">Choose
                                            file...</label>
                                        <small id="emailHelp" class="form-text text-muted">Image Resolution should
                                            be as 80px x 80px</small>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <label for="exampleFormControlSelect1">Select NEWS Source icon</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="sourceLogo" name="sourceLogo"
                                               required>
                                        <label class="custom-file-label" for="validatedCustomFile">Choose
                                            file...</label>
                                        <small id="emailHelp" class="form-text text-muted">Image Resolution should
                                            be as 370px x 300px</small>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>
                                </div>


                                <center>
                                    <button type="submit" class="btn  btn-primary">&nbsp;&nbsp;&nbsp;&nbsp;Next&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                </center>


                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="assets/vendors/quill/quill.min.js"></script>
<script src="assets/js/pages/form-editor.js"></script>
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/ripple.js"></script>
<script src="assets/js/pcoded.min.js"></script>


</body>

</html>
