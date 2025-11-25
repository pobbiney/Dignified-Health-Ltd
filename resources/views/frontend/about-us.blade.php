    
    @php $pageName = "home"; $subpageName = ""; @endphp

@extends('layouts.frontendapp')


@section('content')
   <!-- Main Wrapper -->
    <main class="main-wrapper">
        <!-- ...::: Section Breadcrumb Start :::... -->
        <section class="section-breadcrumb">
            <!-- Breadcrumb Background -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-wrapper">
                        <nav class="breadcrumb">
                            <a class="breadcrumb-item" href="/">Home</a>&nbsp;/&nbsp;
                            <span class="breadcrumb active" aria-current="page">About us</span>
                        </nav>
                        <h1 class="breadcrumb-title">About Dignified Health Ltd.</h1>
                    </div>
                    <!-- Breadcrumb Background Image -->
                    <div class="breadcrumb-bg-block">
                        <img src="{{asset('frontend/assets/images/premium_photo-1661491911992-007da184856e.jpeg')}}" alt="breadcrumb-bg" width="1920" height="448"
                            class="img-cover">
                        <img src="assets/images/breadcrumb-shape.png" alt="breadcrumb-shape" width="1033" height="448">
                    </div>
                </div>
            </div>
            <!-- Breadcrumb Background -->
        </section>
        <!-- ...::: Section Breadcrumb End :::... --> 
           <!-- ...::: Section About Start :::... -->
        <section class="section-about">
            <div class="position-relative section-space">
                <div class="container">
                    <div class="row justify-content-between align-items-center gy-5 flex-column-reverse flex-lg-row">
                        <div class="col-lg-5 col-xxl-6">
                            <div class="about-left-block">
                                <div class="image-block animate-bottom-to-top">
                                    <img src="{{asset('frontend/assets/images/ChatGPT Image Nov 22, 2025, 09_59_00 AM.png')}}" alt="about-img-1" width="439" height="538"
                                        class="img-fluid animate-bottom-to-top" data-animation-duration="1"
                                        data-animation-delay="0.5">
                                </div>
                                <div class="image-block">
                                    <img src="{{asset('frontend/assets/images/6593.jpg_wh860.jpg')}}" alt="about-img-1" width="375" height="359"
                                        class="img-fluid animate-left-to-right" data-animation-duration="1"
                                        data-animation-delay="1">
                                </div>
                                <img src="{{asset('frontend/assets/images/abstract/dot-1.svg')}}" alt="dot-1" width="198" height="93"
                                    class="img-fluid animate-top-to-bottom" data-animation-duration="1">
                                <div class="about-shape-block animate-zoom-in" data-animation-duration="1"
                                    data-animation-delay="0.5">
                                    <div class="about-shape-inner-block">
                                        <img src="{{asset('frontend/assets/images/abstract/star-curve-shape-blue.svg')}}"
                                            alt="star-curve-shape-blue" width="200" height="200" class="img-fluid">
                                        <div class="about-shape-text">
                                            <span>2+</span>
                                            Our Experience
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-xxl-5">
                            <div class="about-right-block">
                                <div class="about-content">
                                    <div class="section-content-block">
                                        <span class="section-tag">Compassionate, Professional Care Staffing You Can Trust</span>
                                        <h2 class="section-title is-text-dark">Dignified   <strong>Health</strong>
                                           Limited (DHL Care Services) </h2>
                                        <p class="section-text">Is a specialist recruitment and staffing agency supplying high-quality, reliable, and compassionate care professionals across the United Kingdom.
                                     .</p><p>Founded and led by a Registered Mental Health Nurse, we understand the demanding realities of care delivery and the importance of placing the right people in the right roles—every time.</p>
                                            <p>We provide immediate temporary cover, permanent staffing solutions, and specialist mental health expertise. All our professionals are fully vetted, trained, and committed to delivering dignified, person-centred care.</p>                          
                                    </div>                        
                                    <hr>
                                      <span class="section-tag">Why Choose us</span>
                                    <div>
                                            <div>
                                        <div class="row mb-4">
                                            <ul class="col-auto content-list content-list-1">
                                                <li>Rigorous candidate screening</li>
                                                <li>Enhanced DBS and full compliance </li>
                                                <li>Clinical oversight by a practising RMN </li>
                                                <li>In-house training and specialist development</li>
                                            </ul>
                                            <ul class="col-auto content-list content-list-1">
                                                <li>24/7 on-call support</li>
                                                <li>Reliable, compassionate, and professional staff</li>
                                                <li>We prioritise the right match, not just filling shifts</li>
                                            </ul>

                                        </div>
                                        
                                    </div>
                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section Images -->
                <div class="about-section-img">
                    
                    <img src="{{asset('frontend/assets/images/about-section-abstract-img-1.svg')}}" alt="about-section-abstract-img-1"
                        width="211" height="375" class="animate-zoom-in" data-animation-duration="1.5">
                    
                </div>
                <!-- Section Images -->
            </div>
        </section>
           <!-- ...::: Working Process Section Start :::... -->
            <section class="working-process-section-3 section-space fix" style="margin-top: -50px">
                <div class="shape-1">
                    <img src="{{asset('frontend/assets/images/home-3/shape-1.png')}}" alt="img">
                </div>
                 <div class="shape-2">
                    <img src="{{asset('frontend/assets/images/home-3/shape-2.png')}}" alt="img">
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-xl-8 col-xxl-7">
                            <div class="section-content-block text-center">
                                <span class="section-tag wow fadeInUp">OUR CORE VALUES AND MISSION</span>
                                <h2 class="section-title is-text-dark">Our Mission Statement</h2>
                                <p class="section-text col-lg-10 mx-auto wow fadeInUp" data-wow-delay=".3s">To raise standards in care staffing by providing the most professional, compassionate, and reliable individuals—so care providers can focus on delivering exceptional person-centred care..</p>
                            </div>
                        </div>
                    </div>
                    <div class="row gy-4 mt-4 justify-content-between align-items-center">
                        <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                            <div class="working-process-box-items-3">
                                <div class="working-process-icon-box">
                                    <div class="icon">
                                        <img src="{{asset('frontend/assets/images/home-3/icon/honor.png')}}" alt="img">
                                    </div>
                                    <h4>Value No: 01</h4>
                                </div>
                                <h3>Dignity </h3>
                                 <p> Respecting all service users, staff, and clients.</p>
                            </div>
                        </div>
                        <div class="col-xl-1 d-none d-xl-block wow fadeInUp" data-wow-delay=".4s">
                            <div class="arrow-shape-1">
                                <img src="{{asset('frontend/assets/images/home-3/progress-shape.png')}}" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                            <div class="working-process-box-items-3">
                                <div class="working-process-icon-box">
                                    <div class="icon">
                                        <img src="{{asset('frontend/assets/images/home-3/icon/trust.png')}}" alt="img">
                                    </div>
                                    <h4>Value No: 02</h4>
                                </div>
                                <h3>Honesty  </h3>
                                 <p>Transparent communication and fair practices.</p>
                            </div>
                        </div>
                         <div class="col-xl-1 d-none d-xl-block wow fadeInUp" data-wow-delay=".8s">
                            <div class="arrow-shape-1">
                                <img src="{{asset('frontend/assets/images/home-3/progress-shape.png')}}" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".9s">
                            <div class="working-process-box-items-3">
                                <div class="working-process-icon-box">
                                    <div class="icon">
                                        <img src="{{asset('frontend/assets/images/home-3/icon/reliability.png')}}" alt="img">
                                    </div>
                                    <h4>Value No: 03</h4>
                                </div>
                                <h3>Reliability  </h3>
                                 <p>24/7 availability when you need support.</p>
                            </div>
                        </div>
                         <div class="col-xl-1 d-none d-xl-block wow fadeInUp" data-wow-delay=".8s">
                            <div class="arrow-shape-1">
                                <img src="{{asset('frontend/assets/images/home-3/progress-shape.png')}}" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".9s">
                            <div class="working-process-box-items-3">
                                <div class="working-process-icon-box">
                                    <div class="icon">
                                        <img src="{{asset('frontend/assets/images/home-3/icon/businessman.png')}}" alt="img">
                                    </div>
                                    <h4>Value No: 04</h4>
                                </div>
                                <h3>Professionalism   </h3>
                                 <p>High standards of conduct and performance.</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
        <!-- ...::: Section About End :::... -->
           <!-- ...::: Section Team Start :::... -->
          @include('frontend.team')
         @include('frontend.company-details')
        <!-- ...::: Section Team End :::... -->

    </main>
    
@endsection

@section('scripts')
    
@endsection