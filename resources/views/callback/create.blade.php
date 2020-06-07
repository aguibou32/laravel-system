@extends('layouts.app2')
@section('content')
    @include('inc.upper_nav')

    <div class="container">
        <form class="form-signin" method="POST" action="{{route('callback.store')}}">
            @csrf
            <div class="text-center mb-4">
             
              <h1 class="h3 mb-3 font-weight-normal">Fill in your details and we will call you right away.</h1>
              
            </div>
          
            <div class="form-label-group">
              <input type="text" id="inputName" name="inputName" class="form-control mb-3" placeholder="Name" required autofocus>
              
            </div>

            <div class="form-label-group">
                <input type="text" id="inputPhone_no" name="inputPhone_no" class="form-control mb-3" placeholder="Phone Number" required>
            </div>

            <div class="form-label-group">
                <input type="email" id="inputEmail" name="inputEmail" class="form-control mb-3" placeholder="email" required>
            </div>
            <button class="btn btn-lg btn-primary btn-block rounded-0 mb-3" type="submit">Send</button>
            
          </form>
    </div>
@endsection

