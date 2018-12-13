<?php 
	include '../../koneksi.php';
	 ?>

<div class="container">
<?php 
	if(isset($_POST['submit']))
	{
		$judul = $_POST['judul'];
		$isi = $_POST['isi'];
		$pembuat = $_POST['pembuat'];

		//-----

		$query = "INSERT INTO tb_mading(judul, isi, pembuat) VALUES('$judul', '$isi', '$pembuat')";
		
		if (mysqli_query($koneksi, $query)) {
			$lastId = mysqli_insert_id($koneksi);
			
			echo "<script>alert('Berhasil Menambah Mading');window.location='../admin-dash.php'</script>";
		}
		else{
			echo "Gagal Memasukkan";
		}
	}
 ?>