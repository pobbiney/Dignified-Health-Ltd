    
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
                            <span class="breadcrumb active" aria-current="page">Contact us</span>
                        </nav>
                        <h1 class="breadcrumb-title">We provide 24/7 Call Assistance </h1>
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
       
        <section class="section-get-in-touch">
             @if (session('message_success'))
        <div class="alert alert-success" role="alert">
            
            <p>{{session('message_success')}} </p>
        </div>
        @endif
        @if (session('message_error'))
        <div class="alert alert-danger" role="alert">
            
            <p>{{session('message_error')}}</p>
        </div>
        @endif
            <div class="section-space">
                <div class="container">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-5">
                            <div class="section-content-block mb-4">
                                <span class="section-tag">Get in touch now:</span>
                                <h2 class="section-title is-text-dark">Free  Consultation Today</h2>
                                <p class="section-text">Call us now and we are ready to help you</p>
                            </div>
                            <ul class="get-touch-info-list">
                                <li>
                                    <div class="icon-rounded-full">
                                        <i class="fa-light fa-phone"></i>
                                    </div>
                                    <div class="content">
                                        <span>24/7 Our Support</span>
                                        <a href="tel:+44 7882 907667">+44 7882 907667</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-rounded-full">
                                        <i class="fa-light fa-envelope"></i>
                                    </div>
                                    <div class="content">
                                        <span>Send Your Message</span>
                                        <a href="mailto: info@dignifiedhealthltd.com"> info@dignifiedhealthltd.com</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-rounded-full">
                                        <i class="fa-regular fa-location-dot"></i>
                                    </div>
                                    <div class="content">
                                        <span>Location</span>
                                        <address>34 Cauldon Drive, Chesterfield, S40 4UB</address>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-7">
                            <div class="get-touch-form-block box-shadow-theme">
                                <form  enctype="multipart/form-data" action="{{ route('contact-us-proccess') }}" method="post">
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-xl-6">
                                            <input type="text" name="name" placeholder="Your name" required>
                                             @error('name') <small style="color:red"> {{ $message}}</small> @enderror
                                        </div>
                                        <div class="col-xl-6">
                                            <input type="email" name="email" placeholder="Your email" required>
                                             @error('email') <small style="color:red"> {{ $message}}</small> @enderror
                                        </div>
                                        <div class="col-xl-6">
                                            <input type="text" name="subject" placeholder="Your subject" required>
                                             @error('subject') <small style="color:red"> {{ $message}}</small> @enderror
                                        </div>
                                        <div class="col-xl-6">
                                            <input type="tel" name="telephone" placeholder="Phone number" required>
                                             @error('telephone') <small style="color:red"> {{ $message}}</small> @enderror
                                        </div>
                                        <div class="col-12">
                                            <textarea placeholder="Your message" name="message" cols="30"></textarea>
                                             @error('message') <small style="color:red"> {{ $message}}</small> @enderror
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-secondary">
                                                Send Your Message
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
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ...::: Section Get In Touch End :::... -->

        <!-- ...::: Section Map Start :::... -->
        <div class="section-map">
             
               <iframe class="map-block" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2387.388276973376!2d-1.4723284229551021!3d53.246741182171164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487985a9f873550b%3A0x8aa12443b6a10f84!2s34%20Cauldon%20Dr%2C%20Chesterfield%20S40%204UB%2C%20UK!5e0!3m2!1sen!2sgh!4v1764240884244!5m2!1sen!2sgh" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
       <br><br><br><br><br>
         @include('frontend.company-details')
        <!-- ...::: Section Team End :::... -->

    </main>
    
@endsection

@section('scripts')
    
@endsection