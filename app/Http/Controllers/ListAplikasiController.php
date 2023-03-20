<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ListAplikasiController extends Controller
{
    public function index()
    {
        $listaplikasi = DB::table('listapp')->get();

        return view('listaplikasi',['listaplikasi' => $listaplikasi]);
    }
    public function show()
    {
        $listaplikasi = DB::table('listapp')->get();

        return view('listaplikasii',['listaplikasi' => $listaplikasi]);
    }
}
