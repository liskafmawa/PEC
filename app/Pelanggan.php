<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    public $primaryKey = 'id_login';

    protected $table = 'user';

    protected $fillable = [
    	'nama_user', 'username', 'password'
    ];
}