<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //register

    public function admin_register_form(){
        return view("backend.admin_register_form") ;
    }

    public function admin_register(Request $request){
        $validatedData = $request->validate([
          'name' => 'required|max:255',
          'email' => 'required|email:dns|unique:users',
          'password' => 'required|min:6|max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        $request->session()->flash('success', 'Registrasi berhasil, silahkan login');
        return redirect(route("backend.admin_login"));
    }


    //login
    public function admin_login_form(){
        return view("backend.admin_login_form") ;
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
    
    public function admin_logout(Request $request){
       Auth::logout();

       $request->session()->invalidate();
       $request->session()->regenerateToken();
       return redirect(route('backend.userLogin'));
        
    }
}
