@extends('frontend.f_layouts.main')

@section('content')


{{-- opener anjay --}}
@for ($i = 0; $i < 20; $i++)
<div class="container-fluid py-3" style="visibility: hidden">
    <div class="card py-5">
        {{$i}}
    </div>
</div>
@endfor





@endsection