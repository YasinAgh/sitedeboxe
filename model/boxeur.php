<?php
require_once 'DbConnection.php';

class boxeur
{
    public int $ID;
    public string $Categorie;
    public string $Sexe;
    public string $Nom;
    public string $Prenom;
    public string $Nationalite;
    public int $Poids;
    public int $Taille;

    public function __construct(string $Categorie, string $Sexe, String $Nom, String $Prenom, String $Nationalite, int $Taille, int $Poids,int $ID = 0)
    {
        $this->ID = $ID;
        $this->Categorie = $Categorie;
        $this->Sexe = $Sexe;
        $this->Nom = $Nom;
        $this->Prenom = $Prenom;
        $this->Nationalite = $Nationalite;
        $this->Taille = $Taille;
        $this->Poids = $Poids;
    }
 
} 
class BoxeurRepository
{

    public static function getBoxeurById(int $ID): ?Boxeur
    {
        $db = DbConnection::getConnection();
        $query = "SELECT * FROM boxeur WHERE ID = :ID";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':ID', $ID, PDO::PARAM_INT);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$row) {
            return null;
        }

        return new Boxeur(
            $row['Categorie'],
            $row['Sexe'],
            $row['Nom'],
            $row['Prenom'],
            $row['Nationalite'],
            $row['Taille'],
            $row['Poids'],
            $row['ID']

        );
    }
    public static function saveBoxeur(Boxeur $Boxeur): void
    {   
        $db = DbConnection::getConnection();
        $query = "INSERT INTO boxeur (Categorie, Sexe, Nom, Prenom, Nationalite, Taille, Poids) VALUES (:Categorie, :Sexe, :Nom, :Prenom, :Nationalite, :Taille, :Poids)";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':Categorie', $Boxeur->Categorie, PDO::PARAM_STR);
        $stmt->bindParam(':Sexe', $Boxeur->Sexe, PDO::PARAM_STR);
        $stmt->bindParam(':Nom', $Boxeur->Nom, PDO::PARAM_STR);
        $stmt->bindParam(':Prenom', $Boxeur->Prenom, PDO::PARAM_STR);
        $stmt->bindParam(':Nationalite', $Boxeur->Nationalite, PDO::PARAM_STR);
        $stmt->bindParam(':Taille', $Boxeur->Taille, PDO::PARAM_INT);
        $stmt->bindParam(':Poids', $Boxeur->Poids, PDO::PARAM_INT);
        $stmt->execute();
    }

}
