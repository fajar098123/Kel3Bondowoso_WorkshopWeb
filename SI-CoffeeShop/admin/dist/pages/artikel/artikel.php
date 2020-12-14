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
                        <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-lg border-0 rounded-lg ">
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
                    </div>
                </div>
                        
       
    <?php include '../../templates/footer.php' ?>
</html>