<?php
  include_once("koneksi.php");
?>


<form class="" action="index.html" method="post">

  <td>Nama :</td>
  <td><input type="text" name="nama_siswa" ></td> <br>

  <td>Bio :</td>
  <td><textarea rows="4" cols="50" name="bio" form="usrform" placeholder="Bio..."></textarea></td> <br>

  <td>NIPD :</td>
  <td><input type="text" name="nipd" ></td> <br>

  <td>Jenis Kelamin :</td>
  <td><input type="text" name="jenis_kelamin" ></td> <br>

  <td>NISN :</td>
  <td><input type="text" name="nisn" ></td> <br>

  <td>Tempat Lahir :</td>
  <td><input type="text" name="tempat_lahir" ></td> <br>

  <td>Tanggal Lahir :</td>
  <td><input type="text" name="tanggal_lahir" ></td> <br>

  <td>NIK :</td>
  <td><input type="text" name="nik" ></td> <br>

  <td>Agama :</td>
  <td><input type="text" name="agama" ></td> <br>

  <td>Alamat :</td>
  <td><input type="text" name="alamat" ></td> <br>

  <td>RT :</td>
  <td><input type="text" name="rt" ></td> <br>

  <td>RW :</td>
  <td><input type="text" name="rw" ></td> <br>

  <td>Dusun :</td>
  <td><input type="text" name="dusun" ></td> <br>

  <td>Kelurahan :</td>
  <td><input type="text" name="kelurahan" ></td> <br>

  <td>Kecamatan :</td>
  <td><input type="text" name="kecamatan" ></td> <br>

  <td>Kode POS :</td>
  <td><input type="text" name="kode_pos" ></td> <br>

  <td>Jenis Tinggal :</td>
  <td><input type="text" name="jenis_tinggal" ></td> <br>

  <td>Alat Transportasi :</td>
  <td><input type="text" name="alat_transportasi" ></td> <br>

  <td>Telepon :</td>
  <td><input type="text" name="telepon" ></td> <br>

  <td>HP :</td>
  <td><input type="text" name="hp" ></td> <br>

  <td>Email :</td>
  <td><input type="text" name="email" ></td> <br>

  <td>SKHUN :</td>
  <td><input type="text" name="skhun" ></td> <br>

  <td>Penerima KPS :</td>
  <td><input type="text" name="penerima_kps" ></td> <br>

  <td>Nomor KPS :</td>
  <td><input type="text" name="no_kps" ></td> <br>

  <td>Nama Ayah :</td>
  <td><input type="text" name="nama_ayah" ></td> <br>

  <td>Tahun Lahir Ayah :</td>
  <td><input type="text" name="tahun_lahir_ayah" ></td> <br>

  <td>Jenjang Pendidikan Ayah :</td>
  <td><input type="text" name="jenjang_pendidikan_ayah" ></td> <br>

  <td>Pekerjaan Ayah :</td>
  <td><input type="text" name="pekerjaan_ayah" ></td> <br>

  <td>Penghasilan Ayah :</td>
  <td><input type="text" name="penghasilan_ayah" ></td> <br>

  <td>NIK Ayah :</td>
  <td><input type="text" name="nik_ayah" ></td> <br>

  <td>Nama Ibu :</td>
  <td><input type="text" name="nama_ibu" ></td> <br>

  <td>Tahun Lahir Ibu :</td>
  <td><input type="text" name="tahun_lahir_ibu" ></td> <br>

  <td>Jenjang Pendidikan ibu :</td>
  <td><input type="text" name="jenjang_pendidikan_ibu" ></td> <br>

  <td>Pekerjaan Ibu :</td>
  <td><input type="text" name="pekerjaan_ibu" ></td> <br>

  <td>Penghasilan Ibu :</td>
  <td><input type="text" name="penghasilan_ibu" ></td> <br>

  <td>NIK Ibu :</td>
  <td><input type="text" name="nik_ibu" ></td> <br>

  <td>Nama Wali :</td>
  <td><input type="text" name="nama_wali" ></td> <br>

  <td>Tahun Lahir Wali :</td>
  <td><input type="text" name="tahun_lahir_wali" ></td> <br>

  <td>Jenjang Pendidikan Wali :</td>
  <td><input type="text" name="jenjang_pendidikan_wali" ></td> <br>

  <td>Pekerjaan Wali :</td>
  <td><input type="text" name="pekerjaan_wali" ></td> <br>

  <td>Penghasilan Wali :</td>
  <td><input type="text" name="penghasilan_wali" ></td> <br>

  <td>NIK Wali :</td>
  <td><input type="text" name="nik_wali" ></td> <br>

  <td>Rombel Saat Ini :</td>
  <td><input type="text" name="rombel_saat_ini" ></td> <br>

  <td>Nomor Peserta Ujian :</td>
  <td><input type="text" name="no_peserta_ujian" ></td> <br>

  <td>Nomor Seri Ijazah :</td>
  <td><input type="text" name="no_seri_ijazah" ></td> <br>

  <td>Penerima KIP :</td>
  <td><input type="text" name="penerima_kip" ></td> <br>

  <td>Nomor KIP :</td>
  <td><input type="text" name="nomor_kip" ></td> <br>

  <td>Nomor KKS :</td>
  <td><input type="text" name="nomor_kks" ></td> <br>

  <td>Nomor Reg Akta Lahir :</td>
  <td><input type="text" name="no_reg_akta_lahir" ></td> <br>

  <td>Nomor Rekening Bank :</td>
  <td><input type="text" name="no_rek_bank" ></td> <br>

  <td>Rekening Atas Nama :</td>
  <td><input type="text" name="rekening_atas_nama" ></td> <br>

  <td>Layak PIP :</td>
  <td><input type="text" name="layak_pip" ></td> <br>

  <td>Alasan Layak PIP :</td>
  <td><textarea rows="4" cols="50" name="alasan_layak_pip" form="usrform" placeholder="..."></textarea></td> <br>

  <td>Kebutuhan Khusus :</td>
  <td><input type="text" name="kebutuhan_khusus" ></td> <br>

  <td>Sekolah Asal :</td>
  <td><input type="text" name="sekolah_asal" ></td> <br>

  <td>Anak Ke Berapa :</td>
  <td><input type="text" name="anak_ke_berapa" ></td> <br>

  <td>Biografi</td>
  <td><textarea rows="4" cols="50" name="bio" form="usrform" placeholder="Biografi..."></textarea></td> <br>

</form>
