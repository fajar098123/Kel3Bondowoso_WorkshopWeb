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
<div class="text-center ">
    <div class="card-body">
    <h5 class="card-title"><u>HULU</u></h5>
    <p class="content">Processing</p>
    <div class="text-left container"></div>
    </div>
</div>
<?php 
    $result = mysqli_query($mysqli, "SELECT * FROM tb_artikel WHERE id_kategori=3");
    while ($data = mysqli_fetch_array($result)) { ?>
<div class="container mb-5">
    <!-- Card -->
    <div class="view-main">
    <div class="view_wrap list-view">
        <div class="view_item">
            <div class="vi_left">
                <img src="<?= $_ENV['base_url'] ?>img/<?= $data['thumbnail'] ?>" class="card-img-top" alt="...">
                </div>
                <div class="vi_right">
                    <h5 style="text-align:center" class="title"><?= $data['judul_artikel']?></h5>
                    </br>
                    <p class="content"><?= substr($data['konten_artikel'],0,180) ?> . . .</p>
                    </br>
                    <div class="btn"><a href="detail_hilir.php?judul_artikel=<?= str_replace(" ","-",$data['judul_artikel'] ) ?>"> Lihat Detail </a></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php } ?>
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