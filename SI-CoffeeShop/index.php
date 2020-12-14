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

    <!-- Section: Testimonials v.1 -->
<div class="container">
    <section class="text-center my-5 p-1">

    <!-- Section heading -->
    <h2 class="h1-responsive font-weight-bold my-5">Testimonials</h2>
    <!-- Section description -->
    <p class="dark-grey-text w-responsive mx-auto mb-5">Bagaimana pengalaman & pendapat mereka yang telah menjadi pelanggan kami? Biarlah pelanggan kami yang berbicara & berbagi cerita dengan anda.</p>

    <!-- Grid row -->
    <div class="row">

    <!--Grid column-->
    <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
        <!--Card-->
        <div class="card testimonial-card">
        <!--Background color-->
        <div class="card-up info-color"></div>
        <!--Avatar-->
        <div class="avatar mx-auto white">
            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(9).jpg" class="mt-3 rounded-circle img-fluid">
        </div>
        <div class="card-body">
            <!--Name-->
            <h4 class="font-weight-bold mb-4">John Doe</h4>
            <hr>
            <!--Quotation-->
            <p class="dark-grey-text mt-4"><i class="fas fa-quote-left pr-2"></i>Lorem ipsum dolor sit amet eos
            adipisci, consectetur adipisicing elit.</p>
        </div>
        </div>
        <!--Card-->
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
        <!--Card-->
        <div class="card testimonial-card">
        <!--Background color-->
        <div class="card-up blue-gradient">
        </div>
        <!--Avatar-->
        <div class="avatar mx-auto white">
            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(20).jpg" class="mt-3 rounded-circle img-fluid">
        </div>
        <div class="card-body">
            <!--Name-->
            <h4 class="font-weight-bold mb-4">Anna Aston</h4>
            <hr>
            <!--Quotation-->
            <p class="dark-grey-text mt-4"><i class="fas fa-quote-left pr-2"></i>Neque cupiditate assumenda in
            maiores repudiandae mollitia.</p>
        </div>
        </div>
        <!--Card-->
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-4 col-md-6">
        <!--Card-->
        <div class="card testimonial-card">
        <!--Background color-->
        <div class="card-up indigo"></div>
        <!--Avatar-->
        <div class="avatar mx-auto white">
            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg" class="mt-3 rounded-circle img-fluid">
        </div>
        <div class="card-body">
            <!--Name-->
            <h4 class="font-weight-bold mb-4">Maria Kate</h4>
            <hr>
            <!--Quotation-->
            <p class="dark-grey-text mt-4"><i class="fas fa-quote-left pr-2"></i>Delectus impedit saepe officiis
            ab aliquam repellat rem unde ducimus.</p>
        </div>
        </div>
        <!--Card-->
    </div>
    <!--Grid column-->

    </div>
    <!-- Grid row -->

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