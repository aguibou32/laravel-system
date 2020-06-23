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
                  List Of applications
                  <div class="panel-status pull-right">
                  </div>
              </div>
              <div class="card-body">
               
                <table class="table table-hover small">
                  <thead>
                    <tr>
                      <th scope="col">Name</th>                     
                      <th scope="col">Phone Number</th>
                      <th scope="col">Email</th>
                      
                      <th>Action</th>
                    </tr>
                  </thead>

                  @if (count($applications)>0)
                    @foreach ($applications as $application)
                    <tbody>
                        <tr>
                        
                        <td>{{$application->name}}</td>
                        <td>{{$application->phone_number}}</td>
                        <td>{{$application->email_address}}</td>
                        
                        <td>
                          <form method="POST" action="{{ route('application.destroy', $application->id) }}" class="">
                            <a href="{{ route('application.show', [$application->id]) }}" class="fa fa-eye fa-lg mr-2 text-info" ></a>
                                                       
                            @csrf
                            @method('DELETE')
                            <button class="fa fa-trash fa-lg text-danger" onclick="return confirm('Do you want to remove this application ?')"></button>
                        </form>
                        </td>

                        </tr>
                    </tbody>
                    @endforeach
                  @else
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        No applications yet.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                  @endif
                  
                </table>
              </div>
          </div>
        </div>
    </div>
</div>
@endsection




