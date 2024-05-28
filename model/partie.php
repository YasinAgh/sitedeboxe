<?php
require_once 'DbConnection.php';

class Partie  
{
     
    public int $idmatch;
    public boxeur $boxeur1;
    public boxeur $boxeur2;
    public juge $juge1;
    public juge $juge2;
    public juge $juge3;
    public arbitre $arbitre;
    public ring $ring;
    public DateTime $date;

   
public function __construct( boxeur $boxeur1, boxeur $boxeur2, arbitre $arbitre, juge $juge1, juge $juge2, juge $juge3, ring $ring, DateTime $date,int $idmatch = -1) {
    $this->idmatch = $idmatch;
    $this->boxeur1 = $boxeur1;
    $this->boxeur2 = $boxeur2;
    $this->juge1 = $juge1;
    $this->juge2 = $juge2;
    $this->juge3 = $juge3;
    $this->arbitre = $arbitre;
    $this->ring = $ring;
    $this->date = $date;
}
}