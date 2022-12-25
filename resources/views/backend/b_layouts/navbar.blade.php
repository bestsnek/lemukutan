<header class="p-3 bg-dark text-white">
  
  <div class="container-fluid">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="{{ route('backend.landing') }}" class="nav-link px-2 {{ Route::is('backend.landing*') ? 'text-secondary' : 'text-white' }}">Home</a></li>
          {{-- <li><a href="" class="nav-link px-2 text-white">Data</a></li> --}}
          <li><a href="{{ route('backend.log_tour_guide') }}" class="nav-link px-2  {{ Route::is('backend.log_tour_guide*') ? 'text-secondary' : 'text-white' }}">Log</a></li>
         
        

        <div class="text-end">
          {{-- <button type="button" class="btn btn-outline-light me-2">Login</button>
          <button type="button" class="btn btn-warning">Sign-up</button> --}}

        @auth
        

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome Back, {{auth()->user()->name}}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ route('backend.admin_dashboard') }} ">Dashboard Admin</a></li>
              <li> <hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">
                <form action="{{route('backend.admin_logout')}}" method="POST">
                  @csrf
                  <button type='submit' class='dropdown-item'>logout</button>  
                </form> 
                </a> 
              </li>
            </ul>
          </li>  

        
          
        @else
          
          <li class="nav-item"><a href="{{route('backend.admin_login_form')}}" class="nav-link {{ Route::is('backend.admin_login_form') ? 'active' : '' }}">login</a></li>
        @endauth
          
          
        </ul>
        </div>
      </div>
    </div>
</header>
