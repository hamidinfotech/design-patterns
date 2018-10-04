<?php
/**
 * Created by PhpStorm.
 * User: h.hosseini
 * Date: 10/4/2018
 * Time: 10:33 AM
 */

final class President
{
    private static $instance;

    private function __construct()
    {
        // Hide the constructor
    }

    public static function getInstance(): President
    {
        if (!self::$instance)
            self::$instance = new self();

        return self::$instance;
    }

    private function __clone()
    {
        // Disable cloning
    }

    private function __wakeup()
    {
        // Disable unserialize
    }
}

$president1 = President::getInstance();
$president2 = President::getInstance();

var_dump($president1 === $president2);