@foreach ($karyawan as $karyawan_list)
	<p style="color: #ff2003;">{{$karyawan_list->id_karyawan}}</p>
	{{$karyawan_list->nama_karyawan}} <br>
	{{$karyawan_list->alamat_karyawan}} <br>
	{{$karyawan_list->telpon_karyawan}} <br>
@endforeach