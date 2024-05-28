<?php


try{
    $dsn = "mysql:dbname=tournois;host=localhost";
    $user="root";
    $password= "";

    $db = new PDO($dsn, $user,$password);
}catch(PDOException $e){
    die('Erreur'.$e);
}

require_once "../admin/ring.php";
if(isset($_POST['nom']) && ($_POST['longueur']) && !empty($_POST['nom'] && !empty($_POST['longueur']))){

$nom = $_POST["nom"];
$longueur = $_POST["longueur"];
$largeur = $_POST["largeur"];
$hauteur = $_POST["hauteur"];
$couleur = $_POST["couleur"];
$ring = new ring ($nom, $longueur, $largeur, $hauteur, $couleur);

$crea= $db -> prepare('INSERT INTO ring (nom,longueur,largeur,hauteur, couleur) values(?,?,?,?,?)');
$crea -> bindValue(1,$ring->nom);
$crea -> bindValue(2,$ring->longueur);
$crea -> bindValue(3,$ring->largeur);
$crea -> bindValue(4,$ring->hauteur);
$crea -> bindValue(5,$ring->couleur);
$crea -> execute();
echo("le ring a été ajouté");
}

