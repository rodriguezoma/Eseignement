<?php
require_once('../connexion.php');

?>

<?php
if(isset($_POST["all_students.php"])){

if( isset($_POST["Nom"] ) and isset($_POST["Prenom"]) and isset($_POST["Genre"]) and isset($_POST["Ville"]) and
    isset($_POST["Etablissement"] ) and isset($_POST["Classe"])){



$nom = $_POST["Nom"];
$prenom = $_POST["Prenom"];
$genre = $_POST["Genre"];
$ville = $_POST['Ville'];
$etablissement = $_POST['Etablissement'];
$classe = $_POST['Classe'];



// $req1=$connexion->query("SELECT Nom,Prenom,Genre,Ville,Etablissement,Classe FROM postulation p, ville v, etablissement e, 'classe c' where p.ID_CLASS = c.ID_CLASS AND D_ETABLISS = e.ID_ETABLISS AND e.ID_VILLE = v.ID_VILLE ")->fetch();
// $req1->execute([$nom, $prenom, $genre, $ville,$etablissement,$classe]);

//SELECT ("Nom","Prenom","Genre","Ville","Etablissement","Classe") FROM "postulation";
}
}
?>





<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="SmartUniversity" />
	<title>FasoEnseignement</title>
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
	<link href="fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
	<link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
	<!--bootstrap -->
	<link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- data tables -->
	<link href="../assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet"
		type="text/css" />
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="../assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="../assets/css/material_style.css">
	<!-- Theme Styles -->
	<link href="../assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="../assets/css/theme/light/style.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/theme/light/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- favicon -->
	<link rel="shortcut icon" href="http://radixtouch.in/templates/admin/smart/source/assets/img/favicon.ico" />
</head>
<!-- END HEAD -->

<body
	class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
	<div class="page-wrapper">
		<!-- start header -->
		<div class="page-header navbar navbar-fixed-top">
			<div class="page-header-inner ">
				<!-- logo start -->
				<div class="page-logo">
					<a href="index.html">
						<span class="logo-icon material-icons fa-rotate-45">school</span>
						<span class="logo-default">FasoEnseignement</span> </a>
				</div>
				<!-- logo end -->
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
				</ul>
				<form class="search-form-opened" action="#" method="GET">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Recherche..." name="query">
						<span class="input-group-btn">
							<a href="javascript:;" class="btn submit">
								<i class="icon-magnifier"></i>
							</a>
						</span>
					</div>
				</form>
				<!-- start mobile menu -->
				<a class="menu-toggler responsive-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
					<span></span>
				</a>
				<!-- end mobile menu -->
				<!-- start header menu -->
				<div class="top-menu">
					<ul class="nav navbar-nav pull-right">
						<li><a class="fullscreen-btn"><i class="fa fa-arrows-alt"></i></a></li>
						<!-- start language menu -->
						<li class="dropdown language-switch">
							<a class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> <img
									src="../assets/img/langage/fr11.jpg" class="position-left" alt=""> Francais<span
									class="fa fa-angle-down"></span>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a class="French"><img src="../assets/img/langage/fr11.jpg" alt=""> Francais</a>
								</li>
								
								<li>
									<a class="english"><img src="../assets/img/langage/gb.png" alt=""> Anglais</a>
								</li>
								<li>
							</ul>
						</li>
						<!-- end language menu -->
						
						
					</ul>
				</div>
			</div>
		</div>
		<!-- end header -->
		
		<!-- start page container -->
		<div class="page-container">
			<!-- start sidebar menu -->
			<div class="sidebar-container">
				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
					<div id="remove-scroll" class="left-sidemenu">
						<ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false"
							data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
							<li class="sidebar-toggler-wrapper hide">
								<div class="sidebar-toggler">
									<span></span>
								</div>
							</li>


							
							<!-- About  Students   -->
							
							
							<li class="nav-item active open">
								<a href="#" class="nav-link nav-toggle"><i class="material-icons">group</i>
									<span class="title">Elèves</span><span class="selected"></span>
									<span class="arrow open"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item active">
										<a href="all_students.php" class="nav-link "> <span class="title">Tous les élèves  </span>
											<span class="selected"></span>
										</a>
									</li>
								</ul>
							</li>
							

						</ul>
					</div>
				</div>
			</div>
			<!-- end sidebar menu -->
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Liste des élèves </div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="page-404.php">Accueil</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Elèves </a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Liste des élèves </li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="tabbable-line">
								<ul class="nav customtab nav-tabs" role="tablist">
								</ul>
								<div class="tab-content">
									<div class="tab-pane active fontawesome-demo" id="tab1">
										<div class="row">
											<div class="col-md-12">
												<div class="card card-box">
													<div class="card-head">
														<header>Liste des élèves </header>
														<div class="tools">
															<a class="fa fa-repeat btn-color box-refresh"
																href="javascript:;"></a>
															<a class="t-collapse btn-color fa fa-chevron-down"
																href="javascript:;"></a>
															<a class="t-close btn-color fa fa-times"
																href="javascript:;"></a>
														</div>
													</div>
													<div class="card-body ">
														<div class="row">
															<div class="col-md-6 col-sm-6 col-6">
																<div class="btn-group">
																	<a href="ville.php" id="addRow"
																		class="btn btn-info">
																		Ajouter élèves  <i class="fa fa-plus"></i>
																	</a>
																</div>
															</div>
															<div class="col-md-6 col-sm-6 col-6">
																<div class="btn-group pull-right">
																	<a class="btn deepPink-bgcolor  btn-outline dropdown-toggle"
																		data-bs-toggle="dropdown">Outils
																		<i class="fa fa-angle-down"></i>
																	</a>
																	<ul class="dropdown-menu pull-right">
																		<li>
																			<a href="javascript:;">
																				<i class="fa fa-print"></i> Imprimer </a>
																		</li>
																		<li>
																			<a href="javascript:;">
																				<i class="fa fa-file-pdf-o"></i> Enregistrer en
																				PDF </a>
																		</li>
																		<li>
																			<a href="javascript:;">
																				<i class="fa fa-file-excel-o"></i>
																				Exporter dans excel </a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
                                                        <div class="table-scrollable">
														<table
																class="table table-striped table-bordered table-hover
																table-checkable order-column valign-middle"
																id="example1">
																<thead>
																	<tr>
																									
																		<th> Nom </th>
																		<th> Prenom </th>
																		<th> Genre </th>
																		<th> Ville </th>
																		<th> Etablissement </th>
																		<th>Classe</th>
																		<th>Action</th>
																	</tr>
																</thead>
																<tbody>
														
															
															</table>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>-->
		<!-- end page container -->
		<!-- start footer -->
		<div class="page-footer">
			<div class="page-footer-inner"> 2021 &copy; ZOMA W Rodrigue
				<a href="wrodriguezoma@gmail.com" target="_top" class="makerCss">Design</a>
			</div>
			<div class="scroll-to-top">
				<i class="icon-arrow-up"></i>
			</div>
		</div>
		<!-- end footer -->
	</div>
	<!-- start js include path -->
	<script src="../assets/plugins/jquery/jquery.min.js"></script>
	<script src="../assets/plugins/popper/popper.js"></script>
	<script src="../assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
	<script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
	<!-- bootstrap -->
	<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
	<!-- data tables -->
	<script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="../assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js"></script>
	<script src="../assets/js/pages/table/table_data.js"></script>
	<!-- Common js-->
	<script src="../assets/js/app.js"></script>
	<script src="../assets/js/layout.js"></script>
	<script src="../assets/js/theme-color.js"></script>
	<!-- Material -->
	<script src="../assets/plugins/material/material.min.js"></script>
	<!-- end js include path -->
</body>





</html>