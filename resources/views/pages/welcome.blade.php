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
            <p><a href="{{route('pages.about')}}" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p>
          </div>
        </div>
        </div>
      </div>
    </section>


   <div class="container-fluid mt-4">
      <p> O.R Academy is a flexible and accessible learning centre which specializes in the provision of tutoring to students from Mechanical Engineering Design, Matric Re-writes, Adult matric and I.T courses in South Africa through contact sessions at our Johannesburg campus and online tuition. We have flexible and excellent Lecturers prepared to offer you the best quality tuition to pass with ease whilst studying in the convenience of your time.
         We have been helping people reach their education dreams for years now. Founded with passion for education, we always strive to make our students’ study experience as inspiring and as enriching as possible. 
         </p>
   </div>



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
                           <h3>Autodesk Inventor CAD</h3>
                           <p>Autodesk Inventor offers an easy to use set of tools for 3D mechanical design, documentation, and product simulation. Inventor helps you design and validate your products before they are built to deliver better products faster and save you money. </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="services-2 d-flex">
                        <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-diploma"></span></div>
                        <div class="text pl-3">
                           <h3>Matric Re-writes</h3>
                           <p>Matric Re-write is for matriculates who still have valid School based assessment (SBA) and looking to improve their marks.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="services-2 d-flex">
                        <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-education"></span></div>
                        <div class="text pl-3">
                           <h3>Adult Matric</h3>
                           <p>Enables adults who did not complete their high school education, or failed their matric examination, to obtain their school leaving certificate and further their education or secure employment. </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="services-2 d-flex">
                        <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-jigsaw"></span></div>
                        <div class="text pl-3">
                           <h3>Computer literacy Classes</h3>
                           <p>Computers systems are now part of everyday routines! Tutorial Campus offers various computer courses that are essential skill for life.</p>
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