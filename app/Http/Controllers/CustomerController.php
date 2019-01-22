<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    function index(){
    	//echo 'hello world, u can access controller ~';

    	$customer = Customer::get(['customer_id', 
    		'name', 
    		'addres']);

    	//var_dump($customer);
    	return view('customer.index', compact('customer'));
    }



    function create(){
    	return view('customer.create');
    }


    function store(Request $request){
    	// echo 'cobak';
    	$txtId = $request->input('txt_id');
    	$txtName = $request->input('txt_name');
    	$txtAddress = $request->input('txt_address');

    	// echo $txtId."<br>".$txtName."<br>".$txtAddress;

    	Customer::create([
    		'customer_id' => $txtId, 
    		'name' => $txtName, 
    		'addres' => $txtAddress
    	]);

    	return redirect('/Customer');
    }

    public function show($id) {
        // //ibarat (select * from Customer where customer_id = $id)
        // return view('customer.show', ['customer' => Customer::where('customer_id', $id)]);

        $customer = Customer::where('customer_id', $id)->get();
        return view('customer.show', compact('customer'));
    }

    public function edit($id) {
        // return view('customer/edit', ['customer' => Customer::where('customer_id', $id)]);

        $customer = Customer::where('customer_id', $id)->get();
        return view('customer.edit', compact('customer'));
    }

    public function update(Request $request, $id) {
        
        $txtId = $request->input('txt_id');
        $txtName = $request->input('txt_name');
        $txtAddress = $request->input('txt_address');

        Customer::where('customer_id', $id)->update([
            'name' => $txtName,
            'addres' => $txtAddress
        ]);

        return redirect('/Customer');
    }

    public function destroy($id){
        $customer = Customer::where('customer_id', $id)->first();
        $customer->delete();
        return redirect('/Customer');
    }
}
