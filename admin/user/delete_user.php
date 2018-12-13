<?php
session_start();

$id = $_SESSION['id_user'];
if (!$id) {
    echo "<script>alert('Anda Belum Login!!');window.location='../../index.php'</script>";
}
else{
    include '../../koneksi.php';
    $id_user = $_GET['id'];
    $query = "SELECT * FROM tb_user WHERE id_user='$id_user'";
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
    <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>

    <style>
        #form label{float:left; width:140px;}
   #error_msg{color:red; font-weight:bold;}
   #msg{color:green; font-weight:bold;}
    </style>
    <!-------------- Jquery Password ------------------>
    <script>
        $(document).ready(function(){
       var $submitBtn = $("#form input[type='submit']");
       var $passwordBox = $("#password");
       var $confirmBox = $("#confirm_password");
       var $errorMsg =  $('<span id="error_msg">Password Tidak Sama.</span>');
       var $Msg =  $('<span id="msg">Password Sama.</span>');

       // This is incase the user hits refresh - some browsers will maintain the disabled state of the button.
       $submitBtn.removeAttr("disabled");

       function checkMatchingPasswords(){
           if($confirmBox.val() != "" && $passwordBox.val != ""){
               if( $confirmBox.val() != $passwordBox.val() ){
                   $submitBtn.attr("disabled", "disabled");
                   $errorMsg.insertAfter($submitBtn);
               }
               else{
                $Msg.insertAfter($submitBtn);
               }
           }
       }

       function resetPasswordError(){
           $submitBtn.removeAttr("disabled");
           var $errorCont = $("#error_msg");
           if($errorCont.length > 0){
               $errorCont.remove();
           }  
       }


       $("#confirm_password, #password")
            .on("keydown", function(e){
               /* only check when the tab or enter keys are pressed
                * to prevent the method from being called needlessly  */
               if(e.keyCode == 13 || e.keyCode == 9) {
                   checkMatchingPasswords();
               }
            })
            .on("blur", function(){                    
               // also check when the element looses focus (clicks somewhere else)
               checkMatchingPasswords();
           })
           .on("focus", function(){
               // reset the error message when they go to make a change
               resetPasswordError();
           })

   });
 </script>


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
            <h1>Tambah User</h1>
            <!-- isi Form -->
            <form id="form" name="form" method="post" action="delete_userAction.php?id=<?php echo $row['id_user'] ?>">
            <label for="username">Name : </label>
                <input name="nama" id="nama" type="text" class="form-control w-50" autofocus=""
                        aria-describedby="helpId" disabled value="<?php echo $row['nama'] ?>" /></label><br />
                <label for="username">Username / NISN : </label>
                <input name="username" id="username" type="text" class="form-control w-50" autofocus=""
                        aria-describedby="helpId" disabled value="<?php echo $row['id_user'] ?>"/></label><br />

                <label for="password">Password :</label>
                <input name="password" id="password" type="password" class="form-control w-50" autofocus=""
                        aria-describedby="helpId" disabled value="<?php echo $row['kata_sandi'] ?>"/><br />

                <label for="confirm_password">Confirm Password:</label>
                <input type="password" name="confirm_password" id="confirm_password" class="form-control w-50" autofocus=""
                        aria-describedby="helpId" disabled value="<?php echo $row['kata_sandi'] ?>" /><br />
                        <div class="form-group">
                    <label>Role</label>
                    <select class="form-control w-50"  disabled name="role" id="exampleFormControlSelect1">
                        <option value="<?php echo $row['role'] ?>"><?php echo $row['role'] ?></option>
                        <option value="-">Pilih Role :</option>
                        <option value="4">Siswa</option>
                        <option value="3">Kaprog</option>
                        <option value="2">Wakasek</option>
                        <option value="1">Super Admin</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Jurusan</label>
                    <select class="form-control w-50" disabled name="jurusan" id="exampleFormControlSelect1">
                        <option value="<?php echo $row['jurusan'] ?>"><?php echo $row['jurusan'] ?></option>
                        <option value="-">Pilih Jurusan :</option>
                        <option value="Staff">Staff</option>
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

                <input type="submit" name="submit" class="btn btn-md btn-primary" onclick="return confirm('Ingin Menghapus User?');" value="Hapus" />
            </form>



            <!-- Batas Form -->
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