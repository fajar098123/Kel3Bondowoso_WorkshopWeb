<?php
	include '../../../../config/connection.php';
	$kode = $_POST['kode'];
	$judul_artikel = $_POST['judul_artikel'];
	$jenis_kategori = $_POST['kategori'];
	$deskripsi = $_POST['editordata'];
	$gambar = $_FILES['gambar']['name'];
	if ($gambar != NULL || $gambar != ''){
		$update = mysqli_query($mysqli, "update tb_artikel set judul_artikel ='$judul_artikel', id_kategori='$jenis_kategori', konten_artikel='$deskripsi', thumbnail='$gambar'where id_artikel = '$kode'");
		if($update)
			if(copy($_FILES['gambar']['tmp_name'], $path.$_FILES['gambar']['name']))
				header("location:tabel_artikel.php");
	}
	else{
		$update = mysqli_query($mysqli, "update tb_artikel set judul_artikel ='$judul_artikel', id_kategori='$jenis_kategori', konten_artikel='$deskripsi' where id_artikel = '$kode'");
		if($update)
		header("location:tabel_artikel.php");
	}
?>