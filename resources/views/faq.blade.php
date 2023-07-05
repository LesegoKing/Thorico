@extends('layouts.top-layout')
@section('content')

<!-- main content start -->

    <!-- bread crumb section start -->
    <nav class="breadcrumb-section breadcrumb-faq">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="bread-crumb-title">Frequently Questions</h2>
                    <ol class="breadcrumb bg-transparent m-0 p-0 justify-content-center align-items-center">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Frequently Questions</li>
                    </ol>
                </div>
            </div>
        </div>
    </nav>
    <!-- bread crumb section end -->

    <section class="accourdion-section section-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="accoudion-title">Below are frequently asked questions, you may find the answer for
                        yourself</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id erat sagittis, faucibus metus
                        malesuada, eleifend turpis. Mauris semper augue id nisl aliquet, a porta lectus mattis. Nulla at
                        tortor augue. In eget enim diam. Donec gravida tortor sem, ac fermentum nibh rutrum sit amet.
                        Nulla convallis mauris vitae congue consequat. Donec interdum nunc purus, vitae vulputate arcu
                        fringilla quis. Vivamus iaculis euismod dui.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Mauris congue euismod purus at semper. Morbi et vulputate massa?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate,
                                        eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu
                                        viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem
                                        eleifend lorem</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Donec mattis finibus elit ut tristique?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate,
                                        eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu
                                        viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem
                                        eleifend lorem</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Vestibulum a lorem placerat, porttitor urna vel?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate,
                                        eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu
                                        viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem
                                        eleifend lorem</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Aenean elit orci, efficitur quis nisl at, accumsan?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate,
                                        eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu
                                        viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem
                                        eleifend lorem</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Pellentesque habitant morbi tristique senectus et netus?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate,
                                        eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu
                                        viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem
                                        eleifend lorem</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Nam pellentesque aliquam metus?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate,
                                        eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu
                                        viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem
                                        eleifend lorem</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    Aenean elit orci, efficitur quis nisl at?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate,
                                        eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu
                                        viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem
                                        eleifend lorem</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    Morbi gravida, nisi id fringilla ultricies, elit lorem?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate,
                                        eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu
                                        viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem
                                        eleifend lorem</p>
                                </div>
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