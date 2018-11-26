<?php
/**
 * Created by PhpStorm.
 * User: wadii
 * Date: 23/11/2018
 * Time: 00:50
 */

class avion extends vehicule

{
    private $nbHeureVole;
    private $vitesseMax;
    const PLACED_PLAN=350;


    public function __construct($marque, $date, $prixAchat, $prixCourant, $nbHeureVole, $vitesseMax)
    {
        parent::__construct($marque, $date, $prixAchat, $prixCourant);
        $this->nbHeureVole = $nbHeureVole;
        $this->vitesseMax = $vitesseMax;

    }

    public function affiche()
    {
        parent::affiche();
        echo "la vitesse maximal est : " . $this->vitesseMax . "et le nombre des heures de vols  est: " . $this->nbHeureVole;
    }

    function seDeplace()
    {
        if ($this->vitesseMax > 0)
            $this->vitesseMax = $this->vitesseMax + self::PLACED_PLAN;
        echo "la voiture se deplace à une vitese de:".$this->vitesseMax;
    }

}
