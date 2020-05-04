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
                    <h1>Add User</h1>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('users.store')}}" enctype="multipart/form-data" class="p-5 bg-light">
                   
                        @csrf
    
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" placeholder="Example: Mohamad">
                            
                            @error('name')
                                <span class="help text-danger" role="alert">
                                    {{$errors->first('name')}}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="surname">Surname</label>
                            <input type="text" name="surname" id="surname" class="form-control @error('surname') is-invalid @enderror" value="{{old('surname')}}" placeholder="Example: Gatoo">
                            
                            @error('surname')
                                <span class="help text-danger" role="alert">
                                    {{$errors->first('surname')}}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" placeholder="Example: gatoo12@gmail.com">
                            
                            @error('email')
                                <span class="help text-danger" role="alert">
                                    {{$errors->first('email')}}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" value="{{old('username')}}" placeholder="Example: 218029445">
                            
                            @error('username')
                                <span class="help text-danger" role="alert">
                                    {{$errors->first('username')}}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="profile_type">Profile Type</label>
                            <select name="profile_type" id="profile_type" class="form-control" data-dependant="state">
                                <option value="App\Student">Student</option>
                                <option value="App\Lecturer">Lecturer</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="student_number">Student Number</label>
                            <input type="text" name="student_number" id="student_number" class="form-control @error('student_number') is-invalid @enderror" value="{{old('student_number')}}" placeholder="Example: 218029445">
                            
                            @error('student_number')
                                <span class="help text-danger" role="alert">
                                    {{$errors->first('student_number')}}
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


