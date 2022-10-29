@extends('backend.b_layouts.main')

@section("content")
@if(session()->has('landmarkAdded'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('landmarkAdded')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>  
@endif


<div class="container-fluid">
    
<h1 class ="h3 mb-4 text-gray-800">Tambah Landmark</h1>
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
            <div class="card-header">
                <a href="{{ route('backend.landing') }}" class="btn btn-primary btn-sm">Kembali</a>
            </div>
            
                <div class="card-body">

                    <form action="{{route('backend.buat_landmark')}}" method="post"enctype="multipart/form-data" >
                    @csrf
                        <div class="form-group mt-4">
                            <label for="nama">Nama Landmark</label>
                            <input type="text" class="form-control" name="nama" required>
                        </div>

                         
                        <div class="form-check mt-4">
                            <label class="form-check-label" for="isHarbor">
                                Apakah termasuk dermaga?
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="isHarbor" id="harbor" required value="1">
                            <label class="form-check-label" for="harbor">
                              Ya (dermaga)
                            </label>
                        </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="isHarbor" id="notharbor" required value="0">
                            <label class="form-check-label" for="notHarbor">
                              Tidak (bukan dermaga)
                            </label>
                          </div>


                        <div class="form-group mt-4">
                            <label for ="content1">Tulisan 1 </label>
                            <textarea type="textarea" class="form-control" name="content1" rows="3" required></textarea>
                        </div>
                        <div class="form-group mt-4">
                            <label for ="content1">Tulisan 2 </label>
                            <textarea type="textarea" class="form-control" name="content2" rows="3" ></textarea>
                        </div>
                        <div class="form-group mt-4">
                            <label for ="content1">Tulisan 3 </label>
                            <textarea type="textarea" class="form-control" name="content3" rows="3" ></textarea>
                        </div>
                        <div class="form-group mt-4">
                            <label for ="content1">Tulisan 4 </label>
                            <textarea type="textarea" class="form-control" name="content4" rows="3" ></textarea>
                        </div>

                        <div class="form-group mt-4">
                            <label for="photo1">Foto 1</label>
                            <input type="file" class="form-control" name="photo1" required>
                        </div>

                        <div class="form-group mt-4">
                            <label for="photo2">Foto 2</label>
                            <input type="file" class="form-control" name="photo2">
                        </div>
                        

                       
                        <input type="submit" class="btn btn-primary mt-4" value="Tambah">
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 

