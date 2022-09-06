<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{

    public function landing(){
        return view("backend.landing");
    }
}
