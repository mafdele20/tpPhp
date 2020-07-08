<?php
// require_once 'DB.php';
// require_once '../entities/Compte.php';

class CompteModel{

    private $db;

    public  function __construct()
    {
          $this->db =  new DB;;
    }

    public function addCompte(Compte $compte)
    {

        $sql ="INSERT INTO `compte` VALUES (NULL, '".$compte->getNumero()."', NULL, '".$compte->getcleRib()."', '".$compte->getDate()."', '".$compte->getSolde()."', '".$compte->getTypeCompte()."', '".$compte->getEtat()."', '".$compte->getFrais()."', NULL,'".$compte->getProprietaire()."', NULL)";
        return $this->db->executeInsert($sql);
    }

   

    public function listeCompte()
    {
 
        $sql = "SELECT * FROM `compte`";
        return $this->db->executeSelect($sql);
    } 
   


}