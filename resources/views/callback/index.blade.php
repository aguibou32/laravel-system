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
                  List Of callback requests
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

                  @if (count($callbacks)>0)
                    @foreach ($callbacks as $callback)
                    <tbody>
                        <tr>
                        
                        <td>{{$callback->name}}</td>
                        <td>{{$callback->phone_no}}</td>
                        <td>{{$callback->email}}</td>
                        
                        <td>
                          <form method="POST" action="{{ route('callback.destroy', $callback->id) }}" class="">
                                                       
                            @csrf
                            @method('DELETE')
                            
                            <button class="fa fa-trash fa-lg text-danger" onclick="return confirm('Do you want to remove this request for callback ?')"></button>
                        
                          </form>
                        </td>

                        </tr>
                    </tbody>
                    @endforeach
                  @else
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        No callback requests to display yet
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




