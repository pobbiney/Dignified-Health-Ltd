    
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
                            <span class="breadcrumb active" aria-current="page">Our Team</span>
                        </nav>
                        <h1 class="breadcrumb-title">Profile</h1>
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

       <!-- ...::: Section Team Details Start :::... -->
        <section class="section-team-details">
            <div class="section-space">
                <div class="container">
                    <div class="row justify-content-between g-4">
                        <div class="col-12 col-md-6 col-xl-6">
                            <div class="team-details-image-block">
                                <img src="../{{ $data->picture }}" alt="team-details-img" width="650"
                                    height="650" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-5">
                            <div class="team-details-content-block">
                                <div class="section-block">
                                    <span class="section-tag">{{$data->position}}</span>
                                    <h2 class="section-title">{{$data->surname.' '.$data->firstname}}</h2>
                                </div>
                                <div class="team-member-content-block">
                                    <p>{{$data->profile}}</p>

                                  

                                   
                                </div>
                                
                            </div>
                        </div>

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