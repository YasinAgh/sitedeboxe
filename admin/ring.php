<!DOCTYPE html>
<html>
<head>
	<title>Formulaire de boxe</title>
	<link rel="stylesheet" href="Assets/admin.css">
</head>
<body>
  <form action="../api/ajoutring.php" method="POST">
    <h2>Formulaire de création de ring de boxe</h2>
    <label for="nom">Nom du ring :</label>
    <input type="text" id="nom" name="nom" required>

    <label for="longueur">Longueur du ring (en mètres) :</label>
    <input type="number" id="longueur" name="longueur" min="0" step="0.1" required>
    <br><br>
    <label for="largeur">Largeur du ring (en mètres) :</label>
    <input type="number" id="largeur" name="largeur" min="0" step="0.1" required>
    <br><br>
    <label for="hauteur">Hauteur des cordes (en centimètres) :</label>
    <input type="number" id="hauteur" name="hauteur" min="0" step="1" required>
<br>
<br>
    <label for="couleur">Couleur des cordes :</label>
    <select id="couleur" name="couleur" required>
      <option value="">Sélectionnez une couleur</option>
      <option value="rouge">Rouge</option>
      <option value="bleu">Bleu</option>
      <option value="blanc">Blanc</option>
    </select>

    <input type="submit" value="Enregistrer le ring">
  </form>
</body>
</html>
