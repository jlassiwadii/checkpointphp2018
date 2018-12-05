<?php


require 'connexionPDO.php';
$cnxPdo = connexionPDO::getInstance();



    $cin = $_REQUEST["cin"];
    $nom = html_entity_decode($_POST["nom"]);
    $prenom = html_entity_decode($_POST["prenom"]);
    $age = html_entity_decode($_POST["age"]);


    $requete = "UPDATE utilisateur SET nom=:nom,prenom=:prenom,age=:age WHERE  cin=:cin";
    $req = $cnxPdo->prepare($requete);
    $req->execute(
        array(
            "cin"=> $cin,
        "nom" => $nom,
        "prenom" => $prenom,
        "age" => $age)
    );


header('location:affiche.php');