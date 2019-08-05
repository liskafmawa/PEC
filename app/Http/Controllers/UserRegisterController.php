<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserRegisterController extends Controller
{
    public function index()
    {
    	return view('user/register');
    }

    public function create()
    {
    	return view('user/register');
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
    	$status = \App\UserRegister::create($input);

    	if ($status) return redirect('/home')->with('success', 'Data berhasil ditambahkan');
        else return redirect('/register')->with('error', 'Data gagal ditambahkan');
    }
}
