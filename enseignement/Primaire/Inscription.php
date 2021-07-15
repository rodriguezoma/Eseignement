<?php
session_start();
require_once('../Fonctions/connexion_bdd_enseignement.php');
$bdd = connexion_bdd_enseignement();
if(isset($_GET['code_lien'])){
     $code_lien = htmlspecialchars($_GET['code_lien']);
     $inscription = $bdd->prepare('SELECT * FROM lien WHERE CODE_LIEN = ?');
     $inscription->execute(array($code_lien)); 
     $inscription_info = $inscription->fetch();
     if (isset($_SESSION['code_lien']) AND ($inscription_info['CODE_LIEN'] == $_SESSION['code_lien'])) {
     
?>
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		
	</script>
</head>
<body>
      <h3>Page d'inscription etablissement primaire non edite</h3>
      <h3><a href="Gestion/Principal.php">Page du principal</a></h3>
      <h3><a href="../index.php">Page d'accueil</a></h3>
</body>
</html>
<?php } else{header('Location: ../index.php');} ?>
<?php } else{header('Location: ../index.php');} ?>