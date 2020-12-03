<?php
 $koneksi = mysqli_connect("localhost","root","","web_boostrap");

 if (mysqli_connect_error()) {
     echo "Koneksi Database Gagal :".mysqli_connect_error();

 }
?>