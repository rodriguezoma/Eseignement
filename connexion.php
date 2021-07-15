<?php
$host = "localhost";
$user = "root";
$bdd = "bd_enseignement";
try
{
$connexion = new PDO('mysql:host=localhost; dbname=bd_enseignement', 'root', '');

}
catch(PDOException $error)
{
    echo 'une erreure est survenue';
}


?>


