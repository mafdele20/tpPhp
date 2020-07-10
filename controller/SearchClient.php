<?php
require_once '../config/Autoloader.php';
use model\SearchModel;

class SearchClient{

    public function search(){

      extract($_POST);
      $recherche = new SearchModel();
  
        
      if(isset($idclient)){
        
            $recherche = new SearchModel();
            if($idclient != '' ){
              
                $rep = $recherche->searchClient($idclient);
                $taille = count($rep);
               
                if($taille > 0){
                    foreach($rep as $row){
                        echo '<option value="'.$row['idC'].'">';
                        echo '<p>'.$row['email'].'</p>';
                        
                    }
                }else {
                    echo '<option value="'.$taille.'">';
                    echo '<p>le client n existe pas</p>';

                }
                  
            
            
            }
      } 
    
    }
}
$search = new SearchClient();
$search->search();

     /*   if(isset($prenom)){
             $ok = false;
             $rep = searchPersonne($cni);
             while($row = $rep->fetch()){
                 if($row['cni']){
                       $ok = true;
                 }
             }
             if(!$ok){
                  $rep = insert($cni,$prenom,$nom,$age);
                  echo '<p id="notif" class="bg-blue"> Personne ajouter avec succes</p>';
             }else{
                  echo '<p id="notif" class="bg-red"> Le CNI existe deja </p>';
             }
   
        }*/
   
   

    
?>