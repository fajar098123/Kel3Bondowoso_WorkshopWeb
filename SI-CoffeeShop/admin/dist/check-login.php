<?php
include '../../config/connection.php';
session_start();

if($_POST['login']){
    $usr=addslashes($_POST['user']);
    $psw=md5(addslashes($_POST['pass']));
    $q=mysqli_query($mysqli,"select * from tb_login where username='$usr' and password='$psw' ");
    $cek=mysqli_fetch_array($q);
    $cari=mysqli_num_rows($q);
    
    if(mysqli_num_rows($q)== 1){
        $_SESSION['userid'] = $cek['id_user'];
        $_SESSION['nama'] = $cek['nama'];
        
        echo"<script>alert('Anda berhasil Login'); location='dashboard.php'</script>";
        }
        else{
            echo"<script>alert('Anda belum terdaftar'); location='index.php'</script>";
        }
    
    }
?>
