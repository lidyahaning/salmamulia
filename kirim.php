<?php
$nama = $_POST['nama'];
$perihal = $_POST['perihal'];
$title = "[PENGUNJUNG] ".$perihal;
$email = $_POST['email'];
$pesan = $_POST['pesan'];
$header = "Dari : ".$nama." <".$_POST['email']."> ";
$to = "lidya.haning@gmail.com";

// mengirim email
$kirim = @mail($to, $title, $pesan, $header);

// cek status pengiriman email
if ($kirim) 
{
    echo "<script>alert('Pesan Anda Berhasil Dikirimkan'); window.location.href = 'dasar.php?page=kontak';</script>";
}
else 
{
	echo "<script>alert('Terjadi Kesalahan. Pesan Anda Gagal Dikirimkan'); window.location.href = 'dasar.php?page=kontak';</script>";
}

?>