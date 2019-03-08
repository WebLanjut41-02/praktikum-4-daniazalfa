<table>
<form action="<?=base_url().'index.php/user/update'?>" method="POST">
	<tr>
		<td>NIK</td>
		<td>:</td>
		<td><input type="hidden" name="nik" value="<?=$r['nik']?>"><?=$r['nik']?></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama" value="<?=$r['nama']?>"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><input type="text" name="alamat" value="<?=$r['alamat']?>"></td>
	</tr>
	<tr>
		<td>No Hp</td>
		<td>:</td>
		<td><input type="text" name="nohp" value="<?=$r['nohp']?>"></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="submit" value="submit"></td>
</form>
</table>