    
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
                            <span class="breadcrumb active" aria-current="page">For Employers</span>
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

         <section class="feature-section-5 section-space fix">
                <div class="circle-shape">
                    <img src="assets/images/home-5/circle-shape.png" alt="img">
                </div>
                <div class="container">
                    <div class="feature-wrapper-5">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="feature-content-4">
                                    <div class="section-content-block">
                                        <span class="section-tag">Why Partner with Dignified Health Ltd</span>
                                        <h2 class="section-title is-text-dark">Why Partner   with <b>Dignified Health Ltd</b>  
                                        </h2>
                                        <p class="mt-3 wow fadeInUp" data-wow-delay=".3s">At Dignified Health Ltd, we understand the pressure of staffing shortages, last-minute sickness, CQC inspections, and the need for consistently high-quality care. We take the stress out of recruitment so you can focus on delivering outstanding care.</p>
                                    </div>
                                </div><br/>
                                 <div class="feature-box-items mb-0 wow fadeInUp" data-wow-delay=".3s mt-0">
                                    <div class="icon">
                                        <img src="{{asset('frontend/assets/images/hospital.png')}}" alt="img">
                                    </div>
                                    <div class="content">
                                        <h4>Clinical Oversight on Every Placement </h4>
                                        <p>  Unlike many agencies, we are led by a practising Registered Mental Health Nurse, so clinical safety is built into everything we do.</p>
                                    </div>
                                </div>
                                <div class="feature-box-items mb-0 wow fadeInUp" data-wow-delay=".3s mt-0">
                                    <div class="icon">
                                        <img src="{{asset('frontend/assets/images/compliance.png')}}" alt="img">
                                    </div>
                                    <div class="content">
                                        <h4> 100% Compliance Guaranteed </h4>
                                        <p> Every candidate arrives with an up-to-date Enhanced DBS, full training matrix, right-to-work, and professional registrations checked.</p>
                                    </div>
                                </div>
                                <div class="feature-box-items mb-0 wow fadeInUp" data-wow-delay=".3s mt-0">
                                    <div class="icon">
                                        <img src="{{asset('frontend/assets/images/help-desk (1).png')}}" alt="img">
                                    </div>
                                    <div class="content">
                                        <h4>  24/7 Human Support </h4>
                                        <p>  Call +44 7882 907667 any time – day or night – and speak to a real person who can help immediately.</p>
                                    </div>
                                </div>
                                 <div class="feature-box-items mb-0 wow fadeInUp" data-wow-delay=".3s mt-0">
                                    <div class="icon">
                                        <img src="{{asset('frontend/assets/images/price-tag.png')}}" alt="img">
                                    </div>
                                    <div class="content">
                                        <h4>  Transparent Pricing</h4>
                                        <p> Simple, competitive rates with no hidden mark-ups or surprise charges. Timesheets and invoices are clear and easy to process.</p>
                                    </div>
                                </div>
                            </div>
                        <div class="col-lg-6">
                            <div class="feature-info">
                                <div class="feature-box-items wow fadeInUp" data-wow-delay=".3s">
                                    <div class="icon">
                                       <img src="{{asset('frontend/assets/images/siren.png')}}" alt="img">
                                    </div>
                                    <div class="content">
                                        <h4>Temporary & Emergency Cover</h4>
                                        <p>Temporary & Emergency Cover Same-day and next-day placements – 24/7/365. We cover shifts within hours, not days.</p>
                                    </div>
                                </div>
    
                                <div class="feature-box-items wow fadeInUp" data-wow-delay=".6s">
                                    <div class="icon">
                                        <img src="{{asset('frontend/assets/images/we-are-hiring (1).png')}}" alt="img">
                                    </div>
                                    <div class="content">
                                        <h4>Permanent Recruitment</h4>
                                        <p>No placement fee until the candidate successfully completes their probation period. Full replacement guarantee within the first 12 weeks if needed.</p>
                                    </div>
                                </div>
                                <div class="feature-box-items mb-0 wow fadeInUp" data-wow-delay=".3s mt-0">
                                    <div class="icon">
                                        <img src="{{asset('frontend/assets/images/mental-health.png')}}" alt="img">
                                    </div>
                                    <div class="content">
                                        <h4>Specialist Mental Health & Complex Care Staffing</h4>
                                        <p> Specialist Mental Health & Complex Care Staffing Clinically led matching – all complex placements are overseen by our Registered Mental Health Nurse (RMN) director to ensure the perfect skill and personality fit.</p>
                                    </div>
                                </div>
                                 <div class="feature-box-items mb-0 wow fadeInUp" data-wow-delay=".3s mt-0">
                                    <div class="icon">
                                        <img src="{{asset('frontend/assets/images/presentation (1).png')}}" alt="img">
                                    </div>
                                    <div class="content">
                                        <h4> Training & CPD </h4>
                                        <p> Training & CPD for Your Existing Team Book our in-house trainers for Moving & Handling, PMVA, Safeguarding, Medication Management, and more – all certificates issued the same day.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </section>

             <!-- Feature Section Start -->
        <section class="service-section fix bg-cover section-space" style="background-image: url('{{asset('frontend/assets/images/home-5/service-bg.jpg')}}');">
            <div class="container">
                <div class="section-content-block text-center">
                    {{-- <span class="section-tag text-white">GLOBAL TRANSPORT AND LOGISTICS</span> --}}
                    <h2 class="section-title is-text-dark text-white">How It Works – 3 Simple Steps</h2>
                    {{-- <p class="section-text col-lg-10 mx-auto text-white">From freight management to supply chain optimization, we are committed <br> to providing the best services to ensure your success.</p> --}}
                </div>
                <div class="service-wrapper-6">
                    <div class="service-box-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="icon-wrap">
                            <div class="icon-items">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
                                <g clip-path="url(#clip0_1_74788)">
                                    <path d="M45.315 35.6721C41.1446 35.6721 37.752 39.0648 37.752 43.2352C37.752 47.4055 41.1446 50.7982 45.315 50.7982C49.4861 50.7982 52.878 47.4055 52.878 43.2352C52.878 39.0648 49.4854 35.6721 45.315 35.6721ZM45.315 47.0167C43.2295 47.0167 41.5335 45.3206 41.5335 43.2352C41.5335 41.1497 43.2295 39.4536 45.315 39.4536C47.4005 39.4536 49.0965 41.1497 49.0965 43.2352C49.0965 45.3208 47.4005 47.0167 45.315 47.0167Z" fill="#FF7D44"/>
                                    <path d="M19.4752 35.6721C15.3048 35.6721 11.9121 39.0648 11.9121 43.2352C11.9121 47.4055 15.3048 50.7982 19.4752 50.7982C23.6455 50.7982 27.0382 47.4055 27.0382 43.2352C27.0382 39.0648 23.6455 35.6721 19.4752 35.6721ZM19.4752 47.0167C17.3897 47.0167 15.6936 45.3206 15.6936 43.2352C15.6936 41.1497 17.3897 39.4536 19.4752 39.4536C21.56 39.4536 23.2567 41.1497 23.2567 43.2352C23.2567 45.3208 21.5606 47.0167 19.4752 47.0167Z" fill="#FF7D44"/>
                                    <path d="M50.4085 14.0244C50.087 13.3859 49.4335 12.9832 48.7187 12.9832H38.7607V16.7647H47.5527L52.7012 27.005L56.0807 25.3058L50.4085 14.0244Z" fill="#FF7D44"/>
                                    <path d="M39.6427 41.4077H25.3359V45.1892H39.6427V41.4077Z" fill="#FF7D44"/>
                                    <path d="M13.8027 41.4077H7.24812C6.20375 41.4077 5.35742 42.2542 5.35742 43.2984C5.35742 44.3428 6.20387 45.1891 7.24812 45.1891H13.8028C14.8471 45.1891 15.6935 44.3427 15.6935 43.2984C15.6935 42.254 14.847 41.4077 13.8027 41.4077Z" fill="#FF7D44"/>
                                    <path d="M59.6032 29.8487L55.8841 25.0588C55.5268 24.5974 54.9753 24.3276 54.391 24.3276H40.6515V11.0924C40.6515 10.048 39.805 9.20166 38.7608 9.20166H7.24812C6.20375 9.20166 5.35742 10.0481 5.35742 11.0924C5.35742 12.1366 6.20387 12.9831 7.24812 12.9831H36.87V26.2183C36.87 27.2627 37.7164 28.109 38.7607 28.109H53.4651L56.2187 31.6561V41.4074H50.9875C49.9432 41.4074 49.0968 42.2538 49.0968 43.2981C49.0968 44.3424 49.9433 45.1888 50.9875 45.1888H58.1094C59.1538 45.1888 60.0001 44.3423 60.0002 43.2981V31.0084C60.0002 30.5886 59.8603 30.1802 59.6032 29.8487Z" fill="#FF7D44"/>
                                    <path d="M13.6761 31.8279H4.97859C3.93422 31.8279 3.08789 32.6743 3.08789 33.7186C3.08789 34.763 3.93434 35.6093 4.97859 35.6093H13.676C14.7204 35.6093 15.5667 34.7628 15.5667 33.7186C15.5668 32.6743 14.7204 31.8279 13.6761 31.8279Z" fill="#FF7D44"/>
                                    <path d="M18.0252 24.3906H1.8907C0.846445 24.3906 0 25.2371 0 26.2814C0 27.3258 0.846445 28.1721 1.8907 28.1721H18.0252C19.0696 28.1721 19.9159 27.3257 19.9159 26.2814C19.9159 25.2372 19.0696 24.3906 18.0252 24.3906Z" fill="#FF7D44"/>
                                    <path d="M21.1131 16.9539H4.97859C3.93422 16.9539 3.08789 17.8003 3.08789 18.8446C3.08789 19.8889 3.93434 20.7353 4.97859 20.7353H21.1131C22.1575 20.7353 23.0038 19.8888 23.0038 18.8446C23.0039 17.8003 22.1575 16.9539 21.1131 16.9539Z" fill="#FF7D44"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_1_74788">
                                    <rect width="60" height="60" fill="white"/>
                                    </clipPath>
                                </defs>
                                </svg>
                            </div>
                            {{-- <h3><a href="service-details.html">Road Freight</a></h3> --}}
                        </div>
                        <p>
                            Tell us what you need (call, email, or use the booking form).
                        </p>
                        </div>
                        <a href="#" class="arrow-icon">
                            <i class="fa-regular fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="service-box-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="icon-wrap">
                            <div class="icon-items">
                            <div class="icon">
                               <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
  <g clip-path="url(#clip0_1_74759)">
    <path d="M58.2422 54.4601C56.3021 54.4601 55.427 54.0243 54.3189 53.4724C53.8616 53.2447 53.3821 53.0064 52.8282 52.7939L58.7654 37.1749C59.2275 35.9592 59.1509 34.5991 58.555 33.4432C57.9591 32.2873 56.8956 31.4358 55.6375 31.1071L51.5493 30.0389V17.7779C51.5493 15.2047 49.4558 13.1113 46.8826 13.1113H38.8141V8.57449C38.8141 4.96277 35.8758 2.02441 32.2641 2.02441H27.7361C24.1243 2.02441 21.186 4.96277 21.186 8.57449V13.1112H13.1175C10.5443 13.1112 8.45086 15.2046 8.45086 17.7778V30.0389L4.36266 31.1071C3.10441 31.4358 2.04094 32.2873 1.44516 33.4432C0.849375 34.5991 0.7725 35.9592 1.23469 37.1749L7.17188 52.7941C6.61828 53.0066 6.13875 53.2448 5.6816 53.4725C4.57336 54.0243 3.69809 54.4602 1.75781 54.4602C0.787031 54.4602 0 55.2472 0 56.218C0 57.1888 0.787031 57.9758 1.75781 57.9758C4.52484 57.9758 5.97188 57.2554 7.24852 56.6197C8.35676 56.068 9.23203 55.6321 11.1723 55.6321C13.1126 55.6321 13.9879 56.0679 15.0961 56.6197C16.3727 57.2554 17.8198 57.9758 20.5868 57.9758C23.3537 57.9758 24.8006 57.2554 26.0774 56.6197C27.1855 56.068 28.0608 55.6321 30.0008 55.6321C31.9409 55.6321 32.816 56.0679 33.9241 56.6197C35.2008 57.2554 36.6477 57.9758 39.4146 57.9758C42.1815 57.9758 43.6284 57.2554 44.9051 56.6197C46.0132 56.068 46.8885 55.6321 48.8285 55.6321C50.7686 55.6321 51.6437 56.0679 52.7518 56.6197C54.0285 57.2554 55.4754 57.9758 58.2423 57.9758C59.2131 57.9758 60.0001 57.1888 60.0001 56.218C60.0001 55.2472 59.213 54.4601 58.2422 54.4601ZM24.7016 8.57449C24.7016 6.90129 26.0629 5.54004 27.7361 5.54004H32.2641C33.9373 5.54004 35.2985 6.90129 35.2985 8.57449V13.1112H24.7016V8.57449ZM11.9664 17.7779C11.9664 17.1432 12.4827 16.6269 13.1174 16.6269H46.8825C47.5172 16.6269 48.0335 17.1432 48.0335 17.7779V29.1204L30.4443 24.5245C30.1529 24.4485 29.8468 24.4485 29.5555 24.5245L11.9662 29.1204L11.9664 17.7779ZM43.3379 53.4725C42.2298 54.0243 41.3545 54.4601 39.4146 54.4601C37.4747 54.4601 36.5994 54.0243 35.4913 53.4724C34.2146 52.8368 32.7677 52.1163 30.0008 52.1163C27.2339 52.1163 25.787 52.8368 24.5102 53.4724C23.4021 54.0241 22.5268 54.4601 20.5868 54.4601C18.6466 54.4601 17.7712 54.0243 16.6631 53.4724C15.3865 52.8368 13.9395 52.1163 11.1724 52.1163C11.0029 52.1163 10.8383 52.1191 10.6784 52.1243L4.52074 35.9257C4.37297 35.537 4.48816 35.2129 4.56996 35.0542C4.65176 34.8955 4.84898 34.6137 5.25129 34.5086L30 28.042L54.7487 34.5087C55.151 34.6137 55.3482 34.8955 55.43 35.0542C55.5118 35.2129 55.627 35.537 55.4793 35.9258L49.3218 52.1244C49.162 52.1193 48.9977 52.1164 48.8284 52.1164C46.0615 52.1163 44.6146 52.8369 43.3379 53.4725Z" fill="#FF7D44"/>
    <path d="M46.2509 37.0378L30.444 32.9076C30.1527 32.8316 29.8466 32.8316 29.5553 32.9076L13.7484 37.0378C12.8092 37.2832 12.2467 38.2436 12.4921 39.1829C12.7375 40.1222 13.6979 40.6845 14.6372 40.4393L29.9997 36.4252L45.3621 40.4393C45.5111 40.4783 45.6606 40.4968 45.8077 40.4968C46.588 40.4968 47.3008 39.9732 47.5071 39.1829C47.7526 38.2436 47.1901 37.2832 46.2509 37.0378Z" fill="#FF7D44"/>
  </g>
  <defs>
    <clipPath id="clip0_1_74759">
      <rect width="60" height="60" fill="white"/>
    </clipPath>
  </defs>
</svg>
                            </div>
                            {{-- <h3><a href="service-details.html">Cargo Ships</a></h3> --}}
                        </div>
                        <p>
                            We send fully vetted, role-ready candidates within hours (temp) or fully interviewed shortlists (permanent).
                        </p>
                        </div>
                        <a href="#" class="arrow-icon">
                            <i class="fa-regular fa-arrow-right"></i>
                        </a>
                    </div>
              
                    <div class="service-box-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="icon-wrap">
                            <div class="icon-items">
                            <div class="icon">
                               <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
  <path d="M49.8943 49.0292H42.9472L45.3694 54.9735C46.0696 56.697 43.4397 57.7657 42.7382 56.0393L39.8815 49.0292H36.2234L38.6456 54.9735C39.3458 56.697 36.7159 57.7657 36.015 56.0393L33.1577 49.0292H26.842L23.9847 56.0393C23.2838 57.7657 20.654 56.697 21.3541 54.9735L23.7763 49.0292H20.1182L17.2616 56.0393C16.56 57.7657 13.9301 56.697 14.6303 54.9735L17.0525 49.0292H10.1054C9.32095 49.0292 8.68457 48.3928 8.68457 47.6083V10.662C8.68457 6.49006 12.0925 3.0835 16.2638 3.0835H43.7558C47.9164 3.0835 51.3151 6.48226 51.3151 10.6428V47.6083C51.3151 48.3928 50.6788 49.0292 49.8943 49.0292ZM42.9019 35.7899H38.3423V40.3495H42.9019V35.7899ZM36.9214 32.9481H44.3227C45.1072 32.9481 45.7436 33.5845 45.7436 34.369V41.7703C45.7436 42.5548 45.1072 43.1912 44.3227 43.1912H36.9214C36.1369 43.1912 35.5005 42.5548 35.5005 41.7703V34.369C35.5005 33.5845 36.1369 32.9481 36.9214 32.9481ZM15.677 32.9481H23.0783C23.8628 32.9481 24.4992 33.5845 24.4992 34.369V41.7703C24.4992 42.5548 23.8628 43.1912 23.0783 43.1912H15.677C14.8925 43.1912 14.2561 42.5548 14.2561 41.7703V34.369C14.2561 33.5845 14.8925 32.9481 15.677 32.9481ZM21.6574 35.7899H17.0979V40.3495H21.6574V35.7899ZM28.579 26.6127V12.2544H17.8554V26.6127H28.579ZM31.4207 12.2544V26.6127H42.1443V12.2544H31.4207ZM44.986 10.8335V28.0335C44.986 28.818 44.3497 29.4544 43.5652 29.4544C34.5212 29.4544 25.4786 29.4544 16.4346 29.4544C15.6501 29.4544 15.0137 28.818 15.0137 28.0335V10.8335C15.0137 10.049 15.6501 9.4126 16.4346 9.4126H43.5652C44.3497 9.4126 44.986 10.049 44.986 10.8335ZM11.5263 46.1875H48.4734V10.6428C48.4734 8.05125 46.3474 5.92525 43.7558 5.92525H16.2638C13.6615 5.92525 11.5263 8.05976 11.5263 10.662V46.1875Z" fill="#FF7D44"/>
</svg>
                            </div>
                            {{-- <h3><a href="service-details.html">Rail Freightt</a></h3> --}}
                        </div>
                        <p>
                            You get on with delivering great care – we handle the rest. Ready to book staff or discuss permanent recruitment?
                        </p>
                        </div>
                        <a href="#" class="arrow-icon">
                            <i class="fa-regular fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

       
       <br><br><br><br><br>
         @include('frontend.company-details')
        <!-- ...::: Section Team End :::... -->

    </main>
    
@endsection

@section('scripts')
    
@endsection