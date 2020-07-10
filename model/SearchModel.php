<?php

namespace model;

class SearchModel{

    
    private $db;

    public  function __construct()
    {
          $this->db =  new DB;
    }
    
    public function searchClient($id){

        $sql = "SELECT * FROM `client` WHERE idC LIKE '".$id."%'";
        return $this->db->executeSelect($sql);

    }

    

}
   

?>