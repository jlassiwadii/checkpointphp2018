<?php
/**
 * Created by PhpStorm.
 * User: wadii
 * Date: 23/11/2018
 * Time: 11:21
 */


class textile extends produit
{
    private $taille;
    private $couleur;
    private $tva;

    public function __construct($designation, $prixHt, $reference, $taille, $couleur, $tva)
    {
        parent::__construct($designation, $prixHt, $reference);
        $this->taille = $taille;
        $this->couleur = $couleur;
        $this->tva = $tva;

    }

    /**
     * @return mixed
     */
    public function getPrixHt()
    {
        return $this->prixHt;
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
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * @param mixed $taille
     */
    public function setTaille($taille): void
    {
        $this->taille = $taille;
    }

    /**
     * @return mixed
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * @param mixed $couleur
     */
    public function setCouleur($couleur): void
    {
        $this->couleur = $couleur;
    }

    /**
     * @return mixed
     */
    public function getTva()
    {
        return $this->tva;
    }

    /**
     * @param mixed $tva
     */
    public function setTva($tva): void
    {
        $this->tva = ($tva*$this->prixHt)/100;

    }

    public function CalculTotalPrix()//la fonction CalculTotalPrix() pour un textile(redefinir)
    {
        echo $this->prixHt+$this->getTva();
        echo '<br>';
    }
}