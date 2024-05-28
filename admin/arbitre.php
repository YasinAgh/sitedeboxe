<!DOCTYPE html>
<html>
<head>
	<title>Formulaire d'inscription pour devenir arbitre de boxe</title>
	<link rel="stylesheet" href="Assets/admin.css">
</head>
<body>
	<h1>Formulaire d'inscription pour devenir arbitre de boxe</h1>
	<form action="../api/ajoutarbitre.php" method="POST">
		<label for="nom">Nom :</label>
		<input type="text" id="nom" name="nom" required>

		<label for="prenom">Prénom :</label>
		<input type="text" id="prenom" name="prenom" required>

		<label for="nationalite">Nationalité :</label>
		<input type="text" id="nationalite" name="nationalite" required>

		<input type="submit" value="Envoyer">
	</form>
</body>
</html>
