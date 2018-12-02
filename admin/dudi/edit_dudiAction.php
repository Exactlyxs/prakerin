<?php
	include '../../koneksi.php';

	if(isset($_POST['submit']))
	{
		$id = $_GET['id'];
		$magang = $_POST['magang'];
    $alamat = $_POST['alamat'];
    $deskripsi = $_POST['deskripsi'];
    $kapasitas =$_POST['kapasitas'];
    $jurusan = $_POST['jurusan'];
		$query = "UPDATE tb_magang SET nama_magang = '$magang', alamat_magang = '$alamat', deskripsi_magang = '$deskripsi', kapasitas_magang = $kapasitas genre = $jurusan WHERE id_magang = '$id'";
		$sql = mysqli_query($koneksi, $query);
		if ($sql) {
			echo "Data Berhasil Update";
			header("location:../admin-dash.php");
		}
		else{
			echo "Data Gagal di Update!!";

		}

	}
	else{
		echo "gagal";
	}


 ?>
