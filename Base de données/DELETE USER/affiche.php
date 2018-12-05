
    <?php

    require 'connexionPDO.php';


    $cnxPdo = connexionPDO::getInstance();




    $query='Select*from utilisateur';
    $response=$cnxPdo ->prepare($query);
    $response->execute();
    $users=$response->fetchAll(PDO::FETCH_OBJ);
    ?>

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
        <thead class=""thead-light"></thead>
        <tr>
            <th scope="col">CIN</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Age</th>
            <th scope="col">Suprimer</th>
            <th scope="col">Mise à jour</th>
        </tr>
        </thead>

        <?php foreach ($users as $user){
            ?>

            <tr><td><?= $user->cin;?></td>
            <td><?= $user->prenom;?></td>
            <td><?= $user->nom;?></td>
            <td><?= $user->age;?></td>
            <td><a href="delete.php?cin=<?= $user->cin;?>"><input type="submit" value="Delete"></a></td>
            <td><a href="form.php?cin=<?= $user->cin;?>"><input type="submit" value="Update"></a></td><!--update-->
            </tr><?php }?>
    </table>
    </body>
    </html>

</table>
</body>
</html>
