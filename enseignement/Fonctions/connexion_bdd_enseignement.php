<?php
function connexion_bdd_enseignement(){
  try{ $bdd = new PDO('mysql:host=localhost;dbname=bdd_enseignement', 'root', '');}
     catch(Exception $e){header("Location: Erreur/erreur.php");}
return $bdd;
}
?>