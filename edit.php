<?php
  require_once("koneksi.php");
$id = $_GET ['id'];
$siswa = mysqli_query("$koneksi.select * from siswa where nisn='$id'");
$row = mysqli_fetch_array($siswa);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
  </head>
  <body>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <form class="" action="prosses.php" method="post" enctype="multipart/form-data">
              <input type="hidden" value="<?php echo $row['nisn'];?>" name="nisn">
              <textarea name="bio" rows="8" cols="80"><?php echo $row['bio'];?></textarea>
            </form>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
