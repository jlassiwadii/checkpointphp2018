<?php
session_start();


echo"<p align=center'>Le dernier  nombre des visites est :</p>"."<br>";
echo $_SESSION['counter']."<br>";


echo"<p align=center'> nombre des visites remise à 0</p>"."<br>";
if (!empty($_SESSION['counter']))
$_SESSION['counter']=0;
echo $_SESSION['counter'];

