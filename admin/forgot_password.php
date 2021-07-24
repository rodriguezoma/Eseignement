
<?php
require_once('../connexion.php');

if(isset($_POST["Connect"])){

if(isset($_POST["phonecnib"]) && isset($_POST["Password"]) ){

	$phonecnib = $_POST["phonecnib"];
	$password = $_POST["Password"];


	$select = $connexion->prepare("SELECT Numero FROM user_etabliss WHERE Numero=?");
	$select->execute([$phonecnib]);
			$fet = $select->fetch();
		$count = $select->rowCount();

	if($count>=1){
		$num = $connexion->prepare("SELECT Password FROM user_etabliss WHERE Numero=?");

	}else{

		$conect= ("Desolez, ce numero n'est pas lie a un compte!");

}
	}
	}
?>





<!DOCTYPE html>
<html>


<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="RedstarHospital" />
	<title>FasoEnseignement</title>
	<!-- google font -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet"
		type="text/css" />
	<!-- icons -->
	<link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="../assets/plugins/iconic/css/material-design-iconic-font.min.css">
	<!-- bootstrap -->
	<link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- style -->
	<link rel="stylesheet" href="../assets/css/pages/extra_pages.css">
	<!-- favicon -->
	<link rel="shortcut icon" href="http://radixtouch.in/templates/admin/smart/source/assets/img/favicon.ico" />
</head>

<body>
	<div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-logo">
						<img alt="" src="../assets/img/faso-education.png">
					</span>
					<!-- <span class="login100-form-title  p-t-27">
						Forgot Your Password?
					</span> -->
					<p class="text-center txt-small-heading">
						Mot de passe oublier? Laissez-nous vous aider.
					</p>
					<div class="wrap-input100 validate-input" data-validate="Entre votre numero ou CNIB">
						<input class="input100" type="text" name="phonecnib"
							placeholder="Entre votre numero / CNIB">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Evoyer
						</button>
					</div>
					<div class="text-center p-t-27">
						<a class="txt1" href="login.php">
							Se connecter ?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- start js include path -->
	<script src="../assets/plugins/jquery/jquery.min.js"></script>
	<!-- bootstrap -->
	<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/js/pages/extra-pages/pages.js"></script>
	<!-- end js include path -->
</body>


</html>