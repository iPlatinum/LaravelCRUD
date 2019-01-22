<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    //
    protected $table = 'karyawan';

    public $timestamps = false;
    //attribute
    protected $fillable = [
    	'id_karyawan', 
    	'nama_karyawan', 
    	'alamat_karyawan',
    	'telpon_karyawan'
    ];
}
