<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class loginController extends Controller
{

    public function login()
    {
        if(session('user_id')!=null){
            return redirect('home');
        } 
         $error = Session::get('error');
        Session::forget('error');
        return view('login')->with('error', $error);
    }
    public function do_login()
    {
        if(Session::get('user_id')) 
        {
            return redirect('home');
        }
        // validare dati
        if(strlen(request('username')) == 0 || strlen(request('password'))==0)
        {
            Session::put('error', 'empty_fields');
            return redirect('login');
        }
        $user= User::where('username', request('username'))->first();
        if(!$user || !password_verify(request('password'), $user->password))
        {
            Session::put('error', 'wrong');
            return redirect('login');
        }
        
        // login
        Session::put('user_id', $user->id);
        // home
        return redirect('home');
    }
    public function logout()
    {
        // Elimina dati di sessione
        Session::flush();
        return redirect('');
    }
}