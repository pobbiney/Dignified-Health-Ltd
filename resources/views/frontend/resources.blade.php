    
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
                            <span class="breadcrumb active" aria-current="page">Our Resources</span>
                        </nav>
                        <h1 class="breadcrumb-title">Welcome to the Dignified Health Limited Resources Hub</h1>
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

          <div class="section-service-details">
            <div class="section-space">
                <div class="container">
                    <div class="row g-lg-5">
                        <div class="col-md-6 col-lg-7 col-xl-8">
                          
                            <article class="text-rich">
                                <h2>Welcome to the Dignified Health Limited Resources Hub.</h2>
                                <p>This section contains essential information for our clients (employers) and our agency staff. 
                                    It supports safe practice, compliance, professional development, and effective communication.</p>

                                     <h4>FOR EMPLOYERS</h4>
                                     <h5>About Our Workforce</h5>
                                     <p>We supply trained and fully vetted healthcare professionals, including:</p>
                                

                                <ul
                                    class="content-list content-list-1 flex-wrap d-flex row-gap-2 column-gap-5 flex-wrap">
                                    <li>Healthcare Assistants</li>
                                    <li>Support Workers</li>
                                    <li>Senior Care Staff</li>
                                    <li>Nurses (where applicable) </li>
                                    <li>Specialist support staff for dementia, mental health, and learning disabilities</li>
                                   <p>All staff meet compliance requirements before being placed</p>
                                </ul>
 
                                <h4>Compliance Standards</h4>
                               <p> Every worker supplied by Dignified Health Limited has:</p>
                               <ul
                                    class="content-list content-list-1 flex-wrap d-flex row-gap-2 column-gap-5 flex-wrap">
                                <li>Enhanced DBS certificate</li>
                                <li>	Verified Right-to-Work documentation</li>
                                <li>	Mandatory care training meeting CQC and Skills for Care standards</li>
                                <li>	Verified ID and address</li>
                                <li>	Two professional references</li>
                                <li>	Completed induction and competency checks</li>
                                <li>	Care Certificate (where role applicable)</li>
                               </ul>
                               <p> We carry out regular checks to ensure compliance remains current</p>

                                

                               <h4>Staffing Support and Shift Types</h4>
                                <p>We provide:</p>
                                <ul
                                    class="content-list content-list-1 flex-wrap d-flex row-gap-2 column-gap-5 flex-wrap">
                                    <li>Emergency staffing</li>
                                    <li>	Short-notice shift cover</li>
                                    <li>	Planned rota support</li>
                                    <li>	Block bookings</li>
                                    <li>	Holiday and sickness cover</li>
                                    <li>	Weekend and night shifts</li>
                                </ul>
                                      <p>Where possible, we prioritise continuity with returning staff.</p>
                                

                               <h4>Placement Standards</h4>
                               <p> All staff are expected to:</p>
                               <ul
                                    class="content-list content-list-1 flex-wrap d-flex row-gap-2 column-gap-5 flex-wrap">
                                    <li>	Complete the service induction on arrival</li>
                                    <li>	Follow onsite procedures and policies</li>
                                    <li>	Respect service users and maintain confidentiality</li>
                                    <li>	Work within their training and competency</li>
                                    <li>	Communicate professionally and clearly with colleagues</li>
                               </ul>
                             
                                <h5>Reporting Concerns</h5>
                                <P>If there are performance, conduct, or safeguarding concerns:<br>
                                Email: admin@dignifiedhealthltd.com<br>
                                Phone: ( +44 7882 907667)<br>
                                We will review and respond promptly.</P> 

                                <h4>FOR STAFF</h4>
                                <p>Before You Start Work</p>
                                <p>To remain eligible for shifts, all workers must maintain:</p>
                                <ul
                                    class="content-list content-list-1 flex-wrap d-flex row-gap-2 column-gap-5 flex-wrap">
                                    <li>	Right-to-Work evidence</li>
                                    <li>	Enhanced DBS</li>
                                    <li>	Mandatory training certificates</li>
                                    <li>	Updated CV</li>
                                    <li>	Bank and emergency contact details</li>
                                    <li>	Care Certificate (if applicable)</li>
                                </ul>
                                    <p>Compliance must remain up to date.</p>
                               
                                <h4>Training Requirements</h4>
                                <p>Staff must complete and renew the following:</p>
                                <ul
                                    class="content-list content-list-1 flex-wrap d-flex row-gap-2 column-gap-5 flex-wrap">
                                    <li>	Safeguarding Adults and Children</li>
                                    <li>	Infection Prevention and Control</li>
                                    <li>	Manual Handling and Moving People</li>
                                    <li>	Food Hygiene</li>
                                    <li>	Fire Safety</li>
                                    <li>	Basic Life Support</li>
                                    <li>	Medication Awareness (where applicable)</li>
                                    <li>	Equality, Diversity and Inclusion</li>
                                    <li>	Health and Safety Awareness</li>
                                </ul>
                               
                                <h4>Shift Expectations</h4>
                                <p>Workers are expected to:</p>
                                <ul
                                    class="content-list content-list-1 flex-wrap d-flex row-gap-2 column-gap-5 flex-wrap">
                                    <li>	Arrive on time</li>
                                    <li>	Wear correct uniform and ID</li>
                                    <li>	Follow all on-site policies and procedures</li>
                                    <li>	Respect confidentiality and safeguarding rules</li>
                                    <li>	Notify Dignified Health Limited if unable to attend a shift</li>
                                </ul>
                                <p>Professional conduct is required at all times.</p>
                               
                                <h4>Safeguarding and Incident Reporting</h4>
                                <p>If you become aware of or suspect:</p>
                                <ul
                                    class="content-list content-list-1 flex-wrap d-flex row-gap-2 column-gap-5 flex-wrap">
                                    <li>	Abuse</li>
                                    <li>	Neglect</li>
                                    <li>	Unsafe practice</li>
                                    <li>	Serious misconduct</li>
                                    <li>	Risk to vulnerable individuals</li>
                                </ul>
                                <p>You must report this immediately:<br>
                                1.	To the senior staff member on site<br>
                                2.	To Dignified Health Limited<br>
                                3.	Further escalation may be necessary depending on severity</p>
                             
                                <h4>Staff Wellbeing</h4>
                                <p>We are committed to supporting our workforce. Staff can contact us regarding:</p>
                                <ul
                                    class="content-list content-list-1 flex-wrap d-flex row-gap-2 column-gap-5 flex-wrap">
                                    <li>	Placement concerns</li>
                                    <li>	Training requirements</li>
                                    <li>	Work-related support</li>
                                    <li>	Professional development</li>
                                </ul>
                               <p> For independent mental health support, visit:
                                https://www.nhs.uk/mental-health</p>

                            </article>
                        </div>
                        <div class="col-md-6 col-lg-5 col-xl-4">
                            <aside>
                                <ul class="sidebar-list">
                                    <!-- Sidebar Item - Services-->
                                    <li class="sidebar-item">
                                        <h4 class="sidebar-title">Download Our Resources </h4>

                                        <ul class="service-category-list">
                                            @foreach ($listdoc as $doc)
                                            <li class="service-category-item">
                                                <a href="{{ $doc->document }}" target="_" class="service-category-link">
                                                    {{ $doc->name }}
                                                </a>
                                            </li>
                                            @endforeach
                                            
                                        </ul>
                                    </li>

                                     <li class="sidebar-item">
                                        <h4 class="sidebar-title">Staff Userful Links</h4>

                                        <ul class="service-category-list">
                                            @foreach ($listlinkstaff as $staff)
                                            <li class="service-category-item">
                                                <a href="{{ $staff->link }}" target="_" class="service-category-link">
                                                    {{ $staff->name }}
                                                </a>
                                            </li>
                                            @endforeach
                                            
                                        </ul>
                                    </li>
                                     <li class="sidebar-item">
                                        <h4 class="sidebar-title">Employer Userful Links</h4>

                                        <ul class="service-category-list">
                                            @foreach ($listlinkemp as $employer)
                                            <li class="service-category-item">
                                                <a href="{{ $employer->link }}" target="_" class="service-category-link">
                                                    {{ $employer->name }}
                                                </a>
                                            </li>
                                            @endforeach
                                            
                                        </ul>
                                    </li>
                                    <!-- Sidebar Item - Services-->
                                    <!-- Sidebar Item - Banner-->
                                    <li class="sidebar-banner">
                                        <img src="{{asset('frontend/assets/images/sidebar-banner-img.jpg')}}" alt="sidebar-banner-img"
                                            width="368" height="546" class="img-cover">
                                        <div class="inner-content">
                                            <span class="fs-5">Speak to us</span>
                                            <div class="service-banner-info-block">
                                                <ul class="get-touch-info-list">
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa-light fa-phone"></i>
                                                        </div>
                                                        <div class="content">
                                                            <span>24/7 Our Support</span>
                                                            <a href="tel:+44 7882 907667" class="text-white">+44 7882 907667</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- Sidebar Item - Banner-->
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         
       <br><br><br><br><br>
         @include('frontend.company-details')
        <!-- ...::: Section Team End :::... -->

    </main>
    
@endsection

@section('scripts')
    
@endsection