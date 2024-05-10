<?php
require_once 'header.php';
require_once 'sidebar.php';

require '../dbkoneksi.php';
if (isset($_POST["submit"])) {
    var_dump('masuk');
    $_nama = $_POST['nama'];
    $_kelurahan_id = $_POST['kec_id']; // Change 'kelurahan' to 'kelurahan_id'
    $data = [$_nama, $_kelurahan_id];
    $sql = "INSERT INTO kelurahan (nama, kec_id) VALUES (?, ?)"; // Change 'kelurahan' to 'kelurahan_id'
    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);
    echo "<script>window.location.href = 'index.php';</script>";
}
var_dump('ga masuk');
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
                            <h3 class="card-title">Form Unit Kerja</h3>

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
                            <h2 class="text-center">Form Unit Kerja</h2>
                            <form action="add.php" method="POST">
                                <div class="form-group row">
                                    <label for="kec_id" class="col-4 col-form-label">Nama Kelurahan</label>
                                    <div class="col-8">
                                        <input id="nama" name="nama" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kecamatan_id" class="col-4 col-form-label">Kecamatan ID</label>
                                    <div class="col-8">
                                        <?php
                                        $sqljenis = "SELECT * FROM kelurahan";
                                        $rsjenis = $dbh->query($sqljenis);
                                        ?>
                                        <select id="kec_id" name="kec_id" class="custom-select">
                                            <?php
                                            foreach ($rsjenis as $rowjenis) {
                                            ?>
                                                <option value="<?= $rowjenis['id'] ?>"><?= $rowjenis['kec_id'] ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
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
require_once 'footer.php';
?>