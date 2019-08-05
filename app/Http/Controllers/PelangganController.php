<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
    	$data['result'] = \App\Pelanggan::all();
    	return view('admin/pelanggan')->with($data);
    }

    public function create()
    {
    	return view('admin/formPelanggan');
    }

    public function store(Request $request)
    {
        $rules = [
            'nama_user' => 'required|max:100',
            'username'  => 'required|max:100',
            'password'  => 'required|max:100'
        ];
        $this->validate($request, $rules);

    	$input = $request->all();
    	$status = \App\Pelanggan::create($input);

    	if ($status) return redirect('/pelanggan')->with('success', 'Data berhasil ditambahkan');
        else return redirect('/pelanggan')->with('error', 'Data gagal ditambahkan');
    }

    public function edit(Request $request, $id)
    {
        $data['result'] = \App\Pelanggan::where('id_login', $id)->first();
        return view('admin/formPelanggan')->with($data);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'nama_user' => 'required|max:100',
            'username'  => 'required|max:100',
            'password'  => 'required|max:100'
        ];
        $this->validate($request, $rules);

        $input  = $request->all();
        $result = \App\Pelanggan::where('id_login', $id)->first();
        $status = $result->update($input);

        if ($status) return redirect('/pelanggan')->with('success', 'Data berhasil diubah');
        else return redirect('/pelanggan')->with('error', 'Data gagal diubah');
    }

    public function destroy(Request $request, $id)
    {
        $result = \App\Pelanggan::where('id_login', $id)->first();
        $status = $result->delete();

        if ($status) return redirect('/pelanggan')->with('success', 'Data berhasil dihapus');
        else return redirect('/pelanggan')->with('error', 'Data gagal dihapus');
    }
}
