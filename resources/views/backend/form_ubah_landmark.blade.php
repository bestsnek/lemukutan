@extends('backend.b_layouts.main')

@section("content")
@if(session()->has('landmarkAdded'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('landmarkAdded')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>  
@endif


<div class="container-fluid">
    
<h1 class ="h3 mb-4 text-gray-800">Ubah Landmark</h1>
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
            <div class="card-header">
                <a href="{{ url()->previous() }}" class="btn btn-primary btn-sm">Kembali</a>
            </div>
            
                <div class="card-body">

                    <form action="{{route('backend.ubah_landmark') }}" method="post"enctype="multipart/form-data" >
                    @csrf
                        <div class="form-group mt-4">
                            <label for="nama">Nama Landmark</label>
                            <input type="text" class="form-control" name="nama" required value="{{$lan->nama}}">
                        </div>

                         
                        <div class="form-check mt-4">
                            <label class="form-check-label" for="isHarbor">
                                Apakah termasuk dermaga?
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="isHarbor" id="harbor" required value="1" {{($lan->isHarbor == 1 ) ? " checked" : "" }} >
                            <label class="form-check-label" for="harbor">
                              Ya (dermaga)
                            </label>
                        </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="isHarbor" id="notharbor" required value="0" {{($lan->isHarbor == 1 ) ? "" : " checked" }}>
                            <label class="form-check-label" for="notHarbor">
                              Tidak (bukan dermaga)
                            </label>
                          </div>


                        <div class="form-group mt-4">
                            <label for ="content1">Tulisan 1 </label>
                            <textarea type="textarea" class="form-control" name="content1" rows="3" required >{{$lan->content->content1}}</textarea>
                        </div>
                        <div class="form-group mt-4">
                            <label for ="content1">Tulisan 2 </label>
                            <textarea type="textarea" class="form-control" name="content2" rows="3" >{{$lan->content->content2}}</textarea>
                        </div>
                        <div class="form-group mt-4">
                            <label for ="content1">Tulisan 3 </label>
                            <textarea type="textarea" class="form-control" name="content3" rows="3" >{{$lan->content->content3}}</textarea>
                        </div>
                        <div class="form-group mt-4">
                            <label for ="content1">Tulisan 4 </label>
                            <textarea type="textarea" class="form-control" name="content4" rows="3" >{{$lan->content->content4}}</textarea>
                        </div>

                        <div class="form-group mt-4">
                            <label for="photo1">Foto 1</label>
                            <img src="{{$lan->content->photo1}}" alt="" style="max-width: 50% "> 
                            <input type="file" class="form-control" name="photo1" > 
                            (kosongkan apabila tidak diganti)
                        </div>

                        <div class="form-group mt-4">
                            <label for="photo2">Foto 2</label>
                            @if ($lan->content->photo2 === "kosong")
                            "kosong"
                            @else
                            
                                <img src="{{$lan->content->photo2}}" alt="" style="max-width: 50% " > 
                            
                            @endif
                            <input type="file" class="form-control" name="photo2" >
                            
                            (kosongkan apabila tidak diganti)
                        </div>
                        <input type="hidden" id="id" name="id" value="{{$lan->id}}">

                       
                        <input type="submit" class="btn btn-primary mt-4" value="Ubah">
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 

