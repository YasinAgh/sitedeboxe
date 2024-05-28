<?php
require_once 'DbConnection.php';
class juge
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
    class JugeRepository
{

    public static function getJugeById(int $id): ?Juge
    {
        $db = DbConnection::getConnection();
        $query = "SELECT * FROM juge WHERE ID = :id";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$row) {
            return null;
        }

        return new juge(
            $row['nom'],
            $row['prenom'],
            $row['nationalite'],
            $row['ID']
        );
    }
    public static function saveJuge(Juge $Juge): void
    {   
        $db = DbConnection::getConnection();
        $query = "INSERT INTO juge (nom, prenom, nationalite,) VALUES  (:nom, :prenom, :nationalite)";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':prenom', $Juge->Prenom, PDO::PARAM_STR);
        $stmt->bindParam(':nationalite', $Juge->Nationalite, PDO::PARAM_STR);
        $stmt->bindParam(':nom', $Juge->Nom, PDO::PARAM_STR);
  
        $stmt->execute();
    }


}