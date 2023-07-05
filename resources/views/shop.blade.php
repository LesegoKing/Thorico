@extends('layouts.top-layout')
@section('content')

<!-- main content start -->
<!-- bread crumb section start -->
<nav class="breadcrumb-section breadcrumb-bg1">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="bread-crumb-title">Shop</h2>
                <ol class="breadcrumb bg-transparent m-0 p-0 justify-content-center align-items-center">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $categoryDetails->name }}</li>
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

                    @foreach($products as $product)
                        <div class="col-sm-6 col-md-4 col-lg-3 mb-5">
                            <div class="product-card">
                                <a href="#" class="product-thumb">
                                    <img height="235px" width="" src="{{ asset('/images/products') . "/" . $product->img_path }}" alt="image_not_found">
                                </a>
                                <!-- thumb end -->
                                <div class="product-content">
                                    <h4><a href="/{{ $product->id }}/details" class="product-title">{{ $product->name }}</a></h4>
                                    <div class="product-group">
                                        <h5 class="product-price"><span class="new-price">R{{ $product->price }}</span></h5>
                                    </div>
                                </div>
                                <!-- actions  -->
                                {{--<ul class="actions actions-verticale">
                                    <li class="action whish-list">
                                        <button data-bs-toggle="modal" data-bs-target="#product-modal-wishlist"><i class="ion-ios-heart-outline"></i></button>
                                    </li>
                                    <li class="action quick-view">
                                        <button data-bs-toggle="modal" data-bs-target="#product-modal"><i class="ion-ios-eye-outline"></i></button>
                                    </li>
                                    <li class="action compare">
                                        <button data-bs-toggle="modal" data-bs-target="#product-modal-compare"><i class="ion-android-sync"></i></button>
                                    </li>
                                </ul>--}}
                            </div>
                        </div>
                    @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- shop page layout end -->

@include('layouts.footer')
@endsection

@section('javascript')
@endsection
