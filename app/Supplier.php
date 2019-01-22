<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //
    protected $table = 'supplier';

    public $timestamps = false;
    //attribute
    protected $fillable = [
    	'supplier_id', 
    	'supplier_name', 
    	'supplier_address'
    ];
}
