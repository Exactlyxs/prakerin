<?php
include "../../koneksi.php";

if(isset($_POST['submit'])){

  $nama_magang = $_POST['magang'];
	$alamat_magang = $_POST['alamat'];
	$deskripsi_magang = $_POST['deskripsi'];
  $kapasitas = $_POST['kapasitas'];
	$genre = implode(', ', $_POST['jurusan']);

		$query = "INSERT INTO tb_magang (nama_magang, alamat_magang, deskripsi_magang, kapasitas_magang, genre) VALUES ('$nama_magang', '$alamat_magang', '$deskripsi_magang', '$kapasitas', '$genre')";
	  	$sql  = mysqli_query($koneksi,$query);

	  	if ($sql) {// cek jika proses menyimpan sukses atau tidak
	    //jika sukses
			echo "<script>alert('Berhasil Menambah Tempat Prakerin');window.location='../admin-dash.php'</script>";
   	 }else{
	    //jika gagal
	    echo "gagal";

	  	}
    }
  ?>
