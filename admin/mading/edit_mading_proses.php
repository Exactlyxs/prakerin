<?php
	include '../../koneksi.php';

	if(isset($_POST['submit']))
	{
		$id = $_GET['id'];
		$judul = $_POST['judul'];
		$isi = $_POST['isi'];
		$pembuat = $_POST['pembuat'];

		$query = "UPDATE tb_mading SET judul = '$judul', isi = '$isi', pembuat = '$pembuat' WHERE id_mading = '$id'";
		$sql = mysqli_query($koneksi, $query);
		if ($sql) {
			echo "<script>alert('Berhasil Memperbahuri Mading');window.location='../admin-dash.php'</script>";
		}
		else{
			echo "Data Gagal di Update!!";

		}

	}
	else{
		echo "gagal";
	}


 ?>
