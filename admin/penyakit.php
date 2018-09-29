<?php include '_header.php'; 

include "../controller/c_Penyakit.php";
$pt = new Penyakit;
?>
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-5">
                <h4 class="page-title">Manajemen Penyakit</h4>
                <div class="d-flex align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Penyakit</li>
                    </ol>
                </div>
            </div>
            <div class="col-7">
                <div class="text-right upgrade-btn">
                    <a href="tpenyakit.php" class="btn btn-danger text-white">Tambah Data</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th>Kode Penyakit</th>
                                    <th>Nama Penyakit</th>
                                    <th>Keterangan Penyakit</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                              <tbody>
                                <?php
                                $data = $pt->TampilSemua();
                                foreach($data as $d){
                                    ?>
                                    <tr>
                                        <td><?php print $d['kode']; ?></td>
                                        <td><?php print $d['nama']; ?></td>
                                        <td><?php print $d['kett']; ?></td>
                                        <td></td>
                                    </tr>
                                <?php } ?>
                        </tbody>
                    </table>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Right sidebar -->
<!-- ============================================================== -->
<!-- .right-sidebar -->
<!-- ============================================================== -->
<!-- End Right sidebar -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<?php include '_footer.php'; ?>