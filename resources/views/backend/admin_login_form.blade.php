@extends('backend.b_layouts.main')

@section('content')
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>  
    @endif

    @if(session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{session('loginError')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>  
    @endif



    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <main class="form-signin">
                    <form action='{{route('backend.admin_login')}}' method="POST">
                        @csrf
                        <h1 class="h3 mb-3 fw-normal text-center">Login Lemukutan Informasi</h1>
                        <div class="form-floating">
                            <input type="email" name='email' class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{old ('email')}}">
                            <label for="floatingInput">Email address</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                            <div class="form-floating">
                            <input type="password" name='password' class="form-control" id="Password" placeholder="Password" required>
                            <label for="floatingPassword">Password</label>
                        </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                    </form>

                    <small><a href="{{route('backend.admin_register_form')}}" class="">Registrasi</a></small>
                </main>  
            </div>
        </div>
    </div>
    




@endsection