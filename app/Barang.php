<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    public $primaryKey = 'id_barang';

    protected $table = 'barang';

    protected $fillable = [
    	'nama_barang', 'harga', 'gambar'
    ];
}
