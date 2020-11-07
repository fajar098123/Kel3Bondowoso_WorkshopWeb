<?php 
	session_start();
    include"config/koneksi.php";
	if (isset($_POST['submit'])) {
		$nim=$_POST['nim'];
        $nama=$_POST['nama'];
        $tgl=$_POST['ttl'];
        $jurusan=$_POST['jurusan'];
        $gender=$_POST['gender'];
        $agama=$_POST['agama'];
		$umur=$_POST['umur'];
		$sql = mysqli_query($kon,"INSERT INTO mahasiswa VALUES('".$nim."','".$nama."','".$tgl."','".$jurusan."','".$gender."','".$agama."','".$umur.",')");
		if ($sql) {
			$_SESSION['alert'] ="Berhasil tambah";
		}else{
			$_SESSION['alert'] ="Gagal tambah";
		}
		header('location:registration.php');
	}
 ?>