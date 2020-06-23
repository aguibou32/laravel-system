@extends('layouts.app2')

@section('content')
    @include('inc.upper_nav')
    @include('inc.upper_nav2')
    @include('inc.small_slider')

    <section class="ftco-section">
        @include('inc.messages')
        
        <div class="container">
            <div class="row">
              
      <div class="col-lg-8 ftco-animate fadeInUp ftco-animated">
        <h2 class="mb-3">{{$course->title}}</h2>
            <p> {!! $course->description !!}</p>
            <p>
              <img src="{{URL::asset('/storage/assets/images/' . $course->course_image)}}" alt="" class="img-fluid">
            </p>
            {{-- <p>posted on: <span><i class="icon mr-2">{{$course->created_at}} --}}
           
            <form method="POST" action="/courses/{{$course->id}}" class="">
                {{-- <a href="/courses/{{$course->id}}/edit" class="tag-cloud-link btn btn-xsmall btn-warning rounded-0">Edit this Course</a> --}}
                
                {{-- Those following are needed for the deleting to --}}
                @csrf
                @method('DELETE')
                {{-- <button class="tag-cloud-link btn btn-xsmall btn-danger rounded-0" onclick="return confirm('Do you want to remove this course?')">Delete this Course</button> --}}
            </form>
            </i></span></p>
            

            
            <p><a href="{{route('application.create')}}" class="btn btn-primary">Apply Now</a></p>
      </div> <!-- .col-md-8 -->

      <div class="col-lg-4 sidebar ftco-animate fadeInUp ftco-animated">
        <div class="sidebar-box">
          <form action="#" class="search-form">
            <div class="form-group">
              <span class="icon icon-search"></span>
              <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
            </div>
          </form>
        </div>
        
      </div><!-- END COL -->
    </div>
        </div>
    </section>



    @include('inc.footer')

@endsection 

<script>
  $(".delete").on("submit", function(){
      return confirm("Do you want to delete this item?");
  });
</script>