<?php
session_start();

if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'Admin') {
    header("Location: 404.php");
    exit();
}

include_once 'header.php';
include_once 'sidebar.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1></h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Profile Mahasiswa</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <h4 class="text-center mt-4"><br />Projek Web 1 - Individu</h4>
                                <div class="row justify-content-center mt-5">
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <h5 class="card-title">Informasi Mahasiswa</h5>
                                                        <br>
                                                        <br>
                                                        <div class="text-center">
                                                            <img src="sabbel.jpg" class="img-fluid" alt="Profile Image">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <ul class="list-group list-group-flush">
                                                            <li class="list-group-item"><strong>Nama :</strong> Satria abbel pangestu</li>
                                                            <li class="list-group-item"><strong>NIM :</strong> 0110123248</li>
                                                            <li class="list-group-item"><strong>Rombel :</strong> SI04</li>
                                                            <li class="list-group-item"><strong>Program Studi :</strong> Sistem Informasi</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            Projek 1 Puskesmas
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
include_once 'footer.php';
?>