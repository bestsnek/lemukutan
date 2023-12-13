@extends('frontend.f_layouts.main')

@section('content')


<div class="container-fluid" style="background-color: white">
    <div class="row">
        <div class="col-lg">
            <div class="text-center">
                <h4> Daftar destinasi </h1>
            </div>
            
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Nama Destinasi</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($landmark as $lan)
                        <tr>
                            
                            <td>{{$lan->nama}}</td>
                            <td><a href="{{route('frontend.landmark', ['id'=> $lan->id]) }}" class="btn btn-sm btn-info">Kunjungi</a> </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                    
                </table> 
              
           
        </div>
    </div>
</div>

@endsection