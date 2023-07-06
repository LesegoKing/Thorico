@extends('layouts.top-layout')
@section('content')

<nav class="breadcrumb-section" style="background-image: url({{ asset('../images/bread-crumb/contact-us.jpg')}}); background-repeat: no-repeat; background-position: center top; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="bread-crumb-title">Contact Us</h2>
                    <ol class="breadcrumb bg-transparent m-0 p-0 justify-content-center align-items-center">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Contact Us</li>
                    </ol>
                </div>
            </div>
        </div>
    </nav>
    <!-- bread crumb section end -->

    <section class="contact-section section-padding-bottom">
        <div class="container">
            <div class="row mb-n4">
                <div class="col-lg-3 mb-4">
                    <!-- contact-title-section start -->
                    <div class="contact-title-section">
                        <h3 class="title">Contact Us</h3>
                    </div>
                    <!-- contact-title-section end -->
                    <div class="contact-address">
                        <!-- address-list start -->
                        <div class="address-list">
                            <h4 class="title"><span class="ion-ios-home"></span>Address</h4>
                            <p>
                            Olympus Dr, Pretoria, 0081<br>
                            <b>Workshop Visits By Appointment</b>
                            </p>
                        </div>
                        <!-- address-list end -->
                        <!-- address-list start -->
                        <div class="address-list">
                            <h4 class="title"><span class="ion-email"></span>Email</h4>
                            <ul>
                                <li>
                                    <a class="mailto" href="sales@thorico.co.za">sales@thorico.co.za</a>
                                </li>
                            </ul>
                        </div>
                        <!-- address-list end -->
                        <!-- address-list start -->
                        <div class="address-list">
                            <h4 class="title"><span class=" ion-ios-telephone"></span> Phone</h4>
                            <ul>
                                <li>
                                <a class="phone-number" href="tel:071 939 5407">071 939 5407</a>
                                </li>
                            </ul>
                        </div>
                        <!-- address-list end -->
                        <div class="trading-hours">
                        <h4 class="title2"><span class="ion-ios-clock"></span> Hours</h4>
                        <ul>
                            <li class="t-h">
                                Sun: <b>Closed</b><br>
                                Mon: 09:00 - 18:00<br>
                                Tue: 09:00 - 18:00<br>
                                Wed: 09:00 - 18:00<br>
                                Thu: 09:00 - 18:00<br>
                                Fri: 09:00 - 18:00<br>
                                Sat: 09:00 - 18:00
                            </li>
                        </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1 mb-4">
                    <!-- contact-title-section start -->
                    <div class="contact-title-section">
                        <h3 class="title">Tell Us Your Message</h3>
                    </div>
                    <!-- contact-title-section end -->
                    @if(Session::get('message_sent'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('message_sent')}}
                        </div>
                    @endif
                    <form id="contact-form" class="row contact-us-form contact-form" action="{{route('contact.send')}}" method="POST" novalidate="novalidate">
                        @csrf
                        <div class="col-12">
                            <label class="form-label" for="name">Your Name (required)</label>
                            <input type="text" class="form-control" id="form_name" name="name" placeholder="Your Name*">
                        </div>
                        <!-- Name filed end -->
                        <div class="col-12">
                            <label class="form-label" for="email">Your Email (required)</label>
                            <input type="text" class="form-control" id="form_email" name="email" placeholder="Your Email*">
                        </div>
                        <!-- email filed end -->
                        <div class="col-12">
                            <label class="form-label" for="subject">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Your subject*">
                        </div>
                        <!-- Subject filed end -->
                        <div class="col-12">
                            <label class="form-label" for="massage">Your Message</label>
                            <textarea class="form-control massage-control" name="massage" id="form_message" cols="30" rows="10" placeholder="Message"></textarea>
                        </div>
                        <!-- Message filed end -->
                        <div class="col-12">
                            <button id="submit_btn" type="submit" class="btn btn-dark1">Send Message</button>
                            <p class="form-message mt-3"></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3592.1650378060694!2d28.331718899999995!3d-25.798128799999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e955ddbbd98372f%3A0x7efc9ff6fcaeee5c!2sOlympus%20Dr%2C%20Pretoria%2C%200081!5e0!3m2!1sen!2sza!4v1684492263586!5m2!1sen!2sza" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- main content end -->

    @include('layouts.footer')
@endsection

@section('javascript')
<script src="{{ asset('/js/plugins/contact-form.js') }}"></script>
@endsection