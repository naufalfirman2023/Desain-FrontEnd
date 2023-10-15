<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Product extends Controller
{
    public function index()
    {
        $produk = DB::select('select * from produk ');
        $harga = DB::table('produk')->select('harga_produk')->get();

        return view('layout.produk',compact('produk', 'harga'));
    }
}
