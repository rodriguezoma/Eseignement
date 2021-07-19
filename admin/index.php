
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

   $req=$req->execute([$_GET["id_Class"], $nom, $prenom, $datenaiss, $genre, $cnib, $datevalid, $email, $numero, $nomparent, $numeroparent]);
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
<html lang="en" >
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
 
                                <ul class="sub-menu">
                                    <li class="nav-item">
                                        
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
		<div class="page-container">


		<div class="row">



		<div class="col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="row1 clearfix top-report">
								<div class="col-12-1">
									<div class="card">
										<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
											<!-- Indicators -->
											<ol class="carousel-indicators">
												<li data-bs-target="#carousel-example-generic" data-slide-to="0"
													class="active"></li>
												<li data-bs-target="#carousel-example-generic" data-slide-to="1"
													class="">
												</li>
												<li data-bs-target="#carousel-example-generic" data-slide-to="2"
													class="">
												</li>
											</ol>
											<!-- Wrapper for slides -->
											<div class="carousel-inner owl-carousel" role="listbox" id="owl-demo">
												<div class="item active"> <img src="../assets/img/slider/slider1.jpg"
														alt=""> </div>
												<div class="item"> <img src="../assets/img/slider/slider2.jpg" alt="">
												</div>
												<div class="item"> <img src="../assets/img/slider/slider3.jpg" alt="">
												</div>
											</div>
											<!-- Controls -->
											<a class="left carousel-control" href="#carousel-example-generic"
												role="button" data-slide="prev"> <span
													class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
												<span class="sr-only">Previous</span>
											</a> <a class="right carousel-control" href="#carousel-example-generic"
												role="button" data-slide="next">
												<span class="glyphicon glyphicon-chevron-right"
													aria-hidden="true"></span> <span class="sr-only">Next</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
			<!-- end chat sidebar -->
		</div>
		<!-- end page container -->




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