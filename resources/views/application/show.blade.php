@extends('layouts.app2')


@section('content')

{{-- d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm --}}

@include('inc.backend_navbar')

<div class="container">
  
    <style>
        input[type=text]{
          color: red;
        }
    </style>
    <div class="row justify-content-center">
        @include('inc.backend_menu')
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h3>{{ $application->name }} {{ $application->surname  }} information</h3>
                </div>
                <div class="card-body">
                    <div class="row">                  
                          <div class="col-lg-12 col-md-12 mb-12">
                            <div class="card h-100">
                              <div class="card-body">
                                  <form action="" class="">

                                    <hr>
                                    <h3 class="text text-info">Student's educational background  </h3>
                                      <div class="form-group">
                                        <input type="text" class="form-control bg-dark" style="background: red" value="title: {{ $application->title }}" readonly>
                                      </div>
                                      <div class="form-group">
                                        <input type="text" class="form-control bg-info" value="names: {{ $application->name }}">
                                      </div>
                                      <div class="form-group">
                                        <input type="text" class="form-control bg-info" value="surname: {{ $application->surname }}" readonly>
                                      </div>
                                      <div class="form-group">
                                        <input type="text" class="form-control bg-info" value="gender: {{ $application->gender }}" readonly>
                                      </div>
                                      <div class="form-group">
                                        <input type="text" class="form-control bg-info" value="date of birth: {{ $application->date_of_birth }}" readonly>
                                      </div>
                                      <div class="form-group">
                                        <input type="text" class="form-control bg-info" value="phone : {{ $application->phone_number }}" readonly>
                                      </div>
                                      <div class="form-group">
                                        <input type="text" class="form-control bg-info" value="email: {{ $application->email_address }}" readonly>
                                      </div>
                                      <div class="form-group">
                                        <input type="text" class="form-control bg-info" value="name on certificate: {{ $application->name_on_certificate }}" readonly>
                                      </div>
                                      <div class="form-group">
                                        <input type="text" class="form-control bg-info" value="Identity number: {{ $application->id_or_passport_number }}" readonly>
                                      </div>
                                      <div class="form-group">
                                        <input type="text" class="form-control bg-info" value="Course applied for : {{ $application->course_apply }}" readonly>
                                      </div>
                                      <hr>
                                      <h3 class="text text-info">Student's educational background  </h3>
                                      <div class="form-group">
                                        <input type="text" class="form-control bg-info" value="Institution name: {{ $application->institution_name }}" readonly>
                                      </div>
                                      <div class="form-group">
                                        <input type="text" class="form-control bg-info" value="Year of study: {{ $application->year_of_study }}" readonly>
                                      </div>
                                      <div class="form-group">
                                        <input type="text" class="form-control bg-info" value="Highest Educational Qualification Name: {{ $application->highest_educational_qualification_name }}" readonly>
                                      </div>

                                      <hr>
                                      <h3 class="text text-info">Student's submitted documents </h3>
                                      <div class="form-group">
                                        <h4>Identification</h4>
                                        <iframe src="{{URL::asset('/storage/assets/application/' . $application->id_or_passport_document)}}" width="100%" height="500px">
                                        </iframe>
                                      </div>

                                      <div class="form-group">
                                        <h4>Certificate</h4>
                                        <iframe src="{{URL::asset('/storage/assets/application/' . $application->certificate)}}" frameborder="0" width="100%" height="500px"></iframe>
                                      </div>
                                  </form>
                              </div>
                              <div class="card-footer">
                                  
                              </div>
                            </div>
                          </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
<br>

