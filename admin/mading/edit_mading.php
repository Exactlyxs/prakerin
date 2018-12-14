<?php
session_start();

$id = $_SESSION['id_user'];
if (!$id) {
    echo "<script>alert('Anda Belum Login!!');window.location='../../index.php'</script>";
}
else{
  include '../../koneksi.php';
  $id_magang = $_GET['id'];
  $query = "SELECT * FROM tb_mading WHERE id_mading='$id_magang'";
  $sql = mysqli_query($koneksi, $query);
  $row = mysqli_fetch_assoc($sql);
  // $hapus = "DELETE tb_magang WHERE id_magang = '$id_magang'";
?>

<html>

<!-- link css and Bootsrap -->

<head>
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/style_Sidebar.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Mina:700" rel="stylesheet">



</head>

<body>
    <!-- SideBar Logo -->
    <div id="wrapper" class="animate">
        <nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark bg-dark">
            <span class="navbar-toggler-icon leftmenutrigger"></span>
            <a class="navbar-brand" href="../admin-dash.php"> <img src="../../assets/images/smkLogo.png" width="30"></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- SideBar Isi -->
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav animate side-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../admin-dash.php">DASHBOARD
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
         <li class="nav-item">
            <a class="nav-link" href="#">MANAGE PRAKERIN</a>
          </li>
                </ul>
                <!-- NavBar -->
                <ul class="navbar-nav ml-md-auto d-md-flex">
                    <li class="nav-item dropdown icon">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user-circle" style="font-size: 20px;"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <center>
                                <p class="dropdown-item" href="#">Riswan Noorhidayat</p>
                                <p class="dropdown-item" href="#">0123456789</p>
                            </center>
                        </div>
                    </li>
                    <li class="nav-item icon">
                        <a class="nav-link btn btn-danger btn-sm" href="../../logout.php">LOGOUT</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Batas Sidebar -->

        <div class="container border border-dark rounded">
            <div class="container">
                <form action="edit_mading_proses.php?id=<?php echo $id_magang ?>" method="post">
                    <h1>Edit Pengumuman</h1>
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control w-50" name="judul" aria-describedby="helpId"
                            value="<?php echo $row['judul'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="isi">Isi</label>
                        <textarea class="form-control w-50" name="isi" rows="3"><?php echo $row['isi'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="pembuat">Pembuat</label>
                        <input type="text" class="form-control w-50" name="pembuat" aria-describedby="helpId"
                            value="<?php echo $row['pembuat'] ?>">
                    </div>
                    <button type="submit" class="btn btn-md btn-primary" name="submit" onclick="return confirm('Yakin ?');">Edit</button>
            </div>
            </form>
        </div>

        <!-- JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
        <script src="../../assets/js/main.js"></script>

</body>

</html>
<?php }?>
