<html>
<?php
session_start();

$id = $_SESSION['id_user'];
//print_r($id);
if (!$id) {
    echo "<script>alert('Anda Belum Login!!');window.location='../index.php'</script>";
}
else{


	include '../koneksi.php';
	$querymading = "SELECT * FROM tb_mading";
    $querymagang = "SELECT * FROM tb_magang";
    $queryuser = "SELECT * FROM tb_user";

    $sql1 = mysqli_query($koneksi, $querymading);
    $sql2 = mysqli_query($koneksi, $querymagang);
    $sql3 = mysqli_query($koneksi, $queryuser);

 ?>
<!-- link css and Bootsrap -->

<!-- link css and Bootsrap -->

<head>
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style_Sidebar.css">
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
            <a class="navbar-brand" href="admin-dash.php"> <img src="../assets/images/smkLogo.png" width="30"></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- SideBar Isi -->
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav animate side-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="admin-dash.php">DASHBOARD
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
                        <a class="nav-link btn btn-danger btn-sm" href="../logout.php">LOGOUT</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Content -->
        <!-- Mading -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <h1>Manage Pengumuman</h1>
                    <a href="mading/add_mading.php" class="btn btn-success my-2">Tambah</a>
                    <div class="mading">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>isi</th>
                                    <th>Pembuat</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
	 		$no = 1;
	 		while ($row = mysqli_fetch_assoc($sql1)):
	 		$id = $row['id_mading'];
	 	 ?>
                                <tr>
                                    <td>
                                        <?php echo $no ?>
                                    </td>
                                    <td>
                                        <?php echo $row['judul'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['isi'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['pembuat'] ?>
                                    </td>
                                    <td>
                                        <a href="mading/edit_mading.php?id=<?php echo $id ?>" class="btn btn-primary">Edit</a><br><br>
                                        <a href="mading/delete_mading.php?id=<?php echo $id ?>" class="btn btn-danger">Hapus</a>
                                    </td>

                                </tr>
                                <?php
	 	$no++;
	 	endwhile; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Tempat Prakerin -->
                <div class="col-lg-6">
                    <h1>Manage Tempat Prakerin</h1>
                    <a href="dudi/add_dudi.php" class="btn btn-success my-2">Tambah</a>
                    <div class="mading">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Tempat</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                while ($row = mysqli_fetch_assoc($sql2)):
                                $id = $row['id_magang'];
													 ?>
                                <tr>
                                    <td scope="row">
                                        <?php echo $no ?>
                                    </td>
                                    <td>
                                        <?php echo $row['nama_magang'] ?>
                                    </td>
                                    <td><a href="dudi/edit_dudi.php?id=<?php echo $id ?>"" class=" btn btn-primary m-2">Edit</a>
                                        <a href="dudi/delete_dudi.php?id=<?php echo $id ?>"" class=" btn btn-danger
                                            m-2">Hapus</a></td>
                                </tr>
                                <?php
                                $no++;
                                endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- User -->
                <div class="col-lg-6">
                    <h1>Manage User</h1>
                    <a href="user/add_user.php" class="btn btn-success my-2">Tambah</a>
                    <div class="mading">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jurusan</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                while ($row = mysqli_fetch_assoc($sql3)):
                                $id = $row['id_user'];
													 ?>
                                <tr>
                                    <td scope="row">
                                        <?php echo $no ?>
                                    </td>
                                    <td scope = "row">
                                        <?php echo $row['nama'] ?>
                                    </td>
                                    <td scope = "row">
                                        <?php echo $row['jurusan'] ?>
                                    </td>
                                    <td><a href="user/edit_user.php?id=<?php echo $id ?>"" class=" btn btn-primary m-2">Edit</a>
                                        <a href="user/delete_user.php?id=<?php echo $id ?>"" class=" btn btn-danger
                                            m-2">Hapus</a></td>
                                </tr>
                                <?php
                                $no++;
                                endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script src="../assets/js/main.js"></script>

</body>

</html>
<?php
}
?>
