<?php
require_once 'DB.php';

function addCompte($cleRib,$date,$numero,$solde,$etat,$frais,$typeCompte,$proprietaire){
  
    $sql ="INSERT INTO `compte` VALUES (NULL, '$numero', NULL, '$cleRib', '$date', '$solde', '$typeCompte', '$etat', '$frais', NULL,'$proprietaire', NULL)";
    return executeSQL($sql);
}
function addClient($nom,$prenom,$adresse,$email,$tel,$salaire,$nomEntreprise,$type){
    $sql = "INSERT INTO `client`  VALUES (NULL,'$nom','$prenom','$adresse','$email','','$salaire','$type',NULL,'$nomEntreprise','$tel')";                                           
    return executeSQL($sql);

}
function addClientEntreprise($adresse,$email,$nomEntreprise,$type,$tel){
    $sql = "INSERT INTO client(adresse,email,idType,nomEntreprise,telephone) VALUES ('$adresse','$email','$type','$nomEntreprise','$tel')";                                           
    return executeSQL($sql);
    echo(  $sql -> error());
    

}

function listeCompte(){
    $sql = "SELECT * FROM `compte`";
    return executeSQL($sql);
} 
function typeclient($libelle){
    $sql = "INSERT INTO `typeclient` Values (NULL,$libelle)";
    return executeSQL($sql);
}
function getCient($client)
{
    $sql = "SELECT idC FROM `client` WHERE idC = '$client' ";
    return executeSQL($sql);
}

function getCientByName($client)
{
    $sql = "SELECT * FROM `typeclient` WHERE libelle = '$client' ";
    return executeSQL($sql);
}
function getLastClient(){
    $sql = "SELECT max(idC) FROM  `client`";
    return executeSQL($sql);
}

function addEmployeur(){

}

function getNomclient(){
    $sql = "";
}