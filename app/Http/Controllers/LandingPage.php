<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingPage 
{
    public function index()
    {
        $produk = DB::select('select * from produk ');
 
        return view('layout.home');
    }
}
