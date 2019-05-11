<?php
	session_start();
	require "conn.php";
	
	$nama_foto=isset($_FILES['nama_foto'] ['name']) ? $_FILES['nama_foto'] ['name'] : null; // Mendapatkan nama gambar
	$tipe=isset($_FILES['nama_foto'] ['type']) ? $_FILES['nama_foto'] ['type'] : null; // Mendapatkan tipe gambar
	
	//lokasi foto
	$lokasi=isset($_FILES['nama_foto'] ['tmp_name']) ? $_FILES['nama_foto'] ['tmp_name'] : null;
	// Menyiapkan tempat nemapung gambar yang diupload
	$lokasitujuan="../gambar";
	// Menguplaod gambar kedalam folder ./imgresep
	$upload=move_uploaded_file($lokasi,$lokasitujuan."/".$nama_foto);
	$judul_foto = $_POST['judul_foto'];
	$informasi_foto = $_POST['informasi_foto'];
	
	$ceknama = mysql_query("SELECT * FROM galeri WHERE nama_foto = '$nama_foto'") or die(mysql_error());
	$row=mysql_fetch_array($ceknama);
	if (strlen($nama_foto)<1)
	{
		echo "<script>alert('Belum ada foto yang dipilih.'); window.location.href = 'dasar.php?page=tambah_galeri'; </script>";
	}
	else
	{
		$format = array("image/jpg","image/jpeg","image/gif","image/png");
		if(!in_array($tipe,$format)) //cek format foto
		{
			echo "<script>alert('Foto Anda gagal diupload. Silahkan memilih foto dengan format JPG, JPEG, GIF atau PNG'); window.location.href = 'dasar.php?page=tambah_galeri'; </script>";
		}
		else 
		{
			if(isset($row['nama_foto'])) //cek nama foto
			{
				echo "<script>alert('Foto yang ingin anda upload memiliki nama yang sudah terdaftar. Silahkan mengganti dengan nama yang berbeda.'); </script>";
			}
			else
			{
				$sql=mysql_query("INSERT INTO galeri(nama_foto,judul_foto,informasi_foto) VALUES('$nama_foto','$judul_foto','$informasi_foto')") or die(mysql_error());
				if ($sql)
				{
					echo "<script>alert('Foto Anda Berhasil Ditambahkan Di Galeri'); window.location.href = 'dasar.php?page=admin_galeri';</script>";
				}
				else
				{
					echo "<script>alert('Foto Anda Gagal Ditambahkan Di Galeri. Silahkan Coba Kembali'); window.location.href = 'dasar.php?page=admin_galeri';</script>";			
				}
			}
		}
	}
	mysql_close();
?>