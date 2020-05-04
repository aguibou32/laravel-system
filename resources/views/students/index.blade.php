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
                  List of students
                  <div class="panel-status pull-right">
                  </div>
              </div>
              <div class="card-body">
                <table class="table table-hover small">
                  <thead>
                    <tr>
                      <th scope="col">Student Number</th>                     
                      <th scope="col">Ranking Code</th>
                      
                      <th>Action</th>
                    </tr>
                  </thead>

                  @foreach ($students as $student)
                    <tbody>
                      <tr>
                        <th scope="row"><a href="">{{$student->student_number}}</a></th>
                        <td>{{$student->ranking_number}}</td>
                        
                        <td>

                          <form method="POST" action="" class="">
                           
                            <a href="" class="fa fa-pencil-square-o fa-lg mr-2 text-warning" ></a>
                           
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




