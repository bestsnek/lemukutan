@extends('backend.b_layouts.main')

@section('content')


<div class="container-fluid ">
    <div class="row">
        <div class="col-lg">
            <div class="text-center">
                <h4> Daftar destinasi dan QR </h1>
            </div>
            
            
            <a href="{{ route('backend.lihat_qrcode_utama') }}" class="btn btn-sm btn-info float-right">Lihat QR Code ke explore lemukutan</a>
            <a href="{{ route('backend.form_buat_landmark') }}" class="btn btn-sm btn-primary float-right my-3">Tambah Landmark</a>
            <div class="table-responsive">
                <table class="table table-hover ">
                    {{$landmark->links()}}
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nama Landmark</th>
                            <th>QR</th>
                            <th>Tipe Tempat</th>
                            <th>Status</th>
                            <th>Aksi</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($landmark as $lan)
                        <tr>
                            <td>{{$lan->id}}</td>
                            <td>{{$lan->nama}}</td>
                            <td><a href="{{route('backend.lihat_qrcode', ['qrcode' => $lan->qrCode] ) }}" class="btn btn-sm btn-info" >Buka QRCode</a></td>
                            <td>{{ $lan->isHarbor == 1 ? "Dermaga" : "Bukan Dermaga" }}</th>
                            <td>
                                <p style={{ $lan->active == 1 ? "color:green" : "color:red"  }} >{{ $lan->active == 1 ? "aktif" : "tidak aktif" }} 
                                <a href="{{route('backend.ubah_status',['id'=>$lan->id])}}" class="btn btn-sm {{ $lan->active == 1 ? "btn-success" : "btn-danger"  }} btn-success" onclick="return confirm('Apakah anda yakin ingin mengganti status landmark?');"> Ganti </a>
                                </p>
                            </th>
                            <td><a href="{{route('backend.details', ['id'=> $lan->id]) }}" class="btn btn-sm btn-info">Detail</a></td>
                            
                        </tr>
                        
                        @endforeach
                        
                    </tbody>
                    
                </table> 
            </div>
        </div>
    </div>
</div>

@endsection