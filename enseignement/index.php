<?php
session_start();
require_once('Fonctions/connexion_bdd_enseignement.php');
$bdd = connexion_bdd_enseignement();

if (isset($_GET['option']) AND $_GET['option']=='inscriptionEtablissementSecondairefFvaB3Wrt2021') {
	$code_lien = htmlspecialchars($_GET['code_lien']);
    $verif = $bdd->prepare(" SELECT * FROM lien WHERE CODE_LIEN = ? AND COMPTE = ? AND TYPE = ?");
    $verif ->execute(array($code_lien, 'ETABLISSEMENT_SECONDAIRE', 'INSCRIPTION'));
    $exist = $verif->rowCount();     
    echo $exist;
    if($exist == 1) {
         $info = $verif->fetch(); 
    	 $_SESSION['code_lien']=$info['CODE_LIEN']; 
    	 header('Location: Secondaire/inscription.php?code_lien='.$_SESSION['code_lien']);
    }                    
}
elseif (isset($_GET['option']) AND $_GET['option']=='connexionEtablissementSecondairefFvaB3Wrt2021') {
    $code_lien = htmlspecialchars($_GET['code_lien']);
    $verif = $bdd->prepare(" SELECT * FROM lien WHERE CODE_LIEN = ? AND COMPTE = ? AND TYPE = ?");
    $verif ->execute(array($code_lien, 'ETABLISSEMENT_SECONDAIRE', 'CONNEXION'));
    $exist = $verif->rowCount();     
    echo $exist;
    if($exist == 1) {
         $info = $verif->fetch(); 
         $_SESSION['code_lien']=$info['CODE_LIEN']; 
         header('Location: Secondaire/connexion.php?code_lien='.$_SESSION['code_lien']);
    }                    
}
elseif (isset($_GET['option']) AND $_GET['option']=='inscriptionEtablissementPrimairefFvaB3Wrt2021') {
    $code_lien = htmlspecialchars($_GET['code_lien']);
    $verif = $bdd->prepare(" SELECT * FROM lien WHERE CODE_LIEN = ? AND COMPTE = ? AND TYPE = ?");
    $verif ->execute(array($code_lien, 'ETABLISSEMENT_PRIMAIRE', 'INSCRIPTION'));
    $exist = $verif->rowCount();     
    echo $exist;
    if($exist == 1) {
         $info = $verif->fetch(); 
         $_SESSION['code_lien']=$info['CODE_LIEN']; 
         header('Location: Primaire/connexion.php?code_lien='.$_SESSION['code_lien']);
    }                    
}
elseif (isset($_GET['option']) AND $_GET['option']=='connexionEtablissementPrimairefFvaB3Wrt2021') {
    $code_lien = htmlspecialchars($_GET['code_lien']);
    $verif = $bdd->prepare(" SELECT * FROM lien WHERE CODE_LIEN = ? AND COMPTE = ? AND TYPE = ?");
    $verif ->execute(array($code_lien, 'ETABLISSEMENT_PRIMAIRE', 'CONNEXION'));
    $exist = $verif->rowCount();     
    echo $exist;
    if($exist == 1) {
         $info = $verif->fetch(); 
         $_SESSION['code_lien']=$info['CODE_LIEN']; 
         header('Location: Primaire/connexion.php?code_lien='.$_SESSION['code_lien']);
    }                    
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>www.fasoEnseignement.com</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
<?php	
require_once('Includes/header.php');
require_once('Includes/body.php');
require_once('Includes/footer.php');
?>
</body>
</html>