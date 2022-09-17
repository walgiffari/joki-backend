<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJokiRequest;
use App\Http\Requests\UpdateJokiRequest;
use App\Models\Joki;

class JokiController extends Controller
{

    public function index_joki()
    {
        return view('dashboard.jokiMaster', [
            'title' => 'Data Master Joki'
        ]);
    }
}
