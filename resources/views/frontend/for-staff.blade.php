    
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
                            <span class="breadcrumb active" aria-current="page">For Staff</span>
                        </nav>
                        <h1 class="breadcrumb-title">Staff Recruitment</h1>
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

         <section class="section-faq faq-5">
            <div class="dot-s2 float-bob-y">
                <img src="{{asset('frontend/assets/images/dot-2.png')}}" alt="img">
            </div>
            <div class="dot-s3">
                <img src="{{asset('frontend/assets/images/dot-3.png')}}" alt="img">
            </div>
            <div class="">
                <div class="section-space pb-0">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-9">
                                <div class="section-content-block text-center">
                                    {{-- <span class="section-tag">FREQUENTLY ASKED QUESTIONS</span> --}}
                                    <h2 class="section-title is-text-dark">Staff Recruitment</h2>
                                    <p class="section-text">
                                       Before joining Dignified Health Limited, every applicant must complete a full recruitment and compliance process to ensure safety, professionalism, and regulatory compliance.
<br>
Below is what we require from all candidates before they can be recruited or placed for work.

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <!-- FAQ Accordion -->
                                <div class="faq-accordion mt-5" id="accordion-2">
                                    <div class="accordion-item accordion-item-2">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#accordion-style-2-collapseOne" aria-expanded="true"
                                                aria-controls="accordion-style-2-collapseOne">
                                               Completed Application Pack
                                            </button>
                                        </h2>
                                        <div id="accordion-style-2-collapseOne" class="accordion-collapse collapse show"
                                            data-bs-parent="#accordion-2">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                         <ul class="content-list content-list-1">
                                                            <li>Full Application / Registration Form</li>
                                                            <li>Health Declaration Form</li>
                                                            <li>Equal Opportunities Form</li>
                                                         </ul>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <ul class="content-list content-list-1">
                                                            <li>Consent to Process Personal Data (GDPR)</li>
                                                            <li>Declaration of Criminal Record History</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                             
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item accordion-item-2">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#accordion-2-collapseTwo"
                                                aria-expanded="false" aria-controls="accordion-2-collapseTwo">
                                                Proof of Right to Work in the UK (Mandatory)
                                            </button>
                                        </h2>
                                        <div id="accordion-2-collapseTwo" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion-2">
                                            <div class="accordion-body">
                                              Acceptable documents include:
                                                <div class="row">
                                                    <div class="col-md-6">
                                                         <ul class="content-list content-list-1">
                                                            <li>British Passport</li>
                                                            <li>UK Birth Certificate + NI Confirmation</li>
                                                            <li>Biometric Residence Permit</li>
                                                         </ul>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <ul class="content-list content-list-1">
                                                            <li>Share Code (for Home Office Verification)</li>
                                                            <li>Indefinite Leave to Remain / Settled Status</li>
                                                        </ul>
                                                    </div>
                                                    <p style="color:red">All documents must be current and valid.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item accordion-item-2">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#accordion-collapseThree"
                                                aria-expanded="false" aria-controls="accordion-collapseThree">
                                              Valid Enhanced DBS Check
                                            </button>
                                        </h2>
                                        <div id="accordion-collapseThree" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion-2">
                                            <div class="accordion-body">
                                                 <div class="row">
                                                    <p>We require:</p>
                                                    <div class="col-md-6">
                                                         <ul class="content-list content-list-1">
                                                            <li>An Enhanced Adult Workforce DBS</li>
                                                            <li>Update Service preferred (if available)</li>
                                                            <li>If not on the Update Service, candidates must apply for a new DBS</li>
                                                         </ul>

                                                    </div>
                                                     
                                                    <p style="color:red">We will not place staff until DBS clearance is confirmed.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item accordion-item-2">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#accordion-2-collapseFour"
                                                aria-expanded="false" aria-controls="accordion-2-collapseFour">
                                             Two Recent Professional References
                                            </button>
                                        </h2>
                                        <div id="accordion-2-collapseFour" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion-2">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <p>Minimum requirements:</p>
                                                    <div class="col-md-6">
                                                         <ul class="content-list content-list-1">
                                                            <li>One reference must be from a recent employer</li>
                                                            <li>References must cover the last 2–5 years (depending on role)</li>
                                                            <li>Character references only accepted if no work history is available in the UK</li>
                                                         </ul>

                                                    </div>
                                                     
                                                    <p style="color:red">References must be verified before shifts are offered.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item accordion-item-2">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#accordion-2-collapseFour1"
                                                aria-expanded="false" aria-controls="accordion-2-collapseFour1">
                                              Mandatory Training Certificates (or willingness to train)
                                            </button>
                                        </h2>
                                        <div id="accordion-2-collapseFour1" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion-2">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <p>Required training includes:</p>
                                                    <div class="col-md-6">
                                                         <ul class="content-list content-list-1">
                                                            <li>Care Certificate (or willingness to complete)</li>
                                                            <li>Moving & Handling</li>
                                                            <li>First Aid or Basic Life Support</li>
                                                            <li>Infection Prevention & Control</li>
                                                         </ul>
                                                    </div>
                                                     <div class="col-md-6">
                                                        <ul class="content-list content-list-1">
                                                            <li>Health & Safety</li>
                                                            <li>Fire Safety</li>
                                                            <li>Adult Safeguarding</li>
                                                            <li>Medication Awareness (if applicable)</li>
                                                             
                                                        </ul>
                                                     </div>
                                                     
                                                    <p style="color:red">Dignified Health provides training and CPD, led by Lydia Tuuda Obeng, Head of Training & Development.</p>
                                                </div>
                                        </div>
                                    </div>
                                    </div>
                                     <div class="accordion-item accordion-item-2">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#accordion-2-collapseFour11"
                                                aria-expanded="false" aria-controls="accordion-2-collapseFour11">
                                               Proof of Address (Must Be Recent)
                                            </button>
                                        </h2>
                                        <div id="accordion-2-collapseFour11" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion-2">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <p>Candidates must provide at least one document dated within the last 3 months, such as::</p>
                                                    <div class="col-md-6">
                                                         <ul class="content-list content-list-1">
                                                            <li>Utility bill</li>
                                                            <li>Bank statement</li>
                                                            <li>Council tax letter</li>
                                                            <li>Tenancy agreement</li>
                                                         </ul>
                                                    </div>
                                                     
                                                     
                                                     
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="accordion-item accordion-item-2">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#accordion-2-collapseFour12"
                                                aria-expanded="false" aria-controls="accordion-2-collapseFour12">
                                               Proof of Identity
                                            </button>
                                        </h2>
                                        <div id="accordion-2-collapseFour12" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion-2">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <p>Accepted forms:</p>
                                                    <div class="col-md-6">
                                                         <ul class="content-list content-list-1">
                                                            <li>Passport</li>
                                                            <li>Driving Licence</li>
                                                            <li>Birth Certificate (with additional ID)</li>
                                                             
                                                         </ul>
                                                    </div>
                                                      <p style="color:red">Identity must match all other documents.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item accordion-item-2">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#accordion-2-collapseFour13"
                                                aria-expanded="false" aria-controls="accordion-2-collapseFour13">
                                               Up-to-Date CV
                                            </button>
                                        </h2>
                                        <div id="accordion-2-collapseFour13" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion-2">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <p>All applicants must submit a professional CV showing:</p>
                                                    <div class="col-md-6">
                                                         <ul class="content-list content-list-1">
                                                            <li>Full work history</li>
                                                            <li>Duties and skills</li>
                                                            <li>Gaps explained</li>
                                                             
                                                         </ul>
                                                    </div>
                                                       
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="accordion-item accordion-item-2">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#accordion-2-collapseFour14"
                                                aria-expanded="false" aria-controls="accordion-2-collapseFour14">
                                               Interview & Competency Screening
                                            </button>
                                        </h2>
                                        <div id="accordion-2-collapseFour14" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion-2">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <p>Each candidate undergoes:</p>
                                                    <div class="col-md-6">
                                                         <ul class="content-list content-list-1">
                                                            <li>Face-to-face or video interview</li>
                                                            <li>Competency questions</li>
                                                            <li>Scenario-based testing</li>
                                                            <li>Character and professionalism assessment</li>
                                                             
                                                         </ul>
                                                    </div>
                                                    <p style="color: red">Conducted by our recruitment/HR team with oversight from J.K. Owusu (RMN).</p>
                                                       
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item accordion-item-2">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#accordion-2-collapseFour15"
                                                aria-expanded="false" aria-controls="accordion-2-collapseFour15">
                                                Uniform & Equipment Readiness
                                            </button>
                                        </h2>
                                        <div id="accordion-2-collapseFour15" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion-2">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <p>Before placement, candidates must have:</p>
                                                    <div class="col-md-6">
                                                         <ul class="content-list content-list-1">
                                                            <li>Suitable uniform (supplied or purchased)</li>
                                                            <li>ID badge (issued after compliance)</li>
                                                            <li>PPE as required</li>
                                                            
                                                             
                                                         </ul>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item accordion-item-2">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#accordion-2-collapseFour16"
                                                aria-expanded="false" aria-controls="accordion-2-collapseFour16">
                                               Bank Details & Payroll Registration
                                            </button>
                                        </h2>
                                        <div id="accordion-2-collapseFour16" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion-2">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <p>We require:</p>
                                                    <div class="col-md-6">
                                                         <ul class="content-list content-list-1">
                                                            <li>Bank account details</li>
                                                            <li>NI number</li>
                                                            <li>P45 or Starter Checklist</li>
                                                            
                                                             
                                                         </ul>
                                                    </div>
                                                    <p style="color: red">This ensures smooth payroll once shifts begin.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item accordion-item-2">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#accordion-2-collapseFour17"
                                                aria-expanded="false" aria-controls="accordion-2-collapseFour17">
                                               Onboarding & Compliance Sign-Off
                                            </button>
                                        </h2>
                                        <div id="accordion-2-collapseFour17" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion-2">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <p>Before any shift is allocated, all candidates must complete:</p>
                                                    <div class="col-md-6">
                                                         <ul class="content-list content-list-1">
                                                            <li>Induction checklist</li>
                                                            <li>Mandatory orientation</li>
                                                            <li>Policy declarations (confidentiality, safeguarding, professional conduct)</li>
                                                            <li>Health & safety sign-off</li>
                                                            <li>Employment agreement</li>
                                                            
                                                             
                                                         </ul>
                                                    </div>
                                                    <p style="color: red">Once completed, the staff member becomes fully cleared and can begin work immediately.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Accordion -->
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