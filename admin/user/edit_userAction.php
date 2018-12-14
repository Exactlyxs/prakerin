<?php
	include '../../koneksi.php';

	if(isset($_POST['submit']))
	{
		$id = $_GET['id'];
		$password = $_POST['confirm_password'];
		$nama = $_POST['nama'];
	  	$role = $_POST['role'];
		$jurusan = $_POST['jurusan'];
		$query = "UPDATE tb_user SET kata_sandi = '$password', nama = '$nama', role = '$role', jurusan = '$jurusan' WHERE id_user = '$id'";
		$sql = mysqli_query($koneksi, $query);
		if ($sql) {
			echo "<script>alert('Berhasil Memperbaharui User');window.location='../admin-dash.php'</script>";
		}
		else{
			echo "Data Gagal di Update!!";

		}

	}
	else{
		echo "gagal";
	}


 ?>
