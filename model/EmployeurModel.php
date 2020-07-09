<?php
namespace model;
require_once 'DB.php';

class EmployeurModel{

    private $db;

    public  function __construct()
    {
          $this->db =  new DB;
    }

    public function addEmployeur(Employeur $emp)
    {
     
        $sql = "INSERT INTO `employeur`  VALUES (NULL,'".$emp->getNomEmployeur()."','".$emp->getRaisonSociale()."','".$emp->getCni()."')";                                           
        return $this->db->executeInsert($sql);

    }

}
