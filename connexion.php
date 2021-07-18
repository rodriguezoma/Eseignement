<?php
$host = "localhost";
$user = "root";
$bdd = "bd_enseignement";
try
{
    $connexion = new PDO('mysql:host=localhost; dbname=bd_enseignement', 'root', '', [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]);
}
catch(PDOException $error)
{
    echo 'une erreure est survenue';
    echo $error;
}
// die();
?>


