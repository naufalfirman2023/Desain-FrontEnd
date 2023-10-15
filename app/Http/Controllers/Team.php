<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Team extends Controller
{
    public function index()
    {
        $data_team = DB::select('select * from pengurus ');
        return view('layout.team', compact('data_team'));
    }
}
