<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
<table class="table table-bordered">
<?php

require 'connexionPDO.php';


$cnxPdo = connexionPDO::getInstance();


if (empty(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['cin'])


    && isset($_POST['age']))==false){
$cin=$_POST["cin"];
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$age=$_POST["age"];




$sql = 'INSERT INTO utilisateur (cin,nom,prenom,age) VALUES (?,?,?,?)';

$cnxPdo->prepare($sql)->execute([$cin,$nom, $prenom,$age]);

$requete = 'SELECT * from utilisateur';

$response = $cnxPdo->query($requete);

echo "<tr style=' background:whitesmoke;'><td>  CIN </td><td> Nom</td><td>Prenom
            </td><td>Age</td></tr>";

    while($row = $response->fetch()) {


        echo "<tr><td>" .$row["cin"].'</td><td>'. $row["nom"]."</td><td>" .$row["prenom"] .
           " </td><td>".$row["age"]."</td></tr>";
    }}

        else {
            header('location:index.php');}
   ?>
</table>
</body>
</html>
