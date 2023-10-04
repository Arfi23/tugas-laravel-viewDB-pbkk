<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GameInfo;

class PageController extends Controller
{

    public function index()
    {
        $games = GameInfo::all();
        // dd($games); // Cek apakah data berhasil diambil dari database
        return view('page', [
            "games" => $games
        ]);
        
    }
}








