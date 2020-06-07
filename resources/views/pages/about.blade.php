@extends('layouts.app2')

@section('content')
    @include('inc.upper_nav')
    @include('inc.upper_nav2')
    @include('inc.small_slider')
    
    <section class="ftco-section ftco-no-pt ftc-no-pb">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
                    <div class="img" style="background-image: url(assets/images/about.jpg); border"></div>
                </div>
                <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
                    <h2 class="mb-4">OR Academy was established  in response to the growing demand of online learning.</h2>
                    <p>Learners access quality and affordable tuition to enable them to successfully complete their  matric certificate and other qualifications accordingly.</p>
                    <p>Since most of these learners are full time working employees, hence the need to offer flexible Part-time tuition (Weekends and Evenings) for their convenience. </p>
                    <p>
                        <h2>Vision and Mission</h2>
                        To became customer oriented tertiary education service provider, with dynamic and innovative tuition and research services that satisfy the academic at an affordable rate.
                        Offering flexible and excellent services that are responsive to the evolving education and training needs of dynamic economies through commitment to people, opportunity and quality.
                        Values
                        We are committed to provide professional and excellent service to our clientele as our business processes, operations and principles are based on:
                        <ul>
                            <li>Discipline, Accountability & Transparency</li>
                            <li> Fairness, Respect & Courtesy</li>
                        </ul>
                    </p>
                    <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their</p>
                </div>
            </div>
        </div>
    </section>
    
    {{-- <section class="ftco-section bg-light">
        <div class="container-fluid px-4">
            <h1>Our Teachers </h1>
            <div class="row">
                <div class="col-md-6 col-lg-3 ftco-animate fadeInUp ftco-animated">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url(assets/images/teacher-1.jpg);"></div>
                        </div>
                        <div class="text pt-3 text-center">
                            <h3>Bianca Wilson</h3>
                            <span class="position mb-2">Teacher</span>
                            <div class="faded">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class="ftco-social text-center">
                    <li class="ftco-animate fadeInUp ftco-animated"><a href="#"><span class="icon-twitter"></span></a></li>
                    <li class="ftco-animate fadeInUp ftco-animated"><a href="#"><span class="icon-facebook"></span></a></li>
                    <li class="ftco-animate fadeInUp ftco-animated"><a href="#"><span class="icon-google-plus"></span></a></li>
                    <li class="ftco-animate fadeInUp ftco-animated"><a href="#"><span class="icon-instagram"></span></a></li>
                  </ul>
              </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate fadeInUp ftco-animated">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url(assets/images/teacher-2.jpg);"></div>
                        </div>
                        <div class="text pt-3 text-center">
                            <h3>Mitch Parker</h3>
                            <span class="position mb-2">English Teacher</span>
                            <div class="faded">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class="ftco-social text-center">
                    <li class="ftco-animate fadeInUp ftco-animated"><a href="#"><span class="icon-twitter"></span></a></li>
                    <li class="ftco-animate fadeInUp ftco-animated"><a href="#"><span class="icon-facebook"></span></a></li>
                    <li class="ftco-animate fadeInUp ftco-animated"><a href="#"><span class="icon-google-plus"></span></a></li>
                    <li class="ftco-animate fadeInUp ftco-animated"><a href="#"><span class="icon-instagram"></span></a></li>
                  </ul>
              </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate fadeInUp ftco-animated">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url(assets/images/teacher-3.jpg);"></div>
                        </div>
                        <div class="text pt-3 text-center">
                            <h3>Stella Smith</h3>
                            <span class="position mb-2">Art Teacher</span>
                            <div class="faded">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class="ftco-social text-center">
                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                  </ul>
              </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate fadeInUp ftco-animated">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url(assets/images/teacher-4.jpg);"></div>
                        </div>
                        <div class="text pt-3 text-center">
                            <h3>Monshe Henderson</h3>
                            <span class="position mb-2">Science Teacher</span>
                            <div class="faded">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class="ftco-social text-center">
                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                  </ul>
              </div>
                        </div>
                    </div>
                </div>

                
                        </div>
                    </div>
                </div>
                
                        </div>
                    </div>
                </div>
                
                        </div>
                    </div>
                </div>
               
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

@include('inc.footer')

@endsection



