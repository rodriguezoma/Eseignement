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

.etabl{
	position: relative;
	
}

</style>



<!-- END HEAD -->

<body>
	

										<div class="Etabliss">

									<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<input class="mdl-textfield__input" type="text" id="Etablissement" value="" readonly
												tabIndex="-1" required >
											<label for="Etablissement" class="pull-right margin-0">
												<i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
											</label>
											<label for="Etablissement" class="mdl-textfield__label"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   Selectionner votre ville etablissement </b></label>
											<ul data-mdl-for="Etablissement" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">


									<?php

										//$NOM_VILLE = $_POST["NOM_VILLE"];
											//$ID_VILLE = $_POST["ID_VILLE"];
										
										$select_etablissement = $connexion->query("SELECT * FROM etablissement WHERE ID_VILLE=$_GET[id_v]");
											//$select_ville->execute([$NOM_VILLE]);
												while(	$fet_etablissement = $select_etablissement->fetch()):
												//echo ($fet_ville['NOM_VILLE']." ID: ".$fet_ville['ID_VILLE'] );

										?>


										<a href=<?="Classe.php?id_Etab=".$fet_etablissement['ID_ETABLISS']?>><li class="mdl-menu__item" data-val="etab"><?=$fet_etablissement['NOM_ETABLISS'] ?></li></a>
								
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