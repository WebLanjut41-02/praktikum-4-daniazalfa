
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
	</tr>
</thead>

	<?php
	$no=1;
	foreach($result as $r) {
		?>
	<tr>
		<td><?php echo $no ?></td>
		<td><?php echo $r->nik ?></td>
		<td><?php echo $r->nama ?></td>
		<td><?php echo $r->alamat ?></td>
		<td><?php echo $r->nohp ?></td>
	</tr>
	<?php
		$no++;
		}
	?>
</table><br>
</div>