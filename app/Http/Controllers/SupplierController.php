<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;

class SupplierController extends Controller
{
    function index(){
    	//echo 'hello world, u can access controller ~';

    	$supplier = Supplier::get(['supplier_id', 
    		'supplier_name', 
    		'supplier_address']);

    	// var_dump($supplier);
    	return view('supplier.index', compact('supplier'));
    }

    function create(){
    	return view('supplier.create');
    }


    function store(Request $request){
    	// echo 'cobak';
    	$txtId = $request->input('txt_id');
    	$txtName = $request->input('txt_name');
    	$txtAddress = $request->input('txt_address');

    	

    	Supplier::create
    	([
    		'supplier_id' => $txtId, 
    		'supplier_name' => $txtName, 
    		'supplier_address' => $txtAddress
    	]);

    	return redirect('/Supplier');
    }
}
