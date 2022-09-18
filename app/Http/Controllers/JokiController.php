<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJokiRequest;
use App\Http\Requests\UpdateJokiRequest;
use App\Models\Joki;
use Illuminate\Http\Request;

class JokiController extends Controller
{

    public function index_joki()
    {
        return view('dashboard.jokiMaster', [
            'title' => 'Data Master Joki'
        ]);
    }

    public function joki_store(Request $request)
    {
        $request->validate([
            'nama_joki' => 'required',
            'harga' => 'required'
        ]);

        $joki = new Joki();
        $joki->nama_joki = $request->nama_joki;
        $joki->deskripsi = $request->deskripsi;
        $joki->harga = $request->harga;
        $joki->save();
    }
}
