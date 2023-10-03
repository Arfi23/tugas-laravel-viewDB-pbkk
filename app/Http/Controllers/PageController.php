<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GameInfo;

class PageController extends Controller
{
    // public function index()
    // {
    //     return view('page', [
    //         "games" => GameInfo::all()
    //     ]);
    // }

    // public function index()
    // {
    //     $games = GameInfo::all();
    //     // dd($games); // Cek apakah data berhasil diambil dari database
    //     return view('page', [
    //         "games" => $games
    //     ]);
    // }

    public function index()
    {
        // dd($games); // Cek apakah data berhasil diambil dari database
        return view('page', GameInfo::all());
    }
}








