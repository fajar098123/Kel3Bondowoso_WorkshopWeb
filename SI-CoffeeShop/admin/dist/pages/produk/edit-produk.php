<?php 
include "../../../../config/connection.php";
include "../../templates/header.php"
?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</head>
<body class="sb-nav-fixed">
    <?php include '../../templates/topbar.php' ?>
    <?php include '../../templates/sidebar.php' ?>
                <div id="layoutSidenav_content">
                    <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Produk</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Edit Produk</li>
                        </ol>
                        <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-lg border-0 rounded-lg ">
                        <div class="card-body">
                            <form method="post" action="aksi-edit-produk.php">
                                <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label class="small mb-1" for="nama_kopi">Nama Kopi</label>
                                    <input class="form-control" id="nama_kopi" name="nama_kopi" type="text" placeholder="Masukkan Nama Kopi" />
                                    </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="small mb-1" for="jenis_kemasan">Jenis Kemasan</label>
                                            <select class="form-control" id="jenis_kemasan" name="jenis_kemasan">
                                            <?php 
                                                $query = mysqli_query($mysqli, "SELECT * FROM tb_jenis_kemasan");

                                                while($data = mysqli_fetch_array($query)){ 
                                            ?>
                                            <option value="<?= $data['id_jenis_kemasan'] ?>"><?= $data['jenis_kemasan'] ?></option>
                                            <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="small mb-1" for="jenis_kopi">Jenis Kopi</label>
                                            <select class="form-control" id="jenis_kopi" name="jenis_kopi">  
                                            <?php 
                                                $query = mysqli_query($mysqli, "SELECT * FROM tb_jeniskopi");

                                                while($data = mysqli_fetch_array($query)){ 
                                            ?>
                                            <option value="<?= $data['id_jenis_kopi'] ?>"><?= $data['jenis_kopi'] ?></option>
                                            <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="small mb-1" for="harga">Harga</label>
                                            <input class="form-control py-1" name="harga" id="harga" type="text" placeholder="Masukkan Harga" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="small mb-1" for="harga">Input Gambar</label>
                                            <input id="harga" type="file" name="gambar" placeholder="Masukkan Harga" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12">
                                    <div class="form-group">
                                            <label class="small mb-1" for="deskripsi">Deskripsi</label>
                                    </div>
                                    <div class="card shadow-lg border-0 rounded-lg ">
                                            <textarea id="summernote" name="editordata"></textarea>
                                    </div>
                                 <script>
                                       $(document).ready(function() {
                                        $('#summernote').summernote();
                                           });
                                          $('#summernote').summernote({
                                     lineHeights: ['0.2', '0.3', '0.4', '0.5', '0.6', '0.8', '1.0', '1.2', '1.4', '1.5', '2.0', '3.0']
                                     });
                                </script>
                                 </div>
                                 </div>
                            </div>
                                </div>
                                <div class="form-group mt-4 mb-0"><button class="btn btn-success btn-block" type="submit">Simpan</button></div>
                                <div class="form-group mt-4 mb-0"><button class="btn btn-danger btn-block" type="reset" value="reset">Batal</button></div>
                            </form>
                        </div>
                    </div>
                </div>
                        
       
    <?php include '../../templates/footer.php' ?>
</html>