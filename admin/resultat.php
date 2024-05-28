<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Résultats du match de boxe</title>
  <link rel="stylesheet" href="../Assets/styleindex.css">
</head>

<body>
  <h1>Résultats du match de boxe</h1>
  <table>
  <?php
require_once '../model/DbConnection.php';
require_once '../model/partie.php';
require_once '../model/boxeur.php';
require_once '../model/arbitre.php';
require_once '../model/ring.php';
require_once '../model/juge.php';

$db = DbConnection::getConnection();
$statement = $db ->query ("SELECT * FROM `match`");
$matchs=[];
while ($row = $statement->fetch()){
  // var_dump($row);
  $match= new Partie (
      BoxeurRepository::getBoxeurById($row['idboxeur1']),
      BoxeurRepository::getBoxeurById($row['idboxeur2']),
      ArbitreRepository::getArbitreById($row['idarbitre']),
      JugeRepository::getJugeById($row['idjuge1']),
      JugeRepository::getJugeById($row['idjuge2']),
      JugeRepository::getJugeById($row['idjuge3']),
      RingRepository::getRingById($row['idring']),
      new DateTime($row['matchdate'])
    );
    $matchs[]= $match;}
    ?>
    <table>
  <caption>
    Match de boxe 
  </caption>
  <thead>
    <tr>
      <th scope="col">Nom Boxeur 1</th>
      <th scope="col">Prenom Boxeur 1</th>
      <th scope="col">Nom Boxeur 2</th>
      <th scope="col">Prenom Boxeur 2</th>
      <th scope="col">Prenom juge 1</th>
      <th scope="col">Prenom juge 2</th>
      <th scope="col">Prenom juge 3</th>
      <th scope="col">Date</th>
      <th scope="col">Nom ring</th>
    </tr>
  </thead>
  <tbody>
    <tr>
<?php foreach($matchs as $match){
  
  echo " <tr>
  <th scope='row'>". $match->boxeur1->Nom."</th>
  <th scope='row'>" . $match->boxeur1->Prenom ."</th>
  <th scope='row'>". $match->boxeur2->Nom."</th>
  <th scope='row'>" . $match->boxeur2->Prenom ."</th>
  <th scope='row'>" . $match->juge1->Prenom ."</th>
  <th scope='row'>" . $match->juge2->Prenom ."</th>
  <th scope='row'>" . $match->juge3->Prenom ."</th>
  <th>".$match->date->format('Y-m-d')."</th>
  <th>" . $match->ring->nom."</th>
</tr>";}

?>
</tr>
    </tbody>
    </table>
  <a href="./match.php" class="btn-retour">Nouveau match</a>
</body>
</html>
