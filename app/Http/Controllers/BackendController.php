<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Landmark;
use App\Models\Data;
use App\Models\Content;


class BackendController extends Controller
{

    public function landing(){
        $lan = Landmark::find(1);

        $landmarkData = data::simplePaginate(20);
        $landmarkContent = content::simplePaginate(20);
        return view("backend.landing", compact ("lan", "landmarkData", "landmarkContent"));
    }
}
