<?php
/**
 * Created by PhpStorm.
 * User: wadii
 * Date: 23/11/2018
 * Time: 16:03
 */
include 'electromenager.php';
include 'textile.php';

function CalculGetTotalPrix(produit $produits)//fonction polymorphysme
{return $produits->CalculTotalPrix();
}


$pantalan = new textile('adidas', 2000, '25thyu', 36, 'black',10);
$pantalan->setTva(10);
echo 'Le prix d\'un pantalan est: ';
echo CalculGetTotalPrix($pantalan);
echo '<hr>';
$robot=new electromenager('moulinex',25000,'lr350l',0200,0.1);

echo 'le taxe de consommation est :'.$robot->TaxeConsommation().'<br>';
echo 'Le prix d\'un robot '.$robot->getDesignation().' est: ';
echo CalculGetTotalPrix($robot);
echo '<hr>';







