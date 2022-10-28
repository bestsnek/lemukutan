<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Landmark;
use App\Models\Data;
use App\Models\Content;
use App\Models\LogTourGuide;


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

    public function lihat_qrcode($qrcode){
       $qrcodes = $qrcode;
        
        return view("backend.lihat_qrcode", compact("qrcodes")) ;
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
