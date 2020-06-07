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
                    <h1>Upload Practical</h1>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('practicals.store')}}" enctype="multipart/form-data" class="p-5 bg-light">
                   
                        @csrf
    
                        <div class="form-group">
                            <label for="practical_name">Practical Name</label>
                            <input type="text" name="practical_name" id="practical_name" class="form-control @error('practical_name') is-invalid @enderror" value="{{old('practical_name')}}" placeholder="Example: P01">
                            
                            @error('practical_name')
                                <span class="help text-danger" role="alert">
                                    {{$errors->first('practical_name')}}
                                </span>
                            @enderror
    
                        </div>

                        <div class="form-group">
                            <label for="due_date">Due Date and Time</label>
                            <input type="datetime-local" name="due_date" id="due_date" class="form-control @error('due_date') is-invalid @enderror" value="{{old('due_date')}}" placeholder="Example: Module Code">
                            @error('due_date')
                                <span class="help text-danger" role="alert">
                                    {{$errors->first('due_date')}}
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="">Practical File </label>
                            <input type="file" name="practical_filename" id="practical_filename" class="form-control @error('practical_filename') is-invalid @enderror" value="{{old('practical_filename')}}">
                            
                            @error('practical_filename')
                                <span class="help text-danger" role="alert">
                                    {{$errors->first('practical_filename')}}
                                </span>
                            @enderror
                        </div>

                        {{-- <div class="form-group">
                            <label for="">Solution File</label>
                            <input type="file" name="solution_filename" id="solution_filename" class="form-control @error('solution_filename') is-invalid @enderror" value="{{old('solution_filename')}}">
                            
                            @error('solution_filename')
                                <span class="help text-danger" role="alert">
                                    {{$errors->first('solution_filename')}}
                                </span>
                            @enderror
                        </div> --}}
                        
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


