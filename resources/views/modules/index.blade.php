@extends('layouts.app2')


@section('content')

{{-- d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm --}}

@include('inc.backend_navbar')

<div class="container">
    <div class="row justify-content-center">
        @include('inc.backend_menu')
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h1>List of modules</h1>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-10 wrap-about py-5 pr-md-4 ftco-animate">@include('inc.messages')</div>
                  </div>
                  <div class="row">                   
                  @foreach ($modules as $module)        
                    <div class="col-lg-6 col-md-8 pb-5">
                      <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="{{URL::asset('/storage/assets/images/' . $module->module_image)}}" alt=""></a>
                        <div class="card-body">
                          <h4 class="card-title">
                            <a href="#">{{$module->module_name}}</a>
                          </h4>
                            <h5>{{$module->module_duration}}</h5>
                            <p class="card-text">{{$module->module_description}}</p>
                          <p>Lecturer: Prof Diallo</p>
                          <p>{{count($module->students)}} students registered for this module</p>
                        <small><span>module created on: {{$module->created_at}}</span></small>
                        </div>
                        <div class="card-footer">                            
                          <a href="module/{{$module->id}}"><button class="btn btn-sm btn-info">view module</button></a>
                          <button class="tag-cloud-link btn btn-xsmall btn-info btn-sm" data-toggle="modal" data-target="#addStudentModal">Add students to this Module</button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="addStudentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                  <form action="" method="post">
                                      
                                      <select name="selectStudent" id="selectStudent">
                                          
                                          @if (count($students)>0)
                                            @foreach ($students as $student)
                                                <option value="">{{ $student->student_number }}</option>
                                            @endforeach
                                          @else
                                              <option value="">No data</option>
                                          @endif
                                      </select>
                                  </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-info">Add student </button>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                    <br>
                                        
                 @endforeach
                
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


