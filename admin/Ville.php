<?php
require_once('../connexion.php');

?>



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



</style>



<!-- END HEAD -->

<body>
	
									<div class="villes">

									<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<input class="mdl-textfield__input" type="text" id="ville" value="" readonly
												tabIndex="-1" required >
											<label for="ville" class="pull-right margin-0">
												<i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
											</label>

											<label for="ville" class="mdl-textfield__label"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   Selectionner votre ville d'etude </b></label>
											<ul data-mdl-for="ville" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">


									<?php

										//$NOM_VILLE = $_POST["NOM_VILLE"];
											//$ID_VILLE = $_POST["ID_VILLE"];
										
										$select_ville = $connexion->query("SELECT * FROM ville ");
											//$select_ville->execute([$NOM_VILLE]);
												while(	$fet_ville = $select_ville->fetch()):
												//echo ($fet_ville['NOM_VILLE']." ID: ".$fet_ville['ID_VILLE'] );

										?>


										<a href=<?="Etablissement.php?id_v=".$fet_ville['ID_VILLE']?>><li class="mdl-menu__item" data-val="kdg"><?=$fet_ville['NOM_VILLE'] ?></li></a>
								
										<?php endwhile; ?>
										</ul>
									</div>
									</div>


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
















<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title"> Welcome! </div>
							</div>

						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">

								</div>

								<!-- ************************** ajoute d'eleve ********************************************************************************************-->
                                <form method="post" action="">
								<div class="card-body row">

									<!-- start widget -->
						<div class="state-overview">
						<div class="row">								
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

							<div class="col-xl-3 col-md-6 col-12">
							<a href="sign_up.html">
								<div class="info-box bg-success">
									<span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<div class="info-box-content">
										<span class="info-box-text">Elèves</span>
										<span class="info-box-number">450</span>

									</div>
									<!-- /.info-box-content -->
								</div>
								</a>
								<!-- /.info-box -->
							</div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

							<div class="col-xl-3 col-md-6 col-12">
							<a href="sign_up_Etablissement.html">
								<div class="info-box bg-blue">
									<span class="info-box-icon push-bottom"><i class="material-icons">school</i></span>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<div class="info-box-content">
										<span class="info-box-text">Etablissement</span>  
										<span class="info-box-number">52</span>

									</div>
									<!-- /.info-box-content -->
								</div>
								</a>
								<!-- /.info-box -->
							</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<!-- /.col -->
							<div class="col-xl-3 col-md-6 col-12">
							<a href="FasoEseignement.html">
								<div class="info-box bg-orange">
									<span class="info-box-icon push-bottom"><i
											class="material-icons">local_library</i></span>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<div class="info-box-content">
										<span class="info-box-text">About FasoEnseignement</span>
										<span class="info-box-number">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>

									</div>
									<!-- /.info-box-content -->
								</div>
									</a>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
						</div>
					</div>
					<!-- end widget -->

								
                                </form>
                            </div>
						</div>
					</div>
				</div>
			</div>
