@extends('frontend.f_layouts.main')

@section('content')
<div class="container-fluid py-4">
    <div class="card">
        
        <div class="col text-center">
            <div class="row">
                <h1>{{$landmark->nama}}</h1>
            </div>

            <div class="row">
                <img src="{{$landmark->content->photo1}}" class="d-block w-100 edge" alt="...">
            </div>

            @if( $landmark->content->photo2 === "kosong" )

            @else

            <div class="row">
                <img src="{{$landmark->content->photo2}}" class="d-block w-100 edge" alt="...">
            </div>

            @endif
            


        </div>
        
    </div>
    <div class="card py-3">
        
        <div class="card border-secondary mx-3" >
            {{$landmark->content->content1}}    
        </div>

        @if($landmark->content->content2 != "kosong")
        <div class="card border-secondary mx-3" >
            {{$landmark->content->content2}}    
        </div>
        @endif

        @if($landmark->content->content3 != "kosong")
        <div class="card border-secondary mx-3" >
            {{$landmark->content->content3}}    
        </div>
        @endif

        @if($landmark->content->content4 != "kosong")
        <div class="card border-secondary mx-3" >
            {{$landmark->content->content4}}    
        </div>
        @endif


    </div>
</div>

@endsection