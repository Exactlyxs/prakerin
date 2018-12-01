<?php
  if (isset($_POST['submit'])) {
    $nama_gambar = $_POST['nama_gambar'];
    $lokasi = $_FILES['berkas']['tmp_name'];
    $temp = explode(".", $_FILES['berkas']['name']);
    $nama_baru = $nama_gambar .".". $temp[1];
    move_uploaded_file($lokasi, "assets/images/".$nama_baru);
    echo "Gambar telah di upload";
  }
 ?>
