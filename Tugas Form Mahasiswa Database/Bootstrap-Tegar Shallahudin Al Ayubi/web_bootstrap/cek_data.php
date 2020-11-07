<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.3.1.min.js"></script>

</head>
<body>
<div class="container">
    <h4>Cek Mahasiswa</h4>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get">
        <div class="form-group">
            <label for="sel1">Pilih Mahasiswa:</label>
            <select class="form-control" name="nim">
                <?php
                include "config/koneksi.php";
                //Perintah sql untuk menampilkan semua data pada tabel jurusan
                $sql="select nim,nama from mahasiswa";

                $hasil=mysqli_query($kon,$sql);
                $no=0;
                while ($data = mysqli_fetch_array($hasil)) {
                    $no++;

                    $ket="";
                    if (isset($_GET['nim'])) {
                        $nim = trim($_GET['nim']);

                        if ($nim==$data['nim'])
                        {
                            $ket="selected";
                        }
                    }
                    ?>
                    <option <?php echo $ket; ?> value="<?php echo $data['nim'];?>"><?php echo $data['nim'];?> - <?php echo $data['nama'];?></option>
                    <?php
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-info" value="Pilih">
        </div>
    </form>


    <?php

    if (isset($_GET['nim'])) {
        $nim=$_GET["nim"];

        $sql= mysqli_query($kon,"SELECT * FROM mahasiswa WHERE nim='".$_GET['nim']."'");
        $data = mysqli_fetch_assoc($sql);
    }
    ?>

        <div class="form-group">
            <label>NIM:</label>
            <input type="text" name="nim" value="<?php echo $data['nim']; ?>" class="form-control" required />
        </div>
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" value="<?php echo $data['nama']; ?>" class="form-control"  required/>
        </div>

        <div class="form-group">
            <label>Tanggal Lahir:</label>
            <input type="date" name="tanggal_lhr" value="<?php echo $data['tanggal']; ?>" class="form-control" required/>
        </div>
        <div class="form-group">
            <label for="sel1">Jurusan:</label>
            <input type="text" name="jurusan" value="<?php echo $data['jurusan']; ?>" class="form-control" required/>
        </div>
        <div class="form-group">
            <label>Jenis Kelamin:</label>
            <input type="text" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin']; ?>" class="form-control"required/>
        </div>
        <div class="form-group">
            <label>agama:</label>
            <input type="text" name="agama" value="<?php echo $data['agama']; ?>" class="form-control"required/>
        </div>
        <div class="form-group">
            <label>Umur:</label>
            <input type="text" name="umur" value="<?php echo $data['umur']; ?>" class="form-control"required/>
        </div>
</div>
</body>
</html>