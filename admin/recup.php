<?php
//verif connexion bdd
try{
    $dsn = "mysql:dbname=tournois;host=localhost";
    $user="root";
    $password= "";

    $db = new PDO($dsn, $user,$password);
}catch(PDOException $e){
    die('Erreur'.$e);
}
//recueration des donnes de la bdd et stockes dans un tableau fetchall()

$sql = "SELECT * FROM  boxeur ";
$req = $db->prepare($sql);
$req->execute();
$getboxeur = $req->fetchAll();


$sqlarbitre = "SELECT * FROM arbitre";
$req = $db->prepare($sqlarbitre);
$req->execute();
$getarbitre = $req->fetchAll();

$sqlring = "SELECT * FROM ring";
$req = $db->prepare($sqlring);
$req->execute();
$getring = $req->fetchAll();


$sqljuge = "SELECT * FROM juge";
$req = $db->prepare($sqlring);
$req->execute();
$getjuge = $req->fetchAll();