<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    public $primaryKey = 'no_transaksi';

    protected $table = 'transaksi';

    protected $fillable = [
    	'no_transaksi', 'nama_barang', 'qty', 'harga', 'tot_harga'
    ];

}
