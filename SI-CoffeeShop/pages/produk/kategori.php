<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="../../style.css">

    <title>Naray Coffee | Coffee Shop</title>
  </head>
  <body>
  <?php
     include "../../config/connection.php";
    include "../../templates/navbar.php";
 ?>
 <?php
    $kat_kopi =$_GET['cat'];
 ?>
    <!-- Card -->
    <div class="text-center ">
    <div class="card-body">
    <h5 class="card-title"><u>PRODUK</u></h5>
    <div class="text-left container">
    <form>
    <div class="dropdown">
          <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              Pilih Jenis Kopi
              <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
          <?php 
            $query = mysqli_query($mysqli, "SELECT * FROM tb_jeniskopi");
            while($data = mysqli_fetch_array($query)){ ?>
            <li class="pl-2"><a href="kategori.php?cat=<?= $data['id_jenis_kopi'] ?>"><?= $data['jenis_kopi'] ?></a></li>
            <?php } ?>
          </ul>
      </div>
</form>
    </div>
    
    <div class="container">
    <div class="row">
    <?php $result = mysqli_query($mysqli, "SELECT tb_produk.*, tb_jeniskopi.jenis_kopi FROM tb_produk,tb_jeniskopi WHERE tb_produk.id_jenis_kopi = tb_jeniskopi.id_jenis_kopi AND tb_produk.id_jenis_kopi = '$kat_kopi'");?>
    <?php
    while ($data = mysqli_fetch_array($result)) : ?>
        <div class="col-md-4">
        <div class="card h-90">
        <img class="card-img-top" src="<?php echo $_ENV['base_url'] ?>img/<?= $data['gambar'] ?>" alt="" width="250" height="250">
            <div class="card-body">
                <h5 class="card-title"><?= $data['nama_kopi'] ?></h5>
                <p class="card-text text-right"><?= $data['harga'] ?></p>
            </div>
            <div class="card-footer">
                <a href="<?= $_ENV['base_url'] ?>pages/produk/detail_produk.php?nama_kopi=<?= str_replace(" ","-",$data['nama_kopi'] ) ?>">Lihat Detail</a>
            </div>
        </div>
        </div>
    <?php endwhile ?>
    </div>
    </div>
    </div>
    <!-- end Card -->
    <?php
    include_once '../../orderWA.php';
    include "../../templates/footer.php";
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