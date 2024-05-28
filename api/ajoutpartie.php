<?php
//var_dump($_POST);

try{
    $dsn = "mysql:dbname=tournois;host=localhost";
    $user="root";
    $password= "";

    $db = new PDO($dsn, $user,$password);
}catch(PDOException $e){
    die('Erreur'.$e);
}


require_once "../model/partie.php";
require_once "../model/boxeur.php";
require_once "../model/arbitre.php";
require_once "../model/juge.php";
require_once "../model/ring.php";





$options = array(
    "boxeur1" => FILTER_VALIDATE_INT,
    "boxeur2" => FILTER_VALIDATE_INT,
    "arbitre" => FILTER_VALIDATE_INT,
    "ring" => FILTER_VALIDATE_INT,
    "juge1"=> FILTER_VALIDATE_INT,
    "juge2"=> FILTER_VALIDATE_INT,
    "juge3" => FILTER_VALIDATE_INT,
    "date" => HTML_SPECIALCHARS,
);


$result = filter_input_array(INPUT_POST, $options);
//var_dump($result);
if ($result == null) {
    header("Location : /admin/match.php ");
    die('Post invalide');

}
$dateverif = DateTime::createFromFormat("Y-m-d", $result["date"]);
if (in_array("", $result) or $dateverif === false) {
    var_dump($result);
    var_dump($dateverif);
    //header("Location: admin/partie?error=invalide%20values");
    die('Post invalide');
    
}
$match = new Partie(
    BoxeurRepository::getBoxeurById($result['boxeur1']) , 
    BoxeurRepository::getBoxeurById($result['boxeur2']),
    ArbitreRepository::getArbitreById($result['arbitre']),
    JugeRepository::getJugeById($result['juge1']),
    JugeRepository::getJugeById($result['juge2']),
    JugeRepository::getJugeById($result['juge3']),
    RingRepository::getRingById($result['ring']),
    $dateverif,
    );


$crea= $db -> prepare('INSERT INTO `match` (idboxeur1,idboxeur2,idarbitre,idring,idjuge1,idjuge2,idjuge3,matchdate) values(?,?,?,?,?,?,?,?)');
// var_dump($match->boxeur1->ID);
$crea -> bindValue(1,$match->boxeur1->ID);
$crea -> bindValue(2,$match->boxeur2->ID);
$crea -> bindValue(3,$match->arbitre->ID);
$crea -> bindValue(4,$match->juge1->ID);
$crea -> bindValue(5,$match->juge2->ID);
$crea -> bindValue(6,$match->juge3->ID);
$crea -> bindValue(7,$match->ring->ID);
$crea -> bindValue(8,$match->date->format('Y-m-d'));
// var_dump($crea);
$crea -> execute();
echo("la partie a été ajouté");
header("Location: ../admin/match.php");










