
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>
    <link rel="stylesheet" href="../../public/css/compte.css">
    <script type="text/javascript" src="compte.js"></script>
</head>
<body>
    <div class="compte">
        <nav class="navbar">
        <div class="row">
           <div class="col-25">
             <img src="../../public/logo.jpeg" alt="logo" id="logo">
             <h1>BANQUE DU PEUPLE</h1>
           </div>
           <div class="col-75">
            <ul>
                <li><a href="./add.php">Ajout Compte</a></li>
                <li><a href="./liste.php">Liste des Comptes</a></li>
                <li><img src="../../public/user-connect.png" alt="Avatar" class="user"><a> gadiaga</a></li>
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
               <div class="slb-degrade"><a href="./liste.php">Liste des Comptes</a></div>
           </div>
         
        </div>
        <div class="container">  
          <fieldset>                  
          <div id="status"></div> 
            <form method="post"  onsubmit=" event.preventDefault();addCompte();annulChamp()" autocomplete="off">
            <div> 
              <fieldset>
                 <legend>Type de client</legend>
               <div class="row">
                <div class="col-25">
                    <label for="compte">Type de Client</label>
                </div>
                 <div class="col-75" >
                  <label  class="typpclient">
                    <input type="radio" id="nouveau" name="nouveau" value=" Nouveau Client" onclick="afficheElement()"/>Nouveau Client
                  </label>
                   <label>
                    <input type="radio" id="ancien" name="ancien" value=" Client Existe" onclick="masquerClient()" />  Client Existe
                  </label>
                 </div> 
                </div> 
                
              </fieldset>
                <div class="row" id="identifiant">
                <fieldset>
                  <legend>Identifiant du Client</legend>
                    <div class="col-25">
                      <label for="idclient">Identifiant client</label>
                    </div>
                    <div class="col-75">
                      <input type="text" id="idclient" name="idclient" placeholder="Entrer l'id du client" value="0" onblur="isNumber(this)"/>
                       <p id="champs1">* champs obligatoire</p>
                    </div>
                    </fieldset>
                  </div>
             
            <fieldset>
                <legend>Informations du Compte</legend>
              <div class="row">
                <div class="col-25">
                  <label for="numCompte">Numéro compte</label>
                </div>
                <div class="col-75">
                  <input type="text" id="numCompte" name="numCompte" placeholder="Entrer numéro compte"  onblur="isNumber(this)"/>
                  <p id="champs2">* champs obligatoire</p>
                </div>
              </div>
               <div class="row">
                <div class="col-25">
                    <label for="compte">Type de Compte</label>
                </div>
                  <div class="col-75" >
                    <label>
                        <input type="radio" id="epargne" name="typecompte" value="epargne" onclick="epargnee()"/> Epargne
                    </label>
                    <label>
                        <input type="radio" id="courant" name="typecompte" value="courant"  onclick="courante()"/> Courant
                    </label>
                    <label>
                        <input type="radio" id="bloque" name="typecompte" value="bloque" onclick="bloquee()"/> Bloqué
                    </label>
                    <p id="champs6">* champs obligatoire</p>
                  </div>
                </div>
                <div>
                    <div class="row" id="frais">
                        <div class="col-25">
                         <label for="frais">Fais</label>
                        </div>
                        <div class="col-75">
                          <input type="number" id="agio" name="agio" placeholder="Entrer les frais d'ouverture"   onblur="isNumber(this)"/>
                        </div>
                    </div> 
                </div>
              <div class="row">
                <div class="col-25">
                  <label for="numAgence">Numéro Agence</label>
                </div>
                <div class="col-75">
                  <input type="text" id="numAgence" name="numAgence" placeholder="Entrer le numéro de l'agence"  onblur="isNumber(this)"/>
                  <p id="champs3">* champs obligatoire</p>
                </div>
              </div> 
              <div class="row">
                <div class="col-25">
                  <label for="solde">Dépot Initial</label>
                </div>
                <div class="col-75">
                  <input type="text" id="solde" name="solde" placeholder="Entrer le montant déposé" onblur="isNumber(this)"/>
                  <p id="champs4">* champs obligatoire</p>
                </div>
              </div> 
              <div class="row">
                <div class="col-25">
                  <label for="dateO">Ouverture</label>
                </div>
                <div class="col-75">
                  <input type="date" id="dateO" name="dateO"/>
                  <p id="champs5">* champs obligatoire</p>

                </div>
              </div>
              <div>
            </div>
           </fieldset>
            <div id="masquer">
            <fieldset>
                <legend>Informations du client</legend>
              <div class="row">
                <div class="col-25">
                    <label for="typeclient">Type Client</label>
                </div>
                  <div class="col-75">
                    <label  class="typpcliente">
                        <input type="radio" id="salarie" name="salarie" value="salarie" onclick="salary()"/> Salarié
                    </label>
                    <label>
                        <input type="radio" id="entrepriseC" name="entrepriseC" value="entreprise" onclick="entreprisee()"/> Entreprise
                    </label>
                    <label>
                        <input type="radio" id="nonsalaire" name="nonsalaire" value="non_salaire" onclick="non_salary()"/> Non salarié
                    </label>
                  </div>
                </div>

           
              <div id="employeur">
              <div class="row">
                <div class="col-25">
                  <label for="subject">Raison Social</label>
                </div>
                <div class="col-75">
                    <input type="text" id="raison" name="raison" placeholder="Entrer raison social" onblur="notNumber(this)"/>
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <label for="salaire">Salaire</label>
                </div>
                <div class="col-75">
                    <input type="text" id="salaire" name="salaire" value="0" onblur="isNumber(this)" />
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <label for="emp">Nom employeur</label>
                </div>
                <div class="col-75">
                    <input type="text" id="emp" name="emp" placeholder="Entrer nom employeur" onblur="notNumber(this)"/>
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <label for="cni">Numéro d'identification</label>
                </div>
                <div class="col-75">
                    <input type="text" id="cni" name="cni" placeholder="Entrer le CNI"  onblur="isNumber(this)"/>
                </div>
              </div>
            </div>
            <div id="pers">
                 <div class="row">
                    <div class="col-25">
                      <label for="nom">Nom</label>
                    </div>
                    <div class="col-75">
                      <input type="text" id="nom" name="nom" placeholder="Entrer le nom du client"  onblur="notNumber(this)">
                    </div>
                  </div>
                <div class="row">
                  <div class="col-25">
                    <label for="prenom">Prenom</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="prenom" name="prennom" placeholder="Entrerle prenom du client" onblur="notNumber(this)">
                  </div>
                </div>
              </div>
              <div id="ese">
                <div class="row">
                  <div class="col-25">
                    <label for="nomentreprise">Nom Entreprise</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="nomentreprise" name="nomentreprise" placeholder="Entrer le nom de l'entreprise" onblur="notNumber(this)"/>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <label for="subject">Email</label>
                </div>
                <div class="col-75">
                    <input type="email" id="email" name="email" placeholder="Entrer votre l'email du client" onblur="mail(this)"/>
                     <span id="mail">email invalide</span>
                </div>
              </div>
               <div class="row">
                  <div class="col-25">
                    <label for="adresse">Adresse</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="adresse" name="adresse" placeholder="Entrerl'adresse du client" onblur="notNumber(this)">
                  </div>
                </div>
              <div class="row">
                <div class="col-25">
                  <label for="tel">Télephone</label>
                </div>
                <div class="col-75">
                    <input type="text" id="tel" name="tel"  onblur="isNumber(this)"/>
                </div>
              </div>  
              
              </fieldset>
              </div>
              <div class="form-action-buttons row">
                <input type="submit" value="valider" name="valider">
                <input type="reset" value="Annuler">
              </div>
            </form>
          </div>
       
    </div>
  </div>
     
</body>
</html>