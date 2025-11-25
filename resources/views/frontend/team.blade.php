 <section class="section-team ">
            <div class="position-relative z-index-1">
                <div class="section-space">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 col-xl-8 col-xxl-7">
                                <div class="section-content-block text-center">
                                    <span class="section-tag is-white">OUR MEMBER</span>
                                    <h2 class="section-title is-text-dark">Explore Our Management Team</h2>
                                    <p class="section-text col-lg-10 mx-auto">Get to know the experienced professionals guiding our organisation. Our management team is made up of industry leaders who bring together years of expertise, hands-on knowledge, and a shared commitment to excellence. Each member plays a vital role in shaping our vision, driving innovation, and ensuring that the highest standards of service are consistently delivered.</p>
                                </div>
                            </div>
                        </div>

                        <div class="row gy-4 mt-4">
                             @foreach ($list as $liststaff)
                            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                                <div class="team-member-item team-member-item-style-1">
                                    <a href="#" class="team-member-image-block">
                                        <img src=" {{ $liststaff->picture }}" alt="team-member-img-1"
                                            width="282" height="243" class="img-cover">
                                    </a>
                                    <div class="team-member-content-info">
                                        <span class="team-member-designation">{{ $liststaff->position }}</span>
                                        <a href="team-details.html" class="team-member-name">{{ $liststaff->surname. ' '.$liststaff->firstname }}  </a>
                                    </div>
                                    
                                </div>
                            </div>
                            @endforeach
                            
                          
                           
                        </div>
                    </div>
                </div>
                <div class="team-bg-img"></div>
            </div>
        </section>