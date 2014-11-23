<?php

//define('CLASS_DIR', 'src/');
//set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
//spl_autoload_register();

define("CLASS_DIR", __DIR__ . DIRECTORY_SEPARATOR . "src" . DIRECTORY_SEPARATOR);

spl_autoload_register(function($class) {
    $className = CLASS_DIR . str_replace("\\", DIRECTORY_SEPARATOR, $class) . ".php";
    include($className);
});