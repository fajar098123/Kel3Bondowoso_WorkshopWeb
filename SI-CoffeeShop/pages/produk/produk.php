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
        <div class="col mb-4">
            <div class="card h-100">
                <img src="<?= $_ENV['base_url'] ?>img/arabika.jpg" class="card-img-top" alt="...">
                <div class="view_item">
                <div class="card-body">
                    <h5 class="card-title">Arabika</h5>
                    <p class="card-text">Kopi Arabica memiliki aroma yang wangi seperti buah-buahan atau bunga-bungaan. Beberapa disertai aroma kacang-kacangan. Rasanya pun lebih halus dan penuh.</p>
                    <div class="btn tombol"><a href="detail_produk.php">Lihat Detail</a></div>
                </div>
            </div>
        </div> 
        </div>
        <div class="col mb-4">
            <div class="card h-100">
                <img src="<?= $_ENV['base_url'] ?>img/robusta.jpg" class="card-img-top" alt="">
                <div class="view_item">
                <div class="card-body">
                    <h5 class="card-title">Robusta</h5>
                    <p class="card-text">Robusta sering digambarkan sebagai kopi yang pahit atau tajam dengan karakter rasa seperti kayu dan karet. Pahit atau bitter ini berasal dari kandungan kafein yang lebih tinggi pada Robusta</p>
                    <div class="btn tombol"><a href="detail_produk.php">Lihat Detail</a></div>
                </div>
            </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100">
                <img src="<?= $_ENV['base_url'] ?>img/toraja.jpg" class="card-img-top" alt="...">
                <div class="view_item">
                <div class="card-body">
                    <h5 class="card-title">Toraja</h5>
                    <p class="card-text">Kopi Toraja adalah jenis kopi Arabica yang disebut “queen of coffe”. Cirinya adalah kopi ini memiliki aroma khas seperti aroma tanah. Rasa pahitnya menonjol.</p>
                    <div class="btn tombol"><a href="detail_produk.php">Lihat Detail</a></div>
                </div>
            </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100">
                <img src="<?= $_ENV['base_url'] ?>img/liberika.jpg" class="card-img-top" alt="...">
                <div class="view_item">
                <div class="card-body">
                    <h5 class="card-title">Liberika</h5>
                    <p class="card-text">Kopi liberika memiliki karekteristik khas dan otentik yang dapat membuat para pecinta kopi rindu akan citarasanya.</p>
                    <div class="btn tombol"><a href="detail_produk.php">Lihat Detail</a></div>
                </div>
            </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100">
                <img src="<?= $_ENV['base_url'] ?>img/jamaika.jpg" class="card-img-top" alt="...">
                <div class="view_item">
                <div class="card-body">
                    <h5 class="card-title">Jamaika</h5>
                    <p class="card-text">Jamaican blue mountain memiliki rasa dan aroma yang sangat enak, bahkan mengandung wangi rempah, ditambaah lagi tidak memiliki ras pahit. Bisa dibayangkan sebuah kopi tidak memiliki rasa pahit.</p>
                    <div class="btn tombol"><a href="detail_produk.php">Lihat Detail</a></div>
                </div>
            </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100">
                <img src="<?= $_ENV['base_url'] ?>img/excelsa.jpg" class="card-img-top" alt="...">
                <div class="view_item">
                <div class="card-body">
                    <h5 class="card-title">Excelsa</h5>
                    <p class="card-text">Jamaican blue mountain memiliki rasa dan aroma yang sangat enak, bahkan mengandung wangi rempah, ditambaah lagi tidak memiliki ras pahit. Bisa dibayangkan sebuah kopi tidak memiliki rasa pahit.</p>
                    <div class="btn tombol"><a href="detail_produk.php">Lihat Detail</a></div>
                </div>
            </div>
        </div>
        </div>
    </div>
    </div>

    <!-- Card -->
    <div class="container">
    <div class="row row-cols-1 row-cols-md-3">
        <div class="col mb-4">
            <div class="card h-100">
                <img src="<?= $_ENV['base_url'] ?>img/arabika.jpg" class="card-img-top" alt="...">
                <div class="view_item">
                <div class="card-body">
                    <h5 class="card-title">Arabika</h5>
                    <p class="card-text">Kopi Arabica memiliki aroma yang wangi seperti buah-buahan atau bunga-bungaan. Beberapa disertai aroma kacang-kacangan. Rasanya pun lebih halus dan penuh.</p>
                    <div class="btn">Lihat Detail</div>
                </div>
            </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100">
                <img src="<?= $_ENV['base_url'] ?>img/robusta.jpg" class="card-img-top" alt="">
                <div class="view_item">
                <div class="card-body">
                    <h5 class="card-title">Robusta</h5>
                    <p class="card-text">Robusta sering digambarkan sebagai kopi yang pahit atau tajam dengan karakter rasa seperti kayu dan karet. Pahit atau bitter ini berasal dari kandungan kafein yang lebih tinggi pada Robusta</p>
                    <div class="btn">Lihat Detail</div>
                </div>
            </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100">
                <img src="<?= $_ENV['base_url'] ?>img/toraja.jpg" class="card-img-top" alt="...">
                <div class="view_item">
                <div class="card-body">
                    <h5 class="card-title">Toraja</h5>
                    <p class="card-text">Kopi Toraja adalah jenis kopi Arabica yang disebut “queen of coffe”. Cirinya adalah kopi ini memiliki aroma khas seperti aroma tanah. Rasa pahitnya menonjol.</p>
                    <div class="btn">Lihat Detail</div>
                </div>
            </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100">
                <img src="<?= $_ENV['base_url'] ?>img/liberika.jpg" class="card-img-top" alt="...">
                <div class="view_item">
                <div class="card-body">
                    <h5 class="card-title">Liberika</h5>
                    <p class="card-text">Kopi liberika memiliki karekteristik khas dan otentik yang dapat membuat para pecinta kopi rindu akan citarasanya.</p>
                    <div class="btn">Lihat Detail</div>
                </div>
            </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100">
                <img src="<?= $_ENV['base_url'] ?>img/jamaika.jpg" class="card-img-top" alt="...">
                <div class="view_item">
                <div class="card-body">
                    <h5 class="card-title">Jamaika</h5>
                    <p class="card-text">Jamaican blue mountain memiliki rasa dan aroma yang sangat enak, bahkan mengandung wangi rempah, ditambaah lagi tidak memiliki ras pahit. Bisa dibayangkan sebuah kopi tidak memiliki rasa pahit.</p>
                    <div class="btn">Lihat Detail</div>
                </div>
            </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100">
                <img src="<?= $_ENV['base_url'] ?>img/excelsa.jpg" class="card-img-top" alt="...">
                <div class="view_item">
                <div class="card-body">
                    <h5 class="card-title">Excelsa</h5>
                    <p class="card-text">Jamaican blue mountain memiliki rasa dan aroma yang sangat enak, bahkan mengandung wangi rempah, ditambaah lagi tidak memiliki ras pahit. Bisa dibayangkan sebuah kopi tidak memiliki rasa pahit.</p>
                    <div class="btn">Lihat Detail</div>
                </div>
            </div>
        </div>
        </div>
    </div>
    </div>

    <!-- Section: Testimonials v.1 -->
<div class="container">
    <section class="text-center my-5 p-1">
    </section>
</div>
<!-- Section: Testimonials v.1 -->

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