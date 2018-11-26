<?php
/**
 * Created by PhpStorm.
 * User: wadii
 * Date: 23/11/2018
 * Time: 00:47
 */
include 'vehicule.php';

class voiture extends vehicule

{
    private $vitesse;
    private $matricule;
    const PLACED_VITESSE = 50;

    /**
     * voiture constructor.
     */
    public function __construct($marque, $date, $prixAchat, $prixCourant, $vitesse, $matricule)
    {
        parent::__construct($marque, $date, $prixAchat, $prixCourant);
        $this->vitesse = $vitesse;
        $this->matricule = $matricule;

    }

    public function affiche()
    {
        parent::affiche();
        echo "la vitesse est: " . $this->vitesse . "<br>et la matricule est: " . $this->matricule;
    }

    function seDeplace()
    {
        if ($this->vitesse > 0)
            $this->vitesse = $this->vitesse + self::PLACED_VITESSE;
        echo "la voiture se deplace à une vitese de:" . $this->vitesse;
    }

    function __destruct()
    {
        echo "ma voiture détruite";
    }

    public function taxeVente()
    {
        echo $this->prixCourant * 0.05;

    }

}