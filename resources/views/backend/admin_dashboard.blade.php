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
    <p>Tips : apabila password di reset, password akan menjadi "lemukutan123"</p>
</div>
    @php
    $admin = Auth::user()->is_admin;
    $superadmin = Auth::user()->is_superadmin;
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
        


    @if($superadmin)

    <div class="card shadow my-4">
        <div class="card-header">
            (khusus superadmin) daftar user
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Is_Admin</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $u)
                    {{-- Skip Superadmin --}}
                    @if ($u->is_superadmin)
                        @continue
                    @endif
                        <tr>
                            <td>{{$u->id}}</td>
                            <td>{{$u->name}}</td>
                            <td>{{$u->email}}</td>
                            <td style='{{ $u->is_admin === 1 ? "color:green" : "color:red"  }}'>{{ $u->is_admin === 1 ? "Admin" : "Bukan Admin"  }}</td>
                            @if ($u->is_admin)
                                <td><a href="{{route('backend.admin_ganti_status',['id'=>$u->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin keluarkan admin?');"> Keluarkan Admin </a>
                            @else
                                <td><a href="{{route('backend.admin_ganti_status',['id'=>$u->id])}}" class="btn btn-sm btn-success" onclick="return confirm('Apakah anda yakin ingin menjadikan admin?');"> Jadikan Admin </a>
                            @endif
                            <a href="{{route('backend.admin_hapus_user',['id'=>$u->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin hapus user?');"> Hapus User </a>
                            <a href="{{route('backend.admin_reset_password',['id'=>$u->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin reset password user?');"> Reset Password User </a>
                        </tr>
                    @endforeach
                </tbody>
            </table> 
            {{-- {{ $log->links() }}   --}}
        </div>
    </div>

    {{-- <div class="card shadow my-4">
        <div class="card-header">
            Log
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                        <th>Waktu</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($log as $l)
                    <tr>
                        <td>{{$l->id}}</td>
                        <td>{{$l->nama}}</td>
                        <td>{{$l->aksi}}</td>
                        <td>{{$l->created_at}}</td>

                    </tr>
                    @endforeach
                </tbody>
            </table> 
            {{ $log->links() }}  
        </div>
    </div>
     --}}

    @endif








    </div>
@endif



@endsection