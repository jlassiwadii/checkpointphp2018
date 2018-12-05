<?php


require 'connexionPDO.php';
$cnxPdo = connexionPDO::getInstance();


$cin=htmlentities($_GET['cin']);
$requete = 'Delete From utilisateur WHERE cin=:cin';
$req=$cnxPdo->prepare($requete);
$req->execute(array('cin' => $cin)
);
header('location:affiche.php');