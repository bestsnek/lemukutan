<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Landmark;
use App\Models\Data;
use App\Models\Content;
use App\Models\LogTourGuide;

class FrontendController extends Controller
{
    
    public function landing(){
        return view("frontend.landing");
    }


    public function qr_reader(){
        return view("frontend.qr_reader");
    }

    public function daftar_objek_wisata(){
        $landmark = Landmark::all();
        return view("frontend.daftar_objek_wisata", compact('landmark'));
    }

    public function landmark($id){

        $landmark = Landmark::find($id);
        return view("frontend.landmark", compact('landmark'));
    }

    public function form_tourguide($qr){
        $qrcode = $qr;
        return view("frontend.form_tourguide", compact('qrcode'));
    }


    public function tourguide(Request $request){
        //logic for after tourguide enter name + jumlah rombongan
        $qr = $request->qrcode;
        $namatg = $request->nama; //nama tg
        $jumlahpengunjung = $request->jumlah; //jumlah pengunjung

        $logtg = new logtourguide();

        $landmark = Landmark::where('qrCode', $qr)->first();

        //save log tg
        $logtg->namaTourGuide = $namatg;
        $logtg->jumlahPengunjung = $jumlahpengunjung;
        $logtg->landmark_id = $landmark->id;
        $logtg->save();

        return view("frontend.berhasil");
    }



    public function qr($qr){
        
        
        $landmark = Landmark::where('qrCode', $qr)->first();

        

        if($landmark->isHarbor){
            return redirect()->route("frontend.form_tourguide",['qr'=>$landmark->qrCode]);
        } else{
            //tambah 1 di pengunjung
            $old = $landmark->data->jumlahPengunjung;
            $new = ($old+1);
            
            $landmark->data->jumlahPengunjung = $new ;
            $landmark->data->save();
            if($landmark->active){
                return redirect()->route('frontend.landmark',['id'=>$landmark->id] ); //arahkan ke jalan yang benar
            }
            else{
                return view("frontend.rusak"); //salah kode atau asal
            }
        }


        
    }



}
