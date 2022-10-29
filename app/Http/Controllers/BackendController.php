<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Landmark;
use App\Models\Data;
use App\Models\Content;
use App\Models\LogTourGuide;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;

class BackendController extends Controller
{

    public function landing(){
        $landmark = Landmark::simplePaginate(20);
        return view("backend.landing", compact ("landmark"));
    }

    public function details($id){
        $lan = Landmark::find($id);
        
        return view("backend.detail", compact("lan")) ;
    }
   
    public function form_buat_landmark(){
        $lan = Landmark::all();
        
        return view("backend.form_buat_landmark", compact("lan")) ;
    }

    public function buat_landmark(Request $request){

        // landmark main //
        $landmark = new landmark();
        $landmark->nama = $request->nama;
        
        //isHarbor convertion, 1 = harbor, 0 = not
        $ishb = $request->isHarbor;
        if ($ishb == "1"){
            $landmark->isHarbor = 1;
        } else{
            $landmark->isHarbor = 0;
        };
        
        //generating qr code
        $curid = Landmark::count(); //get current id 
        $qrid = $curid + 1; //qr-id = current id +1, biar ngga kegabung
        $qr = $qrid . Str::random(10); // qrid+random string 
        $landmark->qrCode = $qr; //apply qr

        $landmark->active = 1;
        
        $landmark->save();
        $ld_id= $landmark->id; //get the landmark id
        

        // landmark content // 
        $content = new content();
        $content->landmark_id = $ld_id;
        $content->content1 = $request->content1;

        if ($request->content2 !="" ){
            $content->content2 = $request->content2;
        }else{
            $content->content2 = "kosong";
        }

        if ($request->content3 !="" ){
            $content->content3 = $request->content3;
        }else{
            $content->content3 = "kosong";
        }

        if ($request->content4 !="" ){
            $content->content4 = $request->content4;
        }else{
            $content->content4 = "kosong";
        }

        
        
        
        // Photo save and edit to webp
        if ($request->photo1 !="" ){
            $file = $request->file("photo1");
            $nama1 = $request->nama;
            $file_name= $nama1 . "_1_".time().'.webp';
            
            $img=\Image::make($file)->encode('webp'); //convert to webp
            $img->save(public_path('gambar/landmark/').($file_name)); //save
            $content->photo1 = "/gambar/landmark/".$file_name; //masukkan ke db 
        }
        
        if ($request->photo2 !="" ){
            $file = $request->file("photo2");
            $nama1 = $request->nama;
            $file_name= $nama1 . "_2_".time().'.webp';
            
            $img=\Image::make($file)->encode('webp'); //convert to webp
            $img->save(public_path('gambar/landmark/').($file_name)); //save
            $content->photo2 = "/gambar/landmark/".$file_name; //masukkan ke db 
        }else{
            $content->photo2 = "kosong";
        }

        $content->save();
        $data = new data();
        $data->landmark_id = $ld_id;
        $data->jumlahPengunjung = 0;
        $data->save();

        
        $request->session()->flash('landmarkAdded', 'Tambah Landmark Berhasil');
        return view("backend.form_buat_landmark") ;
    }

    public function form_ubah_landmark($id){
        $lan = Landmark::find($id);
        return view("backend.form_ubah_landmark", compact("lan")) ;
    }

    public function ubah_landmark(Request $request){
        $id = $request->id;
        $landmark = Landmark::find($id);

        $landmark->nama = $request->nama;
        
        //isHarbor convertion, 1 = harbor, 0 = not
        $ishb = $request->isHarbor;
        if ($ishb == "1"){
            $landmark->isHarbor = 1;
        } else{
            $landmark->isHarbor = 0;
        };

        $landmark->save();

        $content = Content::find($id);
        $content->content1 = $request->content1;
        $content->content2 = $request->content2;
        $content->content3 = $request->content3;
        $content->content4 = $request->content4;
        $content->save();

        $request->session()->flash('landmarkEdited', 'Edit Landmark Berhasil');
        return redirect()->route('backend.details', ['id'=> $id] ) ;
    }

    public function lihat_qrcode($qrcode){
        $qrcodes = $qrcode;
        $nama = Landmark::where("qrcode",$qrcodes)->value('nama');

        
        return view("backend.lihat_qrcode", compact("qrcodes", "nama")) ;
    }

    public function log_tour_guide(){
        $ltg = LogTourGuide::simplePaginate(20);
        return view("backend.log_tour_guide", compact ("ltg"));

    }

    public function hapus_log(Request $request, $id){
        $ltg = LogTourGuide::find($id);
        $ltg->delete();

        $request->session()->flash('hapus', 'log dihapus');
        return redirect()->route('backend.log_tour_guide');

    }


}
