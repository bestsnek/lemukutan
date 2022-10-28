@extends('backend.b_layouts.main')

@section("content")
<div class="container-fluid">
    
<h1 class ="h3 mb-4 text-gray-800">Tambah Landmark</h1>
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
            <div class="card-header">
                <a href="{{ url()->previous() }}" class="btn btn-primary btn-sm">Kembali</a>
            </div>
            
                <div class="card-body">

                    <form action="#" method="post"enctype="multipart/form-data" >
                    @csrf
                        <div class="form-group mt-4">
                            <label for="namaLandmark">Nama Landmark</label>
                            <input type="text" class="form-control" name="namaLandmark" required>
                        </div>

                         
                        <div class="form-check mt-4">
                            <label class="form-check-label" for="isHarbor">
                                Apakah termasuk dermaga?
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="isHarbor" id="harbor" required>
                            <label class="form-check-label" for="harbor">
                              Ya (dermaga)
                            </label>
                        </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="isHarbor" id="notharbor" required>
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
                            <textarea type="textarea" class="form-control" name="content2" rows="3" required></textarea>
                        </div>
                        <div class="form-group mt-4">
                            <label for ="content1">Tulisan 3 </label>
                            <textarea type="textarea" class="form-control" name="content3" rows="3" required></textarea>
                        </div>
                        <div class="form-group mt-4">
                            <label for ="content1">Tulisan 4 </label>
                            <textarea type="textarea" class="form-control" name="content4" rows="3" required></textarea>
                        </div>

                        
                        

                       
                        <input type="submit" class="btn btn-primary" value="Tambah">
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 

