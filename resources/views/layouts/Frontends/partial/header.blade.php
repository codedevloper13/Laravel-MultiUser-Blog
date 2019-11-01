<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sujon - index</title>
    <!-- css include -->
    <link rel="stylesheet" type="text/css" href="{{asset('/Frontends/css/materialize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/Frontends/css/icofont.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/Frontends/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/Frontends/css/owl.theme.default.min.css')}}">
    <!-- my css include -->
    <link rel="stylesheet" type="text/css" href="{{asset('/Frontends/css/custom-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/Frontends/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/Frontends/css/responsive.css')}}">
</head>
<body>
<div class="thetop"></div>
<!-- for back to top -->

<div class='backToTop'>
    <a href="#" class='scroll'>
        <span>T</span>
        <span>O</span>
        <span>P</span>
        <span class="go-up">
					<i class="icofont icofont-long-arrow-up"></i>
				</span>
    </a>
</div>
<!-- backToTop -->


<!-- ==================== header-section Start ==================== -->
<header id="header-section" class="header-section w100dt navbar-fixed">

    <nav class="nav-extended main-nav">
        <div class="container">
            <div class="row">
                <div class="nav-wrapper w100dt">

                    <div class="logo left">
                        <a href="index.html" class="brand-logo">
                            <img src="{{asset('/Frontends/img/logo.png')}}" alt="brand-logo">
                        </a>
                    </div>
                    <!-- logo -->

                    <div>
                        <a href="#" data-activates="mobile-demo" class="button-collapse">
                            <i class="icofont icofont-navigation-menu"></i>
                        </a>
                        <ul id="nav-mobile" class="main-menu center-align hide-on-med-and-down">
                            <li class="active"><a href="index.html">HOME</a></li>
                            <li><a href="cateogry.html">CATEGORIES</a></li>
                            <li class="dropdown">
                                <a href="#">PAGES <i class="icofont icofont-simple-down"></i></a>
                                <ul class="dropdown-container">
                                    <li><a href="404.html">404 Page</a></li>
                                </ul>
                                <!-- /.dropdown-container -->
                            </li>
                            <li><a href="single-blog.html">BLOG SINGLE</a></li>
                            <li><a href="contact.html">CONTACT</a></li>
                        </ul>
                        <!-- /.main-menu -->

                        <!-- ******************** sidebar-menu ******************** -->
                        <ul class="side-nav" id="mobile-demo">
                            <li class="snavlogo center-align"><img src="{{asset('/Frontends/img/logo.png')}}" alt="logo"></li>
                            <li class="active"><a href="index.html">HOME</a></li>
                            <li><a href="cateogry.html">CATEGORIES</a></li>
                            <li><a href="single-blog.html">SINGLE BLOG</a></li>
                            <li><a href="contact.html">CONTACT</a></li>
                            <li><a href="404.html">404 PAGE</a></li>
                        </ul>
                    </div>
                    <!-- main-menu -->

                    <a href="#" class="search-trigger right">
                        <i class="icofont icofont-search"></i>
                    </a>
                    <!-- search -->
                    <div id="myNav" class="overlay">
                        <a href="javascript:void(0)" class="closebtn">&times;</a>
                        <div class="overlay-content">
                            <form>
                                <input type="text" name="search" placeholder="Search...">
                                <br>
                                <button class="waves-effect waves-light" type="submit" name="action">Search</button>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.nav-wrapper -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </nav>

</header>
