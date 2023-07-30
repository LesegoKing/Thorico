@extends('layouts.top-layout')
@section('content')


    <!-- main content start -->
    <!-- bread crumb section start -->
    <nav class="breadcrumb-section breadcrumb-about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="bread-crumb-title">About Us</h2>
                    <ol class="breadcrumb bg-transparent m-0 p-0 justify-content-center align-items-center">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                </div>
            </div>
        </div>
    </nav>
    <!-- bread crumb section end -->

    <section class="about-section section-padding-bottom">
        <div class="container">
            <div class="row mb-n7 align-items-center">
                <div class="col-xl-6 mb-4">
                    <div class="about-content">
                        <h2 class="title mb-4">
                        About Thorico Designs
                        </h2>
                        <p class="mb-4">
                        Thorico Designs is a segment in the Thorico Holdings (Pty) Ltd, which was Founded by Lebogang Faith Ngcakani in 2020.
                        The company was born from a desire to create high-quality, handcrafted & luxurious statement pieces that are personalized and customised to the client's requirements. Thorico Holdings is a 100% black female owned company with three main entities;
                        </p>
                        <p class="mb-4">
                        <ul>  
                            <li>
                                1. Thorico Designs, Thorico designs is the umbrella brand that focuses mainly on the design and
                                manufacturing of furniture, leather bags and accessories. Expanding to interior designing and
                                renovations, with the aim to cater to all various outlets that will need the touch of Thorico Designs
                                expertise in designing.
                            </li>
                            <li>
                                2. Thorico Events & communications; a brand segment in Thorico Holdings that focuses on events
                                management & deco...
                            </li>
                            <li>
                                3. Thorico leather supply, this is the recent segment
                            </li>
                        </ul>
                        <br>
                        <p class="mb-4">
                            We design and manufacture all types of furniture and furniture accessories for home, office, events &
                            restaurants. We do interior designing & renovations for homes/rental homes, offices and restaurants
                            and also offer events management services which includes deco, ...    
                        </p>
                        We design and manufacture all types bags & accessories and also offer leather supply services from our
                        high grade and good quality leather pieces.
                        </p>
                    </div>
                </div>

                <div class="col-xl-6 mb-4">
                    <div class="about-content text-center">
                        <div class="about-left-image">
                            <img src="{{asset('/images/about/IMG-20230517-WA0014.jpg')}}" alt="img" class="img-responsive">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<section class="service-section section-padding-bottom section-padding-top">
    <div class="container text-center">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center">
                    <div class="title">Meet Our Team</div>
                </div>
            </div>
        </div>
        <div class="container text-center">
            <div class="row justify-content-evenly">
                <div class="col-4">
                    <div class="service">
                        <div class="single-thumb mb-4">
                            <img height="200" width="250" src="{{asset('/images/about/IMG-20230517-WA0014.jpg')}}" alt="single-thumb-naile">
                        </div>
                        <div class="single-service">
                            <h3 class="service-title text-capitalize">Ms. LF Mothapa</h3>
                            <h5 class="sub-title">Founder</h5>
                            <!-- <div class="social-links about-social">
                            <a class="social-link facebook" href="#"><i class="ion-social-facebook"></i></a>
                            <a class="social-link twitter" href="#"><i class="ion-social-twitter"></i></a>
                            <a class="social-link youtube" href="#"><i class="ion-social-youtube"></i></a>
                            <a class="social-link instagram" href="#"><i class="ion-social-instagram"></i></a>
                            <a class="social-link instagram" href="#"><i class="ion-social-rss"></i></a>
                        </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="service">
                        <div class="single-thumb mb-4">
                            <img  src="{{asset('/images/about/IMG_9465.JPG')}}" alt="single-thumb-naile">
                        </div>
                    <div class="single-service">
                        <h3 class="service-title text-capitalize">Miss Lesedi Mildred </h3>
                        <h5 class="sub-title">Brand Strategist</h5>
                        <!-- <div class="social-links about-social">
                            <a class="social-link facebook" href="#"><i class="ion-social-facebook"></i></a>
                            <a class="social-link twitter" href="#"><i class="ion-social-twitter"></i></a>
                            <a class="social-link youtube" href="#"><i class="ion-social-youtube"></i></a>
                            <a class="social-link instagram" href="#"><i class="ion-social-instagram"></i></a>
                            <a class="social-link instagram" href="#"><i class="ion-social-rss"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- main content end -->

    @include('layouts.footer')
@endsection

@section('javascript')
@endsection