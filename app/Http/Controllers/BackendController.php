<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Landmark;
use App\Models\Data;
use App\Models\Content;


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

}
