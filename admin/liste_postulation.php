<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->


<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Education" />
    <meta name="author" content="Z~W~R" />
    <title>FasoEducation</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
    <!-- icons -->
    <link href="fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
    <!--bootstrap -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
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

<style>




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
									<span class="title">El??ves</span><span class="selected"></span>
									<span class="arrow open"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item active">
										<a href="all_students.php" class="nav-link "> <span class="title">Tous les ??l??ves  </span>
											<span class="selected"></span>
										</a>
									</li>
									<!-- <li class="nav-item">
										<a href="add_student.php" class="nav-link "> <span class="title">Ajoute ??l??ve</span>
										</a>
									</li>

									</li>
									<li class="nav-item">
										<a href="edit_student.html" class="nav-link "> <span class="title">Editer</span>
										</a>
									</li> -->

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
								<div class="page-title">Liste des ??l??ves </div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="page-404.php">Accueil</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">El??ves </a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Liste des ??l??ves </li>
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
														<header>Liste des ??l??ves </header>
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
																		Ajouter ??l??ves  <i class="fa fa-plus"></i>
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
															<?php
							$req1= "SELECT Nom, Prenom, genre, NOM_VILLE, NOM_ETABLISS, NOM_CLASS FROM postulation , ville , etablissement , classe  where postulation.ID_CLASS = classe.ID_CLASS AND classe.ID_ETABLISS = etablissement.ID_ETABLISS AND etablissement.ID_VILLE = ville.ID_VILLE ";
							$reqstet=$connexion->query($req1);
						
															
															?>
															<?php while( $row = $reqstet->fetch()): ?>	
																<tr>
																<td ><?php echo htmlspecialchars($row['Nom']); ?></td>
																<td ><?php echo htmlspecialchars ($row['Prenom']);?></td>
																<td ><?php echo htmlspecialchars ($row['genre']);?></td>
																<td ><?php echo htmlspecialchars ($row['NOM_VILLE']);?></td>
																<td ><?php echo htmlspecialchars ($row['NOM_ETABLISS']);?></td>
																<td ><?php echo htmlspecialchars ($row['NOM_CLASS']);?></td>
																<td>

																<div class="btn-group" role="group" aria-label="Button group">
																&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																<button class="btn btn-primary btn-xs" data-toogle="modal" data-target="#">
																	<i class="fa fa-pencil"></i>
																</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																		
																<button class="btn btn-danger btn-xs" data-toogle="modal" data-target="#">
																	<i class="fa fa-trash-o "></i>
																</button>

																</div>
																</td>
																</tr>
															<?php endwhile;?>
																</tbody>
															
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
			
		</div>

</style>



<!-- END HEAD -->

<body>


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
<!-- Common js-->
<script src="../assets/js/app.js"></script>
<script src="../assets/js/layout.js"></script>
<script src="../assets/js/theme-color.js"></script>
<!-- Material -->
<script src="../assets/plugins/material/material.min.js"></script>
<!-- end js include path -->
</body>


</html>