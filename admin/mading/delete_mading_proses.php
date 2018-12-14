<?php 
	include '../../koneksi.php';
	$id = $_GET['id'];
    
	$query = "DELETE FROM tb_mading WHERE id_mading='$id'";
	$sql = mysqli_query($koneksi, $query);
    
    if ($sql) {
		echo "<script>alert('Berhasil Menghapus Mading');window.location='../admin-dash.php'</script>";
	}
	else{
		echo "Gagal Di Hapus";
	}
 ?>
