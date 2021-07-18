
<?php
require_once('../connexion.php');

if(isset($_POST["Valider"])){

if( isset($_POST["identifiant"] ) && isset($_POST["email"]) && isset($_POST["phone"]) && isset($_POST["cnib"]) && isset($_POST["pass"]) && isset($_POST["pass2"]) ){

	if ( !empty($_POST["identifiant"]) &&  !empty($_POST["email"]) && !empty($_POST["phone"]) &&  !empty($_POST["cnib"]) && !empty($_POST["pass"]) && !empty($_POST["pass2"]) ){

	$identifiant = $_POST["identifiant"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$cnib = $_POST["cnib"];
	$password = md5($_POST["pass"]);

	$select = $connexion->prepare("SELECT Identifiant FROM user_etabliss WHERE Identifiant=?");
		$select->execute([$identifiant]);
		$count = $select->rowCount();

	if($count>0){

		$identifiant1=("Desolez, votre identifiant exist deja!");

	}else{

	if($password==md5($_POST["pass2"])){

	$req = $connexion->prepare("INSERT INTO user_etabliss(Identifiant, Email, Numero, CNIB, Passwords)  VALUES (?,?,?,?,?)");
	
	$req->execute([$identifiant,$email,$phone,$cnib,$password]);
	var_dump($req->fetch());
	}else {
	$Password1 =  ("Desoler, mot de passe non identique!");
}
	}
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
				<form class="login100-form validate-form"  method = "POST"  action = "">
					<span class="login100-form-logo">
						<img alt="" src="../assets/img/logo-2.png">
					</span>
					<span class="login100-form-title p-b-34 p-t-27">
						Creation de Compte d'etablissement
					</span>
					<div class="row">
						<div class="col-lg-6 p-t-20">
							<div class="wrap-input100 validate-input" data-validate="Entre votre identifiant">
								<input class="input100" type="text" name="identifiant" placeholder="Identifiant de l'établissement">
								<span class="focus-input100" data-placeholder="&#xf207;"></span>
							</div>
							<div class="text-danger">
									<?php
																		
										if(isset($identifiant1)){
											echo $identifiant1;
										}
									?>

								</div>

						</div>

						<div class="col-lg-6 p-t-20">
							<div class="wrap-input100 validate-input" data-validate="Entre email">
								<input class="input100" type="email" name="email" placeholder="Email">
								<span class="focus-input100" data-placeholder="&#xf207;"></span>
							</div>

						</div>

						<div class="col-lg-6 p-t-20">
							<div class="wrap-input100 validate-input" data-validate="Entre numéro de téléphone">
								<input class="input100" type="text" name="phone" placeholder="Numéro de téléphone">
								<span class="focus-input100" data-placeholder="&#xf207;"></span>
							</div>
						</div>
						<div class="col-lg-6 p-t-20">
							<div class="wrap-input100 validate-input" data-validate="Entre votre code CNIB/Passport">
								<input class="input100" type="text" name="cnib" placeholder="CNIB/Passport">
								<span class="focus-input100" data-placeholder="&#xf207;"></span>
							</div>
						</div>
						</div>
						
						<div class="col-lg-6 p-t-20">
							<div class="wrap-input100 validate-input" data-validate="Entre mot de passe">
								<input class="input100" type="password" name="pass" placeholder="mot de passe">
								<span class="focus-input100" data-placeholder="&#xf191;"></span>
							</div>
						</div>
						<div class="col-lg-6 p-t-20">
							<div class="wrap-input100 validate-input" data-validate="Confirmer mot de passe">
								<input class="input100" type="password" name="pass2" placeholder="Confirmer mot de passe">
								<span class="focus-input100" data-placeholder="&#xf191;"></span>
							</div>
							<div class="text-danger">	
										<?php
										
										if(isset($Password1)){
											echo $Password1;
										}
										
										?>
							</div>
						</div>
					</div>


					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="Se  rappeller de moi">
						<label class="label-checkbox100" for="ckb1">
							Se rappeller de moi
						</label>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn"  type="submit" name="Valider"  >
							Valider
						</button>
					</div>
					<div class="text-center p-t-30">
						<a class="txt1" href="login.php">
							Tu as deja un compte?
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