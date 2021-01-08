<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8"/>
    <title>Bayya - Bitcoin Crypto Currency Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png">

    <!-- Template CSS Files -->

    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/select2.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/skins/orange.css">

    <!-- Live Style Switcher - demo only -->
    <link rel="alternate stylesheet" type="text/css" title="orange" href="css/skins/orange.css"/>
    <link rel="alternate stylesheet" type="text/css" title="green" href="css/skins/green.css"/>
    <link rel="alternate stylesheet" type="text/css" title="blue" href="css/skins/blue.css"/>
    <link rel="stylesheet" type="text/css" href="css/styleswitcher.css"/>
    <link rel="stylesheet" type="text/css" href="fonts/fontawesome/css/all.css"/>


    <!-- Template JS Files -->
    <script src="js/modernizr.js"></script>

</head>

<body>
<!-- SVG Preloader Starts -->
<div id="preloader">
    <div id="preloader-content">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
             x="0px" y="0px" width="150px" height="150px" viewBox="100 100 400 400" xml:space="preserve">
                <filter id="dropshadow" height="130%">
                    <feGaussianBlur in="SourceAlpha" stdDeviation="5"/>
                    <feOffset dx="0" dy="0" result="offsetblur"/>
                    <feFlood flood-color="red"/>
                    <feComposite in2="offsetblur" operator="in"/>
                    <feMerge>
                        <feMergeNode/>
                        <feMergeNode in="SourceGraphic"/>
                    </feMerge>
                </filter>
            <path class="path" fill="#000000" d="M446.089,261.45c6.135-41.001-25.084-63.033-67.769-77.735l13.844-55.532l-33.801-8.424l-13.48,54.068
                    c-8.896-2.217-18.015-4.304-27.091-6.371l13.568-54.429l-33.776-8.424l-13.861,55.521c-7.354-1.676-14.575-3.328-21.587-5.073
                    l0.034-0.171l-46.617-11.64l-8.993,36.102c0,0,25.08,5.746,24.549,6.105c13.689,3.42,16.159,12.478,15.75,19.658L208.93,357.23
                    c-1.675,4.158-5.925,10.401-15.494,8.031c0.338,0.485-24.579-6.134-24.579-6.134l-9.631,40.468l36.843,9.188
                    c8.178,2.051,16.209,4.19,24.098,6.217l-13.978,56.17l33.764,8.424l13.852-55.571c9.235,2.499,18.186,4.813,26.948,6.995
                    l-13.802,55.309l33.801,8.424l13.994-56.061c57.648,10.902,100.998,6.502,119.237-45.627c14.705-41.979-0.731-66.193-31.06-81.984
                    C425.008,305.984,441.655,291.455,446.089,261.45z M368.859,369.754c-10.455,41.983-81.128,19.285-104.052,13.589l18.562-74.404
                    C306.28,314.65,379.774,325.975,368.859,369.754z M379.302,260.846c-9.527,38.187-68.358,18.781-87.442,14.023l16.828-67.489
                    C327.767,212.14,389.234,221.02,379.302,260.846z"/>
            </svg>
    </div>
</div>
<!-- SVG Preloader Ends -->
<!-- Live Style Switcher Starts - demo only -->
<div id="switcher" class="">
    <div class="content-switcher">
        <h4>سبک قالب</h4>
        <ul>
            <li>
                <a id="orange-css" href="#" title="orange" class="color"><img
                        src="images/styleswitcher/colors/orange.png" alt="" width="30" height="30"/></a>
            </li>
            <li>
                <a id="green-css" href="#" title="green" class="color"><img src="images/styleswitcher/colors/green.png"
                                                                            alt="" width="30" height="30"/></a>
            </li>
            <li>
                <a id="blue-css" href="#" title="blue" class="color"><img src="images/styleswitcher/colors/blue.png"
                                                                          alt="" width="30" height="30"/></a>
            </li>
        </ul>

        <p>رنگ قالب</p>

        <label><input class="dark_switch" type="radio" name="color_style" id="is_dark" value="dark" checked="checked"/>
            تیره</label>
        <label><input class="dark_switch" type="radio" name="color_style" id="is_light" value="light"/> روشن</label>

        <hr/>

        <p>طرح سبک</p>
        <label><input class="boxed_switch" type="radio" name="layout_style" id="is_wide" value="wide"
                      checked="checked"/> وسیع</label>
        <label><input class="boxed_switch" type="radio" name="layout_style" id="is_boxed" value="boxed"/> جعبه</label>

        <hr/>

        <!--        <a href="https://www.rtl-theme.com/user-profile/davod_taheri/" class="custom-button purchase">خرید</a>-->
        <!--        <div id="hideSwitcher">&times;</div>-->

    </div>
</div>
<!--<div id="showSwitcher" class="styleSecondColor"><i class="fa fa-cog fa-spin"></i></div>-->
<!-- Live Style Switcher Ends - demo only -->
<!-- Wrapper Starts -->
<div class="wrapper">
    <!-- Header Starts -->
    <header class="header">
        <div class="container">
            <div class="row">
                <!-- Logo Starts -->
                <div class="main-logo col-xs-12 col-md-3 col-md-2 col-lg-2 hidden-xs">
                    <a href="index.php">
                        <img id="logo" class="img-responsive" src="images/logo-dark.png" alt="logo">
                    </a>
                </div>
                <!-- Logo Ends -->
                <!-- Statistics Starts -->
                <div class="col-md-7 col-lg-7">
                    <ul class="unstyled bitcoin-stats text-center">
                        <li>
                            <h6>9,450 USD</h6><span>آخرین قیمت تجارتی</span></li>
                        <li>
                            <h6>+5.26%</h6><span>قیمت 24 ساعته</span></li>
                        <li>
                            <h6>12.820 BTC</h6><span>حجم 24 ساعته</span></li>
                        <li>
                            <h6>2,231,775</h6><span>معامله گران فعال</span></li>
                        <li>
                            <div class="btcwdgt-price" data-bw-theme="light" data-bw-cur="usd"></div>
                            <span>قیمت زنده بیت کوین</span>
                        </li>
                    </ul>
                </div>
                <!-- Statistics Ends -->
                <!-- User Sign In/Sign Up Starts -->
                <div class="col-md-3 col-lg-3">
                    <ul class="unstyled user">
                        <li class="sign-in"><a href="login.php" class="btn btn-primary"><i class="fa fa-user"></i> ورود</a>
                        </li>
                        <li class="sign-up"><a href="register.php" class="btn btn-primary"><i
                                    class="fa fa-user-plus"></i> ثبت نام</a></li>
                    </ul>
                </div>
                <!-- User Sign In/Sign Up Ends -->
            </div>
        </div>
        <!-- Navigation Menu Starts -->
        <nav class="site-navigation navigation" id="site-navigation">
            <div class="container">
                <div class="site-nav-inner">
                    <!-- Logo For ONLY Mobile display Starts -->
                    <a class="logo-mobile" href="index.php">
                        <img id="logo-mobile" class="img-responsive" src="images/logo-dark.png" alt="">
                    </a>
                    <!-- Logo For ONLY Mobile display Ends -->
                    <!-- Toggle Icon for Mobile Starts -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Toggle Icon for Mobile Ends -->
                    <div class="collapse navbar-collapse navbar-responsive-collapse">
                        <!-- Main Menu Starts -->
                        <ul class="nav navbar-nav">
                            <li ><a href="index.php">خانه</a></li>
                            <li><a href="about.php">درباره ما</a></li>
                            <li><a href="services.php">خدمات</a></li>
                            <li><a href="pricing.php">قیمت</a></li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">وبلاگ <i
                                        class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="blog-right-sidebar.php">نوار کناری راست</a></li>
                                    <li><a href="blog-left-sidebar.php">نوار کناری سمت چپ</a></li>
                                    <li><a href="blog-grid-no-sidebar.php">بدون شبکه نوار کناری</a></li>
                                    <li><a href="blog-post.php">پست</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">صفحات <i
                                        class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="register.php">صفحه ثبت نام</a></li>
                                    <li><a href="login.php">صفحه ورود</a></li>
                                    <li><a href="shopping-cart.php">سبد خرید</a></li>
                                    <li><a href="shopping-checkout.php">پرداخت خرید</a></li>
                                    <li><a href="faq.php">صفحه سؤالات متداول</a></li>
                                    <li><a href="404.php">صفحه 404</a></li>
                                    <li><a href="503.php">صفحه خطای سرور</a></li>
                                    <li><a href="terms-of-services.php">شرایط خدمات</a></li>
                                    <li><a href="coming-soon.php">به زودی</a></li>

                                </ul>
                            </li>
                            <li><a href="contact.php">تماس با ما</a></li>
                            <!-- Cart Icon Starts -->
                            <li class="cart"><a href="shopping-cart.php"><i class="fa fa-shopping-cart"></i></a></li>
                            <!-- Cart Icon Starts -->
                            <!-- Search Icon Starts -->
                            <li class="search">
                                <button class="fa fa-search"></button>
                            </li>
                            <!-- Search Icon Ends -->
                        </ul>
                        <!-- Main Menu Ends -->
                    </div>
                </div>
            </div>
            <!-- Search Input Starts -->
            <div class="site-search">
                <div class="container">
                    <input type="text" placeholder="جستجو ...">
                    <span class="close">×</span>
                </div>
            </div>
            <!-- Search Input Ends -->
        </nav>
        <!-- Navigation Menu Ends -->
    </header>