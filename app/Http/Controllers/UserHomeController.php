<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserHomeController extends Controller
{
    public function index()
    {
        $data['result'] = \App\UserHome::orderBy('nama_barang')->get();
        return view('user/home')->with($data);
    }

    public function indexbarang()
    {
        $data['result'] = \App\UserHome::orderBy('nama_barang')->get();
        return view('user/barang')->with($data);
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
 
        $data = \DB::table('barang')
        ->where('nama_barang','like',"%".$cari."%")
        ->paginate();
 
        return view('user/barang',['result' => $data]);
 
    }

}
