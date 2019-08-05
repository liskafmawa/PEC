<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
    	$data['result'] = \App\Transaksi::all();
    	return view('admin/transaksi')->with($data);
    }
}
