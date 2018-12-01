<html>

<head>
  <title>Buku Siswa</title>
  <!-- <link rel="stylesheet" type="text/css" href="../assets/css/style.css"> -->
  <!-- <link rel="stylesheet" type="text/css" href="../assets/css/style_Sidebar.css"> -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Mina:700" rel="stylesheet">
</head>

<body>
  <?php
  include_once('koneksi.php');
?>

  <div class="container">
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
            $query="SELECT * FROM tb_siswa";
            $sql = mysqli_query($koneksi, $query);
            $no =1;

            while ($data=mysqli_fetch_assoc($sql)):
            ?>


          <!-- <tr> -->
          <td>
            <?php echo $no; ?>
          </td>
          <td>
            <?php echo $data['nisn']; ?>
          </td>
          <td>
            <?php echo $data['nama_siswa']; ?>
          </td>
          <td>
            <?php echo $data['rombel_saat_ini']; ?>
          </td>
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

  </div>
</body>

</html>