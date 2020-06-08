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
            <h1 class="mb-5 h4 font-weight-bold">Apply to OR Academy Training Center </h1>
                <form method="POST" action="{{route('application.store')}}" enctype="multipart/form-data" class="p-5 bg-light">
                   
                    @csrf

                    <h3 class="text text-info">Student Details </h3>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}" placeholder="Example: Mr / Miss / Mrs">
                        
                        @error('title')
                            <span class="help text-danger" role="alert">
                                {{$errors->first('title')}}
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="name">First Names</label>
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" placeholder="Example: John">
                        
                        @error('name')
                            <span class="help text-danger" role="alert">
                                {{$errors->first('name')}}
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="surname">Surname</label>
                        <input type="text" name="surname" id="surname" class="form-control @error('name') is-invalid @enderror" value="{{old('surname')}}" placeholder="Example: Doe">
                        
                        @error('surname')
                            <span class="help text-danger" role="alert">
                                {{$errors->first('surname')}}
                            </span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="gender">Select Gender</label>
                        <select name="gender" id="gender" class="form-control">
                            <option value="male">male</option>
                            <option value="female">female</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="date_of_birth">Date of birth</label>
                        <input type="date" name="date_of_birth" id="date_of_birth" class="form-control @error('date_of_birth') is-invalid @enderror" value="{{old('date_of_birth')}}">
                        
                        @error('date_of_birth')
                            <span class="help text-danger" role="alert">
                                {{$errors->first('date_of_birth')}}
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="phone_number">Phone Number</label>
                        <input type="tel" name="phone_number" id="phone_number" class="form-control @error('phone_number') is-invalid @enderror" value="{{old('phone_number')}}" placeholder="061 999 4321">
                        
                        @error('phone_number')
                            <span class="help text-danger" role="alert">
                                {{$errors->first('phone_number')}}
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email_address">Email address </label>
                        <input type="email" name="email_address" id="email_address" class="form-control @error('email_address') is-invalid @enderror" value="{{old('email_address')}}" placeholder="john123@gmail.com">
                        
                        @error('email_address')
                            <span class="help text-danger" role="alert">
                                {{$errors->first('email_address')}}
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="name_on_certificate">Name to apprear on certificate </label>
                        <input type="text" name="name_on_certificate" id="name_on_certificate" class="form-control @error('name_on_certificate') is-invalid @enderror" value="{{old('name_on_certificate')}}" placeholder="John">
                        
                        @error('name_on_certificate')
                            <span class="help text-danger" role="alert">
                                {{$errors->first('name_on_certificate')}}
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="id_or_passport_number">ID Or Passport number </label>
                        <input type="text" name="id_or_passport_number" id="id_or_passport_number" class="form-control @error('id_or_passport_number') is-invalid @enderror" value="{{old('id_or_passport_number')}}" placeholder="Example: O00124388">
                        
                        @error('id_or_passport_number')
                            <span class="help text-danger" role="alert">
                                {{$errors->first('id_or_passport_number')}}
                            </span>
                        @enderror
                    </div>

                    <br><br>
                    <hr>
                    <h3 class="text text-info">Student's educational background  </h3>

                    <div class="form-group">
                        <label for="institution_name">Institution name </label>
                        <input type="text" name="institution_name" id="institution_name" class="form-control @error('institution_name') is-invalid @enderror" value="{{old('institution_name')}}" placeholder="Example: Rand Tutorial College">
                        
                        @error('institution_name')
                            <span class="help text-danger" role="alert">
                                {{$errors->first('institution_name')}}
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="year_of_study">Year of study </label>
                        <input type="text" name="year_of_study" id="year_of_study" class="form-control @error('year_of_study') is-invalid @enderror" value="{{old('year_of_study')}}" placeholder="Example: 2010">
                        
                        @error('year_of_study')
                            <span class="help text-danger" role="alert">
                                {{$errors->first('year_of_study')}}
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="highest_educational_qualification_name">Highest Educational Qualification Name </label>
                        <input type="text" name="highest_educational_qualification_name" id="highest_educational_qualification_name" class="form-control @error('highest_educational_qualification_name') is-invalid @enderror" value="{{old('highest_educational_qualification_name')}}" placeholder="Grade 11">
                        
                        @error('highest_educational_qualification_name')
                            <span class="help text-danger" role="alert">
                                {{$errors->first('highest_educational_qualification_name')}}
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Latest certificate</label>
                        <input type="file" name="certificate" id="certificate" class="form-control @error('certificate') is-invalid @enderror" value="{{old('certificate')}}">
                        
                        @error('certificate')
                            <span class="help text-danger" role="alert">
                                {{$errors->first('certificate')}}
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Identification document </label>
                        <input type="file" name="id_or_passport_document" id="id_or_passport_document" class="form-control @error('id_or_passport_document') is-invalid @enderror" value="{{old('id_or_passport_document')}}">
                        
                        @error('id_or_passport_document')
                            <span class="help text-danger" role="alert">
                                {{$errors->first('id_or_passport_document')}}
                            </span>
                        @enderror
                    </div>


                    <br><br>
                    <hr>
                    <h3 class="text text-info">Declaration  </h3>

                    <div class="input-group mb-3">
                        <div class="alert alert-danger">
                            <ol>
                                <li>I declare that the information I have provided is complete and correct. </li>
                                <li>I aggree to pay all tuition fees in full and on time, 1st of each month for the duration of the course.</li>
                            </ol>
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <label for="declaration">I Understand and agree</label> <br>
                                    <input type="checkbox" name="declaration" id="declaration" value="I Understand and agree" aria-label="Checkbox for following text input" required>
                                </div>
                            </div>
                            </div>
                        </div>

                        {{-- <input type="text" class="form-control" aria-label="Text input with checkbox" required> --}}
                        <div class="form-group">
                            <button class="btn btn-primary rounded-0">Send Application</button>
                        </div>
                    </div>
                </form>
          </div>
        </div>
      </div> <!-- .col-md-8 --> 
      </div><!-- END COL -->
    </div>
        </div>
    </section>
    
@endsection



