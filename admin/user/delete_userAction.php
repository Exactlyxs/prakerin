<?php
	include '../../koneksi.php';
	$id = $_GET['id'];

	$query = "DELETE FROM tb_user WHERE id_user='$id'";
	$sql = mysqli_query($koneksi, $query);
	if ($sql) {
		echo "<script>alert('Berhasil Menghapus User');window.location='../admin-dash.php'</script>";
	}
	else{
		echo "Gagal Di Hapus";
	}
 ?>
