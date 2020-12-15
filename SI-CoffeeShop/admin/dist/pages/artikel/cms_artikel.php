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
                        <h1 class="mt-4">Artikel</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Tambah Artikel Baru</li>
                        </ol>
                        <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-lg border-0 rounded-lg ">
                    <div class="card-body">
                            <form>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="small mb-1" for="judul_artikel">Judul Artikel</label>
                                            <input class="form-control py-4" id="judul_artikel" type="text" placeholder="Judul Artikel"/>
                                        </div>
                                    </div>
                                    </div>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="small mb-1" for="kategori_artikel">Kategori Artikel</label>
                                            <select class="form-control py-4" id="kategori_artikel" name="kategori_artikel" placeholder="Kategori Artikel">
                                            <option value="Arabika" selected>Arabika</option>
                                            <option value="Robusta">Robusta</option>
                                            </select>
                                            </div>
                                            <div class="form-row">
                                        <div class="col-md-6">
                                        <label class="small mb-1" for="thumbnail">Thumbnail</label>
                                        </br>
                                         <input id="thumbnail" type="file" placeholder="Catatan"/>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                </br>
                                <div class="form-row">
                                    <div class="col-md-12">
                                    <div class="form-group">
                                            <label class="small mb-1" for="isi konten">Isi Konten</label>
                                    </div>
                    <form method="post">
                        <textarea id="summernote" name="editordata"></textarea>
                      </form>
                      </div>
                        <script>
                          $(document).ready(function() {
                              $('#summernote').summernote();
                          });
                          $('#summernote').summernote({
                          lineHeights: ['0.2', '0.3', '0.4', '0.5', '0.6', '0.8', '1.0', '1.2', '1.4', '1.5', '2.0', '3.0']
                          });
                        </script>
                        <div class="col-md-12">
                        <div class="form-group mt-4 mb-0"><a class="btn btn-primary btn-block" href="" >Submit</a></div>
                        </div>
                    </div>
                </div>
                        
       
    <?php include '../../templates/footer.php' ?>
</html>