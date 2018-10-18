<?php include '_header.php'; 

include "../controller/c_Rekam.php";
$p = new Rekam;
$data = $p->TampilRPasien($_GET['id_pasien']);
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
                <h4 class="page-title">Manajemen Rekam Medis</h4>
                <div class="d-flex align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="pasien.php">Pasien</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Rekam Medis</li>
                    </ol>
                </div>
            </div>
            <div class="col-7">
                <div class="text-right upgrade-btn">
                    <a href="tpenyakit.php" class="btn btn-danger text-white"><i class="mdi mdi-plus"></i> Diagnosa</a>
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
                            <table id="bootstrap-data-table" class="table table-hover table-bordered">
                                <thead style="background-color: #7f8c8d; color: white;">
                                  <tr>
                                    <th style="color: white;" width="13%">ID</th>
                                    <th style="color: white;">Tanggal</th>
                                    <th style="color: white;">Gejala</th>
                                    <th style="color: white;">Penyakit</th>
                                    <th style="color: white;">Nilai</th>
                                    <th style="color: white;">Persentase</th>
                                    <th style="color: white;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $r) {
                                    $i++;
                                   ?>
                                   <tr>
                                    <td><?php print $i; ?></td>
                                    <td><?php print $r['tanggal']; ?></td>
                                    <td><?php print $r['gejala']; ?></td>
                                    <td><?php print $r['penyakit']; ?></td>
                                    <td><?php print $r['nilai']; ?></td>
                                    <td><?php print $r['persentase']; ?></td>
                                    <td>
                                        <a href="../ProsesA/d_penyakit.php?id=<?php print $d['id']; ?>" class="btn btn-danger btn-simple btn-xs text-white" title="Hapus Penyakit"><i class="fa fa-times"></i></a>
                                    </td>
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