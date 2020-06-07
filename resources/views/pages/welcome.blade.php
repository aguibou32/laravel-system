@extends('layouts.app2')

@section('content')
   @include('inc.upper_nav')
   @include('inc.upper_nav2')

   <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(assets/images/bg_1.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">Education Needs Complete Solution</h1>
            <p>A specialized training center flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(assets/images/bg_2.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">Matric Rewrite, 3D mechanical Design, FREE basic computer courses</h1>
            <p>OR Acamedy grants you access to its facilities to ensure a high quality of your learning. </p>
            <p><a href="{{route('pages.about')}}" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p>
          </div>
        </div>
        </div>
      </div>
    </section>


    <section class="ftco-services ftco-no-pb">
      <div class="container-wrap">
         <div class="row no-gutters">
       <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
         <div class="media block-6 d-block text-center">
           <div class="icon d-flex justify-content-center align-items-center">
               <span class="flaticon-teacher"></span>
           </div>
           <div class="media-body p-2 mt-3">
             <h3 class="heading">Certified Teachers</h3>
             <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
           </div>
         </div>      
       </div>
       <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
         <div class="media block-6 d-block text-center">
           <div class="icon d-flex justify-content-center align-items-center">
               <span class="flaticon-reading"></span>
           </div>
           <div class="media-body p-2 mt-3">
             <h3 class="heading">Special Education</h3>
             <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
           </div>
         </div>    
       </div>
       <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
         <div class="media block-6 d-block text-center">
           <div class="icon d-flex justify-content-center align-items-center">
               <span class="flaticon-books"></span>
           </div>
           <div class="media-body p-2 mt-3">
             <h3 class="heading">Book &amp; Library</h3>
             <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
           </div>
         </div>      
       </div>
       <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
         <div class="media block-6 d-block text-center">
           <div class="icon d-flex justify-content-center align-items-center">
               <span class="flaticon-diploma"></span>
           </div>
           <div class="media-body p-2 mt-3">
             <h3 class="heading">Sport Clubs</h3>
             <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
           </div>
         </div>      
       </div>
     </div>
      </div>
   </section>



   <section class="ftco-section ftco-no-pt ftc-no-pb">
      <div class="container">
         <div class="row d-flex">
            <div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
               <div class="img" style="background-image: url(assets/images/man-writing-on-white-notebook-on-office-1251863.jpg); border"></div>
            </div>
            <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
          <h2 class="mb-4">What We Offer</h2>
               <p>From Matric re-write and Matric upgrade to Engineering design and IT studies, We provide online, group and private tutorial classes for all challenging subject. Our study programs focus on assisting students with the best learning methods and all their Exam Revision classes, which guarantee them passing with distinction.</p>
               <div class="row mt-5">
                  <div class="col-lg-6">
                     <div class="services-2 d-flex">
                        <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-reading"></span></div>
                        <div class="text pl-3">
                           <h3>Regular Classes</h3>
                           <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="services-2 d-flex">
                        <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-diploma"></span></div>
                        <div class="text pl-3">
                           <h3>Certified Teachers</h3>
                           <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="services-2 d-flex">
                        <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-education"></span></div>
                        <div class="text pl-3">
                           <h3>Sufficient Classrooms</h3>
                           <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="services-2 d-flex">
                        <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-jigsaw"></span></div>
                        <div class="text pl-3">
                           <h3>Creative Lessons</h3>
                           <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="services-2 d-flex">
                        <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-kids"></span></div>
                        <div class="text pl-3">
                           <h3>Sports Facilities</h3>
                           <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   @include('inc.footer')

@endsection