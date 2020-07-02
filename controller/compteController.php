<?php
require_once '../model/DB.php';
require_once '../model/CompteModel.php';
        /*Ajout
        if(isset($_POST['valider']))
        {
                extract($_POST);
                $frais =0;
                $cleRib = "compt".$numCompte;
                $etat = 1;
                $ok = addCompte($numCompte,$cleRib,$dateO,$solde,$etat,$frais);
        }*/
        extract($_POST);
        $etat = 1;
        $cleRib = "comp-".$numero;
         if($id != 0){
            $client = getCient($id);     
            $ok = addCompte($cleRib,$date,$numero,$solde,$etat,$frais,$typeCompte,$id);     
            if ($ok == true){
               echo "donnée ajouté avec success";
            }else{
               //echo mysqli_error(addCompte());
                echo"Le client n'existe ";
            }   
         }else{
             $type = getCientByName($typeClient);
                 foreach($type as $ty){
                     $typ =$ty['idType'];  
                     //var_dump($typ);   
                 }
             
               $cli =addClient($nom,$prenom,$adresse,$email,$tel,$salaire,$nom_entreprise,intval($typ)) ;    
                     if($cli == true){  
                        echo "client ajouté avec success  ";
                     }else{
                       var_dump($cli);
                       echo "connexion error";
                     }
               
              $idClient =  getLastClient();         
              foreach($idClient as $ty){
               foreach($ty as $tpc){
                     $last = $tpc;           
                 }

              }
              $ok = addCompte($cleRib,$date,$numero,$solde,$etat,$frais,$typeCompte,$last);

               if($ok == true){
                  echo "compte ajouté avec success  ";
               }else{
                  var_dump($ok);
                  echo "connexion error";
               }

      }   
?>