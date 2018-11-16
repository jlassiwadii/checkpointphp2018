
<style>
    body{
        background-color: yellow;
        align:center;
        padding:50px;
    }
    h1{color: red;}
    .saisir{
        text-align: center;
        padding-top:100px;
    }
</style>

<?php
if (empty((isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['nombre'])
            && (filter_var($_POST['nombre'], FILTER_VALIDATE_INT))
    && isset($_POST['ingredient']) && isset($_POST['garniture'])))==false) {
    $num_fac=uniqid(1);
    echo "<h1> facture N=°: " . $num_fac . "<h1>";
    echo "<h2> Sandwitch commandé le: " . date("d-m-Y") . " à " . date("h:m:s") . "</h2>";
    echo "<br>";
    echo "<br>";


    echo "<h3> Votre Nom et Prénom :</h3>" . $_POST['nom'] . "  " . $_POST['prenom'] . "<br>";
    echo "<h3>le nombre de sandwitch commandé:</h3>" . $_POST['nombre'] . "<br>";
    echo "<h3>Sandwitch:</h3>" . $_POST['ingredient'] . "<br>";
    ?>
    <h3>les ingrédients sont:</h3>
    <?php
    foreach ($_POST['garniture'] as $valeur) {
        echo " $valeur " . "<br>";
    }

    echo "<br>";
    $x = $_POST['nombre'];
    if ($x > 10) {
        $somme_commande = ($x * 4) * 0.9;
    } else {
        $somme_commande = $x * 4;
    }
    echo "<h1>Total de la commande est: " . $somme_commande . " dt" . "</h1>";

}
else
    echo"<h1 class='saisir'>***Veuillez saisir  votre formulaire correctement***</h1>";

if(!file_exists(__DIR__.'uploads/'. $_FILES['fiche']['name']))
{
    $nn = uniqid($_FILES['fiche']['name']);

    move_uploaded_file($_FILES['fiche']['tmp_name'], 'uploads/' . basename($nn));

}



