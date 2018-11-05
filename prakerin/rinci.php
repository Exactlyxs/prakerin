<?php
session_start();
include_once ("koneksi.php");
  $nisn=$_GET['id'];
  $siswa=mysqli_fetch_assoc(mysqli_query($koneksi,"SELECT * FROM siswa WHERE nisn='$nisn'"));

  //header("Refresh:1");
?>
<?php
//require_once("sidebar.php");
?>
  <h1>Edit Pemilih</h1>

    <form action="" method="post" >
      <table>

          <!-- siswa -->
            <p>Nama   : <?php echo $siswa['nama_siswa']?></p>
            <p>Biografi : <?php echo $siswa["bio"] ?></p>
            <p>NIPD   : <?php echo $siswa['nipd']?></p>
            <p>Jenis Kelamin  : <?php echo $siswa['jenis_kelamin']?></p>
            <p>NISN   : <?php echo $siswa['nisn']?></p>
            <p>Tempat Lahir   : <?php echo $siswa['tempat_lahir']?></p>
            <p>Tanggal Lahir   : <?php echo $siswa['tanggal_lahir']?></p>
            <p>NIK   : <?php echo $siswa['nik']?></p>
            <p>Agama   : <?php echo $siswa['agama']?></p>
            <p>Alamat   : <?php echo $siswa['alamat']?></p>
            <p>RT   : <?php echo $siswa['rt']?></p>
            <p>RW   : <?php echo $siswa['rw']?></p>
            <p>Dusun   : <?php echo $siswa['dusun']?></p>
            <p>Kelurahan   : <?php echo $siswa['kelurahan']?></p>
            <p>Kecamatan   : <?php echo $siswa['kecamatan']?></p>
            <p>Kode POS   : <?php echo $siswa['kode_pos']?></p>
            <p>Jenis Tinggal   : <?php echo $siswa['jenis_tinggal']?></p>
            <p>Alat Transportasi   : <?php echo $siswa['alat_transportasi']?></p>
            <p>Telepon   : <?php echo $siswa['telepon']?></p>
            <p>HP   : <?php echo $siswa['hp']?></p>
            <p>Email   : <?php echo $siswa['email']?></p>
            <p>SKHUN   : <?php echo $siswa['skhun']?></p>
            <p>Penerima KPS   : <?php echo $siswa['penerima_kps']?></p>
            <p>Nomor KPS   : <?php echo $siswa['no_kps']?></p>


             <!-- ayah -->
              <p>Nama Ayah   : <?php echo $siswa['nama_ayah']?></p>
              <p>Tahun Lahir Ayah   : <?php echo $siswa['tahun_lahir_ayah']?></p>
              <p>Jenjang Pendidikan Ayah   : <?php echo $siswa['jenjang_pendidikan_ayah']?></p>
              <p>Pekerjaan Ayah   : <?php echo $siswa['pekerjaan_ayah']?></p>
              <p>Penghasilan Ayah   : <?php echo $siswa['penghasilan_ayah']?></p>
               <p>NIK Ayah   : <?php echo $siswa['nik_ayah']?></p>


             <!-- ibu -->
               <p>Nama Ibu   : <?php echo $siswa['nama_ibu']?></p>
               <p>Tahun Lahir Ibu   : <?php echo $siswa['tahun_lahir_ibu']?></p>
               <p>Jenjang Pendidikan Ibu   : <?php echo $siswa['jenjang_pendidikan_ibu']?></p>
               <p>Pekerjaan Ibu   : <?php echo $siswa['pekerjaan_ibu']?></p>
               <p>Penghasilan Ibu   : <?php echo $siswa['penghasilan_ibu']?></p>
               <p>NIK Ibu   : <?php echo $siswa['nik_ibu']?></p>


             <!-- wali -->
               <p>Nama Wali   : <?php echo $siswa['nama_wali']?></p>
               <p>Tahun Lahir Wali   : <?php echo $siswa['tahun_lahir_wali']?></p>
               <p>Jenjang Pendidikan Wali   : <?php echo $siswa['jenjang_pendidikan_wali']?></p>
               <p>Pekerjaan Wali   : <?php echo $siswa['pekerjaan_wali']?></p>
               <p>Penghasilan Wali   : <?php echo $siswa['penghasilan_wali']?></p>
               <p>NIK Wali   : <?php echo $siswa['nik_wali']?></p>


            <!-- siswa -->
            <p>Rombel Saat Ini   : <?php echo $siswa['rombel_saat_ini']?></p>
            <p>Nomor Peserta Ujian   : <?php echo $siswa['no_peserta_ujian']?></p>
            <p>Nomor Seri Ijazah   : <?php echo $siswa['no_seri_ijazah']?></p>
            <p>Penerima KIP   : <?php echo $siswa['penerima_kip']?></p>
            <p>Nomor KIP   : <?php echo $siswa['nomor_kip']?></p>
            <p>Nomor KKS   : <?php echo $siswa['nomor_kks']?></p>
            <p>Nomor Reg Akta Lahir   : <?php echo $siswa['no_reg_akta_lahir']?></p>
            <p>Nomor Rekening Bank   : <?php echo $siswa['no_rek_bank']?></p>
            <p>Rekening Atas Nama   : <?php echo $siswa['rekening_atas_nama']?></p>
            <p>Layak PIP   : <?php echo $siswa['layak_pip']?></p>
            <p>Alasan Layak PIP   : <?php echo $siswa['alasan_layak_pip']?></p>
            <p>Kebutuhan Khusus   : <?php echo $siswa['kebutuhan_khusus']?></p>
            <p>Sekolah Asal   : <?php echo $siswa['sekolah_asal']?></p>
            <p>Anak Ke Berapa   : <?php echo $siswa['anak_ke_berapa']?></p>


      </table>
    </form>
<button type="button" onclick="window.location.href='edit.php?id=<?php echo $siswa['nisn']; ?>'">Edit</button>
    <!--<button type="button" name="kembaliketabel" onclick="goBack()">Done !</button>-->
