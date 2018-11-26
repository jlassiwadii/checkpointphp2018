<?php
include 'electromenager.php';
include 'textile.php';

$pantalan=new textile('adidas', 2000, '25thyu', 36, 'black',10);
$pantalan->setTva(10);

$robot=new electromenager('moulinex',25000,'lr350l',200,0.1);
echo 'le taxe de consommation pour un robot est :'.$robot->TaxeConsommation().'<br>';
$MesProduits=array($pantalan,$robot);

function  CalculGetTotalPrix($MesProduits)
{foreach($MesProduits as $produit)
    $produit->CalculTotalPrix();
echo'<br>';
}
echo '<pre> ';
CalculGetTotalPrix($MesProduits);
echo '</pre> ';