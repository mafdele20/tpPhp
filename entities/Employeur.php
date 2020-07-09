<?php
namespace entities;

class Employeur
{
    private $nomEmployeur;
    private $raisonSociale;
    private $cni;

        public function __construct()
        {

        }

       public function getNomEmployeur(){
                return $this->nomEmployeur;
        }

        public function setNomEmployeur($nomEmployeur){
                $this->nomEmployeur = $nomEmployeur;
        }

        public function getRaisonSociale(){
                return $this->raisonSociale;
        }

        public function setRaisonSociale($raisonSociale){
                $this->raisonSociale = $raisonSociale;
        }

        public function getCni(){
                return $this->cni;
        }

        public function setCni($cni){
                $this->cni = $cni;
        }
        
}

?>