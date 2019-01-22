<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Karyawan;

class KaryawanController extends Controller
{
    function index(){
    	//echo 'hello world, u can access controller ~';

    	$karyawan = Karyawan::get(['id_karyawan', 
    		'nama_karyawan', 
    		'alamat_karyawan',
    		'telpon_karyawan']);

    	// var_dump($karyawan);
    	return view('karyawan.index', compact('karyawan'));
    }

    function create(){
    	return view('karyawan.create');
    }

    function store(Request $request){
    	$txtId = $request->input('txt_id');
    	$txtName = $request->input('txt_name');
    	$txtAddress = $request->input('txt_address');
    	$txtTelpon = $request->input('txt_telpon');

    	Karyawan::create
    	([
    		'id_karyawan' => $txtId, 
    		'nama_karyawan' => $txtName, 
    		'alamat_karyawan' => $txtAddress,
    		'telpon_karyawan' => $txtTelpon
    	]);

    	return redirect('/Karyawan');
    }

    public function show($id) {
    	echo 'Ngetes Show';
    }

}
