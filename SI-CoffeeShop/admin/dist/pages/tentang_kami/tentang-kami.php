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
                        <h1 class="mt-4">Tentang Kami</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Tentang Kami</li>
                        </ol>
                        <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-lg border-0 rounded-lg ">
                        <div class="card-body">
                        <form enctype="multipart/form-data" action="action.php?action=tambah" method="POST">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="small mb-1" for="harga">Input Gambar</label>
                                            <input id="gambar" type="file" name="file" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12">
                                    <div class="form-group">
                                            <label class="small mb-1" for="deskripsi">Deskripsi :</label>
                                    </div>
                                    <div class="card shadow-lg border-0 rounded-lg ">
                                            <textarea id="summernote" name="deskripsi"></textarea>
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
                                <div class="form-group mt-4 mb-0"><button class="btn btn-success btn-block" name="simpan" type="submit">Simpan</button></div>
                                <div class="form-group mt-4 mb-0"><button class="btn btn-danger btn-block" type="reset" value="reset">Batal</button></div>
                            </form>
                        </div>
                    </div>
                </div>
                        
       
    <?php include '../../templates/footer.php' ?>
</html>