<?php
	include '../../../../config/connection.php';
	$kode = $_POST['kode'];
	$nama_kopi = $_POST['nama_kopi'];
	$id_jenis_kopi = $_POST['jenis_kopi'];
	$harga = $_POST['harga'];
	$deskripsi = $_POST['deskripsi'];
	$gambar = $_FILES['gambar']['name'];
	$id_jenis_kemasan = $_POST['jenis_kemasan'];
	if ($gambar != NULL || $gambar != ''){
		$update = mysqli_query($mysqli, "update tb_produk set nama_kopi ='$nama_kopi', id_jenis_kopi='$id_jenis_kopi', harga='$harga', deskripsi='$deskripsi', id_jenis_kemasan='$id_jenis_kemasan', gambar='$gambar'where kode_kopi = '$kode'");
		if($update)
			if(copy($_FILES['gambar']['tmp_name'], $path.$_FILES['gambar']['name']))
				header("location:tabel_produk.php");
	}
	else{
		$update = mysqli_query($mysqli, "update tb_produk set nama_kopi ='$nama_kopi', id_jenis_kopi='$id_jenis_kopi', harga='$harga', deskripsi='$deskripsi', id_jenis_kemasan='$id_jenis_kemasan'  where kode_kopi = '$kode'");
		if($update)
		header("location:tabel_produk.php");
	}
?>