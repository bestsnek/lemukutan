@extends('frontend.f_layouts.main')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <h1>Form Untuk Tour Guide Explore Lemukutan</h1>
                </div>
                <div class="card-body">

                    <form action="{{route('frontend.tourguide')}}" method="post"enctype="multipart/form-data" >
                    @csrf
                        <div class="form-group mt-4">
                            <label for="nama">Nama Tour Guide</label>
                            <input type="text" class="form-control" name="nama" required >
                        </div>

                        <div class="form-group mt-4">
                            <label for="nama">Jumlah Rombongan : </label>
                            <input type="number" class="form-control" name="jumlah" required >
                        </div>

                        <input type="hidden" id="qrcode" name="qrcode" value="{{$qrcode}}">

                       
                        <input type="submit" class="btn btn-primary mt-4" value="selesai">
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>






@endsection