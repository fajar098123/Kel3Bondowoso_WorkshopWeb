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
            <a href="tentang_kami.php" class="btn btn-primary tombol">Tentang Kami</a>
        </div>
    </div>
    <!-- end Jumbotron -->

    <!-- Card -->
    <div class="container">
    <div class="row row-cols-1 row-cols-md-3">
        <div class="col mb-4">
            <div class="card h-100">
                <img src="img/arabika.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Arabika</h5>
                    <p class="card-text">Kopi Arabica memiliki aroma yang wangi seperti buah-buahan atau bunga-bungaan. Beberapa disertai aroma kacang-kacangan. Rasanya pun lebih halus dan penuh.</p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100">
                <img src="img/robusta.jpg" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">Robusta</h5>
                    <p class="card-text">Robusta sering digambarkan sebagai kopi yang pahit atau tajam dengan karakter rasa seperti kayu dan karet. Pahit atau bitter ini berasal dari kandungan kafein yang lebih tinggi pada Robusta</p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100">
                <img src="img/toraja.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Toraja</h5>
                    <p class="card-text">Kopi Toraja adalah jenis kopi Arabica yang disebut “queen of coffe”. Cirinya adalah kopi ini memiliki aroma khas seperti aroma tanah. Rasa pahitnya menonjol.</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="text-center my-3">
        <div class="card-body">
        <h5 class="card-title"><u>BLOG</u></h5>
        <div class="text-left container"></div>
        </div>
    </div>
<div class="container">
    <section class="text-center my-3 p-1">
    <div class="row no-gutters justify-content-center">
        <div class="card shadow p-md-4 col-md-10">
            <div class="row">
            <div class="col-5">
            <img src="img/v60.jpg" width="300px" height="200px"class="rounded float-left" alt="...">
            </div>
            <div class="col-7 my-3 pr-md-5 text-left">
                <h4>test</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, beatae.</p>
                <div class="btn tombol float-right"><a href="#">Lihat Detail</a></div>
            </div>
            </div>
        </div>
        <div class="card shadow p-md-4 col-md-10">
            <div class="row">
            <div class="col-5">
            <img src="img/vdrip.jpg" width="300px" height="200px"class="rounded float-left" alt="...">
            </div>
            <div class="col-7 my-3 pr-md-5 text-left">
                <h4>test</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis et tempora ipsum neque quae perspiciatis ipsam ullam asperiores officia eveniet.</p>
                <div class="btn tombol float-right"><a href="#">Lihat Detail</a></div>
            </div>
            </div>
        </div>
    </div>
    </section>
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