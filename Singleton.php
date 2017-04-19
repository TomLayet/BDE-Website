<?php

/**
 * Created by PhpStorm.
 * User: tom_l
 * Date: 14/04/2017
 * Time: 11:05
 */
class Singleton {

    private static $_instance;

    // Prevent from an external instance creation
    private function __construct () {}

    // Prevent from an external instance copy
    private function __clone () {}

    // Initialize  if needed
    public static function getInstance () {
        if (!(self::$_instance instanceof self))
            self::$_instance = new self();

        return self::$_instance;
    }

    //Méthode "métier", si j'ai bien compris la ressource c'est le "service layer" en anglais mais pas sûr !
    public function action () {}
}

/* Utilisation
Singleton::getInstance()->action();
*/