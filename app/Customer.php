<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	//
    protected $table = 'customer';

    //default id
    protected $primaryKey = 'customer_id';

    public $timestamps = false;
    //attribute
    protected $fillable = [
    	'customer_id', 
    	'name', 
    	'addres'
    ];

}


