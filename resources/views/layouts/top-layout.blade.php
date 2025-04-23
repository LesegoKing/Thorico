<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Thorico Designs</title>
<meta name="description" content="Designing & Manufacturing Of Furniture, Bags & Accessories">
    <meta name="keywords" content="Thorico Designs">
    <meta name="msapplication-TileImage" content="{{asset('/images/Logo/Frame 4.png') }}">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="{{asset('/images/Logo/Frame 4.png') }}" />
<link rel="stylesheet" href="{{asset('/css/vendor/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{asset('/css/vendor/ionicons.css') }}" />
<link rel="stylesheet" href="{{asset('/css/plugins/animate.min.css') }}" />
<link rel="stylesheet" href="{{asset('/css/plugins/swiper-bundle.min.css') }}" />
<link rel="stylesheet" href="{{asset('/css/plugins/jquery-ui.min.css') }}" />
<link rel="stylesheet" href="{{asset('/css/style.css') }}" />

</head>
<body>

    <!-- offcanvas menu start -->
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header">
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="topbar-nav-info nav">
                <li class="topbar-nav-info-item text-brown"><span class="ion-ios-location-outline"></span> Store Location
                </li>
                <li class="topbar-nav-info-item text-brown"><span class="ion-ios-email-outline"></span><a href="mailto:support@demothemes.com">sales@thorico.co.za</a></li>
            </ul>
            <!-- offcanvas-mobile-menu start -->
            <nav id="offcanvasNav" class="offcanvas-menu">
                <ul>
                    <li>
                        <a class="" href="/" >Home</a>
                    </li>
                    <!-- shop mega menu -->
                    @include('layouts.mobile')
                    <!-- shop mega menu end -->



                    <!-- <li>
                        <a href="/about">About</a>
                    </li>
                    <li><a href="#">Pages</a>
                        sub menu start
                        <ul>
                            <li><a href="#">How It All Started</a></li>
                            <li><a href="/staff">Staff</a></li>
                            <li><a href="/faq">Frequently Questions</a></li>
                            <li><a href="/privacy-policy">Privacy Policy</a></li>
                            <li><a href="/404">Error 404</a></li>
                        </ul>
                         sub menu end
                    </li> -->
                    <li>
                        <a class="text-brown" href="/about">About</a>
                    </li>
                    <li>
                        <a class="text-brown" href="/contact-us">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- offcanvas-mobile-menu end -->

    <!-- offcanvas menu end -->

    <!-- header section start -->
    <header>
        <!-- desktop menu start -->

        <div class="header-middle-default d-none d-lg-block header-topbar topbar-default">
            <div class="container"  style="padding-bottom: 1%">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="logo">
                            <a href="index.html">
                                <img  height="200%" width="160%" src="{{ asset('/images/logo/Td-removebg-preview-removebg-preview.png') }}" alt="image_not_found">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- desktop menu end -->

        <!-- mobile menu start -->
        <div class="header-middle-default d-lg-none active-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-2 col-sm-4">
                        <button class="offcanvas-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                            <span class="ion-android-menu"></span>
                        </button>
                    </div>
                    <div class="col-8 col-sm-4">
                        <div class="logo mx-auto">
                            <a href="/">
                                <img src="{{ asset('/images/logo/Td-removebg-preview-removebg-preview.png') }}" alt="image_not_found">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- mobile menu end -->

        <div class="header-bottom2 header-middle-default active-sticky bg-black d-none d-lg-block">
            <div class="container bg-brown">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="logo">
                            <a href="#">
                                <img width="5" height="-5" src="{{ asset('/images/logo/Td-removebg-preview-removebg-preview.png') }}" alt="image_not_found">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center">
                        <nav class="d-inline-block position-relative">
                            <ul class="main-menu nav align-items-center @@justifyCenter">
                                <li class="main-menu-item"><a class="hover" href="/">Home</a>
                                </li>
                                <li class="main-menu-item position-static text-brown"><a href="#" class="hover">Shop</a>
                                <!-- mega menu start -->
                               @include('layouts.menu')
                                </li>
                                <li class="main-menu-item  position-static"><a href="/about" class="hover">About</a>
                                </li>
                               <!-- <li class="main-menu-item  position-static"><a href="#" class="hover">Pages</a>
                                </li> -->
                                <li class="main-menu-item  position-static"><a href="/contact-us" class="hover">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!-- header section end -->
    @yield('content')




    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
        <!-- Scripts -->
    <!-- Global Vendor, plugins JS -->

    <!-- Vendor JS -->

    <script src="{{ asset('/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/jquery-migrate-3.3.2.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/modernizr-3.11.2.min.js') }}"></script>
    <script src="{{ asset('/js/plugins/ajax-contact.js') }}"></script>
    <script src="{{ asset('/js/plugins/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('/js/plugins/ajax-mailchimp.js') }}"></script>
    <script src="{{ asset('/js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('/js/plugins/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('/js/plugins/scroll-up.js') }}"></script>
    <script src="{{ asset('/js/main.js') }}"></script>
    <script>
    // Get the video
    var video = document.getElementById("myVideo");

    // Get the button
    var btn = document.getElementById("myBtn");

    // Pause and play the video, and change the button text
    function myFunction() {
    if (video.paused) {
        video.play();
        btn.innerHTML = "Pause";
    } else {
        video.pause();
        btn.innerHTML = "Play";
    }
    }
    </script>



</body>
</html>
