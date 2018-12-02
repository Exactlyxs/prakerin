<?php
    include '../../koneksi.php';
    $id_magang = $_GET['id'];
    $query = "SELECT * FROM tb_magang WHERE id_magang='$id_magang'";
    $sql = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($sql);
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
                        <a class="nav-link btn btn-danger btn-sm" href="#">LOGOUT</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Batas Sidebar -->
        <div class="container border border-dark rounded">
            <h1>Hapus Tempat Magang ini?</h1>
            <form action="" method="post">
                <div class="form-group">
                    <label>Nama Prakerin</label>
                    <input type="text" name="magang" disabled class="form-control w-50" value="<?php echo $row['nama_magang'] ?>" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label>Alamat Prakerin</label>
                    <textarea name="alamat" disabled class="form-control w-50" rows="5"><?php echo $row['alamat_magang'] ?></textarea>
                </div>
                <div class="form-group">
                    <label>Deskripsi Prakerin</label>
                    <textarea name="deskripsi" disabled class="form-control w-50" rows="5"><?php echo $row['deskripsi_magang'] ?></textarea>
                </div>
                <div class="form-group">
                    <label>Kapasitas Prakerin</label>
                    <select class="form-control w-50" name="kapasitas" disabled id="exampleFormControlSelect1">
                        <option value="<?php echo $row['kapasitas_magang'] ?>"><?php echo $row['kapasitas_magang'] ?></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Jurusan</label>
                    <select class="form-control w-50" name="jurusan" disabled id="exampleFormControlSelect1">
                        <option value="<?php echo $row['genre'] ?>"><?php echo $row['genre'] ?></option>
                        <option value="PS">Pekerja Sosial</option>
                        <option value="TKJ">Teknik Komputer Jaringan</option>
                        <option value="BCT">Bordcasting</option>
                        <option value="ANM">Animasi</option>
                        <option value="MM">Multimedia</option>
                        <option value="RPL">Rekayasa Perangkat Lunak</option>
                        <option value="KI">Kimia Industri</option>
                        <option value="DI">Design Interior</option>
                    </select>
                </div>

                <a href="delete_dudiAction.php?id=<?php echo $id_magang ?>" class="btn btn-md btn-primary" >Hapus</a></button>
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
