<?php
class Client{

        private $email;
        private $adresse;
        private $telephone;
        private $nom;
        private $prenom;
        private $salaire;
        private $employeur;
        private $nomEntreprise;
        private $typeClient;
        public function __construct(){
            
            $num = func_num_args();
            $args = func_get_args();
            switch($num){
                case 0 :
                    $this->constructeurSansArgs();
                break;

                case 9:

                    $this->constructeurAvecArgs($args[0],$args[1],$args[2],$args[3],$args[4],$args[5],$args[6],$args[7],$args[8]);

            }
         }

        public function constructeurAvecArgs($email,$adresse,$telephone,$nom,$prenom,$salaire,$employeur,$nomEntreprise,$typeClient){
            $this->email = $email;
            $this->adresse = $adresse;
            $this->telephone = $telephone;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->salaire = $salaire;
            $this->employeur = $employeur;
            $this->nomEntreprise = $nomEntreprise;
            $this->typeClient = $typeClient;
            
        }
        public function constructeurSansArgs(){
           
        }

                public function getEmail(){
                            return $this->email;
                }

                public function setEmail($email){
                            $this->email = $email;
                }

                public function getAdresse(){
                            return $this->adresse;
                }

                public function setAdresse($adresse){
                            $this->adresse = $adresse;
                }

                public function getTelephone(){
                            return $this->telephone;
                }

                public function setTelephone($telephone){
                            $this->telephone = $telephone;
                }

                public function getNom(){
                            return $this->nom;
                }

                public function setNom($nom){
                            $this->nom = $nom;
                }

                public function getPrenom(){
                            return $this->prenom;
                }

                public function setPrenom($prenom){
                            $this->prenom = $prenom;
                }

                public function getSalaire(){
                            return $this->salaire;
                }

                public function setSalaire($salaire){
                            $this->salaire = $salaire;
                }

                public function getEmployeur(){
                            return $this->employeur;
                }

                public function setEmployeur($employeur){
                            $this->employeur = $employeur;
                }

                public function getNomEntreprise(){
                            return $this->nomEntreprise;
                }

                public function setNomEntreprise($nomEntreprise){
                            $this->nomEntreprise = $nomEntreprise;
                } 
                public function getTypeClient(){
                    return $this->typeClient;
                }
            
                public function setTypeClient($typeClient){
                    $this->typeClient = $typeClient;
                }
}


?>