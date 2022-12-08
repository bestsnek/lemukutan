@extends('frontend.f_layouts.main')

@section('content')
<div class="container py-4">
    <div class="card">
        <h1 class="py-4">Maaf, landmark yang anda anda lihat sedang di non-aktifkan untuk keselamatan anda</h1>
        
        <div class="row mx-3 my-3">
            <a href="{{route('frontend.landing') }} "  class="btn btn-sm btn-info" style="text-align: center">Kembali ke halaman utama</a>
        </div>
    </div>
</div>

@endsection