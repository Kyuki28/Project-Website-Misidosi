<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Donasi;


class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('admin.login-admin');
        }
        return view('admin.login-admin');
    }

    public function actionlogin(Request $request)
{
    $data = $request->only('email', 'password');
    
    if (Auth::attempt($data)) {
        $title = "Beranda Admin"; 
        $dtDonasi = Donasi::all();
        // Define $title here
        return view('admin.beranda-admin', compact('title', 'dtDonasi'));
    } else {
        $title = "Beranda Admin";
        $dtDonasi = Donasi::all();
        return view('admin.login-admin', compact('title', 'dtDonasi')); 
    }
}


    public function actionlogout()
    {
        Auth::logout();
        return redirect('home');
    }
}

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login-form'); // Adjust the view path as necessary
    }
}
