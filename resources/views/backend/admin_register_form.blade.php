@extends('backend.b_layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <main class="form-registration">
                    <form action="{{route("backend.admin_register")}}" method="POST" >
                        @csrf
                        <h1 class="h3 mb-3 fw-normal text-center">Registrasi</h1>
                        <div class="form-floating">
                            <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="name" required value = "{{old('name')}}">
                            <label for="name">Nama</label>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>                                
                            @enderror
                        </div>

                        <div class="form-floating">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" required value = "{{old('name')}}">
                            <label for="floatingInput">Alamat Email</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>                                
                            @enderror
                        </div>

                        <div class="form-floating">
                            <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="password" required>
                            <label for="password">Password</label>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>                                
                            @enderror
                        </div>

                        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Registrasi</button>
                    </form>
                    <small>sudah registrasi? <a href="{{route('backend.admin_login_form')}}" class="">Login</a></small>
                </main>  
            </div>
        </div>
    </div>
@endsection