
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>
    <link rel="stylesheet" href="./public/css/compte.css">
    <script type="text/javascript" src="./public/js/compte.js"></script>
</head>
<body>
    <div class="compte">
        <nav class="navbar">
        <div class="row">
           <div class="col-25">
             <img src="./public/logo.jpeg" alt="logo" id="logo">
             <h1>BANQUE DU PEUPLE</h1>
           </div>
           <div class="col-75">
            <ul>
                <li><a href="addCompte">Ajout Compte</a></li>
                <li><a href="listeCompte">Liste des Comptes</a></li>
                <li><img src="./public/user-connect.png" alt="Avatar" class="user"><a> gadiaga</a></li>
                <li id="connexion"><a onclick="deconnexion()" id="deconect">Déconnexion</a></li>  
         
            </ul>
           </div>
       </div>
        </nav>
        <div class="corps">
    
        <div class="sliderBar">
          <div class="espace">

          </div>
           <div class="action">
               <div class="slb-blanc"><a href="./add.php"> Creer un Compte</a></div>
               <div class="slb-degrade"><a href=""> Faire un Virement </a></div>
               <div class="slb-blanc"><a href="">Bloquer un Compte</a></div>
               <div class="slb-degrade"><a href="">Fermer unCompte</a></div>
               <div class="slb-blanc"><a href=""> Archiver un compte</a></div>
               <div class="slb-degrade"><a href="">liste des Comptes</a></div>
       
           </div>
         
        </div>
        <div class="container">  
            <h1>liste de tous les Comptes</h1>
          <div classe="tab" class="tab">
            <table id="listecompte">
            <thead>
              <tr>
                
                    <th>id Compte</th>
                    <th>Numero</th>
                    <th>Agence</th>
                    <th>cléRib</th>
                    <th>Date Ouverture</th>
                    <th>Solde</th>
                    <th>Type de compte</th>
                    <th>etat</th>
                    <th>Frais</th>
                    <th>Agio</th>
                    <th>Propriétaire</th>
              </tr>
            </thead>
             <tbody>
                <?php
                  require_once '../../config/Autoloader.php';
                  $compt = new CompteModel();
                  $listeCompte =  $compt->listeCompte();
                  foreach($listeCompte as $compte){
                 ?>
                      <tr>
                          <td><?= $compte['idC'] ?></td>
                          <td><?= $compte['numero'] ?></td>
                          <td><?= $compte['agence'] ?></td>
                          <td><?= $compte['cleRib'] ?></td>
                          <td><?= $compte['dateE'] ?></td>
                          <td><?= $compte['solde'] ?></td>
                          <td><?= $compte['typecompte'] ?></td>
                          <td><?= $compte['etat'] ?></td>
                          <td><?= $compte['fraisO'] ?></td>
                          <td><?= $compte['agio'] ?></td>
                          <td><?= $compte['client'] ?></td>  

                      </tr>
              <?php
                  }
              ?>
             </tbody>

            </table>
          </div>
            <div id="status"></div>
          </div>
       
    </div>
  </div>
     
</body>
</html>