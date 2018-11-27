

<html>

<body style=" background:floralwhite;">
<table  style=" background:aqua;" border="1" width="200" align="center" width="300">
    <form method="post" action="">
        CIN:<input type="text" name="cin">
        Nom:<input type="text" name="nom">
        Prenom:<input type="text" name="prenom">
        age:<input type="text" name="age">
        <input type="submit" value="envoyer">
    </form>
    <br>
    <br>


<?php

require 'connexionPDO.php';

$cnxPdo = connexionPDO::getInstance();

if (empty((isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['cin'])


        && isset($_POST['age'])))==false)
    {

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
    else
    {$requete = 'SELECT * from utilisateur';

$response = $cnxPdo->query($requete);

echo "<tr style=' background:whitesmoke;'><td>  CIN </td><td> Nom</td><td>Prenom
            </td><td>Age</td></tr>";

while($row = $response->fetch()) {


    echo "<tr><td>" .$row["cin"].'</td><td>'. $row["nom"]."</td><td>" .$row["prenom"] .
        " </td><td>".$row["age"]."</td></tr>";}}
?>
</table>
</body>
</html>
