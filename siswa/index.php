<?php
session_start();
include_once('koneksi.php');
if (isset($_POST['submit']) ) {
    $user = $_POST['nama'];
    $pass = $_POST['password'];

    $sql = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE id_user='$user' AND kata_sandi='$pass'") or die(mysql_error());

    if (mysqli_num_rows($sql) == 0) {
        echo "Login Gagal";
    }else {
        $row = mysqli_fetch_assoc($sql);
        if ($row['role'] == 1) {
            $_SESSION['id_user']=$user;
            header('location: admin/dashboard.php?id='.$pass);
          }elseif ($row['role'] == 2) {
            $_SESSION['id_user']=$user;
            header('location:admin/dashboard.php?id='.$pass);
          }elseif ($row['role'] == 3) {
            $_SESSION['id_user']=$user;
            header('location:admin/dashboard.php?id='.$pass);
          }elseif ($row['role'] == 4) {
            $_SESSION['id_user']=$user;
            header('location:user/dashboard.html?id='.$pass);
    }
}
}
?>



  <form>
    <table>
      <th>No</th>
      <th>NISN</th>
      <th>Nama</th>
      <th>Kelas</th>

      <tr>
       <?php
            include_once("koneksi.php");
            $query="SELECT * FROM tb_siswa";
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
