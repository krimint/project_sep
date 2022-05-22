<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SiteController extends Controller
{
    //
    public function index()
    {
        # code...
    }
    public function register()
    {
        return view('site.register');
    }
    public function doRegister(Request $request)
    {
        # code...
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        if(User::create($data)){
            return redirect('register');
        }
    }
    public function login()
    {
        return view('site.login');
    }
    public function doLogin(Request $request)
    {
        # code...
        $credential = [
            "email" => $request->email,
            "password" => $request->password
        ];
        if(Auth::guard('web')->attempt($credential)){
            $cekRole = Auth::user()->role;
            if($cekRole=='Admin'){
                return redirect('admin');
            }
            else if($cekRole=='Owner'){
                return redirect('owner');
            }
            else if($cekRole=='User'){
                return redirect('user');
            }
        }
        else{
            return redirect('/');
        }
    }
    public function doLogout()
    {
        # code...
        Auth::logout();
        return redirect('/');
    }
}
