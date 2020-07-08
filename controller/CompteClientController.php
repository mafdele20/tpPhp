<?php
require_once '../config/Autoloader.php';


class CompteClientController{  
   
   public function save(){
      extract($_POST);

      $modelCompte = new CompteModel();  
      $compte = new Compte();

      $compte->setNumero($numCompte);
      $compte->setCleRib("comp-".$numCompte);
      $compte->setDate($dateO);
      $compte->setSolde($solde);
      $compte->setTypeCompte($typeCompte);
      $compte->setEtat(1);
      $compte->setFrais($agio);
     

      if(isset($ancien)){
       $compte->setProprietaire($idclient);
       $ok = $modelCompte->addCompte($compte);     
         if ($ok == true){
            echo "donnée ajouté avec success";
         }else{
          
             echo"Le client n'existe ";
         }   
           header("location:addCompte?ok=$ok");
   
      }
      if(isset($nouveau)){
         
            $modelClient = new ClientModel();
            $type =$modelClient->getCientByName($typeClient);
                 foreach($type as $ty){
                     $typ =$ty['idType'];  
                     //var_dump($typ);   
                 }
               
                 $client = new Client();
                 $client->setNom($nom);
                 $client->setPrenom($prenom);
                 $client->setAdresse($adresse);
                 $client->setEmail($email);
                 $client->setTelephone($tel);
                 $client->setSalaire($salaire);
                 $client->setNomEntreprise($nomentreprise);
                 $client->setTypeClient(intval($typ));
                 var_dump($client);
                 $cli = $modelClient->addClient($client);

                     if($cli == true){  
                        echo "client ajouté avec success  ";
                     }else{
                     //  var_dump($cli);
                       echo "connexion error";
                     }
               
              $idClient =$modelClient->getLastClient();         
              foreach($idClient as $ty){
               foreach($ty as $tpc){
                     $last = $tpc;           
                 }

              }
              $compte->setProprietaire($last);
              $ok =$modelCompte->addCompte($compte);

               if($ok == true){
                  echo "compte ajouté avec success  ";
                  header("location:addCompte?ok=$ok");
               }else{
                 // var_dump($ok);
                  echo "connexion error";
               }

      }
   }
     
   }

 $control = new CompteClientController();
 $control->save();
?>