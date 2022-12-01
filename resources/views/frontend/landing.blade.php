@extends('frontend.f_layouts.main')

@section('content')


{{-- opener anjay --}}
<style>
    .fill {

  width: auto;
  height: auto;
}
.fill img {
    
}

.edge{
    border-radius: 25px;
    object-fit: cover;
    /* min-width: 50%;
    min-height: 30%; */
    max-width: 60%;
    max-height: 50%;
    margin-left: auto;
    margin-right: auto;
}

</style>
<div class="container-fluid py-3 px-3 "  >
    
    <div class="py-3 px-2" style="background-color: #BAD5F0; border-radius: 25px; box-shadow: -10px 10px 5px;  ">
        <div class="col">
            <h2 style="text-align: center">
                Selamat Datang di LemukutanKu
            </h2>
    
            <h5 style="text-align: center">
                Mulai petualanganmu dengan men-scan QR Code yang ada di Pulau Lemukutan 
            </h2>
            <p style="text-align: center ">
                klik tombol dibawah untuk men-scan QR Code melalui website LemukutanKu
            </p>
            <div class="row mx-3">
                <a href="{{route('frontend.qr_reader') }} "  class="btn btn-sm btn-info" style="text-align: center">Pembaca QR</a>\
            </div>
        </div>
    </div>

    

    <div class="py-2  my-5 text-center " style="background-color: #BAD5F0; border-radius: 25px; box-shadow: -10px 10px 5px;  ">
        <div class="row ">
            
            <div id="carousel" class="carousel carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner ">
                  <div class="carousel-item  ">
                    <img src="{{url('asset/intro.jpg')}}" class="d-block w-100 edge " alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{url('asset/intro2.jpg')}}" class="d-block w-100 edge" alt="...">
                  </div>
                  <div class="carousel-item active">
                    <img src="{{url('asset/intro3.jpg')}}" class="d-block w-100 edge" alt="...">
                  </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

            </div>
            
        </div>
    </div>
    
</div>

{{-- 
@for ($i = 0; $i < 20; $i++)
<div class="container-fluid py-3" style="visibility: hidden">
    <div class="card py-5">
        {{$i}}
    </div>
</div>
@endfor --}}





@endsection