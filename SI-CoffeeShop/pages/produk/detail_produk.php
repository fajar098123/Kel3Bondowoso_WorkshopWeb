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
    <?php
    $url = $_GET['nama_kopi'];
    $nmkopi = str_replace("-"," ",$url);
    ?>
    <title>Naray Coffee | Coffee Shop</title>
  </head>
  <body>
    <?php
     include "../../config/connection.php";
    include "../../templates/navbar.php";
  
    ?>
<!-- Page Content -->
<div class="container">
    <?php 
    $result = mysqli_query($mysqli, "SELECT tb_produk.nama_kopi, tb_jeniskopi.jenis_kopi, tb_jenis_kemasan.jenis_kemasan, tb_produk.harga, tb_produk.deskripsi, tb_produk.gambar FROM tb_produk JOIN tb_jeniskopi ON tb_produk.id_jenis_kopi=tb_jeniskopi.id_jenis_kopi JOIN tb_jenis_kemasan ON tb_produk.id_jenis_kemasan=tb_jenis_kemasan.id_jenis_kemasan WHERE nama_kopi = '$nmkopi'");
    $data = mysqli_fetch_array($result);
    ?>
  <!-- Portfolio Item Heading -->
  <h2 class="my-4"><?= $data['nama_kopi'] ?></h2>

  <!-- Portfolio Item Row -->
  <div class="row">

    <div class="col-md-6" >
      <img class="rounded" src="<?= $_ENV['base_url'] ?>img/<?=$data['gambar']?>" width="400px" height="400px" alt="">
    </div>

    <div class="col-md-6">
      <div class="spesifikasi">
      <h4 class="my-3">Detail Kopi</h4>
        <div class="pr-3">  
          <p>Jenis Kopi : <?= $data['jenis_kopi'] ?></p>
          <p>Jenis Kemasan : <?= $data['jenis_kemasan'] ?></p>
        </div>
        <h4 class="my-4 related">Deskripsi</h4>
        <p> <?= $data['deskripsi'] ?> </p>
        </div>
    </div>
  </div>
  <hr>
  <h3 class="text-right pr-5 my-5">Rp. <?= $data['harga'] ?>.00</h3>
  <!-- /.row -->

  <!-- Related Projects Row -->
  <!-- <div class="my-5">
    </div> -->
  <!-- /.row -->

</div>
<!-- /.container -->
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