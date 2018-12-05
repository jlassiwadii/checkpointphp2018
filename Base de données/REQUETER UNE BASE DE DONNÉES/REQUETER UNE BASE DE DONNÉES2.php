<?php
require 'connexionPDO.php';


$cnxPdo = connexionPDO::getInstance();
$requete1='select AVG(age) as moy_age from utilisateur';
$response1=$cnxPdo ->prepare($requete1)->execute();
print_r ($response1);
echo '<br>';
$query='Select*from utilisateur';
$response=$cnxPdo ->prepare($query);
$response->execute();
$personnes=$response->fetchAll(PDO::FETCH_OBJ);
var_dump($personnes);?>

<html>
<body>
<table bgcolor="yellow">
    <?php foreach ($personnes as $personne){
        ?>

    <tr><td><?= $personne->cin;?></td>
        <td><?= $personne->prenom;?></td>
        <td><?= $personne->nom;?></td>
        <td><?= $personne->age;?></td>
    </tr><?php }?>
</table>
</body>
</html>
<?php
echo '<hr>';
$response->fetchAll();
echo '<hr>';
$requete2='Select*from utilisateur where age<30';

$response2=$cnxPdo ->query($requete2);
echo 'le nombre d\'enregistrement : '.$response2->rowCount();
echo '<br>';



if ($response2->rowCount()>0) {
    // output data of each row
    while($row = $response2->fetch()) {
        echo "<br> - CIN ". $row["cin"]. '<br>'." - Nom: ". $row["nom"].'<br>'. "-Prenom: " . $row["prenom"] .
            '<br>'."- Age: " . $row["age"]. "<br>";
    }
} else {
    echo "0 results";
}
$cin=401578;
$nom='kamel';
$prenom='iwaze';
$age=40;



$sql = 'INSERT INTO utilisateur (cin,nom,prenom,age) VALUES (?,?,?,?)';

$cnxPdo ->prepare($sql)->execute([$cin,$nom, $prenom,$age]);

$connexionPdo=null;
?>

