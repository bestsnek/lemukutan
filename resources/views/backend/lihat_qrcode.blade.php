@extends('backend.b_layouts.main')

@section('content')

<div class="container my-3">
    <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->errorCorrection('H')->size(300)->generate("$qrcodes")) !!} ">
</div>

<a href="{{ url()->previous() }}" class="btn btn-primary btn-sm">Kembali</a>

@endsection