<!doctype html>
<html lang="en">
  <head>
    <title>Mading</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
      <form action="add_mading_proses.php" method="post">
      <h1>Tambah Pengumuman</h1>
        <div class="form-group">
          <label for="judul">Judul</label>
          <input type="text" class="form-control w-50" name="judul" id="" aria-describedby="helpId" placeholder="">
        </div>
        <div class="form-group">
          <label for="isi">Isi</label>
          <textarea class="form-control w-50" name="isi" id="" rows="3"></textarea>
        </div>
        <div class="form-group">
          <label for="pembuat">Pembuat</label>
          <input type="text" class="form-control w-50" name="pembuat" id="" aria-describedby="helpId" placeholder="">
        </div>
        <button type="submit" class="btn btn-md btn-primary" name="submit">Submit</button>   
      </div>
      </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
