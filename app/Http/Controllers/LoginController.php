<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index_login()
    {
        return view('login.loginView', [
            'title' => 'Selamat Datang di Portal Login Joki Aydan'
        ]);
    }
}
