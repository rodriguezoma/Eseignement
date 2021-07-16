
<?php
require_once('../connexion.php');

	?>


<?php
if(isset($_POST["Valider"])){

if( isset($_POST["Nom"] ) and isset($_POST["Prenom"]) and isset($_POST["Genre"]) and isset($_POST["Datenaiss"]) and
isset($_POST["CNIB"] ) and isset($_POST["Datevalid"]) and isset($_POST["Email"]) and isset($_POST["Numero"]) and isset($_POST["Nomparent"]) and isset($_POST["Numeroparent"]) ){


									 $nom = $_POST["Nom"];
									$prenom = $_POST["Prenom"];
									 $genre = $_POST["Genre"];
									 $datenaiss = $_POST["Datenaiss"];
									$cnib = $_POST["CNIB"];
									$datevalid = $_POST["Datevalid"];
									$email = $_POST["Email"];
									$numero = $_POST["Numero"];
									$nomparent = $_POST["Nomparent"];
									$numeroparent = $_POST["Numeroparent"];

//var_dump( $nom,$prenom,$genre,$datenaiss,$cnib,$datevalid,$email,$numero,$nomparent,$numeroparent);


	$req = $connexion->prepare("INSERT INTO postulation(ID_CLASS,Nom, Prenom, Date_de_naissance, genre, CNIB,Date_validite,email, telephone, Parent, Phone) VALUES (?,?,?,?,?,?,?,?,?,?,?)");

   $req=$req->execute([$_GET["id_Class"],$nom, $prenom, $datenaiss, $genre, $cnib, $datevalid, $email, $numero, $nomparent, $numeroparent]);
//    if ($req==True){
//        $lastId = $connexion->query("SELECT ID_eleve,NOW() as dates FROM `eleve` ORDER BY ID_eleve DESC LIMIT 1 ")->fetch();
//        $lastIdv = $connexion->query("SELECT NOM_VILLE,NOW() as dates FROM `Ville` ORDER BY NOM_VILLE DESC LIMIT 1")->fetch();
//        $lastIde = $connexion->query("SELECT NOM_ETABLISS,NOW() as dates FROM `etablissement` ORDER BY NOM_ETABLISS ")->fetch();
//        $lastIdc = $connexion->query("SELECT NOM_CLASS,NOW() as dates FROM `classe`")->fetch();
//        //       var_dump($lastId,$_GET["id_Class"]);
// //       die();
// 		$req1 = $connexion->prepare("INSERT INTO postulation(ID_eleve,ID_CLASS,Nom,Prenom,Genre,Ville,Etablissement,Classe,CNIB,JOUR_POST) VALUES (?,?,?,?,?,?,?,?,?,?)");
// 		$req1=$req1->execute([$lastId["ID_eleve"],$_GET["id_Class"],$nom,$prenom,$genre,$lastIdv["NOM_VILLE"],$lastIde["NOM_ETABLISS"],$lastIdc["NOM_CLASS"],$cnib,$lastId["dates"]]);

//    }

	}

    		//echo "Valider";
}


		if (isset($_POST["Cancel"])) {
		    exit(header('Location: ../enseignement/index.php'));

	# code...
}


?>




<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
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
						<span class="logo-default">FasoEnseignement</span> </a>
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
						<!-- start notification dropdown -->

						<!-- end notification dropdown -->
						<!-- start message dropdown -->

						<!-- end message dropdown -->
						<!-- start manage user dropdown -->

						<!-- end manage user dropdown -->
						<li class="dropdown dropdown-quick-sidebar-toggler">
							<!--<a id="headerSettingButton" class="mdl-button mdl-js-button mdl-button--icon pull-right"
								data-upgraded=",MaterialButton">
								<i class="material-icons">more_vert</i>
							</a>-->
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- end header -->
		<!-- start color quick setting -->

		<!-- end color quick setting -->
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
                                <a href="#" class="nav-link nav-toggle"> <i class="material-icons">group</i>
                                    <span class="title">Elèves</span> <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item">
                                        <a href="fees_collection.php" class="nav-link "> <span class="title">Postulation</span>
                                        </a>
                                    </li>
                                   
                          
                        </ul>
                    </li>

                        </ul>
                    </div>
                </div>
            </div>

			<!-- end sidebar menu -->
			<!-- end sidebar menu -->
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Postulation </div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="../enseignement/index.php">Accueil</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Eleve</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Postulation</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header>Les Information Basic</header>

								</div>

								<!-- ************************** ajoute d'eleve ********************************************************************************************-->
                                <form method="post" action="">
								<div class="card-body row">

									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" name="Nom" id="Nom" >
											<label class="mdl-textfield__label">Nom </label>

													<!--<span class="mdl-textfield__error">Nom obligatoire!</span>-->

										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" name="Prenom"  id="Prenom"  >
											<label class="mdl-textfield__label" >Prenom </label>
													<!--<span class="mdl-textfield__error">Prenom obligatoire!</span>-->
										</div>
									</div>
								<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
<!--											<input " type="text" id="Genre" value=""-->
<!--												readonly tabIndex="-1" required >-->
<!--											<label for="Genre" ">-->
<!--												<i ">keyboard_arrow_down</i>-->
<!--											</label>-->
<!--											<label for="Genre" ">Genre</label>-->
											<select class="mdl-textfield__input class="pull-right margin-0 class="mdl-icon-toggle__label material-icons class="mdl-textfield__label data-mdl-for="Genre" name="Genre" >
                                                <option class="mdl-menu__item"  disabled selected>Genre</option>
                                                <option class="mdl-menu__item" value="M">Male</option>
												<option class="mdl-menu__item" value="F">Female</option>
											</select>
										</div>
									</div>

									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="date" name="Datenaiss" id="Datenaiss" placeholder="mm/dd/yyyy" >
											<label class="mdl-textfield__label" for="text5">Date de Naissance</label>
											<!--<span class="mdl-textfield__error">Date obligatoire!</span>-->
										</div>
									</div>

									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" name="CNIB" id="CNIB" placeholder="B400168235" >
											<label class="mdl-textfield__label" for="text5">CNIB</label>
											<!--<span class="mdl-textfield__error">CNIB obligatoire!</span>-->
										</div>
									</div>

								<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="date" name="Datevalid" id="Datevalid" placeholder="mm/dd/yyyy" >
											<label class="mdl-textfield__label" for="text5">Date de validite</label>
											<!--<span class="mdl-textfield__error">Date obligatoire!</span>-->
										</div>
									</div>

									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="email" name="Email" id="Email" placeholder="nanaboukyalidou52@gmail.com" >
											<label class="mdl-textfield__label">Email</label>
											<span class="mdl-textfield__error">Entre un Email  Valide!</span>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
													class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" name="Numero" id="Numero"  >
											<label class="mdl-textfield__label" for="text5">Numero de telephone</label>
											<!--<span class="mdl-textfield__error">Numero obligatoire!</span>-->
										</div>
									</div>



									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" name="Nomparent" id="Nomparent"  >
											<label class="mdl-textfield__label">Nom et Prenom d'un Parents</label>
													<!--<span class="mdl-textfield__error">Nom de parent obligatoire!</span>-->

										</div>
									</div>


									<div class="col-lg-6 p-t-20">
										<div
												class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" name="Numeroparent" id="Numeroparent"  >
											<label class="mdl-textfield__label" for="txtPNo">Numero de telephone du parent</label>
											<!--<span class="mdl-textfield__error">Numero obligatoire!</span>-->
										</div>
									</div>

									<!--****************** chargement de documents *********************-->

									<div class="col-lg-12 p-t-20">
										<label class="control-label col-md-3">
                                            Insertion de documents
										</label>
										<div class="col-md-12">
											<div id="id_dropzone" class="dropzone"></div>
										</div>
									</div>
									<div class="col-lg-12 p-t-20 text-center">
										<button type="submit" name="Valider"
											class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink"> Valider </button>
										<button type="submit" name="Cancel"
											class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default" href="../enseignement/index.php"> Cancel </button>
									</div>
								</div>
                                </form>
                            </div>
						</div>
					</div>
				</div>
			</div>
			<!-- end page content -->
			<!-- start chat sidebar -->
			<div class="chat-sidebar-container" data-close-on-body-click="false">
				<div class="chat-sidebar">
					<ul class="nav nav-tabs">
						<li class="nav-item">
							<a href="#quick_sidebar_tab_1" class="nav-link active tab-icon" data-bs-toggle="tab"> <i
									class="material-icons">chat</i>Chat
								<span class="badge badge-danger">4</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="#quick_sidebar_tab_3" class="nav-link tab-icon" data-bs-toggle="tab"> <i
									class="material-icons">settings</i>
								Settings
							</a>
						</li>
					</ul>
					<div class="tab-content">

						<!-- Start Setting Panel -->
						<div class="tab-pane chat-sidebar-settings" role="tabpanel" id="quick_sidebar_tab_3">
							<div class="chat-sidebar-settings-list slimscroll-style">
								<div class="chat-header">
									<h5 class="list-heading">Layout Settings</h5>
								</div>
								<div class="chatpane inner-content ">
									<div class="settings-list">
										<div class="setting-item">
											<div class="setting-text">Sidebar Position</div>
											<div class="setting-set">
												<select
													class="sidebar-pos-option form-control input-inline input-sm input-small ">
													<option value="left" selected="selected">Left</option>
													<option value="right">Right</option>
												</select>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Header</div>
											<div class="setting-set">
												<select
													class="page-header-option form-control input-inline input-sm input-small ">
													<option value="fixed" selected="selected">Fixed</option>
													<option value="default">Default</option>
												</select>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Footer</div>
											<div class="setting-set">
												<select
													class="page-footer-option form-control input-inline input-sm input-small ">
													<option value="fixed">Fixed</option>
													<option value="default" selected="selected">Default</option>
												</select>
											</div>
										</div>
									</div>
									<div class="chat-header">
										<h5 class="list-heading">Account Settings</h5>
									</div>
									<div class="settings-list">
										<div class="setting-item">
											<div class="setting-text">Notifications</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-1">
														<input type="checkbox" id="switch-1" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>

										<div class="setting-item">
											<div class="setting-text">Status</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-2">
														<input type="checkbox" id="switch-2" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">2 Steps Verification</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-3">
														<input type="checkbox" id="switch-3" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
									</div>
									<div class="chat-header">
										<h5 class="list-heading">General Settings</h5>
									</div>
									<div class="settings-list">
										<div class="setting-item">
											<div class="setting-text">Location</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-4">
														<input type="checkbox" id="switch-4" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Save Histry</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-5">
														<input type="checkbox" id="switch-5" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Auto Updates</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-6">
														<input type="checkbox" id="switch-6" class="mdl-switch__input"
															checked>
													</label>
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
			<!-- end chat sidebar -->
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


</html>