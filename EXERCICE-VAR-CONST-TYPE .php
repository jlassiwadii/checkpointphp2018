<?php

//mavar =non valide
// $mavar =valide
// $var5 =valide
// $_ mavar =non valide
// $_5var =non valide
// $__élément1=valide
// $hotel4* ? =non valide

$x="PostgreSQL";//"PostgreSQL"
$y="MySQL";//"MySQL"
$z=&$x;//"PostgreSQL"
$x="PHP 5";//PHP 5
$y=&$x;//PHP 5

echo $GLOBALS["x"]; //PHP 5
echo $GLOBALS["y"];//PHP 5
echo $GLOBALS["z"];//PHP 5


$x="7 personnes";
$y=(integer) $x;
echo $y."  ";// 7
$x="9E3";
$z=(double) $x;

echo $x."  ";//9000
echo $y."  ";//9000
echo $z; //9000




