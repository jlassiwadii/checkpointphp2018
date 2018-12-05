<?php
/**
 * Created by PhpStorm.
 * User: wadii
 * Date: 26/11/2018
 * Time: 21:26
 */

class connexionPDO
{
    private static $cnxPDO = null;
    private const HOST = 'localhost';
    private const USER = 'root';
    private const PWD = '';
    private const BD_NAME = 'select_test';

    private function __construct()
    {
        try {
            self::$cnxPDO = new PDO('mysql:host=' . self::HOST . ';dbname=' . self::BD_NAME, self::USER, self::PWD);

        } catch (PDOException $e) {
            die($e->getMessage());

        }
    }

    public static function getInstance()
    {
        if (!self::$cnxPDO) {
            new connexionPDO();
        }

        return self::$cnxPDO;
    }

}
