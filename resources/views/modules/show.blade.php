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
                    <h1>Module Information</h1>
                </div>
                <div class="card-body">
                    <div class="row">                  
                          <div class="col-lg-12 col-md-12 mb-12">
                            <div class="card h-100">
                              <a href="#"><img class="card-img-top" src="https://www.newsbtc.com/wp-content/uploads/2018/07/computer-768608_1920-700x400.jpg" alt=""></a>
                              <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">{{$module->module_name}}</a>
                                </h4>
                                <h5>{{$module->module_duration}}</h5>
                                    <p class="card-text">{{$module->module_description}}</p>
                                <p>Lecturer: Prof Diallo</p>
                              </div>
                              <div class="card-footer">
                                  <form method="POST" action="/module/{{$module->id}}" class="">
                                        <a href="{{$module->id}}/edit" class="tag-cloud-link btn btn-xsmall btn-warning rounded-0">Edit this Course</a>
                                        
                                        {{-- Those following are needed for the deleting to --}}
                                        @csrf
                                        @method('DELETE')
                                        <button class="tag-cloud-link btn btn-xsmall btn-danger rounded-0" onclick="return confirm('Do you want to remove this course?')">Delete this Course</button>
                                    </form>
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

