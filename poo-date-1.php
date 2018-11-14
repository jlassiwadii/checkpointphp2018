<?php
$jour=array(
    "Dimanche",
    "Lundi",
    "Mardi",
    "Mercredi",
    "Jeudi",
    "Vendredi",
    "Samedi"
);
$array=[$jour[date("w",mktime(00,00,00,05,01,2005))],
    $jour[date("w",mktime(00,00,00,05,01,2006))],
    $jour[date("w",mktime(00,00,00,05,01,2007))],
    $jour[date("w",mktime(00,00,00,05,01,2008))],
    $jour[date("w",mktime(00,00,00,05,01,2009))],
    $jour[date("w",mktime(00,00,00,05,01,2010))]];
foreach($array as $day)
{
    if ($day==="Dimanche"||$day==="Samedi" )
echo " Désolé !<br>";
    else if ($day==="Vendredi"||$day==="Lundi" )
        echo "Week-end prolongé !<br>";
    else echo "other <br>";
}
