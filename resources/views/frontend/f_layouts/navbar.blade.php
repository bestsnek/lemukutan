<header class="p-3" style="background-color:#222222; ">
  
  <div class="container">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <div class="d-flex flex-wrap align-items-center justify-content-center">
        <style>
          li{
            color:#000000;
            font-family: Serif, verdana, "Times New Roman",;
            font-size: 2vw;
            border-style: groove;
            border-color: #36e230;
            margin: 3px;
            margin-left: auto;
            margin-right: auto;
            background-color: #82eb7e
          }
        </style>

        <a href="{{route('frontend.landing')}}">
        <img
          src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp"
          height="20"
          alt="Logo Explore Lemukutan"
          loading="lazy"

          style="margin-right: 10px"

        >
        </a>

        <ul class="nav col-12 col-md-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="{{ route('frontend.qr_reader') }}" class="nav-link px-2 {{ Route::is('frontend.qr_reader') ? 'text-white' : 'text-dark' }}">Pembaca QR</a></li>
          <li><a href="{{ route('frontend.daftar_objek_wisata') }}" class="nav-link px-2 {{ Route::is('frontend.daftar_objek_wisata') ? 'text-white' : 'text-dark' }}">Daftar Objek Wisata</a></li>
       
      </div>
    </div>
</header>
