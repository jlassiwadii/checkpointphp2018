<?php
try {
    $connexionPdo = new PDO('mysql:host=localhost;dbname=select_test', 'root', '');
}
catch (PDOException $e) {
    die($e->getMessage());

}
$requete1='select AVG(age) as moy_age from utilisateur';
$response1=$connexionPdo->query($requete1);
print_r ($response1);
echo '<br>';echo '<br>';echo '<br>';
echo 'le nombre d\'enregistrement : '.$response1->rowCount();
echo '<br>';
$requete='Select*from utilisateur';
$response=$connexionPdo->query($requete);

echo '<hr>';
print_r($response->fetch(3));
echo '<hr>';
$requete2='Select*from utilisateur where age<30';

$response2=$connexionPdo->query($requete2);
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

$connexionPdo->prepare($sql)->execute([$cin,$nom, $prenom,$age]);

$connexionPdo=null;