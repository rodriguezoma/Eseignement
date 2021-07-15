<?php
session_start();
require_once('../Fonctions/connexion_bdd_enseignement.php');
$bdd = connexion_bdd_enseignement();
if(isset($_GET['code_lien'])){
     $code_lien = htmlspecialchars($_GET['code_lien']);
     $cnx = $bdd->prepare('SELECT * FROM lien WHERE CODE_LIEN = ?');
     $cnx->execute(array($code_lien)); 
     $cnx_info = $cnx->fetch();
     if (isset($_SESSION['code_lien']) AND ($cnx_info['CODE_LIEN'] == $_SESSION['code_lien'])) {
     
?>
<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript">
    
  </script>
</head>
<body>
      <h3>Page de connexion des etablissements secondaires non edite</h3>
      <h3><a href="Gestion/Principal.php">Page du principal</a></h3>
      <h3><a href="../index.php">Page d'accueil</a></h3>
</body>
</html>
<?php } else{header('Location: ../index.php');} ?>
<?php } else{header('Location: ../index.php');} ?>