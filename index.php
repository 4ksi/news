<?php
require_once __DIR__ . '/vendor/autoload.php';

define('ROOT', dirname(__FILE__));

// Вызываем роутер
$router = new Router();
$router->start();