<div class="konten">
<div class="galeri">
	<div class="container">
		<center><h1>GALERI</h1></center>
		<hr>
		<br>
		<center>
		<div class="row">
			
<?php
			require "admin/conn.php";
			$sql=mysql_query("SELECT * FROM galeri ORDER BY id_foto DESC") or die(mysql_error());
			
			while ($row=mysql_fetch_array($sql))
			{
				$id=$row['id_foto'];
				echo "
			<div class='col-sm-3'>
				<a href='dasar.php?page=detail&id=".$id."'><img id='myImg' src='gambar/".$row['nama_foto']."' width='250' height='180'>
				<h4>".$row['judul_foto']."</h4></a>
			</div>";
			}
?>
		</div>
		</center>
		
	</div>	
</div>
</div>
