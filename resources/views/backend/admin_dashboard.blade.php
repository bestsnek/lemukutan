@extends('backend.b_layouts.main')
@section('content')
    
@if(session()->has('resetberhasil'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('resetberhasil')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>  
@endif

@if(session()->has('passwordsalah'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('passwordsalah')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>  

@endif
@if(session()->has('password123'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('password123')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>  
@endif

@if(session()->has('passwordtidaksama'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('passwordtidaksama')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>  
@endif

@if(session()->has('ubahPasswordBerhasil'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('ubahPasswordBerhasil')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>  
@endif


<div class="container">
    <p>Tips : password pertama adalah "lemukutan123"</p>
</div>
    @php
    $admin = Auth::user()->is_admin;
    @endphp
@if($admin)
    <div class="container">
        <div class="h1">
            Nama : {{Auth::user()->name}} <br>
            Email : {{Auth::user()->email}}
        </div>

        <form action='{{route('backend.admin_ganti_password',['id'=>Auth::user()->id])}}' method="POST">
            @csrf
            <div class="form-floating">
                <input type="password" name='passwordold' class="form-control" id="Passwordold" placeholder="Password" required>
                <label for="floatingPassword">Password Lama</label>
            </div>

            <div class="form-floating">
                <input type="password" name='password1' class="form-control" id="Password1" placeholder="Password" required>
                <label for="floatingPassword">Password baru</label>
            </div>
            
            <div class="form-floating">
                <input type="password" name='password2' class="form-control" id="Password2" placeholder="Password" required>
                <label for="floatingPassword">masukkan ulang password baru</label>
            </div>

            <button class="btn btn-sm btn-info" type="submit">Ubah Password</button>
        </form>
        
        <br>
        

    </div>
@endif



@endsection