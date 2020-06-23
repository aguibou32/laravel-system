@extends('layouts.app2')

@section('content')
    @include('inc.upper_nav')
    @include('inc.upper_nav2')
    @include('inc.small_slider')
    
    
    <section class="ftco-section">
        
        <div class="container-fluid px-4">
            <div class="row">
                
                <div class="col-md-1">
                </div>

                    <div class="col-md-10 wrap-about py-5 pr-md-4 ftco-animate">@include('inc.messages')</div>

                    <div class="col-md-10 wrap-about py-5 pr-md-4 ftco-animate">
                        <h2 class="mb-4">Our Courses </h2>
                        <p> Computers systems are now part of everyday routines! OR Academy offers FREE basic computer courses that are essential skill for life to all matric leaners.
                            Mechanical Engineering Design (Autodesk Inventor)
                            Mechanical engineering students who have Autodesk Inventor  skills are employed in manufacturing industries including automobiles, aeronautical, service engineering, heavy industries and locomotives. 
                            Learning Autodesk Inventor is important because almost all of these jobs (and more) are performed with a sophisticated CAD software that guarantees speed, accuracy, and reuse of work. With CAD skills, mechanical engineers can find employment and increase productivity.</p>
                            

                            
                            <div class="row">
                                @if (count($courses)>0)
                                    @foreach ($courses as $course)
                                        
                                            <div class="col-md-6 course ftco-animate">
                                                <div class="img" style="background-image: url(/storage/assets/images/{{$course->course_image}});"></div>
                                                <div class="text pt-4">
                                                    <p class="meta d-flex">
                                                        {{-- <span><i class="icon-user mr-2"></i>{{$course->lecturer}}</span>
                                                        <span class="text text-danger"><i class="icon-table mr-2"></i>{{$course->seats}} seats left</span>
                                                        <span><i class="icon-calendar mr-2"></i>{{$course->duration}}</span> --}}
                                                    </p>
                                                    <h3><a href="/courses/{{$course->id}}">{{$course->title}}</a></h3>
                                                    <p>{!!  $course->description !!}</p>
                                                    {{-- <p> posted on: <span><i class="icon mr-2">{{$course->created_at}}</i></i></span></p> --}}
                                                    <p><a href="/courses/{{$course->id}}" class="btn btn-primary">Read More</a></p>
                                                </div>
                                            </div>
                                    @endforeach
                                @else
                                    {{-- <p class="alert alert-info">No courses to dispay here yet comebak soon !!!</p> --}}
                                @endif
                            </div>
                    </div>
               


                <div class="col-md-1">
                </div>


            </div>
           
        </div>
    </section>

@include('inc.footer')

@endsection



