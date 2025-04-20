<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    // menampilkan semua data obat
    public function index()
    {
        // ambil semua data dan ditampilkan
        $obats = Obat::all();
        return view('obat');
    }
}