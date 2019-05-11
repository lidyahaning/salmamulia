<?php
	require "conn.php";
	//manggil data
	$sql = mysql_query("SELECT * from galeri WHERE id_foto = '{$_GET['id']}'") or die(mysql_error());
	$r=mysql_fetch_array($sql);
?>

<div class="konten">
<div class="foto">
	<div class="container">
		<center><h1>galeri</h1></center>
		<hr>
		<div class="panel panel-default">
			<div class="panel-body">
				<center><img class="img-responsive img-full" src="../gambar/<?=$r['nama_foto'];?>"></center>
				<br>
				<h3 style="color:#000;"><?=$r['judul_foto'];?></h3>
				<p align="justify"><?=$r['informasi_foto'];?></p>
				<p align="right"><a onclick="return confirm('Apakah Anda yakin akan menghapus foto ini?')" href="dasar.php?page=hapus&id=<?=$r['id_foto'];?>"><button type="button" class="btn btn-danger" name="hapus"><span class="glyphicon glyphicon-remove"></span> Hapus</button></a></p>
			</div>
		</div>
	</div>
</div>
</div>