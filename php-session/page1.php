<?php

session_start();

echo"<p align=center'>compter le nombre des visites</p>"."<br>";

if(empty($_SESSION['counter']))

$_SESSION['counter']=1;
else
    $_SESSION['counter']++;

echo $_SESSION['counter']."<br>";
echo '<br>';
?>

<a href="page2.php"><input type="submit" name="exit" value="remise à 0"></a>


