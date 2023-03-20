<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{
    public function index()
    {
        $listaplikasi = DB::table('listapp')->get();

        return view('dashboard.listaplikasi.index',['listaplikasi' => $listaplikasi]);
    }

    public function create()
    {
        return view('dashboard.listaplikasi.create');
    }

    public function store (Request $request)
    {
        DB::table('listapp')->insert([
            'name' => $request->name,
            'mainday' => $request->mainday,
            'price' => $request->price,
            'developer' => $request->developer,
            'feature' => $request->feature
        ]);

        return redirect('dashboard/listaplikasi/');
    }
    public function edit ($id) {
        $listaplikasi = DB::table('listapp') -> where ('id', $id)->get();

        return view('dashboard.listaplikasi.edit', ['listaplikasi' => $listaplikasi]);
    }
    public function update(Request $request)
    {
        DB::table('listapp')->where('id', $request->id) ->update([
            'name' => $request->name,
            'mainday' => $request->mainday,
            'price' => $request->price,
            'developer' => $request->developer,
            'feature' => $request->feature
        ]);

        return redirect('dashboard/listaplikasi/');
    }
    public function delete($id) {
        DB::table('listapp')->where('id', $id)->delete();

        return redirect('dashboard/listaplikasi/');
    }
}
