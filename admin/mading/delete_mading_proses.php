<?php 
	include '../../koneksi.php';
	$id = $_GET['id'];
    
	$query = "DELETE FROM tb_mading WHERE id_mading='$id'";
	$sql = mysqli_query($koneksi, $query);
    
    if ($sql) {
		echo "Berhasil DiHapus";
		header("location:../admin-dash.php");
	}
	else{
		echo "Gagal Di Hapus";
	}
 ?>
