<?php
/**
 * Created by PhpStorm.
 * User: wadii
 * Date: 23/11/2018
 * Time: 00:31
 */

abstract class vehicule
{
    protected $marque;
    protected $date;
    protected $prixAchat;
    protected $prixCourant;


    /**
     * vehicule constructor.
     * @param $marque
     * @param $date
     * @param $prixAchat
     * @param $prixCourant
     */
    public function __construct($marque, $date, $prixAchat, $prixCourant)
    {

        $this->marque = $marque;
        $this->date = $date;
        $this->prixAchat = $prixAchat;
        $this->prixCourant = $prixCourant;
    }


    public function affiche()
    {
        echo "la marque est: " . $this->marque . '<br>la date est: ' . $this->date . '<br>le prix d\'achat est:' . $this->prixAchat .
            '<br>le prix courant est :' . $this->prixCourant;
    }


 abstract function seDeplace();

}

