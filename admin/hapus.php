<?php
	require "conn.php";
	$id_foto = $_GET['id'];
	$sql_delete = mysql_query("delete from galeri where id_foto='$id_foto'");
	
	if ($sql_delete)
	{
		echo "
		<script>alert('Data Galeri Berhasil Dihapus'); window.location.href = 'dasar.php?page=admin_galeri';</script>";
	}
	else
	{
		echo "<script>alert('Data Galeri Gagal Dihapus'); window.location.href = 'dasar.php?page=admin_galeri';</script>";
	}
?>