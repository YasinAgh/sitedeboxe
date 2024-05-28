<?php
require_once 'DbConnection.php';
class Ring
{
    public int $ID;
    public string $nom;
    public int $longueur;
    public int $largeur;
    public int $hauteur;
    public string $couleur;

    public function __construct(String $nom, int $longueur, int $largeur, int $hauteur, string $couleur,int $ID=0)
    {
        $this->ID = $ID;
        $this->nom = $nom;
        $this->longueur = $longueur;
        $this->largeur = $largeur;
        $this->hauteur = $hauteur;
        $this->couleur = $couleur;
    }
    

}

class RingRepository
{

    public static function getRingById(int $ID): ?Ring
    {
        $db = DbConnection::getConnection();
        $query = "SELECT * FROM ring WHERE ID = :ID";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':ID', $ID, PDO::PARAM_INT);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$row) {
            return null;
        }

        return new Ring(
            $row['nom'],
            $row['longueur'],
            $row['largeur'],
            $row['hauteur'],
            $row['couleur'],
            $row['ID']
        );
    }
    public static function saveRing(Ring $Ring): void
    {   
        $db = DbConnection::getConnection();
        $query = "INSERT INTO ring (nom,) VALUES  (:nom,)";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':Nom', $Ring->nom, PDO::PARAM_STR);
        $stmt->execute();
    }


}