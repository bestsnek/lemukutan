@extends('backend.b_layouts.main')

@section('content')


<div class="container-fluid">
    {{-- alert --}}
    @if(session()->has('hapus'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{session('hapus')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>  
    @endif
    
    {{-- alert end --}}
    <div class="row ">
        <div class="col-lg">
            <div class="text-center">
                <h4> Log Tour Guide</h1>
            </div>
            
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nama Tourguide</th>
                            <th>Lokasi Datang</th>
                            <th>Jumlah Pengunjung</th>
                            <th>Waktu Input (tahun-bulan-hari)</th>
                            <th>Aksi</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ltg as $tg)
                        <tr>
                            <td>{{$tg->id}}</td>
                            <td>{{$tg->namaTourGuide}}</td>
                            <td>{{$tg->landmark->nama }} </td>
                            <td>{{$tg->jumlahPengunjung}}</td>
                            <td>{{$tg->created_at}} </td>
                            <td><a href="{{route('backend.hapus_log',['id'=>$tg->id]) }}" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?');" >delete</a> </td>
                            
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table> 
            </div>
           
        </div>
    </div>
</div>

@endsection