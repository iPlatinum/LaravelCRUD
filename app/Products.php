<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    protected $table = 'products';

    //attribute
    protected $filltable = [
    	'product_id', 
    	'name', 
    	'price',
    	'image',
    	'description'
    ];
}
