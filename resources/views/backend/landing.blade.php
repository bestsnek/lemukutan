@extends('backend.b_layouts.main')

@section('content')

<div class="container-fluid">
    <h1 class="text-center">
        Sistem Informasi Untuk Pulau Lemukutan
    </h1>
    
    <h1> temporary data dump </h1>
    <div class="row">
        <div class="col-lg">

            <!-- Dropdown Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header">
                    Daftar landmark
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>namalandmark</th>
                                <th>qrnya</th>
                                <th>isharbor</th>
                                <th>content1</th>
                                <th>content2</th>
                                <th>content3</th>
                                <th>content4</th>
                                <th>photo1</th>
                                <th>photo2</th>
                                <th>jumlahpengunjung</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                           
                            <tr>
                                <td>{{$lan->id}}</td>
                                <td>{{$lan->nama}}</td>
                                <th>{{$lan->qrCode}}</th>
                                <th>{{$lan->isHarbor}}</th>
                                <th>{{$lan->content->content1}}</th>
                                <th>{{$lan->content->content2}}</th>
                                <th>{{$lan->content->content3}}</th>
                                <th>{{$lan->content->content4}}</th>
                                <th>{{$lan->content->photo1}}</th>
                                <th>{{$lan->content->photo2}}</th>
                                <th>{{$lan->data->jumlahPengunjung}}</th>
                                
                            </tr>
                            
                        </tbody>
                    </table> 
                  
                </div>
            </div>
        </div>
    </div>
</div>

@endsection