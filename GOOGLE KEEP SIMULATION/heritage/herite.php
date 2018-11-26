<?php
/**
 * Created by PhpStorm.
 * User: wadii
 * Date: 23/11/2018
 * Time: 00:31
 */
include 'voiture.php';
include 'avion.php';
$ford=new voiture('fiesta',2008,10000,12000,220,'100 tunis 2018');
$boing=new avion('boieng',2017,90000,150000,3000,650);
$ford->affiche();
echo'<br>';
$ford->seDeplace();
echo'<hr>';
/*$ford=null;//appel de __destruct*/
$ford->taxeVente();
echo'<hr>';
$boing->seDeplace();
echo'<hr>';
$boing->affiche();
