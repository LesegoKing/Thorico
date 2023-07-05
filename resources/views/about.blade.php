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
                            About Our Store
                        </h2>
                        <h3 class="sub-title">We believe that every project existing in world is a result of an idea and every idea
                            has a cause.</h3>
                        <p class="mb-4">
                            For this reason, our every design serves an idea. Our strength in design is reflected by our name, our
                            care for details. Our specialist won't be afraid to go extra miles just to approach near perfection. We
                            don't require everything to be perfect, but we need them to be perfectly cared for. That's a reason why we
                            are willing to give contributions at best. Not a single detail is missed out under Billey's professional
                            eyes. The amount of dedication and effort equals to the level of passion and determination. Get better,
                            together as one.
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

    <section class="service-section section-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <div class="title">Meet Our Team</div>
                    </div>
                </div>
            </div>
            <div class="row mb-n5">
                <div class="col-sm-6 col-lg-3 mb-5">
                    <div class="service">
                        <div class="single-thumb mb-4">
                            <img src="{{asset('/images/about/1.png')}}" alt="single-thumb-naile">
                        </div>
                        <div class="single-service">
                            <h3 class="service-title text-capitalize">Ms. LF Mothapa</h3>
                            <h5 class="sub-title">Founder</h5>
                            <div class="social-links about-social">
                                <a class="social-link facebook" href="#"><i class="ion-social-facebook"></i></a>
                                <a class="social-link twitter" href="#"><i class="ion-social-twitter"></i></a>
                                <a class="social-link youtube" href="#"><i class="ion-social-youtube"></i></a>
                                <a class="social-link instagram" href="#"><i class="ion-social-instagram"></i></a>
                                <a class="social-link instagram" href="#"><i class="ion-social-rss"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-6 col-lg-3 mb-5">
                    <div class="service">
                        <div class="single-thumb mb-4">
                            <img src="{{asset('/images/about/WhatsApp Image 2023-05-17 at 22.01.31.jpg')}}" alt="single-thumb-naile">
                        </div>
                        <div class="single-service">
                            <h3 class="service-title text-capitalize">Miss Lesedi Mildred </h3>
                            <h5 class="sub-title">Brand Strategist</h5>
                            <div class="social-links about-social">
                                <a class="social-link facebook" href="#"><i class="ion-social-facebook"></i></a>
                                <a class="social-link twitter" href="#"><i class="ion-social-twitter"></i></a>
                                <a class="social-link youtube" href="#"><i class="ion-social-youtube"></i></a>
                                <a class="social-link instagram" href="#"><i class="ion-social-instagram"></i></a>
                                <a class="social-link instagram" href="#"><i class="ion-social-rss"></i></a>
                            </div>
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