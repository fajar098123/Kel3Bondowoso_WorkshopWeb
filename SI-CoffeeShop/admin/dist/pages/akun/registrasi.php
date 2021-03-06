<?php 
session_start();
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
                        <h1 class="mt-4">Registrasi</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Registrasi</li>
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
                                        if($pesan == "gagalgambar"){
                                            ?>
                                            <div class='alert alert-danger'>
                                                <strong>Gagal</strong>
                                            </div>
                                        <?php }?>
                                    <?php }?>
                            <form method="post" action="tambah_akun.php" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputNama">Nama</label>
                                            <input class="form-control py-4" id="nama" name="nama" type="text" placeholder="Masukkan Nama" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputTelepon">No. Telepon</label>
                                            <input class="form-control py-4" id="telepon" name="telepon" type="text" placeholder="Masukkan No. Telepon">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputUsername">Username</label>
                                            <input class="form-control py-4" id="username" name="username" type="username" aria-describedby="emailHelp" placeholder="Masukkan Username" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputTangal">Email</label>
                                            <input class="form-control py-4" type="text" id="email"
                                            name="email" placeholder="Masukkan Email Anda">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputPassword">Password</label>
                                            <input class="form-control py-4" id="password" name="password" type="password" placeholder="Password" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-4 mb-0"><button class="btn btn-success btn-block" type="submit">Simpan</button></div>
                                <div class="form-group mt-4 mb-0"><button class="btn btn-danger btn-block" type="reset" value="reset">Batal</button></div>
                            </form>
                        </div>
                        <?php include '../../templates/footer.php' ?>
                    </div>
                    
                </div>
            
</html>