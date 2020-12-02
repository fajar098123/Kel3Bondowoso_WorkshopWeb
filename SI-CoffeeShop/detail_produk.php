<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">

    <title>Naray Coffee | Coffee Shop</title>
  </head>
  <body>
    <?php
    include_once 'navbar.php';
    ?>
<!-- Page Content -->
<div class="container">

  <!-- Portfolio Item Heading -->
  <h1 class="my-4">Nama Kopi</h1>

  <!-- Portfolio Item Row -->
  <div class="row">

    <div class="col-md-6" >
      <img class="img-fluid" src="img/arabika.jpg" alt="">
    </div>

    <div class="col-md-6">
      <h3 class="my-3">Deskripsi Kopi</h3>
      <p>Kopi Arabica memiliki aroma yang wangi seperti buah-buahan atau bunga-bungaan. Beberapa disertai aroma kacang-kacangan. Rasanya pun lebih halus dan penuh.</p>
      <h3 class="my-3">Spesifikasi Kopi</h3>
      <ul>
        <li>Lorem Ipsum</li>
        <li>Dolor Sit Amet</li>
        <li>Consectetur</li>
        <li>Adipiscing Elit</li>
      </ul>
      <h3 class="price">Harga</h3>
    </div>
  </div>
  <!-- /.row -->

  <!-- Related Projects Row -->
  <h3 class="my-4 related">Related Projects</h3>

  <div class="row mb-30">

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="img/robusta.jpg" alt="">
          </a>
    </div>

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="img/jamaika.jpg" alt="">
          </a>
    </div>

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="img/excelsa.jpg" alt="">
          </a>
    </div>

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="img/liberika.jpg" alt="">
          </a>
    </div>

  </div>
  <!-- /.row -->

</div>
<!-- /.container -->
    <?php
    include_once 'orderWA.php';
    include_once 'footer.php';
    ?>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>