<div class="container">
	<div class="ubah_g">
		<center>
			<h1>galeri</h1>
			<hr style="max-width:580px;">
		</center>
		<br>
		<center>
		<div class="row">
			
<?php
			require "conn.php";
			$sql=mysql_query("SELECT * FROM galeri ORDER BY id_foto DESC") or die(mysql_error());
			
			while ($row=mysql_fetch_array($sql))
			{
				$id=$row['id_foto'];
				echo "
			<div class='col-sm-3'>
				<a href='dasar.php?page=ubah_galeri&id=".$id."'><img id='myImg' src='../gambar/".$row['nama_foto']."' width='250' height='180'>
				<h4>".$row['judul_foto']."</h4></a>
			</div>";
			}
?>
		</div>
		</center>
		
</div>	
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
