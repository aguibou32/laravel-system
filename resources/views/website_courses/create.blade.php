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
   
            <h3 class="mb-5 h4 font-weight-bold">Post a course on the website </h3>
                <form method="POST" action="{{route('courses.store')}}" enctype="multipart/form-data" class="p-5 bg-light">
                   
                    @csrf

                    <div class="form-group">
                        <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}" placeholder="Example: CAD Design Course">
                        
                        @error('title')
                            <span class="help text-danger" role="alert">
                                {{$errors->first('title')}}
                            </span>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" cols="30" rows="4" placeholder="Describe the course">{{old('description')}}</textarea>
                        
                        @error('description')
                            <span class="help text-danger" role="alert">
                                {{$errors->first('description')}}
                            </span>
                        @enderror
                    
                    </div>

                    <div class="form-group">
                        <label for="">Duration</label>
                        <input type="text" name="duration" id="duration" class="form-control @error('duration') is-invalid @enderror" value="{{old('duration')}}" placeholder="Example: 30 days or 3 months or 1 year" >
                    
                        @error('duration')
                            <span class="help text-danger" role="alert">
                                {{$errors->first('duration')}}
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Number of seats</label>
                        <input type="number" name="seats" id="seats" class="form-control @error('seats') is-invalid @enderror" value="{{old('seats')}}" placeholder="only digit">
                    
                        @error('seats')
                            <span class="help text-danger" role="alert">
                                {{$errors->first('seats')}}
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Lecturer</label>
                        <input type="text" name="lecturer" id="lecturer" class="form-control @error('lecturer') is-invalid @enderror" value="{{old('lecturer')}}" placeholder="Example: Prof Oumar Diallo">
                    
                        @error('lecturer')
                            <span class="help text-danger" role="alert">
                                {{$errors->first('lecturer')}}
                            </span>
                        @enderror
                    </div>

                     <div class="form-group">
                        <label for="">Choose picture</label>
                        <input type="file" name="course_image" id="course_image" class="form-control @error('course_image') is-invalid @enderror" value="{{old('course_image')}}">
                        
                        @error('course_image')
                            <span class="help text-danger" role="alert">
                                {{$errors->first('course_image')}}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary rounded-0">Submit</button>
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



