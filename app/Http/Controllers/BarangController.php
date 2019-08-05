<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
    	$data['result'] = \App\Barang::orderBy('nama_barang')->get();
    	return view('admin/barang')->with($data);
    }

    public function create()
    {
    	return view('admin/formBarang');
    }

    public function store(Request $request)
    {
        $rules = [
            'nama_barang' => 'required|max:100',
            'harga'		  => 'required|max:100',
            'gambar'	=> 'required|image|mimes:jpeg,png,jpg|max:2048'
        ];
        $this->validate($request, $rules);

    	$gambar = $request->file('gambar');
    	$nama_file = time()."_".$gambar->getClientOriginalName();
    	$tujuan_upload = 'data_file';
    	$gambar->move($tujuan_upload,$nama_file);

    	//$input = $request->all();
    	$status = \App\Barang::create([
    		'nama_barang' => $request->nama_barang,
    		'harga'       => $request->harga,
    		'gambar'      => $nama_file,
    	]);

    	if ($status) return redirect('/barang')->with('success', 'Data berhasil ditambahkan');
        else return redirect('/barang')->with('error', 'Data gagal ditambahkan');
    }

    public function edit(Request $request, $id)
    {
        $data['result'] = \App\Barang::where('id_barang', $id)->first();
        return view('admin/formBarang')->with($data);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'nama_barang' => 'required|max:100',
            'harga'       => 'required|max:100',
            'gambar'      => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ];
        $this->validate($request, $rules);

        $gambar = $request->file('gambar');
        $nama_file = time()."_".$gambar->getClientOriginalName();
        $tujuan_upload = 'data_file';
        $gambar->move($tujuan_upload,$nama_file);

        $input  = $request->all();
        $result = \App\Barang::where('id_barang', $id)->first();
        $status = $result->update([
            'nama_barang' => $request->nama_barang,
            'harga'       => $request->harga,
            'gambar'      => $nama_file,
        ]);

        if ($status) return redirect('/barang')->with('success', 'Data berhasil diubah');
        else return redirect('/barang')->with('error', 'Data gagal diubah');
    }

    public function destroy(Request $request, $id)
    {
        $result = \App\barang::where('id_barang', $id)->first();
        $status = $result->delete();

        if ($status) return redirect('/barang')->with('success', 'Data berhasil dihapus');
        else return redirect('/barang')->with('error', 'Data gagal dihapus');
    }


    public function cari(Request $request)
    {
        $cari = $request->cari;
 
        $data = \DB::table('barang')
        ->where('nama_barang','like',"%".$cari."%")
        ->paginate();
 
        return view('admin/barang',['result' => $data]);
 
    }


}
