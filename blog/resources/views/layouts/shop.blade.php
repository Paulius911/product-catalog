<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Larave E-Shop</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">



    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="{{ asset('css/core.css') }}">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="{{ asset('css/shortcode/shortcodes.css') }}">
    <!-- Theme main style -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- User style -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

</head>

<body>

<!-- Body main wrapper start -->
<div class="wrapper">
    <!-- Start Header Style -->
    <header id="htc__header" class="htc__header__area header--one">
        <!-- Start Mainmenu Area -->
        <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
            <div class="container">
                <div class="row">
                    <div class="menumenu__container clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5">
                            <div class="logo">
                                <a href="/">
                                    <img src="{{ asset('images/logo/4.png') }}" alt="logo images">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-8 col-sm-5 col-xs-3">

                                <ul class="main__menu">
                                    <li>
                                        <a href="{{route('products.index')}}">Products</a>
                                    </li>
                                </ul>
                        </div>
                        <div class="col-md-3 col-lg-2 col-sm-4 col-xs-4">
                            <div class="header__right">
                                <div class="col-xs-4">

                                </div>
                            </div>
                    </div>
                </div>
                <div class="mobile-menu-area"></div>
            </div>
        </div>
        </div>
        <!-- End Mainmenu Area -->
    </header>
    <!-- End Header Area -->


    <div class="container">
        @if(Session::has('message'))
            @if(Session::has('message-class'))
                <div class="alert {{ Session::get('message-class') }}">
                    {{ Session::get('message') }}
                </div>
            @else
                <div class="alert alert-info">
                    {{ Session::get('message') }}
                </div>
            @endif
        @endif
    </div>

@yield('content')

<!-- Start Footer Area -->
    <footer id="htc__footer">
        <!-- Start Footer Widget -->

        <!-- End Footer Widget -->
        <!-- Start Copyright Area
        <div class="htc__copyright bg__cat--5">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="copyright__inner">
                            <p>Copyright© <a href="https://freethemescloud.com/">Free themes Cloud</a> 2018. All right reserved.</p>
                            <a href="#">
                                <img src="{{ asset('images/others/shape/paypol.png') }}" alt="payment images">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        -->
        <!-- End Copyright Area -->
    </footer>
    <!-- End Footer Style -->
</div>
<!-- Body main wrapper end -->

<!-- Placed js at the end of the document so the pages load faster -->

<!-- jquery latest version -->
<script src="{{ asset('js/vendor/jquery-3.2.1.min.js') }}"></script>
<!-- Bootstrap framework js -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- All js plugins included in this file. -->
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/slick.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<!-- Waypoints.min.js. -->
<script src="{{ asset('js/waypoints.min.js') }}"></script>
<!-- Main js file that contents all jQuery plugins activation. -->
<script src="{{ asset('js/main.js') }}"></script>

</body>

</html></html>

