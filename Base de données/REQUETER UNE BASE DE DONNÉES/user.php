<?php
/**
 * Created by PhpStorm.
 * User: wadii
 * Date: 28/11/2018
 * Time: 21:10
 */

class user
{
private $nom;
private $prenom;
private $cin;
private $age;
private $bd;

    /**
     * user constructor.
     * @param $nom
     * @param $prenom
     * @param $cin
     * @param $age
     */
    public function __construct($nom=null, $prenom=null, $cin=0, $age=0)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->cin = $cin;
        $this->age = $age;
        $this->bd=connexionPDO::getInstance();
    }

    /**
     * @return null
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param null $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return null
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param null $prenom
     */
    public function setPrenom($prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @return int
     */
    public function getCin(): int
    {
        return $this->cin;
    }

    /**
     * @param int $cin
     */
    public function setCin(int $cin): void
    {
        $this->cin = $cin;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function findAll()
    {

        $query = 'Select*from utilisateur';
        $response = $this->prepare($query);
        $response->execute(array('cin' => $this->cin,'prenom'=>$this->prenom,'nom'=>$this->nom,'age'=>$this->age));
        return $response->fetchAll();
    }
public function findByCin($cin)
{
    $query='Select*from utilisateur where cin=:cin';

    $response=$this->prepare($query);
    $response->execute(array('cin' => $this->cin));
        return $response->fetchAll();

}
    public function findByAge()
    {
        $query='Select*from utilisateur where age<30';
        $response=$this->prepare($query);
        $response->execute(array('cin' => $this->cin,'prenom'=>$this->prenom,'nom'=>$this->nom,'age'=>$this->age));
        return $response->fetchAll();

    }

}