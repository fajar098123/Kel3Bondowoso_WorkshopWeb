<?php
	include '../../../../config/connection.php';
	$kode = $_GET['kode'];
	$gambar = $_GET['gambar'];
	$delete = mysqli_query($mysqli, "delete FROM tb_artikel where id_artikel = '$kode'");

	if($delete){
		if(unlink('../../../../img/'.$gambar))
			header("location:tabel_artikel.php?pesan=berhasil");
		else 
			header("location:tabel_artikel.php?pesan=gagal");
	}
	else
		header("location:tabel_artikel.php?pesan=gagal");
?>
