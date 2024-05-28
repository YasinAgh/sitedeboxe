<?php
var_dump($_POST);
include_once "../model/boxeur.php";

try{
    $dsn = "mysql:dbname=tournois;host=localhost";
    $user="root";
    $password= "";

    $db = new PDO($dsn, $user,$password);
}catch(PDOException $e){
    die('Erreur'.$e);
}

require_once "../admin/boxeur.php";
//
if(isset($_POST['nom']) && ($_POST['prenom']) && !empty($_POST['nom'] && !empty($_POST['prenom']))){

$prenom = $_POST["prenom"];
$nom = $_POST["nom"];
$nationalite = $_POST["nationalite"];
$Sexe = $_POST["Sexe"];
$Categorie = $_POST["Categorie"];
$Poids = $_POST["Poids"];
$Taille = $_POST["Taille"];
$boxeur = new boxeur ($Categorie, $Sexe, $nom, $prenom, $nationalite, $Taille, $Poids);

BoxeurRepository::saveBoxeur($boxeur);
}




?>