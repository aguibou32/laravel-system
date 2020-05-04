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
                  List Of Users
                  <div class="panel-status pull-right">
                  </div>
              </div>
              <div class="card-body">
                <a class="btn btn-info fa fa-plus" disabled="disabled" style="width: 40px;
                    height: 40px;
                    padding: 6px 0px;
                    margin-bottom: 10px;
                    border-radius: 25px;
                    text-align: center;
                    font-size: 22px;
                    color:aliceblue;
                    line-height: 1.42857; " href="{{route('users.create')}}"></a>
                <table class="table table-hover small">
                  <thead>
                    <tr>
                      <th scope="col">Name</th>                     
                      <th scope="col">Surname</th>
                      <th scope="col">Email</th>
                      <th scope="col">User Type</th>
                      <th scope="col">Created at</th>
                      
                      <th>Action</th>
                    </tr>
                  </thead>

                  @if (count($users)>0)
                    @foreach ($users as $user)
                    <tbody>
                        <tr>
                        <th scope="row"><a href="">{{$user->name}}</a></th>
                        <td>{{$user->surname}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->profile_type}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>
                            <form method="POST" action="" class="">
                            <a href="" class="fa fa-eye fa-lg mr-2 text-info" ></a>
                            <a href="" class="fa fa-pencil-square-o fa-lg mr-2 text-warning" ></a>
                            
                            @csrf
                            @method('DELETE')
                            <button class="fa fa-trash fa-lg text-danger" onclick="return confirm('Do you want to remove this practical?')"></button>
                        </form>
                        </td>

                        </tr>
                    </tbody>
                    @endforeach
                  @else
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        No user to display yet. Click on the plus icon to add user.
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




