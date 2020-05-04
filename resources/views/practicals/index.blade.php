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
                  <span class="badge badge-secondary small">CSO3A3</span> - Computer Sc 3A
                  <div class="panel-status pull-right">
                  </div>
              </div>
              <div class="card-body">
                <table class="table table-hover small">
                  <thead>
                    <tr>
                      <th scope="col">Practical Files</th>                     
                      <th scope="col">Due Date</th>
                      <th scope="col">Submission</th>
                      <th scope="col">Solution Files</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  @foreach ($practicals as $practical)
                    <tbody class="font-weight-normal">
                      <tr>
                        <th scope="row"><a href={{ asset("storage/assets/practicals/$practical->practical_filename") }} class="font-weight-normal text-reset" >{{$practical->practical_name}}</a></th>
                        <td>{{$practical->due_date}}</td>
                        <td><button class="btn btn-sm btn-info rounded-0">Submit</button></td>
                        
                          @if ($practical->solution_filename)
                            <th scope="row"><a href={{ asset("storage/assets/practicals/$practical->solution_filename") }} class="font-weight-normal text-reset">solution</a></th>
                          @else
                            <th scope="row"><a href="" class="font-weight-normal">No solution available yet</a></th>
                          @endif
                        <td>
                          
                          <form method="POST" action="/practicals/{{$practical->id}}" class="">
                           
                            <a href="/practicals/{{$practical->id}}/edit" class="fa fa-pencil-square-o fa-lg mr-2 text-warning" ></a>
                           
                            @csrf
                            @method('DELETE')
                            <button class="fa fa-trash fa-lg text-danger" onclick="return confirm('Do you want to remove this practical?')"></button>
                        </form>
                        </td>

                      </tr>
                    </tbody>
                  @endforeach
                  
                </table>
              </div>
          </div>
        </div>
    </div>
</div>
@endsection




