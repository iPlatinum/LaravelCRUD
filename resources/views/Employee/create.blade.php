<form action="/Employee" method="post">
	{{ csrf_field() }}
	
	<label for="txt_id">Id</label>
	<input type="text" name="txt_id" id="txt_id"> <br>
	<label for="txt_name">Nama</label>
	<input type="text" name="txt_name"> <br>
	<label for="txt_address">Alamat</label>
	<input type="text" name="txt_address"> <br>
	<label for="txt_phone">Nomor HP</label>
	<input type="text" name="txt_phone"> <br>
	
	<input type="submit" name="sbm_save" id="sbm_save" value="Simpan">
</form>