<?php 
if ($_POST) {
	$judul_buku=$_POST['judul_buku'];
	$deskripsi=$_POST['deskripsi'];
	if (empty($judul_buku)) {
		echo "<script>alert('judul buku tidak boleh kosong');location.href='tambah_buku.php';</script>";

	} elseif (empty($deskripsi)) {
		echo "<script>alert('deskripsi tidak boleh kosong');location.href='tambah_buku.php';</script>";

	

	} else {
		include "koneksi.php";
		$insert=mysqli_query($conn, "insert into buku (judul_buku, deskripsi) value ('".$judul_buku."', '".$deskripsi."')") or die(mysqli_error($conn));
		if ($insert) {
			echo "<script>alert('Sukses menambahkan data buku');location.href='tambah_buku.php';</script>";
		} else {
			echo "<script>alert('Gagal menambahkan data buku');location.href='tambah_buku.php';</script>";
		}
	}
}
?>