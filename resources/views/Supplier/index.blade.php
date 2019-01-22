@foreach ($supplier as $supplier_list)
	<p style="color: #ff2003;">{{$supplier_list->supplier_id}}</p>
	{{$supplier_list->supplier_name}} <br>
	{{$supplier_list->supplier_address}} <br>
@endforeach

<br><a href="/Supplier/create">Tambah Data</a>