<?php
include "../../koneksi.php";

if(isset($_POST['submit'])){
	
  $username = $_POST['username'];
	$password = $_POST['confirm_password'];
	$nama = $_POST['nama'];
  $role = $_POST['role'];
	$jurusan = $_POST['jurusan'];
	$query = "INSERT INTO tb_user(id_user, kata_sandi, nama, role, jurusan) VALUES ('$username', '$password', '$nama', '$role', '$jurusan')";
	$sql  = mysqli_query($koneksi,$query);

	  	if ($sql) {// cek jika proses menyimpan sukses atau tidak
	    //jika sukses
			echo "<script>alert('Berhasil Menambah User');window.location='../admin-dash.php'</script>";
	 	 }else{
	    //jika gagal
	    echo "gagal";
	  	}
		}
  ?>