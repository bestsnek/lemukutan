@extends('backend.b_layouts.main')

@section('content')


@if(session()->has('landmarkEdited'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('landmarkEdited')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>  
@endif


<h1 class="h3 mb-4 text-gray-800">Landmark</h1>
    <div class="row middle">
        <div class="col-lg-12">

            <!-- Dropdown Card Example -->
            <div class="card shadow mb-4 " >
                <div class="card-header">
                    Daftar Landmark

                    <a href="{{ route('backend.landing') }}" class="btn btn-primary btn-sm">Kembali</a>
                    <a href="{{route('backend.form_ubah_landmark', ['id'=> $lan->id]) }}" class="btn btn-sm btn-warning float-right">Edit Landmark</a>
                </div>
                <div class="card-body">
                    
                    <ul class="list-group">
                        
                        <li class="list-group-item">ID : {{$lan->id}} </li>
                        <li class="list-group-item">Nama : {{$lan->nama}}</li>
                        <li class="list-group-item">QR Code : {{$lan->qrCode}}</li>
                        <li class="list-group-item">Jenis Landmark : {{ $lan->isHarbor === 1 ? "Dermaga" : "Bukan Dermaga" }}</li>
                        <li class="list-group-item">Content 1 : {{$lan->content->content1}}</li>
                        <li class="list-group-item">Content 2 : {{$lan->content->content2}}</li>
                        <li class="list-group-item">Content 3 : {{$lan->content->content3}}</li>
                        <li class="list-group-item">Content 4 : {{$lan->content->content4}}</li>
                        <li class="list-group-item">Jumlah Pengunjung :  {{$lan->data->jumlahPengunjung}}</li>

                        <li class="list-group-item" >
                            foto 1
                            
                                <img src="{{$lan->content->photo1}}" alt="" style="max-width: 100% "> 
                            
                        </li>
                        
                        <li class="list-group-item">
                            foto 2
                            @if ($lan->content->photo2 === "kosong")
                            "kosong"
                            @else
                            
                                <img src="{{$lan->content->photo2}}" alt="" style="max-width: 100% " > 
                            
                            @endif
                        </li>

                    </ul>
                    
                </div>
            </div>
        </div>
    </div>


@endsection