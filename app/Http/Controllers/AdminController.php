<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Landmark;
use App\Models\Data;
use App\Models\Content;
use App\Models\LogTourGuide;


class AdminController extends Controller
{
    public function userLogin(){
        return view("site.back.back_userLogin") ;
    }
    
    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password'=> 'required',
        ]);
        
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended(route('backend.userDashboard'));
        }
        return back()->with('loginError','login gagal');
        
    }
    
    public function userLogout(Request $request){
       Auth::logout();

       $request->session()->invalidate();
       $request->session()->regenerateToken();
       return redirect(route('backend.userLogin'));
        
    }
    
    public function userRegisterForm(){
        return view("site.back.back_userRegistrationForm") ;
    }
    
    public function userRegister(Request $request){
        $validatedData = $request->validate([
          'name' => 'required|max:255',
          'email' => 'required|email:dns|unique:users',
          'password' => 'required|min:6|max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        $request->session()->flash('success', 'Registrasi berhasil, silahkan login');
        return redirect(route("backend.userLogin"));
    }

}
