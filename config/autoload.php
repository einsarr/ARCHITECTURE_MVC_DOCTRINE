<?php

class Autoloader
{
    static function register()
    {
        spl_autoload_register(array(__CLASS__,"autoload"));
    }
    public function autoload($class)
    {
        echo $class;
    }
}
Autoloader::register();