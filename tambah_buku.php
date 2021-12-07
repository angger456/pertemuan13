<?php 
	include "header.php";
?>

<div class="container">
	<h3>Tambah Data Buku</h3>
	<form action="proses_tambah_buku.php" method="post">
		Judul buku :
		<input type="text" name="judul_buku" value="" class="form-control">
		Deskripsi :
		<input type="text" name="deskripsi" value="" class="form-control"><br>
		<input type="submit" name="simpan" value="simpan" class="btn btn-primary">
	</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</div>
