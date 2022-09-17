<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index_login()
    {
        return view('login.loginView', [
            'title' => 'Selamat Datang di Portal Login Joki Aydan'
        ]);
    }

    public function index_register()
    {
        return view('login.registerView', [
            'title' => 'Register Akun'
        ]);
    }

    public function auths(Request $request)
    {
        $auth = $request->validate([
            'username' => 'required|min:4|max:16',
            'password' => 'required|min:4|max:16'
        ], [
            'username.required' => '',
            'username.min' => 'Minimal 4 Karakter Untuk Username',
            'username.max' => 'Maksimal 16 Karakter Untuk Username',
            'password.min' => 'Minimal 4 Karakter Untuk Password',
            'password.max' => 'Maksimal 16 Karakter Untuk Password'
        ]);

        if (Auth::attempt($auth)) {
            $request->session()->regenerate();
            return redirect()->intended('/register');
        }
    }

    public function register_store(Request $request)
    {
        $request->validate(
            [
                'username' => 'required|min:4|max:16|unique:users',
                'password' => 'required|min:4|max:16'
            ],
            [
                'username.required' => '',
                'username.min' => 'Minimal 8 Karakter Untuk Username',
                'username.max' => 'Maksimal 16 Karakter Untuk Username',
                'password.min' => 'Minimal 4 Karakter Untuk Password',
                'password.max' => 'Maksimal 16 Karakter Untuk Password'
            ]
        );

        DB::transaction(function () use ($request) {
            $users = new User();
            $users->name = "" . $request->firstname . " " . $request->lastname . "";
            $users->username = $request->username;
            $users->password = bcrypt($request->password);
            $users->save();
        });
        return redirect()->route('index_login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
