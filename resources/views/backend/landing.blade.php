@extends('backend.b_layouts.main')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg">
            <div class="text-center">
                <h4> Daftar destinasi dan QR </h1>
            </div>
            
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nama Landmark</th>
                            <th>QR</th>
                            <th>Tipe Tempat</th>
                            <th>Aksi</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($landmark as $lan)
                        <tr>
                            <td>{{$lan->id}}</td>
                            <td>{{$lan->nama}}</td>
                            <td>{{$lan->qrCode}}</td>
                            <td>{{ $lan->isHarbor === 1 ? "Dermaga" : "Bukan Dermaga" }}</th>
                            <td><a href="{{route('backend.details', ['id'=> $lan->id]) }}" class="btn btn-sm btn-info">Detail</a></td>
                            
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table> 
              
           
        </div>
    </div>
</div>

@endsection