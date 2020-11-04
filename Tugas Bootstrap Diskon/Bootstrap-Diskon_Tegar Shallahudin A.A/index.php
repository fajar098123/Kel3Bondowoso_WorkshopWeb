<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Signin Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-signin" method="POST" action="">
  <h1 class="h3 mb-3 font-weight-normal">Masukkan Total Harga</h1><br>
  <label for="inputharga" class="sr-only">Harga Barang</label><br>
  <input type="text" name="inputharga" class="form-control" placeholder="Total Harga Barang" required autofocus>
  <label for="inputdiskon" class="sr-only">Diskon</label>
  <input type="text" name="inputdiskon" class="form-control" placeholder="Masukkan Diskon" required>
  <br>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Hitung</button>
<div id="hasil">
    <?php 
    error_reporting (E_ALL ^ E_NOTICE);
      $harga =$_POST['inputharga'];
      $diskon =$_POST['inputdiskon'];
      $nilai = ($diskon/100) * $harga;
      echo 'Nominal diskon';
      echo $diskon;
      echo'% dari '; 
      echo number_format($harga,2,",","."); 
      echo' adalah sebesar <u>';
      echo number_format($nilai,2,",",".");
      echo'</u>';
      ?>
</div>
</form>
</body>
</html>
