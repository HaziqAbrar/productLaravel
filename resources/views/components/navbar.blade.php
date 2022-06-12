<!DOCTYPE html>
<html lang="zxx" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Product Page - Insource Plus</title> -->
    <title>@yield('title')</title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Hmart-Smart Product eCommerce html Template">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />
    <!-- CSS
    ============================================ -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <link rel="stylesheet" href="/css/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="/css/animate.min.css">
    <link rel="stylesheet" href="/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="/css/venobox.css">
    <link rel="stylesheet" href="/css/jquery-ui.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Style CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/custom.css">
    <!-- Minify Version -->
    <link rel="stylesheet" href="/css/plugins.min.css">
    <!-- <link rel="stylesheet" href="assets/css/style.min.css"> -->
</head>

<body>
    <div class="main-wrapper">
        <header>
            <!-- Header action area start -->
            <div class="header-bottom  d-none d-lg-block">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-3 col">

                            <div class="header-logo">
                                <a href="/home"><img src="/images/logo/logo.png" alt="Site Logo" /></a>
                            </div>

                        </div>
                        <!-- Search function start -->
                        <div class="col-lg-8 d-none d-lg-block">
                            <div class="search-element">

                                <form action="#">
                                    <input type="text" placeholder="Search" />
                                    <button><i class="pe-7s-search"></i></button>
                                </form>

                            </div>
                        </div>
                        <!-- Search function ends -->
                    </div>
                </div>
            </div>
            <!-- Header action area end -->
            <!-- Header action area start -->
            <div class="header-bottom d-lg-none sticky-nav style-1">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-3 col">

                            <div class="header-logo">
                                <a href="/index"><img src="/images/logo/logo.png" alt="Site Logo" /></a>
                            </div>

                        </div>
                        <div class="col-lg-8 d-none d-lg-block">
                            <div class="search-element">
                                <form action="#">
                                    <input type="text" placeholder="Search" />
                                    <button><i class="pe-7s-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-1 col">
                            <div class="header-actions">
                                <a href="#offcanvas-mobile-menu" class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                                    <i class="pe-7s-menu"></i>
                                </a>
                                <a href="#" class="header-action-btn header-action-btn-menu" alt="Agent Login">
                                    <i class="pe-7s-user"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header action area end -->
            <!-- header navigation area start -->
            <div class="header-nav-area d-none d-lg-block sticky-nav">
                <div class="container">
                    <div class="header-nav">
                        <div class="main-menu position-relative">
                            <ul>
                                <li class="dropdown"><a href="#">Products <i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="/createProduct">Add Product</a></li>
                                        <li><a href="/index">View All Products</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header navigation area end -->
            <div class="mobile-search-box d-lg-none">
                <div class="container">
                    <!-- mobile search start -->
                    <div class="search-element max-width-100">
                        <form action="#">
                            <input type="text" placeholder="Search" />
                            <button><i class="pe-7s-search"></i></button>
                        </form>
                    </div>
                    <!-- mobile search start -->
                </div>
            </div>
        </header>
        <!-- offcanvas overlay start -->
        <div class="offcanvas-overlay"></div>
        <!-- offcanvas overlay end -->
      
        <!-- breadcrumb-area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12">
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Products</a></li>
                            <li class="breadcrumb-item active">All Products</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->
        <!-- Shop Page Start  -->
        
        @yield('container')

        <!-- Shop Page End  -->
        <!-- Footer Area Start -->
        <div class="footer-area">
            <div class="footer-container">
                <div class="footer-bottom">
                    <div class="container">
                        <div class="line-shape-top line-height-1">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <p class="copy-text"> &copy; 2022 <strong>Insource</strong>. Developed by <a href="https://www.goodsane.com/">Goodsane</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Area End -->
    </div>

    <!-- Global Vendor, plugins JS -->
    <!-- JS Files
    ============================================ -->
    <script src="/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="/js/plugins/jquery.countdown.min.js"></script>
    <script src="/js/plugins/swiper-bundle.min.js"></script>
    <script src="/js/plugins/scrollUp.js"></script>
    <script src="/js/plugins/venobox.min.js"></script>
    <script src="/js/plugins/jquery-ui.min.js"></script>
    <script src="/js/plugins/mailchimp-ajax.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Minify Version -->
    <!-- <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>
    <script src="assets/js/main.min.js"></script> -->

    <!--Main JS (Common Activation Codes)-->
    <script src="/js/main.js"></script>
</body>

</html>