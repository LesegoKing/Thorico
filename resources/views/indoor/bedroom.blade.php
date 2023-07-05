@extends('layouts.top-layout')
@section('content')


<!-- main content start -->
    <!-- bread crumb section start -->
    <nav class="breadcrumb-section breadcrumb-bedroom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="bread-crumb-title">Bedroom</h2>
                    <ol class="breadcrumb bg-transparent m-0 p-0 justify-content-center align-items-center">
                        <li class="breadcrumb-item"><a href="/shop">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Bedroom</li>
                    </ol>
                </div>
            </div>
        </div>
    </nav>
    <!-- bread crumb section end -->

    <!-- shop page layout start -->
    <div class="shop-page-layout section-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row align-items-center mb-5">
                        <div class="col-12 col-md-6 ">
                            <nav class="shop-grid-nav">
                                <ul class="nav nav-tabs justify-content-center justify-content-md-start align-items-center" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link grid active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab"></a>
                                    </li> 
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel">
                            <div class="row grid-view mb-n5">
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-5">
                                    <div class="product-card">
                                        <a href="#" class="product-thumb"> 
                                            <img height="235px" width="" src="{{asset('/images/bedroom/bed 2.png')}}" alt="image_not_found">
                                        </a>
                                        <!-- thumb end -->
                                        <div class="product-content">
                                            <h4><a href="/contact-us" class="product-title">Contact For More Details</a></h4>
                                            <!--<div class="product-group">
                                                <h5 class="product-price"><del class="old-price">R85.00</del> <span class="new-price">R60.00</span></h5>                                              
                                            </div> -->
                                        </div>
                                        <!-- actions  -->
                                        <ul class="actions actions-verticale">
                                        <!--<li class="action whish-list">
                                                <button data-bs-toggle="modal" data-bs-target="#product-modal-wishlist"><i class="ion-ios-heart-outline"></i></button>
                                            </li>
                                            <li class="action quick-view">
                                                <button data-bs-toggle="modal" data-bs-target="#product-modal"><i class="ion-ios-eye-outline"></i></button>
                                            </li>
                                            <li class="action compare">
                                                <button data-bs-toggle="modal" data-bs-target="#product-modal-compare"><i class="ion-android-sync"></i></button>
                                            </li>-->
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-5">
                                    <div class="product-card">
                                        <a href="#" class="product-thumb"> 
                                            <img height="235px" width="" src="{{asset('/images/bedroom/bed 4.jpg')}}" alt="image_not_found">
                                        </a>
                                        <!-- thumb end -->
                                        <div class="product-content">
                                            <h4><a href="/contact-us" class="product-title">Contact For More Details</a></h4>
                                            <!--<div class="product-group">
                                                <h5 class="product-price"><del class="old-price">R85.00</del> <span class="new-price">R60.00</span></h5>                                              
                                            </div> -->
                                        </div>
                                        <!-- actions  -->
                                        <ul class="actions actions-verticale">
                                        <!--<li class="action whish-list">
                                                <button data-bs-toggle="modal" data-bs-target="#product-modal-wishlist"><i class="ion-ios-heart-outline"></i></button>
                                            </li>
                                            <li class="action quick-view">
                                                <button data-bs-toggle="modal" data-bs-target="#product-modal"><i class="ion-ios-eye-outline"></i></button>
                                            </li>
                                            <li class="action compare">
                                                <button data-bs-toggle="modal" data-bs-target="#product-modal-compare"><i class="ion-android-sync"></i></button>
                                            </li>-->
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-5">
                                    <div class="product-card">
                                        <a href="#" class="product-thumb"> 
                                            <img height="235px" width="" src="{{asset('/images/bedroom/bed 5.jpg')}}" alt="image_not_found">
                                        </a>
                                        <!-- thumb end -->
                                        <div class="product-content">
                                            <h4><a href="/contact-us" class="product-title">Contact For More Details</a></h4>
                                            <!--<div class="product-group">
                                                <h5 class="product-price"><del class="old-price">R85.00</del> <span class="new-price">R60.00</span></h5>                                              
                                            </div> -->
                                        </div>
                                        <!-- actions  -->
                                        <ul class="actions actions-verticale">
                                        <!--<li class="action whish-list">
                                                <button data-bs-toggle="modal" data-bs-target="#product-modal-wishlist"><i class="ion-ios-heart-outline"></i></button>
                                            </li>
                                            <li class="action quick-view">
                                                <button data-bs-toggle="modal" data-bs-target="#product-modal"><i class="ion-ios-eye-outline"></i></button>
                                            </li>
                                            <li class="action compare">
                                                <button data-bs-toggle="modal" data-bs-target="#product-modal-compare"><i class="ion-android-sync"></i></button>
                                            </li>-->
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-5">
                                    <div class="product-card">
                                        <a href="#" class="product-thumb"> 
                                            <img height="235px" width="" src="{{asset('/images/bedroom/bed 3.jpg')}}" alt="image_not_found">
                                        </a>
                                        <!-- thumb end -->
                                        <div class="product-content">
                                            <h4><a href="/contact-us" class="product-title">Contact For More Details</a></h4>
                                            <!--<div class="product-group">
                                                <h5 class="product-price"><del class="old-price">R85.00</del> <span class="new-price">R60.00</span></h5>                                              
                                            </div> -->
                                        </div>
                                        <!-- actions  -->
                                        <ul class="actions actions-verticale">
                                        <!--<li class="action whish-list">
                                                <button data-bs-toggle="modal" data-bs-target="#product-modal-wishlist"><i class="ion-ios-heart-outline"></i></button>
                                            </li>
                                            <li class="action quick-view">
                                                <button data-bs-toggle="modal" data-bs-target="#product-modal"><i class="ion-ios-eye-outline"></i></button>
                                            </li>
                                            <li class="action compare">
                                                <button data-bs-toggle="modal" data-bs-target="#product-modal-compare"><i class="ion-android-sync"></i></button>
                                            </li>-->
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-5">
                                    <div class="product-card">
                                        <a href="#" class="product-thumb"> 
                                            <img height="235px" width="" src="{{asset('/images/bedroom/bed 1.png')}}" alt="image_not_found">
                                        </a>
                                        <!-- thumb end -->
                                        <div class="product-content">
                                            <h4><a href="/contact-us" class="product-title">Contact For More Details</a></h4>
                                            <!--<div class="product-group">
                                                <h5 class="product-price"><del class="old-price">R85.00</del> <span class="new-price">R60.00</span></h5>                                              
                                            </div> -->
                                        </div> 
                                        <!-- actions  -->
                                        <ul class="actions actions-verticale">
                                        <!--<li class="action whish-list">
                                                <button data-bs-toggle="modal" data-bs-target="#product-modal-wishlist"><i class="ion-ios-heart-outline"></i></button>
                                            </li>
                                            <li class="action quick-view">
                                                <button data-bs-toggle="modal" data-bs-target="#product-modal"><i class="ion-ios-eye-outline"></i></button>
                                            </li>
                                            <li class="action compare">
                                                <button data-bs-toggle="modal" data-bs-target="#product-modal-compare"><i class="ion-android-sync"></i></button>
                                            </li>-->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   








@include('layouts.footer')
@endsection

@section('javascript')
@endsection