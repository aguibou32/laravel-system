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
                    <h1>Edit Practical</h1>
                </div>
                <div class="card-body">
                        <form method="POST" action="/practicals/{{$practical->id}}" enctype="multipart/form-data" class="p-5 bg-light">
                   
                        @csrf
                        @method('PUT')
    
                        <div class="form-group">
                            <label for="practical_name">Practical Name</label>
                            <input type="text" name="practical_name" id="practical_name" class="form-control" value="{{$practical->practical_name}}" placeholder="Example: P01">
                        </div>

                        <div class="form-group">
                            <label for="due_date">Due Date and Time</label>
                            <input type="datetime-local" name="due_date" id="due_date" class="form-control @error('due_date') is-invalid @enderror" value="{{$practical->due_date}}" placeholder="Example: Module Code">
                            <small><span class="text text-info">Leave the date field empty if you do no wish to change it</span></small>
                            @error('due_date')
                                <span class="help text-danger" role="alert">
                                    {{$errors->first('due_date')}}
                                </span>
                            @enderror
                      
                        </div>
                        
                        <div class="form-group">
                            <label for="">Practical File </label>
                            <input type="file" name="practical_filename" id="practical_filename" class="form-control @error('practical_filename') is-invalid @enderror" value="{{$practical->practical_filename}}">
                            <small><span class="text text-info">Leave the practical field empty if you do no wish to change it</span></small>
                            @error('practical_filename')
                                <span class="help text-danger" role="alert">
                                    {{$errors->first('practical_filename')}}
                                </span>
                            @enderror

                        </div>

                        <div class="form-group">
                            <label for="">Solution File</label>
                            <input type="file" name="solution_filename" id="solution_filename" class="form-control @error('solution_filename') is-invalid @enderror" value="{{$practical->solution_filename}}">
                            <small><span class="text text-info">Leave the solution field empty if you wish to remove the solution file</span></small>
                            @error('solution_filename')
                                <span class="help text-danger" role="alert">
                                    {{$errors->first('solution_filename')}}
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


