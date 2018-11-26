<?php
/**
 * Created by PhpStorm.
 * User: wadii
 * Date: 23/11/2018
 * Time: 11:19
 */
include 'produit.php';

class electromenager extends produit
{
    private $consommation;
    private $taxeConsommation;

    public function __construct($designation, $prixHt, $reference, $consommation, $taxeConsommation)
    {
        parent::__construct($designation, $prixHt, $reference);
        $this->consommation = $consommation;
        $this->taxeConsommation = $taxeConsommation;

    }

    /**
     * @return mixed
     */
    public function getConsommation()
    {
        return $this->consommation;
    }

    /**
     * @param mixed $consommation
     */
    public function setConsommation($consommation): void
    {
        $this->consommation = $consommation;
    }


    /**
     * @return mixed
     */
    public function getTaxeConsommation()
    {
        return $this->taxeConsommation;
    }

    /**
     * @param mixed $taxeConsommation
     */
    public function setTaxeConsommation($taxeConsommation): void

    {
        $this->taxeConsommation=$taxeConsommation;

    }

    public function TaxeConsommation()
    {
        if ($this->consommation < 100)
            return $this->taxeConsommation = 0;
        elseif (100 < $this->consommation && $this->consommation < 300)
            return $this->taxeConsommation = $this->prixHt * 0.1;
        else
            return $this->taxeConsommation = $this->prixHt * 0.35;
    }

    public function CalculTotalPrix()//la fonction CalculTotalPrix() pour un electromenager(redefinir)
    {
        echo $this->prixHt + $this->getTaxeConsommation();
        echo '<br>';
    }

}