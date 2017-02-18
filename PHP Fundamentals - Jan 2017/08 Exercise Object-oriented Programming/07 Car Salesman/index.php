<?php

use Model\Aplication;

spl_autoload_register(function ($className) {
    require_once "{$className}.php";
});
$app = new Aplication();
$app->start();