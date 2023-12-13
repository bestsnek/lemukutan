<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //register
    public function admin_dashboard(){
        return view('backend.admin_dashboard');
    }


    //login
    public function admin_login_form(){
        return view("backend.admin_login_form") ;
    }

    
    public function authenticate(Request $request){


        //temporary password (lemukutan123)
        if($request->password === "lemukutan123"){
            $user = User::where([
                'email' => $request->email,
                'password' => $request->password
            ])->first();
    
            if($user){
                Auth::login($user);
                return redirect()->intended(route('backend.admin_dashboard'));
            } return back()->with('loginError','login gagal');
    
        }

        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password'=> 'required',
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended(route('backend.admin_dashboard'));
        }
        return back()->with('loginError','login gagal');
        
    }
    
    public function admin_logout(Request $request){
       Auth::logout();

       $request->session()->invalidate();
       $request->session()->regenerateToken();
       return redirect(route('backend.admin_login_form'));
        
    }

    // public function admin_reset_password(Request $request, $id){
    //     $user = User::find($id);
    //     $defaultpass = "lemukutan123";
    //     $user->password = Hash::make($defaultpass);
    //     $user->save();
    //     $request->session()->flash('resetberhasil', 'Password berhasil di reset');

    //     return back();
    // }
    

    public function admin_ganti_password(Request $request, $id){
        $user = User::find($id);
       
        
        $pw1 = $request->password1;
        $pw2 = $request->password2;
        $oldpass = $request->passwordold;
        
        //check password 1 dan 2 sama
        if ($pw1 == $pw2) {
            $validatedpass = $request->validate([
                'password1'=> 'required|min:6|max:255',
            ]);

            //check kalau pass lama = lemukutan123 / default
            if($oldpass === 'lemukutan123'){
                if($pw1 === 'lemukutan123'){
                    $request->session()->flash('password123', 'Password tidak boleh lemukutan123!');
                    return back();
                }
               
                $hashedpass = Hash::make($validatedpass['password1']);
                $user->password = $hashedpass;
                $user->save();
                $request->session()->flash('ubahPasswordBerhasil', 'Ubah Password Berhasil');

            } else if (Hash::check($oldpass, $user->password)){
                if($pw1 === 'lemukutan123'){
                    $request->session()->flash('password123', 'Password tidak boleh lemukutan123!');
                    return back();
                }

                $hashedpass = Hash::make($validatedpass['password1']);
                $user->password = $hashedpass;
                $user->save();
                $request->session()->flash('ubahPasswordBerhasil', 'Ubah Password Berhasil');

            }else{
                $request->session()->flash('passwordsalah', 'Password lama tidak sama');
            }
        }else{
            $request->session()->flash('passwordtidaksama', 'Password tidak sama');
        }
        

        return back();
    }
}
