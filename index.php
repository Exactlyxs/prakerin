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


<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
    <div class="login-card">
      <form method="post">
                <img src="assets/img/9.png" class="profile-img-card">
                <p class="profile-name-card"> </p>
                <input class="form-control" type="text" required="" name="nama" placeholder="Username" autofocus="" id="inputUsername">
                <br>
                <input class="form-control" type="password" required="" name="password" placeholder="Password" id="inputPassword">
                <button class="btn btn-primary btn-block btn-lg btn-signin" name="submit" type="submit">Login</button>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
