<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Makanan;

class MenuController extends Controller
{
    public function index()
    {
        $makanans = Makanan::all();
        return view('menu' ,  compact('makanans'));// Pastikan Anda memiliki view dengan nama BookTable.blade.php
    }
}
