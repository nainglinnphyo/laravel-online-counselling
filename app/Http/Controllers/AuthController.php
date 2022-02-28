<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registerindex(){
        return view('auth.register');
    }
    public function loginindex(){
        return view('auth.login');
    }
    public function register(Request $request){
        
        $this->validate($request,[
            'name'=>'required',
            'email'=> 'required',
            'password'=> 'required',
        ]);
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);

        auth()->attempt($request->only('email','password'));

        return redirect()->route('home');
    }
    public function login(Request $request){
        $this->validate($request,[
            'email'=> 'required',
            'password'=> 'required',
        ]);
        auth()->attempt($request->only('email','password'));
        // if (auth()->user()->isAdmin == 1) {
        //     return redirect()->route('admin.home');
        // }else{
        //     return redirect()->route('home');
        // }

        return redirect()->route('home');
    }

    public function logout(){
        auth()->logout();
        return redirect()->route('login');
    }
}

