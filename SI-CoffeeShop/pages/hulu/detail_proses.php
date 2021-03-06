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
    $url = $_GET['judul_artikel'];
    $judul = str_replace("-"," ", $url);
    ?>
<!-- Page Content -->
<div class="container my-5">
    <?php 
    $result = mysqli_query($mysqli, "SELECT * FROM tb_artikel WHERE id_kategori=3 AND judul_artikel = '$judul'");

    while($detail = mysqli_fetch_array($result)){
        $judul = $detail['judul_artikel'];
        $thumbnail = $detail['thumbnail'];
        $konten = $detail['konten_artikel'];
    }
    ?>
    <div class="judul title-text my-4"><h2><?= $judul ?></h2></div>
    <hr>
    <div class="gambar">
        <img class="" src="<?= $_ENV['base_url'] ?>img/<?= $thumbnail ?>"  height="300px" alt="">
    </div>
    <div class="konten">
        <p><?= $konten ?></p>
    </div>
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