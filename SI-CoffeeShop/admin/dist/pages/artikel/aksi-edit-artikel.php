<?php 
    include "../../../../config/connection.php";
    include "../../templates/header.php";
    $kode = $_GET['kode'];
    $select = mysqli_query($mysqli, "select * FROM tb_artikel where id_artikel = '$kode'");

    $artikel = mysqli_fetch_array($select);
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
                            <li class="breadcrumb-item active">Edit Artikel</li>
                        </ol>
                        <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-lg border-0 rounded-lg ">
                    <div class="card-body">
                            <form method="post" action="update-artikel.php" enctype="multipart/form-data">
                            	<input type="hidden" name="kode" value="<?php echo $artikel['id_artikel']?>">
                                <div class="form-row">
                                <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="small mb-1" for="judul_artikel">Judul Artikel</label>
                                            <input class="form-control py-4" name="judul_artikel" id="judul_artikel" value="<?php echo $artikel['judul_artikel']?>" type="text" placeholder="Judul Artikel"/>
                                        </div>
                                    </div>
                                    </div>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="small mb-1" for="kategori_artikel">Kategori Artikel</label>
                                            <select class="form-control py-4" id="kategori_artikel" name="kategori">
                                            <?php 
                                                $query = mysqli_query($mysqli, "SELECT * FROM kategori_artikel");

                                                while($data = mysqli_fetch_array($query)){ 
                                            ?>
                                            <?php if($artikel['jenis_kategori'] == $jenis['jenis_kategori']){ ?>
                                            <option value="<?= $data['id_kategori'] ?>" selected><?= $data['kategori'] ?></option>
                                            <?php }else{?>
                                            <option value="<?= $data['id_kategori'] ?>"><?= $data['kategori'] ?></option>
                                            <?php } ?>
                                            <?php } ?>
                                            </select>
                                            </div>
                                            <div class="form-row">
                                        <div class="col-md-6">
                                        <label class="small mb-1" for="thumbnail">Thumbnail</label>
                                        </br>
                                         <input name= "gambar" id="thumbnail" type="file" placeholder="Catatan"/>
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
                                    <div class="card shadow-lg border-0 rounded-lg ">
                                            <textarea id="summernote" name="editordata"><?php echo $artikel['konten_artikel']; ?></textarea>
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
                        <div class="form-group mt-4 mb-0"><button class="btn btn-success btn-block" type="submit">Simpan</button></div>
                        <div class="form-group mt-4 mb-0"><button class="btn btn-danger btn-block" type="reset" value="reset">Batal</button></div>
                        </div>
                    </div>
                </div>
              
    <?php include '../../templates/footer.php' ?>
</html>