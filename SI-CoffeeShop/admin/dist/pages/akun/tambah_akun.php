<?php 

	include "../../../../config/connection.php";

	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = md5(addslashes($_POST['password']));
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];

	$query = mysqli_query($mysqli, "INSERT INTO tb_login(nama, username, password, email, telepon) VALUES
        ('".$nama."', '".$username."', '".$password."', '".$email."', '".$telepon."')");
     
    if($query) 
        header("location:registrasi.php?pesan=berhasil");
    else
        header("location:registrasi.php?pesan=gagal");

?>