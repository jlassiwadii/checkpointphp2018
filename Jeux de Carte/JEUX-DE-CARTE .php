<html>
<head>
    <style>
        .joeur{
            display: flex;
            justify-content: space-around;
        }
        .resultat{
            color:red;
            align:center;
            font-family: Arial;
            font-weight: bold;
            font-size: 24px;
        }
        .carte{
            text-align:center;
            color:black;
            font-weight: bold;
            font-size: 24px;
        }
    </style>
</head>
</html>
<h1 class="carte">JEUX****DE****CARTE</h1>
<?php
$array=array(1=>["un",'carte/1.jfif'],2=>["deux",'carte/2.jpg'],3=>["trois",'carte/3.jpg'],
    4=>["quatre",'carte/4.png'],5=>["cinq",'carte/5.jpg'], 6=>["six",'carte/6.jpg'],
    7=>["sept",'carte/7.png'],8=>["huit",'carte/8.png'],9=>["neuf",'carte/9.png'],
    10=>["dix",'carte/10.png']);
$joeur_1=$array;
$joeur_2=$array;
$score_joueur_1=0;
$score_joueur_2=0;
$score_finale_joueur_1=0;
$score_finale_joueur_2=0;


for($i=0;$i<5;$i++) {
    $j_1 = array_rand($joeur_1);
    $tab = $joeur_1[$j_1];
    $j_2 = array_rand($joeur_2);
    $tab2 = $joeur_2[$j_2];
    if ($j_1 > $j_2)
    {$score_joueur_1 = 1;
        $score_joueur_2 = 0;
    $score_finale_joueur_1+=1;}
    else if ($j_1 < $j_2)
    { $score_joueur_2 = 1;
        $score_joueur_1 = 0;
    $score_finale_joueur_2+=1;}
    else if ($j_1 == $j_2)
    {$score_joueur_1=0;
        $score_joueur_2=0;}
    echo "<div class='joeur'>";
    echo "<div class='joeur-1'>";
    echo $tab[0] . "<br>";
    echo "<img src=$tab[1]>";
    echo "<br>";
    echo $score_joueur_1;
    echo "</div>";
    echo "<br>";
    echo "<div class='joeur-2'>";
    echo $tab2[0] . "<br>";
    echo "<img src=$tab2[1]>";
    echo "<br>";
    echo $score_joueur_2;
    echo "<br>";
    echo "</div>";
    echo "</div>";
}
echo "<br>";
echo "le score du joeur 1 est ".$score_finale_joueur_1;echo "<br>";
echo "le score du joeur 2 est ".$score_finale_joueur_2;
echo "<br>";
echo "<p class='resultat'>le résultat finale</p>";
if ($score_finale_joueur_1>$score_finale_joueur_2)
echo "Congratulation*** le Joeur 1 *** est le ganant";
else
    echo "Congratulation*** le Joeur 2 *** est le ganant";