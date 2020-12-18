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
                        <h1 class="mt-4">Artikel</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Daftar Artikel</li>
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
                                                <th>Judul Artikel</th>
                                                <th>Jenis Kategori</th>
                                                <th>Gambar</th>
                                                <th>Isi Konten</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                include "../../../../config/connection.php";
                                                $query = mysqli_query($mysqli, "SELECT * FROM `tb_artikel` JOIN kategori_artikel ON tb_artikel.id_kategori = kategori_artikel.id_kategori");
                                                $no = 1;
                                                while ($artikel = mysqli_fetch_array($query)) {
                                            ?>
                                            <tr>
                                                <td><?= $no; $no++; ?></td>
                                                <td><?= $artikel['judul_artikel'] ?></td>
                                                <td><?= $artikel['kategori'] ?></td>
                                                <td><img src="../../../../img/<?= $artikel['thumbnail'] ?>" width="130px" height="130px"></td>
                                                <td><?= $artikel['konten_artikel'] ?></td>
                                                <td>
                                                    <a type="button" class="btn btn-warning" href="aksi-edit-artikel.php?kode=<?php echo $artikel['id_artikel'] ?>">Edit</a>
                                                    <a type="button" class="btn btn-danger" href="aksi-hapus-artikel.php?kode=<?php echo $artikel['id_artikel'] ?>&gambar=<?= $artikel['thumbnail'] ?>">Hapus</a   >

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