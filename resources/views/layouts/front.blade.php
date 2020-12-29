<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <!--====== Title ======-->
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/png">
    <!--====== Nice Select CSS ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <!--====== Font Awesome CSS ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">
    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body class="gray-bg">

    <!--====== PRELOADER PART START ======-->
    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->
    <header class="header_area">

        <div class="header_navbar">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="index.html">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="fasse" aria-label="Toggle navigation">
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <li>
                                <a class="active" href="index.html">Accueil <span class="line"></span></a>
                            </li>
                            <li>
                                <a href="categories.html">Actualités <span class="line"></span></a>
                            </li>
                            <li>
                                <a href="#">L'Omap en bref <i class="fa fa-angle-down"></i> <span class="line"></span></a>

                                <ul class="sub-menu">
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="product.html">Listing</a></li>
                                    <li><a href="product-details.html">Product Details</a></li>
                                    <li><a href="error-404.html">404</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="pricing.html">Pricing</a></li>
                                    <li><a href="sign-in.html">Sign In</a></li>
                                    <li><a href="sign-up.html">Sign Up</a></li>
                                </ul>
                            </li>

                            <li><a href="#">Informations diverses <i class="fa fa-angle-down"></i> <span class="line"></span></a>
                                <ul class="sub-menu">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Plan d'activités <span class="line"></span></a></li>
                            <li><a href="contact.html">Nous rejoindre <span class="line"></span></a></li>
                            <li><a href="contact.html">Liens utiles <span class="line"></span></a></li>
                        </ul>
                    </div>

                </nav>
            </div>
        </div>

        <div class="header_content bg_cover" style="background-image: url({{ asset('assets/images/img1.jpg') }})">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="content_wrapper">
                            <p>...</p>
                            
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </header>

    <!--====== HEADER PART ENDS ======-->

    <!--====== BREADCRUMB PART START ======-->
    
    <section class="breadcrumb_area">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                </ol>
            </nav>
        </div>
    </div>

    <!--====== BREADCRUMB PART ENDS ======-->
    
    <!--====== CHOOSE PART START ======-->

    <section class="choose_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_ads_card mt-30 border">
                        <div class="ads_card_content">
                            <div class="meta d-flex justify-content-between">
                                <p>Nos activités</p>
                                <a class="like" href="#"><i class="fas fa-tasks"></i></a>
                            </div>
                        </div>
                        <ul class="list-group list-group-flush">
                            <a href="#" class="list-group-item list-group-item-action">
                                Actes de séminaires, rencontres
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">Publications</a>
                            <a href="#" class="list-group-item list-group-item-action">Partenariat et coopération</a>
                            <a href="#" class="list-group-item list-group-item-action">Travaux scientifiques des membres</a>
                            <a href="#" class="list-group-item list-group-item-action">Interviews</a>
                            <a href="#" class="list-group-item list-group-item-action">Points de vue</a>
                            <a href="#" class="list-group-item list-group-item-action">Administration en chiffres</a>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 col-sm-6">
                    
                    <div class="choose_content pt-35">
                        <div class="section_title pb-20">
                            <h3 class="title">Editorial : point de vue de l'OMAP</h3>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam.</p>

                        <ul class="list">
                            <li><i class="fa fa-check"></i> Powerful feature one.</li>
                            <li><i class="fa fa-check"></i> Much needed and important feature two.</li>
                            <li><i class="fa fa-check"></i> Essential features to rock.</li>
                        </ul>
                        <a href="#" class="main-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== CHOOSE PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <footer class="footer_area">
        <div class="footer_copyright pt-15 pb-30">
            <div class="container">
                <div class="footer_copyright_wrapper text-center d-sm-flex justify-content-between align-items-center">
                    <div class="copyright mt-15">
                        <p>Copyright (c) 2020 <a href="http://www.omap.ma" rel="nofollow">www.omap.ma</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->


    <!--====== Jquery js ======-->
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/modernizr-3.7.1.min.js') }}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!--====== Slick js ======-->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>

    <!--====== Magnific Popup js ======-->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>

    <!--====== Nice Select js ======-->
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>

    <!--====== Counter Up js ======-->
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>

    <!--====== Price Range js ======-->
    <script src="{{ asset('assets/js/ion.rangeSlider.min.js') }}"></script>

    <!--====== Ajax Contact js ======-->
    <script src="{{ asset('assets/js/ajax-contact.js') }}"></script>

    <!--====== Main js ======-->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
