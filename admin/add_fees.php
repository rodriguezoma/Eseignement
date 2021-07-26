
<?php
require_once('../connexion.php');

	?>
<?php
if(isset($_POST["Valider"])){
var_dump($_POST['Valider']);
	//isset($_POST["nom"] ) and isset($_POST["classe"]) and

if(isset($_POST["transe"]) and isset($_POST["moyen"]) and isset($_POST["montant"] )
 and isset($_POST["numero"]) and isset($_POST["reference"]) and isset($_POST["details"]) ){
	

									 $nom = $_GET["nom"];
									 $transe = $_POST["transe"];
									 $moyen = $_POST["moyen"];
									$montant = $_POST["montant"];
									$referense = $_POST["reference"];
									$details = $_POST["details"];
									$numero = $_POST["Numero"];
									//Recuperer ID 
									$class = $_GET["class"];
									//Requete de la classe


// 	var_dump(

// 		$nom,
// 		$transe,
// 		$moyen,
// 	   $montant,
// 	   $referense,
// 	   $details,
// 	   $numero,
// 	   //Recuperer ID 
// 	   $class
// 	   //Requete de la classe

// );
	$req1 = $connexion->prepare("INSERT INTO paiement(Nom_eleve, Classe, Transe, Moyen, Montant, Numero, Code, Statusp, Details, Datep) 
	VALUES ('Adam', '5eme' , '$trase', '$moyen', '$montant', '$numero' '$reference', '$details',NOW())");
	$req1->execute();
var_dump($req1);
	}

    		//echo "Valider";
}


		if (isset($_POST["Cancel"])) {
		    exit(header('Location: ../enseignement/index.php'));

	# code...
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
	<title>Fasoenseignement</title>
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
	<!-- dropzone -->
	<link href="../assets/plugins/dropzone/dropzone.css" rel="stylesheet" media="screen">
	<!-- Date Time item CSS -->
	<link rel="stylesheet" href="../assets/plugins/flatpicker/css/flatpickr.min.css" />
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
					<a href="index.php">
					<span class="logo-icon material-icons fa-rotate-45">school</span>
						<span class="logo-default">Education</span> </a>
				</div>
				<!-- logo end -->
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
				</ul>
	
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
					
						<li class="dropdown dropdown-quick-sidebar-toggler">
						
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- end header -->

		<!-- start page container -->
		<div class="page-container">
			<!-- start sidebar menu -->
			<!--**************************************-->
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



                            <!-- About  Students Fees   -->


                            <li class="nav-item active open">

                                <ul class="sub-menu">

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link nav-toggle"> <i class="material-icons">monetization_on</i>
                                    <span class="title">Scolarité</span> <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item">
                                        <a href="fees_collection.php" class="nav-link "> <span class="title">Etat de paiement</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="add_fees.php" class="nav-link "> <span class="title">Paiement de la scolarité </span>
                                        </a>
                                    </li>
                         
                            <!-- <li class="nav-item">
                                <a href="fees_receipt.php" class="nav-link "> <span class="title">Reçu de paiement</span>
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
								<div class="page-title">Mise à jour de la scolarité</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.html">Accueil</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Scolarité</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Paiement de la scolarite</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">

								<div class="card-body row">
								
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="nom">
											<label class="mdl-textfield__label">Nom de l'élève</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<input class="mdl-textfield__input" type="text" id="classe">
											<label class="mdl-textfield__label">Classe</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<select class="mdl-textfield__input class="pull-right margin-0 class="mdl-icon-toggle__label material-icons class="mdl-textfield__label data-mdl-for="transe" name="transe" >
                                                <option class="mdl-menu__item"  disabled selected>Transe de la scolarité</option>
                                                <option class="mdl-menu__item" value="M">1er</option>
												<option class="mdl-menu__item" value="F">2ème</option>
												<option class="mdl-menu__item" value="M">3ème</option>
												<option class="mdl-menu__item" value="F">Autre</option>
											</select>
								
										</div>
									</div>

									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<select class="mdl-textfield__input class="pull-right margin-0 class="mdl-icon-toggle__label material-icons class="mdl-textfield__label data-mdl-for="moyen" name="moyen" >
                                                <option class="mdl-menu__item"  disabled selected>moyen de paiement</option>
                                                <option class="mdl-menu__item" value="M">Cash</option>
												<option class="mdl-menu__item" value="F">Orange Money</option>
												<option class="mdl-menu__item" value="M">Mobilecash</option>
											</select>
								
										</div>
									</div>

									
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="montant">
											<label class="mdl-textfield__label">Montant versé</label>
										</div>
									</div>

									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="numero">
											<label class="mdl-textfield__label">Numero de paiement</label>
										</div>
									</div>

									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="reference">
											<label class="mdl-textfield__label">Code de validité</label>
										</div>
									</div>
									
									<div class="col-lg-6 p-t-20">
										
									<div class="col-lg-12 p-t-20">
										<div class="mdl-textfield mdl-js-textfield txt-full-width">
											<textarea class="mdl-textfield__input" rows="4" id="details"></textarea>
											<label class="mdl-textfield__label" for="text7">Details de paiement</label>
										</div>
									</div> </br>
									<div class="col-lg-12 p-t-10 text-left">
										<button type="submit"  name="Valider"
											class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-success"><b>Payer</b></button>
										<button type="submit" name="Cancel"
											class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default">Cancel</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end page content -->

		</div>
		<!-- end page container -->
		<!-- start footer -->
		<div class="page-footer">
            <div class="page-footer-inner"> 2021 &copy; ZOMA W Rodrigue
                <a href="wrodriguezoma@gmail.com" target="_top" class="makerCss">Disign</a>
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
	<!-- Common js-->
	<script src="../assets/js/app.js"></script>
	<script src="../assets/js/layout.js"></script>
	<script src="../assets/js/theme-color.js"></script>
	<!-- Material -->
	<script src="../assets/plugins/material/material.min.js"></script>
	<script src="../assets/js/pages/material-select/getmdl-select.js"></script>
	<script src="../assets/plugins/flatpicker/js/flatpicker.min.js"></script>
	<script src="../assets/js/pages/date-time/date-time.init.js"></script>
	<!-- dropzone -->
	<script src="../assets/plugins/dropzone/dropzone.js"></script>
	<script src="../assets/plugins/dropzone/dropzone-call.js"></script>
	<!-- end js include path -->
</body>


<!-- Mirrored from radixtouch.in/templates/admin/smart/source/light/add_fees.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Mar 2021 09:54:24 GMT -->
</html>