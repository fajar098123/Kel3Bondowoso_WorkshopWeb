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
    <!-- Card -->
    <div class="text-center ">
    <div class="card-body">
    <h5 class="card-title"><u>PRODUK</u></h5>
    <div class="text-left container">
    <form>
      Jenis Kopi :   
	  <select>
		<option value='arabika'>Arabika</option>
		<option value='robusta'>Robusta</option>
        <option value='toraja'>Toraja</option>
        <option value='liberika'>Liberika</option>
        <option value='jamaika'>Jamaika</option>
        <option value='excelsa'>Excelsa</option>
	  </select>
</form>
    </div>
    <div class="container">
    <div class="row row-cols-1 row-cols-md-3">
    <div class="col mb-5">
            <div class="card shadow">
                <img src="<?= $_ENV['base_url'] ?>img/arabika-ijen.jpg" class="card-img-top" alt="...">
                <div class="view_item">
                <div class="card-body">
                    <h5 class="card-title">Arabica Java Ijen (Full Wash)</h5>
                    <p class="card-text text-right pr-2">50.000</p>
                    <div class="btn tombol"><a href="<?= $_ENV['base_url'] ?>pages/produk/detail_produk.php">Lihat Detail</a></div>
                </div>
            </div>
        </div> 
        </div>
        <div class="col mb-5">
            <div class="card shadow">
                <img src="<?= $_ENV['base_url'] ?>img/robusta-ijen.jpg" class="card-img-top" alt="">
                <div class="view_item">
                <div class="card-body">
                    <h5 class="card-title">Robusta Java Ijen (Full Wash)</h5>
                    <p class="card-text text-right pr-2">48.000</p>
                    <div class="btn tombol"><a href="<?= $_ENV['base_url'] ?>pages/produk/detail_produk.php">Lihat Detail</a></div>
                </div>
            </div>
            </div>
        </div>
        <div class="col mb-5">
            <div class="card shadow">
                <img src="<?= $_ENV['base_url'] ?>img/bluemountain.jpg" class="card-img-top" alt="...">
                <div class="view_item">
                <div class="card-body">
                    <h5 class="card-title">Arabica Blue Mountain</h5>
                    <p class="card-text text-right pr-2">52.500</p>
                    <div class="btn tombol"><a href="<?= $_ENV['base_url'] ?>pages/produk/detail_produk.php">Lihat Detail</a></div>
                </div>
            </div>
            </div>
        </div>
        <div class="col mb-5">
            <div class="card shadow">
                <img src="<?= $_ENV['base_url'] ?>img/arabica-abyssinia.jpg" class="card-img-top" alt="...">
                <div class="view_item">
                <div class="card-body">
                    <h5 class="card-title">Arabica Abyssinia (Natural)</h5>
                    <p class="card-text text-right pr-2">Rp. 50.000.00</p>
                    <div class="btn tombol"><a href="<?= $_ENV['base_url'] ?>pages/produk/detail_produk.php">Lihat Detail</a></div>
                </div>
            </div>
        </div> 
        </div>
        <div class="col mb-5">
            <div class="card shadow">
                <img src="<?= $_ENV['base_url'] ?>img/arabica-abyssinia-2.jpg" class="card-img-top" alt="">
                <div class="view_item">
                <div class="card-body">
                    <h5 class="card-title">Arabica Abyssinia (Full Wash)</h5>
                    <p class="card-text text-right pr-2">Rp. 92.000.00</p>
                    <div class="btn tombol"><a href="<?= $_ENV['base_url'] ?>pages/produk/detail_produk.php">Lihat Detail</a></div>
                </div>
            </div>
            </div>
        </div>
        <div class="col mb-5">
            <div class="card shadow">
                <img src="<?= $_ENV['base_url'] ?>img/blend119k.jpg" class="card-img-top" alt="...">
                <div class="view_item">
                <div class="card-body">
                    <h5 class="card-title">Blend 119k</h5>
                    <p class="card-text text-right pr-2">Rp. 46.500.00</p>
                    <div class="btn tombol"><a href="<?= $_ENV['base_url'] ?>pages/produk/detail_produk.php">Lihat Detail</a></div>
                </div>
            </div>
            </div>
        </div>
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