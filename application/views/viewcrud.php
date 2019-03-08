<center><
<div class="row mt-3">
  <div class="col-md-5">
   <form action="<?php echo base_url()?>index.php/user/search" method="post">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Cari  . . ." name="keyword">
      <div class="input-group-append">
        <button class="btn btn-primary" type="submit">Cari</button>
      </div>
    </div>
   </form>
  </div>
 </div>
</center>

<center><h1>Data user</h1></center>

<div class="container">
<table border="1" class="table"  class="thead-light">
	<thead class="thead-dark">
	<tr>
		<th>no</th>
		<th>NIK</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>No Hp</th>
		<th>Aksi</th>

	</tr></thead>
	<?php
	$no=1;


	foreach($data as $r) {
		?>
	<tr>
		<td><?php echo $no ?></td>
		<td><?php echo $r['nik'] ?></td>
		<td><?php echo $r['nama'] ?></td>
		<td><?php echo $r['alamat'] ?></td>
		<td><?php echo $r['nohp'] ?></td>
		<td><a href="<?=base_url().'index.php/user/delete/'.$r['nik']?>">Hapus</a> ||
		<a href="<?=base_url().'index.php/user/update/'.$r['nik']?>">Edit</a></td>
	</tr>
	<?php
		$no++;
		}
	?>
</table><br>
</div>