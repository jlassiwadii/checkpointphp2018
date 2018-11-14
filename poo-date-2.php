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
echo $jour[date("w",mktime(00,00,00,03,03,2013))];
