<!DOCTYPE html>
<html>
<head>
	<title>Formulaire de boxe</title>
	<link rel="stylesheet" href="Assets/admin.css">
</head>
<body>
	<h1>Formulaire pour boxeur</h1>
	<form action="../api/ajoutboxeur.php" method="POST">
		<label for="nom">Nom :</label>
		<input type="text" id="nom" name="nom" required>

		<label for="prenom">Prénom :</label>
		<input type="text" id="prenom" name="prenom" required>
		
		<label for="nationalite">Nationalité :</label>
		<input type="text" id="nationalite" name="nationalite" required>


		<label for="Sexe">Sexe :</label>
    <select id="Sexe" name="Sexe" required>
      <option value="">Choissisez votre sexe</option>
      <option value="Homme">Homme</option>
      <option value="Femme">Femme</option>
	  </select>

        <label for="Categorie">Categorie :</label>
        <select id="Categorie" name="Categorie">
          <option value="">Choissisez votre Categorie</option>
          <optgroup label="Homme">
			<option value="poids léger Homme">Poids léger (moins de 60 kg)</option>
			<option value="poids moyen Homme">Poids moyen (60-75 kg)</option>
			<option value="poids lourd Homme">Poids lourd (plus de 75 kg)</option>
          </optgroup>
          <optgroup label="Femme">
			<option value="poids léger Femme">Poids léger (moins de 55 kg)</option>
			<option value="poids moyen Femme">Poids moyen (55- 70 kg)</option>
			<option value="poids lourd Femme">Poids lourd (plus de 70 kg)</option>
          </optgroup>
        </select>

		<label for="Poids">Poids :</label>
		<input type="number" id="Poids" name="Poids" min="30" max="200" required>
        <br>
        <br>
		<label for="Taille">Taille :</label>
		<input type="number" id="Taille" name="Taille" min="100" max="250" required>
<br>
<br>
		<input type="submit" value="Envoyer">
	</form>
</body>
</html>
