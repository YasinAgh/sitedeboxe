<!DOCTYPE html>
<html>
<head>
	<title>Formulaire de boxe</title>
	<link rel="stylesheet" href="Assets/admin.css">
</head>
<body>
  <form action="../api/ajoutpartie.php" method="POST">
    <h2>Formulaire de match de boxe</h2>
 
    <label for="boxeur2">Boxeur 1 :</label>
    <select id="boxeur1" name="boxeur1" required>
    <?php
        require_once "recup.php";
          foreach( $getboxeur as $boxeur){
              echo "<option value=".$boxeur['ID'].">".$boxeur['Nom']."</option>";

} ;?>
    </select>
    <label for="boxeur2">Boxeur 2 :</label>
    <select id="boxeur2" name="boxeur2" required>
    <?php
          foreach( $getboxeur as $boxeur2){
              echo "<option value=".$boxeur2['ID'].">".$boxeur2['Nom']."</option>";

} ;?>
    </select>
    <br>
    <label for="Ringmatch">Ring du match :</label>
    <select id="ring" name="ring" required>
      <?php
      
        foreach( $getring as $ring){
        echo "<option value=".$ring['ID'].">".$ring['nom']."</option>";

} ;?>
    </select>
    <br>
    <label for="arbitre">arbitre du match :</label>
    <select id="arbitre" name="arbitre" required>
      <?php
      
        foreach( $getarbitre as $arbitre){
        echo "<option value=".$arbitre['ID'].">".$arbitre['nom']."</option>";
} ;?>
</select>
<br>
    <label for="juge1">juge 1 du match :</label>
    <select id="juge1" name="juge1" required>
      <?php
        foreach( $getjuge as $juge1){
        echo "<option value=".$juge1['ID'].">".$juge1['nom']."</option>";

} ;?>
    </select>
    <br>
    <label for="juge2">juge 2 du match :</label>
    <select id="juge2" name="juge2" required>
      <?php
        foreach( $getjuge as $juge2){
        echo "<option value=".$juge2['ID'].">".$juge2['nom']."</option>";

} ;?>
     </select>
     <br>
    <label for="juge3">juge 3 du match :</label>
    <select id="juge3" name="juge3" required>
      <?php
        foreach( $getjuge as $juge3){
        echo "<option value=".$juge3['ID'].">".$juge3['nom']."</option>";

} ;?>
     </select>


     <br>
    <label for="date-match">Date du match :</label>
    <input type="date" id="date" name="date" required>


</br>

    <input type="submit" value="Enregistrer le match">



    
</br>
  </form>
</body>
</html>
