<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="INSPIRO" />
    <meta name="description" content="Themeforest Template Polo, html template">
    <link rel="icon" type="image/png" href="{{('/images/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>POLO | The Multi-Purpose HTML5 Template</title>

    <link href="{{ asset('/css/plugins.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">

</head>

<body>
    <div class="body-inner">
        <!-- Header -->
        <header id="header" class="dark">
            <div class="header-inner">
                <div class="container">
                    <!--Logo-->
                    <div id="logo">
                        <a href="{{route('main')}}">
                            <span class="logo-default">POLO</span>
                            <span class="logo-dark">POLO</span>
                        </a>
                    </div>
                    <!--End: Logo-->
                    <!-- Search -->
                    <div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i class="icon-x"></i></a>
                        <form class="search-form" action="search-results-page.html" method="get">
                            <input class="form-control" name="q" type="text" placeholder="Type & Search..." />
                            <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
                        </form>
                    </div>
                    <!-- end: search -->
                    <!--Header Extras-->
                    <div class="header-extras">
                        <ul>
                            <li>
                                <a id="btn-search" href="#"> <i class="icon-search"></i></a>
                            </li>
                            <li>
                                <div class="p-dropdown">
                                    <a href="#"><i class="icon-globe"></i><span>EN</span></a>
                                    <ul class="p-dropdown-content">
                                        <li><a href="#">French</a></li>
                                        <li><a href="#">Spanish</a></li>
                                        <li><a href="#">English</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--end: Header Extras-->
                    <!--Navigation Resposnive Trigger-->
                    <div id="mainMenu-trigger">
                        <a class="lines-button x"><span class="lines"></span></a>
                    </div>
                    <!--end: Navigation Resposnive Trigger-->
                    <!--Navigation-->
                    <div id="mainMenu">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li><a href="{{route('main')}}">Home</a></li>
                                    <li><a href="{{route('shop')}}">Shop</a></li>
                                    <li><a href="{{route('contact')}}">Contact</a></li>
                                    <li><a href="{{route('cart')}}">Cart</a></li>
                                    <li><a href="{{route('wishlist')}}">Wish</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--end: Navigation-->
                </div>
            </div>
        </header>
        @yield('content')
        <footer id="footer" class="inverted">
                <div class="footer-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-2 col-lg-2 col-md-3">
                                <!-- Footer widget area 1 -->
                                <div class="widget">
                                    <h4>PROJECT</h4>
                                    <ul class="list">
                                        <li><a href="#">Latest Release</a></li>
                                        <li><a href="#">Updates</a></li>
                                        <li><a href="#">License</a></li>
                                        <li><a href="#">News</a></li>
                                        <li><a href="#">Links</a></li>
                                    </ul>
                                </div>
                                <!-- end: Footer widget area 1 -->
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-3">
                                <!-- Footer widget area 2 -->
                                <div class="widget">
                                    <h4>SUPPORT</h4>
                                    <ul class="list">
                                        <li><a href="#">Troubleshooting</a></li>
                                        <li><a href="#">Common Questions</a></li>
                                        <li><a href="#">Report a Bug</a></li>
                                        <li><a href="#">Get Help</a></li>
                                        <li><a href="#">FAQS</a></li>
                                    </ul>
                                </div>
                                <!-- end: Footer widget area 2 -->
                            </div>

                            <div class="col-xl-2 col-lg-2 col-md-3">
                                <!-- Footer widget area 3 -->
                                <div class="widget">
                                    <h4>COMPANY</h4>
                                    <ul class="list">
                                        <li><a href="#">About</a></li>
                                        <li><a href="{{route('contact')}}">Contact</a></li>
                                        <li><a href="{{route('main')}}">Home</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Portfolio</a></li>
                                    </ul>
                                </div>
                                <!-- end: Footer widget area 3 -->
                            </div>

                            <div class="col-xl-2 col-lg-2 col-md-3">
                                <!-- Footer widget area 4 -->
                                <div class="widget">
                                    <h4>INFO</h4>
                                    <ul class="list">
                                        <li><a href="#">Get Directions</a></li>
                                        <li><a href="#">Call Us</a></li>
                                        <li><a href="#">Our Staff</a></li>
                                        <li><a href="#">Working Hours</a></li>
                                        <li><a href="#">Offices</a></li>
                                    </ul>
                                </div>
                                <!-- end: Footer widget area 4 -->
                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-12">
                                <!-- Footer widget area 5 -->
                                <div class="widget clearfix widget-newsletter">
                                    <h4 class="widget-title"><i class="fa fa-envelope"></i> Sign Up For a Newsletter</h4>
                                    <p>Weekly breaking news, analysis and cutting edge advices on job searching.

                                    </p>
                                    <form class="widget-subscribe-form p-r-40" action="include/subscribe-form.php" role="form" method="post" novalidate="novalidate">


                                        <div class="input-group">
                                            <input aria-required="true" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email" type="email">
                                            <span class="input-group-btn">
                      <button type="submit" id="widget-subscribe-submit-button" class="btn"><i class="fa fa-paper-plane"></i></button>
                    </span> </div>
                                    </form>
                                </div>
                                <!-- end: Footer widget area 5 -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright-content">
                    <div class="container">

                        <div class="row">
                            <div class="col-lg-6">
                                <!-- Social icons -->
                                <div class="social-icons social-icons">
                                    <ul>
                                        <li class="social-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
                                        <li class="social-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="social-twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li class="social-vimeo"><a href="#"><i class="fab fa-vimeo"></i></a></li>
                                        <li class="social-youtube"><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        <li class="social-pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                        <li class="social-gplus"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                </div>
                                <!-- end: Social icons -->
                            </div>

                            <div class="col-lg-6 text-right">
                                <div class="copyright-text">© 2019 POLO HTML5 Template. All Rights Reserved. </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
    </div>
<a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>

<script src="{{asset('/js/jquery.js')}}"></script>
<script src="{{asset('/js/plugins.js')}}"></script>
<script src="{{asset('/js/functions.js')}}"></script>
<script src="{{asset('/js/custom.js')}}"></script>
</body>
</html>
