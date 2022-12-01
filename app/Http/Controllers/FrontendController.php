<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    
    public function landing(){
        return view("frontend.landing");
    }


    public function qr_reader(){
        return view("frontend.qr_reader");
    }



}
