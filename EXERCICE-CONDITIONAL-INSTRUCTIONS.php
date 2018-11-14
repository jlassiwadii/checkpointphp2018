<?php
$matiere_1=rand(0,20);
$matiere_2=rand(0,20);
$matiere_3=rand(0,20);
$moy=($matiere_1+$matiere_2+$matiere_3)/3;
switch ($moy){
    case $moy<10:
    echo" refusé ";
    break;
    case $moy>= 14:
    echo"admis avec mention bien";
    break;
    case $moy>= 12:
        echo"admis avec mention assez bien";
        break;
    case $moy< 12:
        echo"admis avec mention passable";
        break;
}