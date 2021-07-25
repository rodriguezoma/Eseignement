<?php
require_once('../connexion.php');

?>



<!DOCTYPE html>
<html lang="en">


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
	<link href="../assets/plugins/summernote/summernote.css" rel="stylesheet">
	<!-- morris chart -->
	<link href="../assets/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="../assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="../assets/css/material_style.css">
	<!-- inbox style -->
	<link href="../assets/css/pages/inbox.min.css" rel="stylesheet" type="text/css" />
	<!-- Theme Styles -->
	<link href="../assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="../assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/theme/light/style.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/theme/light/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- Owl Carousel Assets -->
	<link href="../assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="../assets/plugins/owl-carousel/owl.theme.css" rel="stylesheet">
	<!-- favicon -->
	<link rel="shortcut icon" href="https://radixtouch.com/templates/admin/smart/source/assets/img/favicon.ico" />
</head>

<body
	class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
	<div class="page-wrapper">
		<!-- start header -->
		<!-- start header -->
		<div class="page-header navbar navbar-fixed-top">
			<div class="page-header-inner ">
				<!-- logo start -->
				<div class="page-logo">
					<a href="index.php">
						<span class="logo-icon material-icons fa-rotate-45">school</span>
						<span class="logo-default">FasoEducation</span> </a>
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
			

			<!-- <div class="page-container"> -->
			<!-- start sidebar menu -->

			<!-- <div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb"> -->


						<!-- </div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">-->
								<div class="card-head">

								</div> 

			<!-- ************************** Principal bouton de Home      ************************************************************-->
                               
			
							<form method="post" action="">
								<div class="card-body row">

									<!-- start widget -->
						<div class="state-overview"><div class=" pull-left">
								<div class="page-title"> Welcome! </div>
							</div>	
						</br></br>
						<div class="row">		
											
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									

							<div class="col-xl-3 col-md-6 col-12">
							<span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
							<a href="ville.php">
								<div class="info-box bg-success">
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<div class="info-box-content">
										<span class="mdl-button__ripple-containert"><b>Effectuer un depot</b></span>
										<!-- <span class="info-box-number">450</span> -->

									</div>
									<!-- /.info-box-content -->
								</div>
								</a>
								<!-- /.info-box -->
							</div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

							<div class="col-xl-3 col-md-6 col-12">
								<span class="info-box-icon push-bottom"><i class="material-icons">class</i></span>
								<a href="add_fees.php">
								<div class="info-box bg-blue">
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<div class="info-box-content">
										<span class="mdl-button__ripple-containert"><b>Effectuer une Inscription</b></span>  
										<!-- <span class="info-box-number">52</span> -->

									</div>
									<!-- /.info-box-content -->
								</div>
								</a>
								<!-- /.info-box -->
							</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<!-- /.col -->
							<div class="col-xl-3 col-md-6 col-12">
							<span class="info-box-icon push-bottom"><i class="material-icons">local_library</i></span>
							<a href="FasoEseignement.php">
								<div class="info-box bg-orange">
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<div class="info-box-content">
										<span class="mdl-button__ripple-containert"><b>About FasoEnseignement</></span>
										

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

 <!-- ***********************      Slide des images   ***************************************************** -->

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
												<div class="item active"> <img src="../assets/img/slider/images4).jpg"
														alt=""> </div>
												<div class="item"> <img src="../assets/img/slider/phpNPlWv3.jpg" alt="">
												</div>
												<div class="item"> <img src="../assets/img/slider/imge4.jpg" alt="">
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
			</div>
	</div>


 <!-- ***********************   End   Slide des images   ***************************************************** -->



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
	<script src="../assets/plugins/jquery/jquery.min.js"></script>
	<script src="../assets/plugins/popper/popper.js"></script>
	<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
	<script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
	<script src="../assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
	<script src="../assets/plugins/moment/moment.min.js"></script>
	<script src="../assets/plugins/counterup/jquery.waypoints.min.js"></script>
	<script src="../assets/plugins/counterup/jquery.counterup.min.js"></script>
	<!-- owl carousel -->
	<script src="../assets/plugins/owl-carousel/owl.carousel.js"></script>
	<script src="../assets/js/pages/owl-carousel/owl_data.js"></script>
	<!-- Common js-->
	<script src="../assets/js/app.js"></script>
	<script src="../assets/js/layout.js"></script>
	<script src="../assets/js/theme-color.js"></script>
	<!-- Material -->
	<script src="../assets/plugins/material/material.min.js"></script>
	<script src="../assets/plugins/sparkline/jquery.sparkline.js"></script>
	<script src="../assets/js/pages/sparkline/sparkline-data.js"></script>
	<!-- summernote -->
	<script src="../assets/plugins/summernote/summernote.js"></script>
	<script src="../assets/js/pages/summernote/summernote-data.js"></script>
</body>


</html>