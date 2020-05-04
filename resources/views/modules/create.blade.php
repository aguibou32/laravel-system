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
                    <h1>Create module</h1>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('module.store')}}" enctype="multipart/form-data" class="p-5 bg-light">
                   
                        @csrf
    
                        <div class="form-group">
                            <label for="module_name">Module Name</label>
                            <input type="text" name="module_name" id="module_name" class="form-control @error('module_name') is-invalid @enderror" value="{{old('module_name')}}" placeholder="Example: Module Name">
                            
                            @error('module_name')
                                <span class="help text-danger" role="alert">
                                    {{$errors->first('module_name')}}
                                </span>
                            @enderror
    
                        </div>

                        <div class="form-group">
                            <label for="module_code">Module Code</label>
                        <input type="text" name="module_code" id="module_code" class="form-control @error('module_code') is-invalid @enderror" value="{{old('module_code')}}" placeholder="Example: Module Code">
                            
                            @error('module_code')
                                <span class="help text-danger" role="alert">
                                    {{$errors->first('module_code')}}
                                </span>
                            @enderror
    
                        </div>
                        
                        <div class="form-group">
                            <label for="module_duration">Duration</label>
                            <input type="text" name="module_duration" id="module_duration" class="form-control @error('module_duration') is-invalid @enderror" value="{{old('module_duration')}}" placeholder="Example: 30 days or 3 months or 1 year" >
                        
                            @error('module_duration')
                                <span class="help text-danger" role="alert">
                                    {{$errors->first('module_duration')}}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="module_description">Description</label>
                            <textarea name="module_description" id="module_description" class="form-control @error('module_description') is-invalid @enderror" cols="30" rows="4" placeholder="Describe the course">{{old('module_description')}}</textarea>
                            
                            @error('module_description')
                                <span class="help text-danger" role="alert">
                                    {{$errors->first('module_description')}}
                                </span>
                            @enderror
                        
                        </div>
    
                         <div class="form-group">
                            <label for="module_image">Choose picture</label>
                            <input type="file" name="module_image" id="module_image" class="form-control @error('module_image') is-invalid @enderror" value="{{old('module_image')}}">
                            
                            @error('module_image')
                                <span class="help text-danger" role="alert">
                                    {{$errors->first('module_image')}}
                                </span>
                            @enderror
                        </div>
    
                        <div class="form-group">
                            <button class="btn btn-primary rounded-0">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


