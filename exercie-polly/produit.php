<?php
/**
 * Created by PhpStorm.
 * User: wadii
 * Date: 23/11/2018
 * Time: 11:17
 */

class produit
{
    public $designation;
    protected $prixHt;
    protected $reference;
    const TVA_PRODUIT = 0.1;
    public static $s=0;

    public function __construct($designation, $prixHt, $reference)
    {
        $this->designation = $designation;
        $this->prixHt = $prixHt;
        $this->reference = $reference;

    }


    /**
     * @param mixed $prixHt
     */
    public function setPrixHt($prixHt): void
    {
        $this->prixHt = $prixHt;
    }

    /**
     * @return mixed
     */
    public function getPrixHt()
    {
        return $this->prixHt;
    }

    /**
     * @return mixed
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * @param mixed $designation
     */
    public function setDesignation($designation): void
    {
        $this->designation = $designation;
    }

    /**
     * @return mixed
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param mixed $reference
     */
    public function setReference($reference): void
    {
        $this->reference = $reference;
    }

    function CalculTotalPrix()// la fonction CalculTotalPrix() pour un produit
    {
        return $this->prixHt + ($this->prixHt * self::TVA_PRODUIT);

    }

}