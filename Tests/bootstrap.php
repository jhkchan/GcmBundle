<?php

spl_autoload_register(function($class)
{
    if (0 === strpos($class, 'Endroid\\Bundle\\GcmBundle\\') &&
        file_exists($file = __DIR__.'/../'.implode('/', array_slice(explode('\\', $class), 3)).'.php')) {
        require_once $file;
    }
});