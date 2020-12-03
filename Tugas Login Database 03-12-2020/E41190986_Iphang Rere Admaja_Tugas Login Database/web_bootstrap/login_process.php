<?php
$username = $_POST['username'];
$password = $_POST['password'];
$username_saya = "Iphang Rere Admaja";
$password_saya = 123456789;
if((strcasecmp($username_saya, $username) == 0)&&($password_saya==$password))
    {header("location:dashboard.php?pesan=berhasil");}
else
    {header("location:login.php?pesan=gagal");}
?>