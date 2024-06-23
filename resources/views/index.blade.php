@extends('layouts.top-layout')
@section('content')
<!-- main content start -->

<!-- Hero Slider Start -->
<section class="hero-section">
    <div class="hero-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!-- swiper-slide start -->
                <div class="hero-slide-item slider-height2 swiper-slide" style="background-image: url({{ asset('../images/slider/slide1.jpg')}}); background-repeat: no-repeat; background-size: cover; background-position: 0% center;">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="hero-slide-content">
                                    <p class="text text-white bg-black animated">
                                        Welcome To
                                    </p>
                                    <br>
                                    <h2 class="title text-white delay1 animated">
                                        Thorico Designs®
                                    </h2>
                                    <br>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- swiper-slide end-->

                <!-- swiper-slide start -->
                <div class="hero-slide-item slider-height2 swiper-slide slide-cover2">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="hero-slide-content">
                                    <p class="text text-white bg-black animated" style>
                                        Welcome To
                                    </p>
                                    <br>
                                    <h2 class="title text-white delay1 animated">
                                        Thorico Designs®
                                    </h2>
                                    <br>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- swiper-slide end-->
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- swiper navigation -->
        <div class=" ">
            <div class="swiper-button-prev">
                <i class="ion-chevron-left"></i>
            </div>
            <div class="swiper-button-next">
                <i class="ion-chevron-right"></i>
            </div>
        </div>
    </div>
</section>
    <!-- Hero Slider End -->
    <!-- bestseller-product-section start -->
<div class="bestseller-product-section section-padding-top">
    <div class="container">
        <div class="row mb-n5 bestseller-carousel swiper-arrow bestseller-arrow">
            <div class="col-12 col-lg-4 col-xl-3 mb-5 position-relative">
                <section class="section-title bestseller text-start">
                    <h3 class="title">Our Products
                    </h3>
                    <p class="text-brown">Have A Look.</p>
                </section>
                <!-- If we need navigation buttons -->
                <div class="featured-product swiper-button-prev"></div>
                <div class="featured-product swiper-button-next"></div>
            </div>
            <div class="col-12 col-lg-8 col-xl-9 mb-5">
                <!-- Slider main container -->
                <div class="swiper-container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="product-list">
                                <div class="product-card">
                                    <a href="#" class="product-thumb">
                                        <img width="700" height="320" src="{{asset('/images/products/bag.jpg')}}" alt="image_not_found">
                                    </a>
                                    <!-- thumb end -->
                                    <!--<div class="product-content">
                                        <h4><a href="single-product.html" class="product-title">3 Tier Wood With Metal Shelf</a></h4>
                                        <div class="product-group">
                                            <h5 class="product-price"><del class="old-price">R85.00</del> <span class="new-price">R60.00</span></h5>
                                        </div>
                                        <ul class="actions actions-verticale">
                                        <li class="action whish-list">
                                                <button data-bs-toggle="modal" data-bs-target="#product-modal-wishlist"><i class="ion-ios-heart-outline"></i></button>
                                            </li>
                                            <li class="action quick-view">
                                                <button data-bs-toggle="modal" data-bs-target="#product-modal"><i class="ion-ios-eye-outline"></i></button>
                                            </li>
                                            <li class="action compare">
                                                <button data-bs-toggle="modal" data-bs-target="#product-modal-compare"><i class="ion-android-sync"></i></button>
                                            </li>
                                        </ul>
                                    </div> -->
                                </div>
                            </div>
                            <!-- product list end -->
                        </div>
                        <!-- swiper-slide end -->
                        <div class="swiper-slide">
                            <div class="product-list">
                                <div class="product-card">
                                    <a href="#" class="product-thumb">
                                        <img width="700" height="320" src="{{asset('/images/products/couch2.jpg')}}" alt="image_not_found">
                                    </a>
                                    <!-- thumb end -->
                                    <!--<div class="product-content">
                                        <h4><a href="single-product.html" class="product-title">3 Tier Wood With Metal Shelf</a></h4>
                                        <div class="product-group">
                                            <h5 class="product-price"><del class="old-price">R85.00</del> <span class="new-price">R60.00</span></h5>
                                        </div>
                                        <ul class="actions actions-verticale">
                                        <li class="action whish-list">
                                                <button data-bs-toggle="modal" data-bs-target="#product-modal-wishlist"><i class="ion-ios-heart-outline"></i></button>
                                            </li>
                                            <li class="action quick-view">
                                                <button data-bs-toggle="modal" data-bs-target="#product-modal"><i class="ion-ios-eye-outline"></i></button>
                                            </li>
                                            <li class="action compare">
                                                <button data-bs-toggle="modal" data-bs-target="#product-modal-compare"><i class="ion-android-sync"></i></button>
                                            </li>
                                        </ul>
                                    </div> -->
                                </div>
                            </div>
                            <!-- product list end -->
                        </div>
                        <!-- swiper-slide end -->
                        <div class="swiper-slide">
                            <div class="product-list">
                                <div class="product-card">
                                    <a href="#" class="product-thumb">
                                        <img width="700" height="320" src="{{asset('/images/products/bed1.jpg')}}" alt="image_not_found">
                                    </a>
                                    <!-- thumb end -->
                                    <!--<div class="product-content">
                                        <h4><a href="single-product.html" class="product-title">3 Tier Wood With Metal Shelf</a></h4>
                                        <div class="product-group">
                                            <h5 class="product-price"><del class="old-price">R85.00</del> <span class="new-price">R60.00</span></h5>
                                        </div>

                                        <ul class="actions actions-verticale">
                                        <li class="action whish-list">
                                                <button data-bs-toggle="modal" data-bs-target="#product-modal-wishlist"><i class="ion-ios-heart-outline"></i></button>
                                            </li>
                                            <li class="action quick-view">
                                                <button data-bs-toggle="modal" data-bs-target="#product-modal"><i class="ion-ios-eye-outline"></i></button>
                                            </li>
                                            <li class="action compare">
                                                <button data-bs-toggle="modal" data-bs-target="#product-modal-compare"><i class="ion-android-sync"></i></button>
                                            </li>
                                        </ul>
                                    </div> -->
                                </div>
                            </div>
                            <!-- product list end -->
                        </div>
                        <!-- swiper-slide end -->
                        <div class="swiper-slide">
                            <div class="product-list">
                                <div class="product-card">
                                    <a href="#" class="product-thumb">
                                        <img width="700" height="320" src="{{asset('/images/products/table1.jpg')}}" alt="image_not_found">
                                    </a>
                                    <!-- thumb end -->
                                    <!--<div class="product-content">
                                        <h4><a href="single-product.html" class="product-title">3 Tier Wood With Metal Shelf</a></h4>
                                        <div class="product-group">
                                            <h5 class="product-price"><del class="old-price">R85.00</del> <span class="new-price">R60.00</span></h5>
                                        </div>

                                        <ul class="actions actions-verticale">
                                        <li class="action whish-list">
                                                <button data-bs-toggle="modal" data-bs-target="#product-modal-wishlist"><i class="ion-ios-heart-outline"></i></button>
                                            </li>
                                            <li class="action quick-view">
                                                <button data-bs-toggle="modal" data-bs-target="#product-modal"><i class="ion-ios-eye-outline"></i></button>
                                            </li>
                                            <li class="action compare">
                                                <button data-bs-toggle="modal" data-bs-target="#product-modal-compare"><i class="ion-android-sync"></i></button>
                                            </li>
                                        </ul>
                                    </div> -->
                                </div>
                            </div>
                            <!-- product list end -->
                        </div>
                        <!-- swiper-slide end -->
                        <div class="swiper-slide">
                            <div class="product-list">
                                <div class="product-card">
                                    <a href="#" class="product-thumb">

                                        <img width="700" height="320" src="{{asset('/images/products/couch3.jpg')}}" alt="image_not_found">
                                    </a>
                                        <!-- thumb end -->
                                    <!--<div class="product-content">
                                        <h4><a href="single-product.html" class="product-title">3 Tier Wood With Metal Shelf</a></h4>
                                        <div class="product-group">
                                            <h5 class="product-price"><del class="old-price">R85.00</del> <span class="new-price">R60.00</span></h5>
                                        </div>

                                        <ul class="actions actions-verticale">
                                        <li class="action whish-list">
                                                <button data-bs-toggle="modal" data-bs-target="#product-modal-wishlist"><i class="ion-ios-heart-outline"></i></button>
                                            </li>
                                            <li class="action quick-view">
                                                <button data-bs-toggle="modal" data-bs-target="#product-modal"><i class="ion-ios-eye-outline"></i></button>
                                            </li>
                                            <li class="action compare">
                                                <button data-bs-toggle="modal" data-bs-target="#product-modal-compare"><i class="ion-android-sync"></i></button>
                                            </li>
                                        </ul>
                                    </div> -->
                            </div>
                            <!-- product list end -->
                        </div>
                        <!-- swiper-slide end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bestseller-product-section end -->
<!-- Banner section Start -->
<section class="banner-section section-padding-bottom section-padding-top">
    <div class="container">
        <div class="row mb-n4">
            <div class="col-lg-6 mb-4">
                <div class="banner">
                    <!-- thumb-nail start -->
                    <a href="#" class="thumb-nail">
                        <img src="{{asset('/images/banner/handbag1.png')}}" alt="image_not_found">
                    </a>
                    <!-- thumb-nail end -->
                    <div class="banner-content banner-position-top-left">
                        <span class="banner-sub-title text-black">HandBags</span>
                        <br>

                        <a href="/contact-us" class="btn animated btn-outline-dark">Enquire Now</a>
                    </div>
                    <!-- banner-content end -->
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="banner">
                    <!-- thumb-nail start -->
                    <a href="#" class="thumb-nail">
                        <img src="{{asset('/images/banner/co.jpg')}}" alt="image_not_found">
                    </a>
                    <!-- thumb-nail end -->
                    <div class="banner-content banner-position-bottom-left">
                        <span class="banner-sub-title" style="color:Black">Couches</span>

                        <a href="/contact-us" class="btn animated btn-outline-dark">Enquire Now</a>
                    </div>
                    <!-- banner-content end -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner section End -->
<!-- categries section start -->
<div class="categries-section bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <section class="section-title text-center">
                    <h3 class="title">Shop By Categories</h3>
                </section>
            </div>
        </div>
        <div class="row mb-n4">
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="categories">
                    <a href="#" class="thumb-nail">
                        <img height="190" width="450" src="{{asset('/images/categoris/chairs 2.jpg')}}" alt="image_not_found">
                    </a>
                    <h3 class="categories-title text-brown">
                        Chairs
                    </h3>
                </div>
            </div>
            <!-- categories item end -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="categories">
                    <a href="#" class="thumb-nail">
                        <img height="190" width="450" src="{{asset('/images/categoris/tb1.jpg')}}" alt="image_not_found">
                    </a>
                    <h3 class="categories-title text-brown">
                        Tables
                    </h3>
                </div>
            </div>
            <!-- categories item end -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="categories">
                    <a href="#" class="thumb-nail">
                        <img height="190" width="450" src="{{asset('/images/categoris/tamara-bellis-HY1fq4ZtLTE-unsplash.jpg')}}" alt="image_not_found">
                    </a>
                    <h3 class="categories-title text-brown">
                        Side Bags
                    </h3>
                </div>
            </div>
            <!-- categories item end -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="categories">
                    <a href="#" class="thumb-nail">
                        <img height="190" width="450" src="{{asset('/images/categoris/spacejoy-RUvW1KGD9a4-unsplash.jpg')}}" alt="image_not_found">
                    </a>
                    <h3 class="categories-title text-brown">
                        Bedroom
                    </h3>
                </div>
            </div>
            <!-- categories item end -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="categories">
                    <a href="#" class="thumb-nail">
                        <img height="190" width="450" src="{{asset('/images/categoris/hayffield-l-iIuoAdkOnlk-unsplash.jpg')}}" alt="image_not_found">
                    </a>
                    <h3 class="categories-title text-brown">
                        Couches
                    </h3>
                </div>
            </div>
            <!-- categories item end -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="categories">
                    <a href="#" class="thumb-nail">
                        <img height="190" width="450" src="{{asset('/images/categoris/pw.jpg')}}" alt="image_not_found">
                    </a>
                    <h3 class="categories-title text-brown">
                    Purses & Wallets
                    </h3>
                </div>
            </div>
            <!-- categories item end -->
        </div>
    </div>
</div>
<!-- categries section end -->
<section class="static-info-section section-padding-top pb-5">
    <div class="container text-center">
        <div class="static_info">
            <div class="row justify-content-around">
                <div class="col-12 col-sm-6 col-lg-4 mb-4">
                    <div class="box_info">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                            <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                        </svg>
                        <div class="txt_info">
                            <h2 class="title">Order/Purchase Process</h2>
                            <p> To make an order or purchase a product you love from our beautiful range of designs; take a screenshot or item description and enquire on the following lines for the success of your order:<br>Email address: sales@thorico.co.za or WhatsApp: 071 939 5407</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="box_info">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                            <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                        </svg>
                        <div class="txt_info">
                            <h2 class="title">Delivery Methods & Options</h2>
                            <p>We deliver for FREE to our customers within 15-30km range of our warehouse, located in Pretoria.<br>Delivery cost for our clients outside the 15-39km range from our warehouse will be billed.<br>Or, clients can collect from our warehouse.</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="box_info">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                            <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                        </svg>
                        <div class="txt_info">
                            <h2 class="title">Book For Viewing</h2>
                            <p>At your earliest convenience, book an appointment to view our finest designed pieces that make you feel like luxury in your own way.</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="box_info">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16">
                        <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0Zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708ZM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11Z"/>
                        </svg>
                        <div class="txt_info">
                            <h2 class="title">Customisation</h2>
                            <p>We ensure to design furniture, bags and accessories that tell a story - that try to get you with custom-made designed items that consist of premium and durable materials of your choice.</p>
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
