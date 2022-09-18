<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJokiRequest;
use App\Http\Requests\UpdateJokiRequest;
use App\Models\Joki;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class JokiController extends Controller
{

    public function index_joki()
    {
        $datajoki = Joki::orderby('nama_joki', 'asc')->get();
        return view('dashboard.jokiMaster', [
            'title' => 'Data Master Joki',
            'datajoki' => $datajoki,
            'a' => $a = 1
        ]);
    }

    public function tambah_joki()
    {
        return view('dashboard.jokicreateView', [
            'title' => 'Tambah Data Joki'
        ]);
    }

    public function joki_store(Request $request)
    {
        $request->validate([
            'nama_joki' => 'required',
            'harga' => 'required'
        ]);
        // $harga = filter_var($request->harga, FILTER_SANITIZE_NUMBER_INT);

        $joki = new Joki();
        $joki->nama_joki = $request->nama_joki;
        $joki->slug = Str::slug($request->nama_joki, '-');
        $joki->deskripsi = $request->deskripsi;
        $joki->harga = $request->harga;
        $joki->save();
        return redirect()->route('index_joki');
    }

    public function ubah_joki($slug)
    {
        $datajoki = Joki::where('slug', $slug)->first();
        return view('dashboard.jokichangeView', [
            'title' => 'Ubah Joki',
            'datajoki' => $datajoki,
        ]);
    }

    public function ubah_joki_store(Request $request)
    {
        $request->validate([
            'nama_joki' => 'required',
            'harga' => 'required'
        ]);

        $joki = Joki::find($request->id);
        $joki->nama_joki = $request->nama_joki;
        $joki->slug = Str::slug($request->nama_joki, '-');
        $joki->deskripsi = $request->deskripsi;
        $joki->harga = $request->harga;
        $joki->save();
        return redirect()->route('index_joki');
    }

    public function hapus_joki(Request $request)
    {
        $id = $request->get('id');
        Joki::where('id', $id)->delete();
    }
}
