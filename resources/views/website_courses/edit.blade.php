@extends('layouts.app2')
@section('content')
    @include('inc.upper_nav')
    @include('inc.upper_nav2')
   
    <section class="ftco-section">
        <hr>
        <div class="container">
            <div class="row">
      <div class="col-lg-8 ftco-animate">
         <div class="pt-5 mt-5">
          
          <div class="comment-form-wrap pt-5">
            
            <h3 class="mb-5 h4 font-weight-bold">Update Course </h3>
          <form method="POST" action="/courses/{{$course->id}}" enctype="multipart/form-data" class="p-5 bg-light">
                   
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{$course->title}}">
                </div>

                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="description" id="description" class="form-control" cols="30" rows="4">{{$course->description}}</textarea>
                </div>

                <div class="form-group">
                    <label for="">Duration</label>
                    <input type="text" name="duration" id="duration" class="form-control" value="{{$course->duration}}">
                </div>

                <div class="form-group">
                    <label for="">Number of seats</label>
                    <input type="number" name="seats" id="seats" class="form-control" value="{{$course->seats}}">
                </div>

                <div class="form-group">
                    <label for="">Lecturer</label>
                    <input type="text" name="lecturer" id="lecturer" class="form-control" value="{{$course->lecturer}}">
                </div>

                 <div class="form-group">
                    <label for="">Choose picture</label>
                    <input type="file" name="course_image" id="course_image" class="form-control @error('course_image') is-invalid @enderror" value="{{$course->course_image}}">
                    <p class="text text-info">Do not choose file if you want to keep the previous image</p>
                    @error('course_image')
                        <span class="help text-danger" role="alert">
                            {{$errors->first('course_image')}}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <a href="/courses/{{$course->id}}" class="btn btn-info rounded-0">Discard Changes</a>
                    <button class="btn btn-primary rounded-0">Save Changes</button>
                </div>
            </form>
            
          </div>
        </div>
      </div> <!-- .col-md-8 -->

      
      </div><!-- END COL -->
    </div>
        </div>
    </section>
    
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
    CKEDITOR.replace( 'description' );
    </script>
    
@endsection



