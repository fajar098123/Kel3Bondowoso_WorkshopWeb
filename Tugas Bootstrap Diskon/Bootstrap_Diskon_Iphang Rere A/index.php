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
    <form class="form-signin" method="post">
  <h3 class="h2 mb-3 font-weight-normal">Penghitung Diskon</h3>
  <br>
  <h1 class="h5 mb-3 font-weight-normal">Masukan Harga Total dan Diskon </h1>
  <br>
  <label for="inputTotal" class="sr-only">Total Harga</label>
  <input type="text" name="Harga" class="form-control" placeholder="Total Harga" required autofocus>
  <br>
  <label for="inputDiskon" class="sr-only">Potongan harga</label>
  <input type="Text" name="Diskon" class="form-control" placeholder="Diskon" required>
  <br>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Pastikan Harga
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" name="hitung" type="submit">Hitung</button>
  <br>
  <div class="hitung">
  <?php 
    error_reporting (E_ALL ^ E_NOTICE);
    $harga =$_POST['Harga'];
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
<p class="mt-5 mb-3 text-muted">&copy; Sebelum Masehi - 2020</p>
</form>
</body>
</html>
