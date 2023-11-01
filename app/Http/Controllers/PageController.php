<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GameInfo;
use Illuminate\Support\Facades\Cache;

class PageController extends Controller
{

    public function index()
    {
        $time_start = microtime(true);

        // $games = GameInfo::all();
        // dd($games); // Cek apakah data berhasil diambil dari database
        for ($i = 0; $i < 100; $i++) {
            if (Cache::has('game')) {
                $games = Cache::get('game');
            } else {
                $games = GameInfo::all();
                Cache::put('game', $games, 60);
            }
        }
        return view('page', [
            "games" => $games
        ]);
    }
}
