<?php
// require_once 'DB.php';
// require_once '../entities/Client.php';

 
class ClientModel{

    private $db;
  

    public  function __construct()
    {
          $this->db =  new DB;

    }

    public function addClient(Client $client)
    {
     
        $sql = "INSERT INTO `client`  VALUES (NULL,'".$client->getNom()."','".$client->getPrenom()."','".$client->getAdresse()."','".$client->getEmail()."','','".$client->getSalaire()."','".$client->getTypeClient()."',NULL,'".$client->getNomEntreprise()."','".$client->getTelephone()."')";     
        return $this->db->executeInsert($sql);

    }

    public function typeclient($libelle)
    {  
    
        $sql = "INSERT INTO `typeclient` Values (NULL,$libelle)";
        return $db->executeInsert($sql);
    }

    public function getCient($client)
    {

        $sql = "SELECT idC FROM `client` WHERE idC = '$client' ";
        return $this->db->executeSelect($sql);
    }

    public function getCientByName($client)
    {
 
        $sql = "SELECT * FROM `typeclient` WHERE libelle = '$client' ";
        return $this->db->executeSelect($sql);
    }

    public function getLastClient()
    {
    
        $sql = "SELECT max(idC) FROM  `client`";
        return $this->db->executeSelect($sql);
    }

    public function getAllTypeCient(){

        $sql = "SELECT * FROM typeclient";
        return $this->db->executeSelect($sql);
    }

}

?>