<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/13206d486e.js" crossorigin="anonymous"></script>

    <!-- My CSS -->
    <link rel="stylesheet" href="../../style.css">

    <title>Naray Coffee | Coffee Shop</title>
  </head>
  <body>
    <?php
     include "../../config/connection.php";
    include "../../templates/navbar.php";
  
    ?>
<!-- Page Content -->
<div class="container">
<div class="row no-gutters">
  <div class="col-6">
    <label class="mt-3 px-3">Jl.Pakisan, Perum Bataan Permai, B124. Lumbung II, Bataan, Tenggarang, Kabupaten Bondowoso, Jawa Timur 68281</label>
    <h4 class="text-center text-info">Contact Person</h4>
    <div class="m-5 p-3 shadow rounded-lg">
      <h5 class="mt-3 text-success px-3"><i class="fab fa-whatsapp"></i> 0823-3618-2666</h5>
      <h5 class="mt-3 text-danger px-3"><i class="far fa-envelope"></i> naraycoffee@gmail.com</h5>
      <h5 class="mt-3 text-dark px-3"><i class="fab fa-instagram"></i> @naraycoffee</h5>
    </div>
  </div>
  <div class="col-6 my-5">
    <h4 class="text-center mt-4 text-success"><i class="fas fa-map-marker-alt"></i> Lokasi Naray Coffee</h4>
    <iframe class="shadow-lg" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.65576278646!2d113.8420701227448!3d-7.9309750446403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6c3ffcfdd309f%3A0x2a52e79e76cdf740!2sNaray%20Coffee!5e0!3m2!1sid!2sid!4v1608284309478!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen></iframe>
  </div>
</div>
</div>
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