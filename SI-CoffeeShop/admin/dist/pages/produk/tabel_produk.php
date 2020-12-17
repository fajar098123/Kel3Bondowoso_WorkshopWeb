<?php 
include "../../../../config/connection.php";
include "../../templates/header.php"
?>
</head>
<body class="sb-nav-fixed">
    <?php include '../../templates/topbar.php' ?>
    <?php include '../../templates/sidebar.php' ?>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

                <div id="layoutSidenav_content">
                    <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Produk</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Daftar Produk</li>
                        </ol>
                        <div class="row">

                <div class="col-lg-12">
                    <div class="card shadow-lg border-0 rounded-lg ">
                        
                        <div class="card-body">
                            <?php
                                if (isset($_GET['pesan'])){
                                    $pesan = $_GET['pesan'];
                                    if($pesan == "berhasil"){
                                        ?>
                                        <div class='alert alert-success'>
                                            <strong>Berhasil</strong>
                                        </div>
                                        <?php }
                                        if($pesan == "gagal"){
                                            ?>
                                            <div class='alert alert-danger'>
                                                <strong>Gagal</strong>
                                            </div>
                                        <?php }?>
                                    <?php }?>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Kopi</th>
                                                <th>Jenis Kopi</th>
                                                <th>Harga Kopi</th>
                                                <th>Jenis Kemasan</th>
                                                <th>Gambar</th>
                                                <th>Deskripsi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                include "../../../../config/connection.php";
                                                $query = mysqli_query($mysqli, "SELECT * FROM `tb_produk` JOIN tb_jeniskopi ON tb_produk.id_jenis_kopi = tb_jeniskopi.id_jenis_kopi JOIN tb_jenis_kemasan ON tb_produk.id_jenis_kemasan = tb_jenis_kemasan.id_jenis_kemasan");
                                                $no = 1;
                                                while ($produk = mysqli_fetch_array($query)) {
                                            ?>
                                            <tr>
                                                <td><?= $no; $no++; ?></td>
                                                <td><?= $produk['nama_kopi'] ?></td>
                                                <td><?= $produk['jenis_kopi'] ?></td>
                                                <td><?= $produk['harga'] ?></td>
                                                <td><?= $produk['jenis_kemasan'] ?></td>
                                                <td><img src="../../../../img/<?= $produk['gambar'] ?>" width="130px" height="130px"></td>
                                                <td><?= $produk['deskripsi'] ?></td>
                                                <td>
                                                    <a type="button" class="btn btn-warning" href="aksi-edit-produk.php?kode=<?php echo $produk['kode_kopi'] ?>">Edit</a> |
                                                    <a type="button" class="btn btn-danger" href="aksi-hapus-produk.php?kode=<?php echo $produk['kode_kopi'] ?>&gambar=<?= $produk['gambar'] ?>">Hapus</a   >

                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                    </div>
                </div>
</html>