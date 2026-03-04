<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
     

    public function index(){

        $books = Books::all();
        return view('user.index', compact('books'));
    }

    public function login(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }

    public function dashboard(){
        return view('index');
    }

    public function actionLogin(Request $request){
        $login = $request->validate([
            'email' =>'required|email',
            'password' => 'required'
        ]);

        if(!$login ){
            return redirect()->back()->with('error', 'silahkan isi form dengan benar');
        }

        if(Auth::attempt($login)){
            if(Auth::user()->role == 'admin'){
                return redirect()->route('dashboard')->with('success','berhasil login sebagai admin');
            }
            return redirect()->route('home')->with('success','berhasil login sebagai user');
        }
        return redirect()->route('home')->with('error','gagal login');

    }

    public function logout(){

        Auth::logout();
        return redirect()->route('home')->with('success','berhasil logout');
    }

}
