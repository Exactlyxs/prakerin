<?php
include "../koneksi.php";

if(isset($_POST['submit'])){

  $nama_siswa = $_POST['nama_siswa'];
  $nipd = ["nipd"];
  $jenis_kelamin = ["jenis_kelamin"];
  $nisn = ["nisn"];
  $tempat_lahir = ["tempat_lahir"];
  $tanggal_lahir = ["tanggal_lahir"];
  $nik = ["nik"];
  $agama = ["agama"];
  $alamat = ["alamat"];
  $rt = ["rt"];
  $rw = ["rw"];
  $dusun = ["dusun"];
  $kelurahan = ["kelurahan"];
  $kecamatan = ["kecamatan"];
  $kode_pos = ["kode_pos"];
  $jenis_tinggal = ["jenis_tinggal"];
  $alat_transportasi = ["alat_transportasi"];
  $telepon = ["telepon"];
  $hp = ["hp"];
  $email = ["email"];
  $skhun = ["skhun"];
  $penerima_kps = ["penerima_kps"];
  $no_kps = ["no_kps"];
  $nama_ayah = ["nama_ayah"];
  $tahun_lahir_ayah = ["tahun_lahir_ayah"];
  $jenjang_pendidikan_ayah = ["jenjang_pendidikan_ayah"];
  $pekerjaan_ayah = ["pekerjaan_ayah"];
  $penghasilan_ayah = ["penghasilan_ayah"];
  $nik_ibu = ["nik_ibu"];
  $nama_ibu = ["nama_ibu"];
  $tahun_lahir_ibu = ["tahun_lahir_ibu"];
  $jenjang_pendidikan_ibu = ["jenjang_pendidikan_ibu"];
  $pekerjaan_ibu = ["pekerjaan_ibu"];
  $penghasilan_ibu = ["penghasilan_ibu"];
  $nik_ibu = ["nik_ibu"];
  $nama_wali = ["nama_wali"];
  $tahun_lahir_wali = ["tahun_lahir_wali"];
  $jenjang_pendidikan_wali = ["jenjang_pendidikan_wali"];
  $pekerjaan_wali = ["pekerjaan_wali"];
  $penghasilan_wali = ["penghasilan_wali"];
  $nik_wali = ["nik_wali"];
  $rombel_saat_ini = ["rombel_saat_ini"];
  $no_peserta_ujian = ["no_peserta_ujian"];
  $no_seri_ijazah = ["no_seri_ijazah"];
  $penerima_kip = ["penerima_kip"];
  $nomor_kip = ["nomor_kip"];
  $nomor_kks = ["nomor_kks"];
  $nomor_reg_akta_lahir = ["no_reg_akta_lahir"];
  $nomor_rek_bank = ["no_rek_bank"];
  $rekening_atas_nama = ["rekening_atas_nama"];
  $layak_pip = ["layak_pip"];
  $alasan_layak_pip = ["alasan_layak_pip"];
  $kebutuhan_khusus = ["kebutuhan_khusus"];
  $sekolah_asal = ["sekolah_asal"];
  $anak_ke_berapa =["anak_ke_berapa"];
  $bio = ["bio"];
  $gambar = ["gambar"];





		$query = "INSERT INTO pemilih (nama_pemilih, jurusan, kelas, username, pass, status) VALUES ('$nama', '$jurusan', '$kelas', '$username', '$password', '$status')";
	  	$sql  = mysqli_query($connect,$query);

	  	if ($sql) {// cek jika proses menyimpan sukses atau tidak
	    //jika sukses
	     header("location: pemilih_add.php"); //redirect ke dash board
	 	 }else{
	    //jika gagal
	    echo "maaf terjadi kesalahan saat mencoba untuk menyimpan data ke databse";
	    echo "<br><a href='kandidat_add.php'>kembali ke form</a>";
	  	}
	    // echo "Upload berhasil!<br/>";
	    // echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
	} else {
	    echo "Upload Gagal!";
	}
