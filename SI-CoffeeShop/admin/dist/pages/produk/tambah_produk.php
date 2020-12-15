<?php 

	include "../../../../config/connection.php";

	$nama = $_POST['nama_kopi'];
	$jenis_kemasan = $_POST['jenis_kemasan'];
	$jenis_kopi = $_POST['jenis_kopi'];
	$harga = $_POST['harga'];
	$gambar = "halo.jpg";
	$deskripsi = $_POST['editordata'];

	$query = mysqli_query($mysqli, "INSERT INTO tb_produk(nama_kopi, id_jenis_kopi, harga, deskripsi, id_jenis_kemasan, gambar) VALUES
		('".$nama."', '".$jenis_kopi."', '".$harga."', '".$deskripsi."', '".$jenis_kemasan."', '".$gambar."')");\

	header("location:produk.php");

?>