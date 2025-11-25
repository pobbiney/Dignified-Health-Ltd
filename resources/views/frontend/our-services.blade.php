    
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
                            <span class="breadcrumb active" aria-current="page">Our Service</span>
                        </nav>
                        <h1 class="breadcrumb-title">Service We Provide</h1>
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

         <section class="section-faq">
            <div class="position-relative z-1">
                <div class="section-space">
                    <div class="container">
                        <div class="row gy-5 align-items-center align-items-lg-start">
                            <div class="col-lg-6">
                                <div class="faq-content">
                                    <div class="section-content-block">
                                        <span class="section-tag">WHAT WE DO</span>
                                        <h2 class="section-title">We are expert<br>  in the services we provide 
                                        </h2>
                                        <p class="section-text">We specialise in supplying trained and fully vetted Healthcare Assistants, Support Workers, Senior Carers, and Mental Health Support Workers to care homes, nursing homes, supported living settings, and residential care providers. Whether you require emergency same-day cover, long-term staffing support, or specialist mental health staff, we ensure dependable, competent professionals who meet the highest standards of care.</p>
                                    </div>

                                   <br/>
                                   <p>We provide immediate temporary cover, permanent staffing solutions, and specialist mental health expertise. All our professionals are fully vetted, trained, and committed to delivering dignified, person-centred care.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="faq-image-block">
                                    <div class="image-block">
                                        <img src="{{asset('frontend/assets/images/ChatGPT Image Nov 25, 2025, 10_03_14 PM.png')}}" alt="about-img-1" width="457"
                                            height="539" class="animate-bottom-to-top img-fluid rounded">
                                    </div>
                                    <div class="image-block">
                                        <img src="{{asset('frontend/assets/images/man-holding-phone-with-training-concept-icons-business-concept_218381-8366.avif')}}" alt="about-img-1" width="315"
                                            height="291" class="animate-top-to-bottom img-fluid rounded">
                                    </div>
                                    <img src="{{asset('frontend/assets/images/faq-bg-element-1.png')}}" alt="dot-1" width="292" height="379"
                                        class="faq-shape faq-shape-1 img-fluid">
                                    <img src="{{asset('frontend/assets/images/abstract/dot-1.svg')}}" alt="dot-1" width="198" height="93"
                                        class="animate-bottom-to-top faq-shape faq-shape-2 img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="{{asset('frontend/assets/images/abstract/world-globe-orange.svg')}}" alt="world-globe-orange" width="271"
                    height="540" class="faq-globe">
            </div>
        </section>
       <br><br><br><br><br>
         @include('frontend.company-details')
        <!-- ...::: Section Team End :::... -->

    </main>
    
@endsection

@section('scripts')
    
@endsection