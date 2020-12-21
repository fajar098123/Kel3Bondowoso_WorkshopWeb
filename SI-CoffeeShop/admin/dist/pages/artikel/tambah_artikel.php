<?php 

	include "../../../../config/connection.php";

	$judul = $_POST['judul_artikel'];
	$jenis_kategori = $_POST['kategori'];
	$gambar = $_FILES['gambar']['name'];
	$path = '../../../../img/';
	$deskripsi = $_POST['editordata'];

	$query = mysqli_query($mysqli, "INSERT INTO tb_artikel(judul_artikel, id_kategori, konten_artikel, thumbnail) VALUES
		('".$judul."', '".$jenis_kategori."', '".$deskripsi."', '".$gambar."')");
	if($query){
		if(copy($_FILES['gambar']['tmp_name'], $path.$_FILES['gambar']['name']))
			header("location:artikel.php?pesan=berhasil");
		else
			header("location:artikel.php?pesan=gagal");
	}

?>