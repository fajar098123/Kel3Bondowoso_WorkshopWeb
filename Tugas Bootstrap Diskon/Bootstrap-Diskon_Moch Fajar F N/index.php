<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Pembayaran</title>

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
    <link href="diskon.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form method="post" class="form-signin">
  <h1 class="h3 mb-3 font-weight-normal">Masukkan Harga total</h1>
  <label for="inputHarga" class="sr-only">Harga barang</label>
  <input type="text" name="inputHarga" class="form-control" placeholder="Masukkan Harga barang" required autofocus>
  <br>
  <label for="Diskon" class="sr-only">Diskon</label>
  <input type="text" name="Diskon" class="form-control" placeholder="Diskon" >
  <div class="checkbox mb-3">
  </div>
  <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Hitung Diskon</button>
  <br>
  <div class="hasil">
<?php
  error_reporting (E_ALL ^ E_NOTICE);
  $harga =$_POST['inputHarga'];
  $diskon =$_POST['Diskon'];
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
