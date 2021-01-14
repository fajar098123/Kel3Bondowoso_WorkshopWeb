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
    include "config/connection.php";
    include_once 'templates/navbar.php';
    ?>
    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Selamat Datang Di Naray’s Coffee</h1>
            <p class="lead">Kopi Asli dari Kabupaten Bondowoso yang merupakan salah satu ikon Kabupaten Bondowoso saat ini.</p>
            <a href="<?= $_ENV['base_url'] ?>pages/tentang kami/tentang_kami.php" class="btn btn-primary tombol">Tentang Kami</a>
        </div>
    </div>
    <!-- end Jumbotron -->

    <!-- Card -->
    <div class="container">
    <div class="text-center my-3">
        <div class="card-body">
        <h5 class="card-title"><u>PRODUK</u></h5>
        <div class="text-left container"></div>
        </div>
    </div>
    <div class="row">
    <?php  $result = mysqli_query($mysqli, "SELECT * FROM tb_produk");?>
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
    <div class="text-center my-3">
        <div class="card-body">
        <h5 class="card-title"><u>ARTIKEL</u></h5>
        <div class="text-left container"></div>
        </div>
    </div>
    <div class="container mb-5">
        <div class="row">
            <?php 
        $x = "";
        $result = mysqli_query($mysqli, "SELECT *, kategori_artikel.kategori FROM `tb_artikel` JOIN kategori_artikel on kategori_artikel.id_kategori=tb_artikel.id_kategori ORDER BY id_artikel DESC LIMIT 3"); ?>
        <?php while ($data = mysqli_fetch_array($result)){
            
            if ($data['kategori'] == "hilir") {
                $x = "hilir";
            }else{
                $x = 'hulu';
            }
            // echo $x;
        ?> 
            <div class="col-lg-12">
                <div class="view-main">
                    <div class="view_wrap list-view">
                        <div class="view_item">
                            <div class="vi_left">
                                <img src="<?= $_ENV['base_url'] ?>img/<?= $data['thumbnail'] ?>" class="card-img-top" alt="...">
                            </div>
                                <div class="vi_right">
                                    <h5 style="text-align:center" class="title"><?= $data['judul_artikel']?></h5>
                                    </br>
                                    <p class="content"><?= substr($data['konten_artikel'],0,180)."..." ?></p>
                                    </br>
                                    <div ><a class="btn" href="pages//detail_<?=$data['kategori']?>.php?judul_artikel=<?= str_replace(" ","-",$data['judul_artikel'] ) ?>" class="mb-3"> Lihat Detail </a></div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>         
        </div>
    </div>

 
</div>
</div>
    <!-- end Card -->
    <?php
    include_once 'orderWA.php';
    include_once 'templates/footer.php';
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