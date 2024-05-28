<?php
require_once 'DbConnection.php';
class arbitre
{
    public int $ID;
    public string $Nom;
    public string $Prenom;
    public string $Nationalite;

    public function __construct(String $Nom, String $Prenom, String $Nationalite,int $ID=0)
    {
        $this->ID = $ID;
        $this->Nom = $Nom;
        $this->Prenom = $Prenom;
        $this->Nationalite = $Nationalite;
    }
}
class ArbitreRepository
{

    public static function getArbitreById(int $id): ?Arbitre
    {
        $db = DbConnection::getConnection();
        $query = "SELECT * FROM arbitre WHERE ID = :id";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$row) {
            return null;
        }

        return new Arbitre(
            $row['nom'],
            $row['prenom'],
            $row['nationalite'],
            $row['ID']
        );
    }
    public static function saveArbitre(Arbitre $Arbitre): void
    {   
        $db = DbConnection::getConnection();
        $query = "INSERT INTO arbitre (nom, prenom, nationalite,) VALUES  (:nom, :prenom, :nationalite)";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':prenom', $Arbitre->Prenom, PDO::PARAM_STR);
        $stmt->bindParam(':nationalite', $Arbitre->Nationalite, PDO::PARAM_STR);
        $stmt->bindParam(':nom', $Arbitre->Nom, PDO::PARAM_STR);
        $stmt->execute();
    }
}
