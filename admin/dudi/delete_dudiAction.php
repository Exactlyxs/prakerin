<?php
	include '../../koneksi.php';
	$id = $_GET['id'];

	$query = "DELETE FROM tb_magang WHERE id_magang='$id'";
	$sql = mysqli_query($koneksi, $query);
	if ($sql) {
		echo "<script>alert('Berhasil Menghapus Tempat Prakerin');window.location='../admin-dash.php'</script>";
	}
	else{
		echo "Gagal Di Hapus";
	}
 ?>
