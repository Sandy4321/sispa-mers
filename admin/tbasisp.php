<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="../assetsA/assets/images/Logo-SP.png">
	<title>Admin - Basis Pengetahuan | Sistem Pakar</title>
	<!-- Custom CSS -->
	<link href="../assetsA/dist/css/style.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../assetsA/assets/libs/datatable/dataTables.bootstrap.min.css">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">        
    function tampilkanwaktu(){         //fungsi ini akan dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik    
    var waktu = new Date();            //membuat object date berdasarkan waktu saat 
    var sh = waktu.getHours() + "";    //memunculkan nilai jam, //tambahan script + "" supaya variable sh bertipe string sehingga bisa dihitung panjangnya : sh.length    //ambil nilai menit
    var sm = waktu.getMinutes() + "";  //memunculkan nilai detik    
    var ss = waktu.getSeconds() + "";  //memunculkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
    document.getElementById("clock").innerHTML = (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
}
</script>
</head>

<body onload="tampilkanwaktu();setInterval('tampilkanwaktu()', 1000);">
	<!-- ============================================================== -->
	<!-- Preloader - style you can find in spinners.css -->
	<!-- ============================================================== -->
	<div class="preloader">
		<div class="lds-ripple">
			<div class="lds-pos"></div>
			<div class="lds-pos"></div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- Main wrapper - style you can find in pages.scss -->
	<!-- ============================================================== -->
	<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
		<!-- ============================================================== -->
		<!-- Topbar header - style you can find in pages.scss -->
		<!-- ============================================================== -->
		<header class="topbar" data-navbarbg="skin5">
			<nav class="navbar top-navbar navbar-expand-md navbar-dark">
				<div class="navbar-header" data-logobg="skin5">
					<!-- ============================================================== -->
					<!-- Logo -->
					<!-- ============================================================== -->
					<a class="navbar-brand" href="">
						<!-- Logo icon -->
						<b class="logo-icon">
							<!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
							<!-- Dark Logo icon -->
							<img src="../assetsA/assets/images/Logo-SP.png" width="45px" alt="homepage" class="dark-logo" />
							<!-- Light Logo icon -->
							<img src="../assetsA/assets/images/Logo-SP-light.png" width="45px" alt="homepage" class="light-logo" />
						</b>
						<!--End Logo icon -->
						<!-- Logo text -->
						<span class="logo-text">
							<!-- dark Logo text -->
							<img src="../assetsA/assets/images/Logo-texts.png" width="150px" alt="homepage" class="dark-logo" />
							<!-- Light Logo text -->    
							<img src="../assetsA/assets/images/Logo-text-light.png" width="150px" class="light-logo" alt="homepage" />
						</span>
					</a>
					<!-- ============================================================== -->
					<!-- End Logo -->
					<!-- ============================================================== -->
					<!-- This is for the sidebar toggle which is visible on mobile only -->
					<a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
				</div>
				<!-- ============================================================== -->
				<!-- End Logo -->
				<!-- ============================================================== -->
				<div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
					<!-- ============================================================== -->
					<!-- toggle and nav items -->
					<!-- ============================================================== -->
					<ul class="navbar-nav float-left mr-auto">
						<!-- ============================================================== -->
						<!-- Search -->
						<!-- ============================================================== -->
					</ul>
					<!-- ============================================================== -->
					<!-- Right side toggle and nav items -->
					<!-- ============================================================== -->
					<ul class="navbar-nav float-right">
						<!-- ============================================================== -->
						<!-- User profile and search -->
						<!-- ============================================================== -->
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assetsA/assets/images/users/images.png" alt="user" class="rounded-circle" width="31"></a>
							<div class="dropdown-menu dropdown-menu-right user-dd animated">
								<a class="dropdown-item" href="javascript:void(0)"><i class="mdi mdi-view-dashboard"></i> Home Web</a>
								<a class="dropdown-item" href="../login.php"><i class="mdi mdi-logout-variant"></i> Logout</a>
							</div>
						</li>
						<!-- ============================================================== -->
						<!-- User profile and search -->
						<!-- ============================================================== -->
					</ul>
				</div>
			</nav>
		</header>
		<!-- ============================================================== -->
		<!-- End Topbar header -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Left Sidebar - style you can find in sidebar.scss  -->
		<!-- ============================================================== -->
		<aside class="left-sidebar" data-sidebarbg="skin6">
			<!-- Sidebar scroll-->
			<div class="scroll-sidebar">
				<!-- Sidebar navigation-->
				<nav class="sidebar-nav">
					<ul id="sidebarnav">
						<!-- User Profile-->
						<li>
							<!-- User Profile-->
							<div class="user-profile d-flex no-block dropdown m-t-20">
								<div class="user-pic"><img src="../assetsA/assets/images/users/images.png" alt="users" class="rounded-circle" width="40" /></div>
								<div class="user-content hide-menu m-l-10">
									<a href="javascript:void(0)" class="" id="Userdd" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<h5 class="m-b-0 user-name font-medium">Fandy Hidayat</h5>
										<span class="op-5 user-email">fandy@gmail.com</span>
									</a>
								</div>
							</div>
							<!-- End User Profile-->
						</li>
						<li class="p-15 m-t-10"><a href="javascript:void(0)" class="btn btn-block create-btn text-white no-block d-flex align-items-center">Waktu : &nbsp;<span class="hide-menu m-l-5" id="clock"></span> </a></li>
						<!-- User Profile-->
						<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="penyakit.php" aria-expanded="false"><i class="mdi mdi-hospital"></i><span class="hide-menu">Penyakit</span></a></li>
						<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="gejala.php" aria-expanded="false"><i class="mdi mdi-needle"></i><span class="hide-menu">Gejala</span></a></li>
						<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="basisp.php" aria-expanded="false"><i class="mdi mdi-information"></i><span class="hide-menu">Basis Pengetahuan</span></a></li>
						<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="riwayatd.php" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Riwayat Diagnosa</span></a></li>
						<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="profil.php" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">Profil</span></a></li>
					</ul>

				</nav>
				<!-- End Sidebar navigation -->
			</div>
			<!-- End Sidebar scroll-->
		</aside>
		<!-- ============================================================== -->
		<!-- End Left Sidebar - style you can find in sidebar.scss  -->
		<!-- ============================================================== -->
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
						<h4 class="page-title">Manajemen Tambah Penyakit</h4>
						<div class="d-flex align-items-center">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item" aria-current="page"><a href="basisp.php">Basis Pengetahuan</a></li>
								<li class="breadcrumb-item active" aria-current="page">Tambah Basis Pengetahuan</li>
							</ol>
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
					<!-- Column -->
					<div class="col-lg-8 col-xlg-9 col-md-7">
						<div class="card">
							<div class="card-body">
								<form class="form-horizontal form-material">
									<div class="form-group">
										<label class="col-md-12">Nama Penyakit</label>
										<div class="col-md-12">
											<select class="form-control form-control-line">
                                                <option>Demam</option>
                                                <option>Diare</option>
                                            </select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-12">Nama Gejala</label>
										<div class="col-md-12">
											<select class="form-control form-control-line">
                                                <option>Pusing</option>
                                                <option>Mual</option>
                                            </select>
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-12">Nialai Kepercayaan</label>
										<div class="col-md-12">
											<input type="text" class="form-control form-control-line">
										</div>
									</div>

									<div class="form-group">
										<div class="col-sm-12">
											<button class="btn btn-success">Tambah Data</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- Column -->
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
	<!-- ============================================================== -->
	<!-- footer -->
	<!-- ============================================================== -->
	<footer class="footer text-center">
		All Rights Reserved by Xtreme Admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
	</footer>
	<!-- ============================================================== -->
	<!-- End footer -->
	<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="../assetsA/assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="../assetsA/assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="../assetsA/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../assetsA/dist/js/app-style-switcher.js"></script>
<!--Wave Effects -->
<script src="../assetsA/dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="../assetsA/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="../assetsA/dist/js/custom.js"></script>

<script src="../assetsA/assets/libs/data-table/datatables.min.js"></script>
<script src="../assetsA/assets/libs/data-table/dataTables.bootstrap.min.js"></script>
<script src="../assetsA/assets/libs/data-table/dataTables.buttons.min.js"></script>
<script src="../assetsA/assets/libs/data-table/buttons.bootstrap.min.js"></script>
<script src="../assetsA/assets/libs/data-table/jszip.min.js"></script>
<script src="../assetsA/assets/libs/data-table/pdfmake.min.js"></script>
<script src="../assetsA/assets/libs/data-table/vfs_fonts.js"></script>
<script src="../assetsA/assets/libs/data-table/buttons.html5.min.js"></script>
<script src="../assetsA/assets/libs/data-table/buttons.print.min.js"></script>
<script src="../assetsA/assets/libs/data-table/buttons.colVis.min.js"></script>
<script src="../assetsA/assets/libs/data-table/datatables-init.js"></script>
</body>

</html>