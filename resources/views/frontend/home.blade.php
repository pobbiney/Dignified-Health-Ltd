    
    @php $pageName = "home"; $subpageName = ""; @endphp

@extends('layouts.frontendapp')


@section('content')
    <!-- ...::: Section Hero Start :::... -->
        <section class="section-hero">
            <div class="hero-area hero-area-1">
                <div class="container-fluid space-x-128">
                    <div class="row">
                        <div class="col-sm-9 col-md-8 col-lg-7 col-xl-6 col-xxl-4">
                            <div class="section-content-block"> 
                                <span class="section-tag is-white-transparent">Reliable Care Staff When You Need Them</span>
                                <h2 class="section-title hero-title text-light">Compassionate, <strong>Professional</strong>, <br> Care Staffing You Can Trust</h2>
                                <p class="section-text text-light mb-5">We supply trained, vetted and dependable care staff to providers across the UK — temporary, permanent and specialist roles.</p>

                                <a href="contact.html" class="btn btn-secondary-alt">
                                    Get In Touch
                                    <div class="btn-icon">
                                        <span>
                                            <i class="fa-regular fa-arrow-right"></i>
                                        </span>
                                        <span>
                                            <i class="fa-regular fa-arrow-right"></i>
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Hero Background Element -->
                <div class="hero-area-linear-gradient-1"></div>
                <img src="{{asset('frontend/assets/images/pexels-jopwell-2422293.jpg')}}" alt="hero-bg-img-1" width="1920" height="898"
                    class="img-cover hero-bg-1">
                {{-- <img src="assets/images/hero-th-1-element-1.png" alt="hero-th-1-element-1" width="621" height="741"
                    class="img-fluid hero-th-1 hero-th-1-element-1 animate-bottom-to-top" data-animation-duration="1.5"
                    data-animation-delay="0.5">
                <img src="assets/images/hero-th-1-element-2.png" alt="hero-th-1-element-2" width="496" height="163"
                    class="img-fluid hero-th-1 hero-th-1-element-2 animate-left-to-right" data-animation-duration="1.5"
                    data-animation-delay="1">
                <img src="assets/images/hero-th-1-element-3.png" alt="hero-th-1-element-3" width="238" height="235"
                    class="img-fluid hero-th-1 hero-th-1-element-3 animate-right-to-left" data-animation-duration="1.5"
                    data-animation-delay="1.5">
                <img src="assets/images/hero-th-1-element-4.png" alt="hero-th-1-element-4" width="499" height="838"
                    class="img-fluid hero-th-1 hero-th-1-element-4"> --}}
            
            </div>
        </section>
        <!-- ...::: Section Hero End :::... -->

        <!-- ...::: Section Client Slider Start :::... -->
        <!-- ...::: Section Location Start :::... -->
        
        <!-- ...::: Section Client Slider End :::... -->

        <!-- ...::: Section About Start :::... -->
        @include('frontend.company-details')
        <!-- ...::: Section About End :::... -->

        <!-- ...::: Section Service Start :::... -->
        <section class="section-service">
            <div class="position-relative z-2">
                <div class="section-space">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 col-xl-8 col-xxl-7">
                                <div class="section-content-block text-center">
                                    <span class="section-tag is-white">Reliable, Compliant, Clinically-Led Care Staffing Solutions</span>
                                    <h2 class="section-title is-text-dark">Explore Our  Services At DIGNIFIED</h2>
                                    <p class="section-text col-lg-12 mx-auto">At Dignified Health Limited, we provide flexible, high-quality staffing solutions tailored specifically to the health and social care sector.
                                        All our services are overseen by a Registered Mental Health Nurse (RMN) and backed by rigorous compliance, in-house training, and 24/7 support — giving you complete confidence in every placement.
We offer four core services:
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="position-relative">
                                    <!-- Slider main container -->
                                    <div class="service-slider-shadow-fix">
                                        <div class="service-slider-1 swiper">
                                            <!-- Additional required wrapper -->
                                            <div class="swiper-wrapper">
                                                <!-- Slides -->
                                                <!-- Service Item -->
                                                <div class="swiper-slide">
                                                    <div class="service-item">
                                                        <div class="service-image-block">
                                                            <a href="our-services" class="service-image-link">
                                                                <img src="{{asset('frontend/assets/images/view-from-inside-ambulance-uniformed-emergency-services-workers-caring-patient-stretcher-coronavirus-pandemic-1300x867.jpg')}}"
                                                                    alt="service-thumbnail-1" width="364" height="266"
                                                                    class="img-cover service-thumbnail">
                                                            </a>
                                                            <div class="service-icon">
                                                                <img src="{{asset('frontend/assets/images/icons/service-icon-1.svg')}}"
                                                                    alt="service-icon-1" width="41" height="41">
                                                                <img src="{{asset('frontend/assets/images/icons/service-icon-hover-1.svg')}}"
                                                                    alt="service-icon-hover-1" width="41" height="41">
                                                            </div>
                                                        </div>
                                                        <div class="service-content">
                                                            <a href="our-services" class="service-link"> 
                                                                Temporary & Emergency Cover</a>
                                                            <p class="service-summery">We are committed to providing the
                                                                best
                                                                services to ensure
                                                                your success.</p>
                                                            <a href="our-services"
                                                                class="btn btn-secondary-outline">
                                                                Read More
                                                                <div class="btn-icon btn-icon-sm">
                                                                    <span>
                                                                        <i class="fa-regular fa-arrow-right"></i>
                                                                    </span>
                                                                    <span>
                                                                        <i class="fa-regular fa-arrow-right"></i>
                                                                    </span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Service Item -->
                                                <!-- Service Item -->
                                                <div class="swiper-slide">
                                                    <div class="service-item">
                                                        <div class="service-image-block">
                                                            <a href="our-services" class="service-image-link">
                                                                <img src="{{asset('frontend/assets/images/premium_photo-1683121855240-5d3f67a5fdec.jpeg')}}"
                                                                    alt="service-thumbnail-1" width="364" height="266"
                                                                    class="img-cover service-thumbnail">
                                                            </a>
                                                            <div class="service-icon">
                                                                <img src="{{asset('frontend/assets/images/we-are-hiring (1).png')}}"
                                                                    alt="service-icon-1" width="41" height="41">
                                                                <img src="{{asset('frontend/assets/images/we-are-hiring (1).png')}}"
                                                                    alt="service-icon-hover-1" width="41" height="41">
                                                            </div>
                                                        </div>
                                                        <div class="service-content">
                                                            <a href="our-services" class="service-link"> 
                                                                Permanent Recruitment</a>
                                                            <p class="service-summery">We are committed to providing the
                                                                best
                                                                services to
                                                                ensure your success.</p>
                                                            <a href="our-services"
                                                                class="btn btn-secondary-outline">
                                                                Read More
                                                                <div class="btn-icon btn-icon-sm">
                                                                    <span>
                                                                        <i class="fa-regular fa-arrow-right"></i>
                                                                    </span>
                                                                    <span>
                                                                        <i class="fa-regular fa-arrow-right"></i>
                                                                    </span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Service Item -->
                                                <!-- Service Item -->
                                                <div class="swiper-slide">
                                                    <div class="service-item">
                                                        <div class="service-image-block">
                                                            <a href="our-services" class="service-image-link">
                                                                <img src="{{asset('frontend/assets/images/istockphoto-1363774646-612x612.jpg')}}"
                                                                    alt="service-thumbnail-3" width="364" height="266"
                                                                    class="img-cover service-thumbnail">
                                                            </a>
                                                            <div class="service-icon">
                                                                <img src="{{asset('frontend/assets/images/mental-health.png')}}"
                                                                    alt="service-icon-3" width="41" height="41">
                                                                <img src="{{asset('frontend/assets/images/mental-health.png')}}"
                                                                    alt="service-icon-hover-1" width="41" height="41">
                                                            </div>
                                                        </div>
                                                        <div class="service-content">
                                                            <a href="our-services" class="service-link">Specialist Mental Health & Complex Care Staffing</a>
                                                            <p class="service-summery">We are committed to providing the
                                                                best
                                                                services  .</p>
                                                            <a href="our-services"
                                                                class="btn btn-secondary-outline">
                                                                Read More
                                                                <div class="btn-icon btn-icon-sm">
                                                                    <span>
                                                                        <i class="fa-regular fa-arrow-right"></i>
                                                                    </span>
                                                                    <span>
                                                                        <i class="fa-regular fa-arrow-right"></i>
                                                                    </span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Service Item -->
                                                <!-- Service Item -->
                                                <div class="swiper-slide">
                                                    <div class="service-item">
                                                        <div class="service-image-block">
                                                            <a href="our-services" class="service-image-link">
                                                                <img src="{{asset('frontend/assets/images/istockphoto-1366428092-612x612.jpg')}}"
                                                                    alt="service-thumbnail-4" width="364" height="266"
                                                                    class="img-cover service-thumbnail">
                                                            </a>
                                                            <div class="service-icon">
                                                                <img src="{{asset('frontend/assets/images/analysis.png')}}"
                                                                    alt="service-icon-4" width="41" height="41">
                                                                <img src="{{asset('frontend/assets/images/analysis.png')}}"
                                                                    alt="service-icon-hover-4" width="41" height="41">
                                                            </div>
                                                        </div>
                                                        <div class="service-content">
                                                            <a href="our-services" class="service-link">Training & Continuous Professional Development (CPD)</a>
                                                            <p class="service-summery">We are committed to providing the
                                                                best
                                                                services to ensure
                                                                your success.</p>
                                                            <a href="our-services"
                                                                class="btn btn-secondary-outline">
                                                                Read More
                                                                <div class="btn-icon btn-icon-sm">
                                                                    <span>
                                                                        <i class="fa-regular fa-arrow-right"></i>
                                                                    </span>
                                                                    <span>
                                                                        <i class="fa-regular fa-arrow-right"></i>
                                                                    </span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Service Item -->
                                                <!-- Service Item -->
                                                
                                                <!-- Service Item -->
                                                <!-- Service Item -->
                                                
                                                <!-- Service Item -->
                                            </div>
                                            <!-- If we need navigation buttons -->

                                        </div>
                                    </div>
                                    <div class="slider-button-vertical-center">
                                        <div class="slider-button-style-1 slider-button-prev">
                                            <i class="fa-regular fa-arrow-left-long"></i>
                                        </div>
                                        <div class="slider-button-style-1 slider-button-next">
                                            <i class="fa-regular fa-arrow-right-long"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-bg-img"></div>
            </div>
        </section>
        <!-- ...::: Section Service End :::... -->

        <!-- ...::: Section Industry Start :::... -->
      
        <!-- ...::: Section Industry End :::... -->

        <!-- ...::: Section Why-choose Us :::... -->
        {{-- <section class="section-why-choose-us">
            <div class="background-dark">
                <div class="why-choose-us-area">
                    <div class="section-space section-space-bottom-xhuge">
                        <div class="container">
                            <div class="choose-us-wrapper col-lg-7 col-xl-6 col-xxl-5">
                                <div class="section-content-block">
                                    <span class="section-tag">WHY CHOOSE TRANSAN</span>
                                    <h2 class="section-title text-white">We Are A <strong>Leading</strong> one-
                                        <br>Stop
                                        Logistic Service
                                    </h2>
                                    <p class="section-text text-white">Regardless of your industry, your commodity,
                                        or
                                        your key markets, Maersk offers global and local logistics solutions.</p>
                                </div>

                                <ul class="progress-list">
                                    <li class="progress-item">
                                        <div class="progress-bar-line is-border">
                                            <div class="progress-fill is-gradient" data-percentage="62">
                                                <span class="progress-text text-white">0%</span>
                                            </div>
                                        </div>
                                        <div class="progress-label text-white">
                                            <span>Intermodal Shipping</span>
                                        </div>
                                    </li>

                                    <li class="progress-item">
                                        <div class="progress-bar-line is-border">
                                            <div class="progress-fill is-gradient" data-percentage="96">
                                                <span class="progress-text text-white">0%</span>
                                            </div>
                                        </div>
                                        <div class="progress-label text-white">
                                            <span>Warehousing</span>
                                        </div>
                                    </li>
                                </ul>

                                <div class="d-flex flex-wrap gap-4 mt-5 align-items-center">
                                    <a href="about.html" class="btn btn-secondary-alt">
                                        Explore More
                                        <div class="btn-icon">
                                            <span>
                                                <i class="fa-regular fa-arrow-right"></i>
                                            </span>
                                            <span>
                                                <i class="fa-regular fa-arrow-right"></i>
                                            </span>
                                        </div>
                                    </a>
                                    <div class="support-info">
                                        <div class="icon">
                                            <i class="fa-light fa-phone"></i>
                                        </div>
                                        <div class="content">
                                            <span>Call Us</span>
                                            <a href="tel:+5323213333"><strong>+532 (09) 321 33 33</strong> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <img src="{{asset('frontend/assets/images/Gemini_Generated_Image_jcwi9ljcwi9ljcwi.png')}}" alt="why-choose-us" width="524" height="541"
                        class="position-absolute why-choose-us-element-1">
                    <img src="assets/images/awards.svg" alt="awards" width="220" height="220"
                        class="position-absolute why-choose-us-element-2">
                    <img src="assets/images/why-choose-us-element-1.png" alt="why-choose-us-element-1" width="711"
                        height="208" class="position-absolute why-choose-us-element-3">
                    <img src="assets/images/abstract/world-globe-white.png" alt="world-globe-white" width="655"
                        height="606" class="position-absolute why-choose-us-element-4">
                    <img src="assets/images/why-choose-us-person.png" alt="why-choose-us" width="562" height="855"
                        class=" why-choose-us-element-5">
                    <img src="assets/images/abstract/dot-1.svg" alt="why-choose-us" width="198" height="93"
                        class=" why-choose-us-element-6">
                </div>
            </div>
        </section> --}}
        <!-- ...::: Section Why-choose End :::... -->

        <!-- ...::: Section Fun-fact Start :::... -->
        {{-- <div class="section-fun-fact">
            <div class="container">
                <div class="funfact-area">
                    <div class="row justify-content-between g-5">
                        <div class="col-12 col-sm-6 col-lg-auto">
                            <div class="fun-fact-item">
                                <div class="fun-fact-icon">
                                    <img src="assets/images/icons/funfact-icon-1.svg" alt="funfact-icon-1" width="51"
                                        height="51">
                                </div>
                                <div class="fun-fact-content">
                                    <div class="fun-fact-title">
                                        <div class="fun-fact-value" data-module="countup">
                                            <span class="start-number" data-countup-number="684">684</span>
                                        </div>
                                        <span class="fun-fact-plus">+</span>
                                    </div>
                                    <div class="fun-fact-text">Project Completed</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-auto">
                            <div class="fun-fact-item">
                                <div class="fun-fact-icon">
                                    <img src="assets/images/icons/funfact-icon-2.svg" alt="funfact-icon-2" width="51"
                                        height="51">
                                </div>
                                <div class="fun-fact-content">
                                    <div class="fun-fact-title">
                                        <div class="fun-fact-value" data-module="countup">
                                            <span class="start-number" data-countup-number="14">14</span>K
                                        </div>
                                        <span class="fun-fact-plus">+</span>
                                    </div>
                                    <div class="fun-fact-text">Talented Staffs</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-auto">
                            <div class="fun-fact-item">
                                <div class="fun-fact-icon">
                                    <img src="assets/images/icons/funfact-icon-3.svg" alt="funfact-icon-3" width="51"
                                        height="51">
                                </div>
                                <div class="fun-fact-content">
                                    <div class="fun-fact-title">
                                        <div class="fun-fact-value" data-module="countup">
                                            <span class="start-number" data-countup-number="2">2</span>M
                                        </div>
                                        <span class="fun-fact-plus">+</span>
                                    </div>
                                    <div class="fun-fact-text">Tonnes Supplied</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-auto">
                            <div class="fun-fact-item">
                                <div class="fun-fact-icon">
                                    <img src="assets/images/icons/funfact-icon-4.svg" alt="funfact-icon-4" width="51"
                                        height="51">
                                </div>
                                <div class="fun-fact-content">
                                    <div class="fun-fact-title">
                                        <div class="fun-fact-value" data-module="countup">
                                            <span class="start-number" data-countup-number="22">22</span>K
                                        </div>
                                        <span class="fun-fact-plus">+</span>
                                    </div>
                                    <div class="fun-fact-text">New Partners</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- ...::: Section Fun-fact End :::... -->

        <!-- ...::: Section Work Process Start :::... -->
        <section class="section-work-process">
            <div class="position-relative">
                <div class="section-space">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-lg-8 col-xl-5">
                                <div class="section-content-block">
                                    <span class="section-tag">HOW IT WORKS</span>
                                    <h2 class="section-title is-text-dark">Why <br> <strong>Choose</strong> DIGNIFIED
                                    </h2>
                                    <div class="col-xl-10">
                                        <p class="section-text">Our organisation is guided by clinical expertise and independent ownership, allowing us to operate with integrity, flexibility, and a client-first focus. Clinical leadership ensures our services are safe, evidence-based, and aligned with best practices.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="work-process-list row justify-content-between">
                            <div class="work-process-item col-md-6 col-xl-3">
                                <div class="work-process-item-block">
                                    <div class="image-block">
                                        <img src="{{asset('frontend/assets/images/qa.png')}}" alt="working-process-img-1"
                                            width="310" height="238" class="img-fluid">
                                        <div class="icon-block">
                                            <img src="{{asset('frontend/assets/images/icons/working-process-icon-1.svg')}}"
                                                alt="working-process-icon-1" width="34" height="34">
                                        </div>
                                        <div class="shape-block">
                                            <img src="{{asset('frontend/assets/images/abstract/curve-arrow-top-right-1.svg')}}"
                                                alt="curve-arrow-top-right-1" width="243" height="117">
                                        </div>
                                        <div class="dot-block">
                                            <img src="{{asset('frontend/assets/images/abstract/dot-2.svg')}}" alt="dot-2" width="69"
                                                height="147">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4>100% compliance guarantee</h4>
                                        <p>We ensure that every aspect of our service meets the highest industry standards and regulatory requirements.  </p>
                                    </div>
                                </div>
                            </div>
                            <div class="work-process-item col-md-6 col-xl-3">
                                <div class="work-process-item-block">
                                    <div class="image-block">
                                        <img src="{{asset('frontend/assets/images/istockphoto-1480979211-612x612.jpg')}}" alt="working-process-img-2"
                                            width="310" height="238" class="img-fluid">
                                        <div class="icon-block">
                                            <img src="{{asset('frontend/assets/images/icons/working-process-icon-2.svg')}}"
                                                alt="working-process-icon-1" width="34" height="34">
                                        </div>
                                        <div class="shape-block">
                                            <img src="{{asset('frontend/assets/images/abstract/curve-arrow-top-right-1.svg')}}"
                                                alt="curve-arrow-top-right-1" width="243" height="117">
                                        </div>
                                        <div class="dot-block">
                                            <img src="{{asset('frontend/assets/images/abstract/dot-2.svg')}}" alt="dot-2" width="69"
                                                height="147">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4>24/7 support </h4>
                                        <p>Whenever you need assistance — day or night — you’ll speak to an actual human being, not an automated system.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="work-process-item col-md-6 col-xl-3">
                                <div class="work-process-item-block">
                                    <div class="image-block">
                                        <img src="{{asset('frontend/assets/images/istockphoto-1256373467-612x612.jpg')}}" alt="working-process-img-3"
                                            width="310" height="238" class="img-fluid">
                                        <div class="icon-block">
                                            <img src="{{asset('frontend/assets/images/icons/working-process-icon-3.svg')}}"
                                                alt="working-process-icon-1" width="34" height="34">
                                        </div>
                                        <div class="shape-block">
                                            <img src="{{asset('frontend/assets/images/abstract/curve-arrow-top-right-1.svg')}}"
                                                alt="curve-arrow-top-right-1" width="243" height="117">
                                        </div>
                                        <div class="dot-block">
                                            <img src="{{asset('frontend/assets/images/abstract/dot-2.svg')}}" alt="dot-2" width="69"
                                                height="147">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4>Transparent, competitive rates</h4>
                                        <p>We offer pricing that is fair, competitive, and easy to understand. Our rates reflect the quality of our service, and we provide full clarity on cost structures so you can budget with confidence.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section Background Image -->
                <img src="{{asset('frontend/assets/images/abstract/tyre-shadow-shape.svg')}}" alt="tyre-shadow-shape" width="736" height="252"
                    class="img-fluid position-absolute bottom-0 end-0">
                <!-- Section Background Image -->
            </div>
        </section>
        <!-- ...::: Section Work Process End :::... -->

        <!-- ...::: Section Team Start :::... -->
        @include('frontend.team');
        <!-- ...::: Section Team End :::... -->

     

        <!-- ...::: Section Testimonial Start :::... -->
        <section class="section-testimonial">
            <div class="testimonial-bg">
                <div class="section-space section-space-bottom-huge">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-10">
                                <div class="row justify-content-between gy-3">
                                    <div class="col-lg-7">
                                        <div class="section-content-block">
                                            <span class="section-tag">OUR CLIENTS</span>
                                            <h2 class="section-title is-text-dark">What Client Say About Us</h2>
                                            <p class="section-text">Our clients are at the heart of everything we do, and their feedback reflects the trust and confidence they place in our services.  </p>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="position-relative z-1 mt-5">
                                    <!-- Testimonial Slider -->
                                    <div class="testimonial-one swiper">
                                        <!-- Additional required wrapper -->
                                        <div class="swiper-wrapper">
                                            <!-- Slider Item -->
                                            @foreach ($testimonial as $listall)
                                                
                                           
                                            <div class="swiper-slide">
                                                <div class="testimonial-slider-item-1">
                                                    <div class="testimonial-avater">
                                                        <img src="{{$listall->photo}}"
                                                            alt="testimonial-avatar-1" width="191" height="191"
                                                            class="rounded-circle">
                                                    </div>
                                                    <div class="">
                                                        <div class="review-star">
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                        </div>

                                                        <blockquote class="testimonial-quote">
                                                          {{$listall->message}}
                                                        </blockquote>

                                                        <div
                                                            class="d-flex justify-content-between gap-4 align-items-center">
                                                            <div class="d-flex gap-3">

                                                                <div class="content">
                                                                    <h5 class="mb-1">{{ $listall->name }}</h5>
                                                                     
                                                                </div>
                                                            </div>
                                                            <div class="icon">
                                                                <img src="{{asset('frontend/assets/images/icons/icon-orange-gradient-quote.svg')}}"
                                                                    alt="icon-orange-gradient-quote" width="97"
                                                                    height="97" class="d-none d-sm-inline-block">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                             @endforeach
                                            <!-- Slider Item -->
                                            <!-- Slider Item -->
                                           
                                            <!-- Slider Item -->
                                        </div>
                                    </div>
                                    <!-- Testimonial Slider -->
                                    <!-- If we need navigation buttons -->
                                    <div class="slider-button-vertical-center">
                                        <div class="slider-button-style-1 slider-button-prev">
                                            <i class="fa-regular fa-arrow-left-long"></i>
                                        </div>
                                        <div class="slider-button-style-1 slider-button-next">
                                            <i class="fa-regular fa-arrow-right-long"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <img src="{{asset('frontend/assets/images/abstract/testimonial-shape-1.svg')}}" alt="shape-world-globe" width="587"
                    height="309" class="img-fluid position-absolute z-n1 bottom-0 end-0">
            </div>
        </section>
        <!-- ...::: Section Testimonial End :::... -->

        <!-- ...::: Section Event Start :::... -->
        {{-- <section class="section-event">
            <div class="section-space">
                <div class="container">
                    <div class="row justify-content-between gy-5 flex-column-reverse flex-lg-row">
                        <div class="col-lg-6 col-xl-6">
                            <div class="request-quote-form-block">
                                <h3 class="text-light">Request Quote Form</h3>
                                <form action="#" method="post" class="mt-4">
                                    <div class="row g-4">
                                        <div class="col-xl-6">
                                            <input type="email" placeholder="Email" class="form-input-1 is-bg-white"
                                                required>
                                        </div>
                                        <div class="col-xl-6">
                                            <input type="tel" placeholder="Phone number"
                                                class="form-input-1 is-bg-white" required>
                                        </div>
                                        <div class="col-xl-12">
                                            <input type="text" placeholder="Your name" class="form-input-1 is-bg-white"
                                                required>
                                        </div>
                                        <div class="col-xl-12">

                                           <textarea name="message" class="form-input-1 is-bg-white"></textarea>
 
                                        </div>
                                     
                                        <div class="col-12">
                                            <div class="d-block">

                                                <button type="submit" class="btn btn-secondary-alt w-full text-center">
                                                    Get a Quote
                                                    <span class="btn-icon">
                                                        <span>
                                                            <i class="fa-regular fa-arrow-right"></i>
                                                        </span>
                                                        <span>
                                                            <i class="fa-regular fa-arrow-right"></i>
                                                        </span>
                                                    </span>

                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="text-center mt-4">
                                    <a href="tel:+8832788998" class="d-h4 text-light d-block"><strong>Or call us: +88
                                            327
                                            889
                                            98</strong></a>
                                    <span class="text-light">The Support Centre is available 24/7</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-5">
                            <div class="section-content-block">
                                <span class="section-tag">YOUR Benefits</span>
                                <h2 class="section-title is-text-dark">What You <strong>Will Get</strong> if You Fill
                                    This Form</h2>
                            </div>
                            <ul class="event-list">
                                <li class="event-item">
                                    <div class="event-icon">
                                        <img src="{{asset('frontend/assets/images/icons/event-icon-1.svg')}}" alt="event-icon-1" width="52"
                                            height="52" class="img-fluid">
                                    </div>
                                    <div class="event-content">
                                        <div class="event-title">Customized Quotation</div>
                                        <p>Get a precise cost estimate tailored to your specific logistics needs.</p>
                                    </div>
                                </li>
                                <li class="event-item">
                                    <div class="event-icon">
                                        <img src="{{asset('frontend/assets/images/icons/event-icon-2.svg')}}" alt="event-icon-2" width="52"
                                            height="52" class="img-fluid">
                                    </div>
                                    <div class="event-content">
                                        <div class="event-title">Quick Communication</div>
                                        <p>Ensure direct contact via email and phone for faster for your any service.
                                        </p>
                                    </div>
                                </li>
                                <li class="event-item">
                                    <div class="event-icon">
                                        <img src="{{asset('frontend/assets/images/icons/event-icon-3.svg')}}" alt="event-icon-3" width="52"
                                            height="52" class="img-fluid">
                                    </div>
                                    <div class="event-content">
                                        <div class="event-title">24/7 Support Access</div>
                                        <p>Save time with an automated process by providing distance, freight type.</p>
                                    </div>
                                </li>
                                <li class="event-item">
                                    <div class="event-icon">
                                        <img src="{{asset('frontend/assets/images/icons/event-icon-4.svg')}}" alt="event-icon-4" width="52"
                                            height="52" class="img-fluid">
                                    </div>
                                    <div class="event-content">
                                        <div class="event-title">Time Efficiency</div>
                                        <p>Get a precise cost estimate tailored to your specific logistics needs.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- ...::: Section Event End :::... -->

     
 
 

        <!-- ...::: Section Location Start :::... -->
       @include('frontend.company-details')
        <!-- ...::: Section Location End :::... -->
@endsection

@section('scripts')
    
@endsection