
<?php
require_once('../connexion.php');

if(isset($_POST["Connect"])){

if(isset($_POST["identifiant"]) && isset($_POST["Password"]) ){

	$identifiant = $_POST["identifiant"];
	$password = $_POST["Password"];


	$select = $connexion->prepare("SELECT Identifiant, Passwords FROM user_etabliss WHERE Identifiant=?  AND  Passwords=?");
	$select->execute([$identifiant, md5($password)]);
			$fet = $select->fetch();
		$count = $select->rowCount();
		
	if($count==1){
	header('Location: ./all_students.php');

	}else{

		$conect= ("Desolez, Identifiant ou Password incorrect!");

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
		<div class="container-login100 page"  >
								
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="">
					<span class="login100-form-logo">
						<img alt="" src="../assets/img/faso-education.png">
					</span>
					<span class="login100-form-title p-b-34 p-t-27">
						Se Connecter
					</span>

						<div class="text-danger">
									<?php
										
										if(isset($conect)){
											echo $conect;
										}
									?>
						</div>

					<div class="wrap-input100 validate-input" data-validate="Entre l'identifiant">
						<input class="input100" type="text" name="identifiant" placeholder="Identifiant d'etablissement">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Entre mot de passe">
						<input class="input100" type="password" name="Password" placeholder="Mot de passe">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="Se rappeller de moi">
						<label class="label-checkbox100" for="ckb1">
							Se rappeller de moi
						</label>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="Connect" >
							Connecter
						</button>
					</div>
					<div class="text-center p-t-30">
						<a class="txt1" href="forgot_password.php">
							Mot de passe oublier?
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