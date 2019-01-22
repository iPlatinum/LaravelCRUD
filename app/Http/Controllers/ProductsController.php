<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class ProductsController extends Controller
{
    function index(){
    	//echo 'hello world, u can access controller ~';

    	$products = Products::get(['product_id', 
    		'name', 
    		'price',
    		'image',
    		'description']);

    	// var_dump($products);
    	return view('products.index', compact('products'));
    }
}
