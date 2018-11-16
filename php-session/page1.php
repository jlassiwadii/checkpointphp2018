<?php

session_start();


echo"<p align=center'>compter le nombre des visites</p>"."<br>";

if(!isset($_SESSION['counter']))

$_SESSION['counter']=1;
else
    $_SESSION['counter']++;

echo $_SESSION['counter']."<br>";
echo '<br>';



?>


<form method="post" action="page2.php">
   <button type="submit" name="ref">remise à 0</button>
</form>
