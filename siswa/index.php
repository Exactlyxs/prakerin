<?php
  include_once('koneksi.php');
?>


 <h1>Siswa</h1>

  <form>
    <table>
      <th>No</th>
      <th>NISN</th>
      <th>Nama</th>
      <th>Kelas</th>

      <tr>
       <?php
            include_once("koneksi.php");
            $query="SELECT * FROM siswa";
            $sql = mysqli_query($koneksi, $query);
            $no =1;

            while ($data=mysqli_fetch_assoc($sql)):
            ?>


        <!-- <tr> -->
          <td><?php echo $no; ?></td>
          <td><?php echo $data['nisn']; ?></td>
          <td><?php echo $data['nama_siswa']; ?></td>
          <td><?php echo $data['rombel_saat_ini']; ?></td>
        <!-- </tr> -->
            <td>
		<!-- <a href="pemilih_edit.php?id=<=?php //echo $data['id_pemilih']; ?>">Edit</a> -->
            <button type="button" class="btn btn-success btn-md" onclick="window.location.href='rinci.php?id=<?php echo $data['nisn']; ?>'">Detail</button>
            </td>
      </tr>
      <?php
      $no++;
      endwhile;
      ?>

  </table>
</form>
<!-- alamat link tapi pakai button !-->
<!-- mun hndk ganti jadi button begambar !-->
  <!-- <button type="button" class="btn btn-success btn-md" onclick="window.location.href='pemilih_add.php'">Add</button> -->
