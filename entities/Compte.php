<?php

class Compte{

        private $cleRib;
        private $date;
        private $numero;
        private $solde;
        private $etat;
        private $frais;
        private $typeCompte;
        private $proprietaire;

        

        public function getCleRib(){
            return $this->cleRib;
        }

        public function setCleRib($cleRib){
            $this->cleRib = $cleRib;
        }

        public function getDate(){
            return $this->date;
        }

        public function setDate($date){
            $this->date = $date;
        }

        public function getNumero(){
            return $this->numero;
        }

        public function setNumero($numero){
            $this->numero = $numero;
        }

        public function getSolde(){
            return $this->solde;
        }

        public function setSolde($solde){
            $this->solde = $solde;
        }

        public function getEtat(){
            return $this->etat;
        }

        public function setEtat($etat){
            $this->etat = $etat;
        }

        public function getFrais(){
            return $this->frais;
        }

        public function setFrais($frais){
            $this->frais = $frais;
        }

        public function getTypeCompte(){
            return $this->typeCompte;
        }

        public function setTypeCompte($typeCompte){
            $this->typeCompte = $typeCompte;
        }

        public function getProprietaire(){
            return $this->proprietaire;
        }

        public function setProprietaire($proprietaire){
            $this->proprietaire = $proprietaire;
        }
}



?>