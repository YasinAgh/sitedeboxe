<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Page de connexion</title>
	<link rel="stylesheet" type="text/css" href="stylelogin.css">
</head>
<body>
	<div class="container">
		<form action="../api/connexion.php" method="POST">
			<h2>Connexion</h2>
			<label for="nom">Nom</label>
			<input type="nom" id="nom" name="nom" required>
			<label for="motdepasse">Mot de passe</label>
			<input type="motdepasse" id="motdepasse" name="motdepasse" required>
			<input type="submit" value="Se connecter">
		</form>
	</div>
</body>
</html>
