<?php include "templates/header.php"?>


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
                            <form>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="small mb-1" for="id_user">ID User</label>
                                            <input class="form-control py-4" id="id_user" type="text" placeholder="Masukkan ID User" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputNama">Nama</label>
                                            <input class="form-control py-4" id="inputNama" type="text" placeholder="Masukkan Nama" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="inputUsername">Username</label>
                                    <input class="form-control py-4" id="inputUsername" type="username" aria-describedby="emailHelp" placeholder="Masukkan Username" />
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputPassword">Password</label>
                                            <input class="form-control py-4" id="inputPassword" type="password" placeholder="Password" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputConfirmPassword">Masukan Password Ulang</label>
                                            <input class="form-control py-4" id="inputConfirmPassword" type="password" placeholder="Masukan Password Ulang" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-4 mb-0"><a class="btn btn-primary btn-block" href="" >Masuk</a></div>
                                <div class="form-group mt-4 mb-0"><a class="btn btn-primary btn-block" href="dashboard.php">Kembali</a></div>
                            </form>
                        </div>
                    </div>
                </div>
                        
       
    <?php include 'templates/footer.php' ?>
</html>