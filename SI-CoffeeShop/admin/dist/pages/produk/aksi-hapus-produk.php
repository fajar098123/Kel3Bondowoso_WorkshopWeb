<?php
	include '../../../../config/connection.php';
	$kode = $_GET['kode'];
	$gambar = $_GET['gambar'];
	$delete = mysqli_query($mysqli, "delete FROM tb_produk where kode_kopi = '$kode'");

	if($delete){
		if(unlink('../../../../img/'.$gambar))
			header("location:tabel_produk.php?pesan=berhasil");
		else 
			header("location:tabel_produk.php?pesan=gagal");
	}
	else
		header("location:tabel_produk.php?pesan=gagal");
?>
