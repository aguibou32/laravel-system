<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">

    <div class="container d-flex align-items-center px-4">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        
        <form action="#" class="searchform order-lg-last">
            <div class="form-group d-flex">
                <input type="text" class="form-control pl-3" placeholder="Search">
                <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
            </div>
        </form>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav mr-auto">
            <li class="{{Request::path() == 'home' ? 'nav-item active' : 'nav-item' }} "> <a href="{{route('pages.welcome')}}" class="nav-link pl-0">Home</a></li>
            <li class="{{Request::path() == 'about' ? 'nav-item active' : 'nav-item' }}"><a href="{{route('pages.about')}}" class="nav-link">About</a></li>
            <li class="{{Request::path() == 'courses' ? 'nav-item active' : 'nav-item' }}"><a href="{{route('courses.index')}}" class="nav-link">Courses</a></li>
            <li class="{{Request::path() == 'team' ? 'nav-item active' : 'nav-item' }}"><a href="{{route('pages.ourteam')}}" class="nav-link">Our Team</a></li>
            <li class="{{Request::path() == 'application' ? 'nav-item active' : 'nav-item' }}"><a href="{{route('application.create')}}" class="nav-link">Apply Now</a></li>
            
            <li class="{{Request::path() == 'courses/create' ? 'nav-item active' : 'nav-item' }}"><a href="{{route('courses.create')}}" class="nav-link">Add Course</a></li>
          
            @guest
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @endif
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
          
          
          </ul>
      </div>
    </div>
  </nav>
