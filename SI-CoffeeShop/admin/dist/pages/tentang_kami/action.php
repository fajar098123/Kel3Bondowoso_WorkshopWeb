<?php

if ($_GET['action']=='tambah') {
    include "../../../../config/connection.php";
    $ekstensi_diperbolehkan	= array('png','jpg');
    $nama = $_FILES['file']['name'];
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    $ukuran	= $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];	

    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 1044070){			
            move_uploaded_file($file_tmp, '../../../../pages/tentang kami/file/'.$nama);
            $deskripsi=$_POST['deskripsi'];
            $mysqli->query("INSERT INTO `tb_tentangkami` (`artikel`, `gambar`) VALUES ('$deskripsi', '$nama')");
            echo "<script>alert('Berhasil Di upload'); location='http://localhost/Kel3Bondowoso_WorkshopWeb/SI-CoffeeShop/admin/dist/pages/tentang_kami/tentang-kami.php'</script>";
            
            if($mysqli){
                echo "<script>alert('Berhasil Di upload'); location='http://localhost/Kel3Bondowoso_WorkshopWeb/SI-CoffeeShop/admin/dist/pages/tentang_kami/tentang-kami.php'</script>";
            
            }else{
                echo 'GAGAL MENGUPLOAD GAMBAR';
            }
        }else{
            echo 'UKURAN FILE TERLALU BESAR';
        }
    }else{
        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
    }
}
	// $gambar="coba";
	
?>